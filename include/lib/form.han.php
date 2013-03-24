<?php
if(!defined('IN_DATACORE'))
{
    exit('invalid request');
}
class FormHandler
{
    function FormHandler()
    {
    }
    function Select($name,$options,$default=null,$extra=null)
    {
        if($default===0)settype($default,'string');
        if(stristr($extra,'multiple')!==false and stristr($extra,'size')===false)
        {
            $size=' size="'.count($options).'"';
        }
        $string="<SELECT NAME=\"{$name}\" id=\"{$name}\"{$size} class='select' $extra>\r\n";
        $selected='';
        foreach($options as $label =>$option)
        {
            $option['value']=isset($option['value'])?$option['value']:$label;
            if(isset($option['name']))
            {
                if ($default!==null)$selected=in_array($option['value'],(array)$default)?" SELECTED":"";
                $string.="\t<option value='{$option['value']}'{$selected} {$option['extra']}>{$option['name']}</option>\r\n";
            }
            else
            {
                $string.="<optgroup label={$label}>";
                foreach ($option as $opt)
                {
                    if(is_array($opt) && $opt['name'] && $opt['value'])
                    {
                        if ($default!==null)$selected=in_array($opt['value'],(array)$default)?" SELECTED":"";
                        $string.="\t<option value='{$opt['value']}'{$selected} {$opt['extra']}>{$opt['name']}</option>\r\n";
                    }
                }
                $string.="</optgroup>";
            }
        }
        $string.="</SELECT>\r\n";
        Return $string;
    }
    function Radio($name,$options,$default=null,$extra='')
    {
        $string='';
        foreach($options as $key=>$option)
        {
            $option['value']=isset($option['value'])?$option['value']:$key;
            if ($default!==null)$checked=in_array($option['value'],(array)$default)?" CHECKED":"";
            $string.="<input name='{$name}' id='{$name}_{$option['value']}' type='radio' value='{$option['value']}'{$checked} class=radio {$option['extra']}><label for='{$name}_{$option['value']}'>{$option['name']}</label>\r\n";
        }
        Return $string;
    }
    function Checkbox($name,$options,$default=null,$extra='')
    {
        $string='';
        foreach($options as $key=>$option)
        {
            $option['value']=isset($option['value'])?$option['value']:$key;
            if ($default!==null)$checked=in_array($option['value'],(array)$default)?" CHECKED":"";
            $string.="<input name='{$name}' id='{$name}_{$option['value']}' type='checkbox' value='{$option['value']}'{$checked} class=checkbox {$option['extra']}><label for='{$name}_{$option['value']}'>{$option['name']}</label>\r\n";
        }
        Return $string;
    }
    function Text($name,$value='',$extra=null)
    {
        return "<input TYPE='text' NAME='{$name}' VALUE='{$value}' class=text {$extra}>";
    }
    function Hidden($name,$value='',$extra=null)
    {
        return "<input TYPE='hidden' NAME='{$name}' VALUE='{$value}' {$extra}>";
    }
    function Password($name,$value='',$extra=null)
    {
        return "<input TYPE='password' NAME='{$name}' VALUE='{$value}' class=password {$extra}>";
    }
    function Submit($name='submit',$value='提交',$extra=null)
    {
        return "<input type='submit' value='{$value}' name='{$name}' class=submit $extra>";
    }
    function Reset($name='submit',$value='重置',$extra=null)
    {
        return "<input type='reset' value='{$value}' name='{$name}' class=cancel $extra>";
    }
    function Button($name='',$value='普通按钮',$extra=null)
    {
        return "<input TYPE='button' value='{$value}' class=button {$extra}>";
    }
    function Textarea($name,$value='',$extra="ROWS='5' COLS='50'")
    {
        return "<TEXTAREA NAME='{$name}' class=textarea $extra>$value</TEXTAREA>";
    }
    function File($name,$extra=null)
    {
        return "<input type='file' name='{$name}' class=file>";
    }
    function Image($image)
    {
        return "<input TYPE='image' SRC='{$image}'>";
    }
            function TimeSelect($name,$selected='')
    {
        $this_year=date('Y');
        $this_month=date('m');
        $this_day=date('d');
        $options=array(array("name"=>"--请选择--","value"=>""),
        array("name"=>"最近一天","value"=>mktime(0,0,0,$this_month,$this_day-1)),
        array("name"=>"最近两天","value"=>mktime(0,0,0,$this_month,$this_day-2)),
        array("name"=>"最近三天","value"=>mktime(0,0,0,$this_month,$this_day-3)),
        array("name"=>"最近一周","value"=>mktime(0,0,0,$this_month,$this_day-7)),
        array("name"=>"最近一个月","value"=>mktime(0,0,0,$this_month-1,$this_day)),
        array("name"=>"最近两个月","value"=>mktime(0,0,0,$this_month-2,$this_day)),
        array("name"=>"最近三个月","value"=>mktime(0,0,0,$this_month-3,$this_day)),
        array("name"=>"最近半年","value"=>mktime(0,0,0,$this_month-6,$this_day)),
        array("name"=>"最近一年","value"=>mktime(0,0,0,$this_month,$this_day,$this_year-1)),
        array("name"=>"最近三年","value"=>mktime(0,0,0,$this_month,$this_day,$this_year-3)));
        return formhandler::select($name,$options,$selected);
    }
        function YesNoRadio($name,$checked='',$extra='',$op_extra='')
    {
        $options=array(
        array("name"=>"是","value"=>"1",'extra'=>$op_extra),
        array("name"=>"否","value"=>"0",'extra'=>$op_extra));
        Return FormHandler::Radio($name,$options,$checked,$extra);
    }
    function NumSelect($name,$start,$end,$selected_num='',$arr=null,$step=1)
    {
        $select='<SELECT NAME="'.$name.'">';
        if(is_array($arr)!=false and count($arr)>0)
        {
            foreach($arr as $key=>$val)
            {
                $select.="<option value='{$val['value']}'{$val['selected']}>{$val['name']}</option>\r\n";
            }
        }
        for($ii=$start; $ii<=$end;$ii+=$step )
        {
            $selected=((string)$ii==(string)$selected_num)?" SELECTED":"";
            $select.="<option value='{$ii}'{$selected}>{$ii}</option>\r\n";
        }
        $select.="</SELECT>";
        Return $select;
    }
    function Editor($var_name,$value='',$width="99%",$height="300",$toolbar="Thread",$skin='')
    {
        return $this->DEditor($var_name,$value,$width,$height);
    }
}
class FormWrap
{
    var $Buffer;
    var $Template='form_element';
    var $TemplateHandler;
    var $_group='0';
    function FormWrap(&$template_handler)
    {
        $this->Buffer='';
        $this->TemplateHandler=$template_handler;
    }
    function SetTemplate($str)
    {
        $this->Template=$str;
    }
    function AddElement($name,$element,$describe='')
    {
        $this->Element[$this->_group]['element'][]=
        array('name'=>$name,
            'element'=>$element,
            'describe'=>$describe);
    }
    function AddGroup($name,$extra='')
    {
        $group=md5($name);
        $this->_group=$group;
        $this->Element[$this->_group]=array('name'=>$name,'extra'=>$extra);
    }
    function Display()
    {
        $group_element_list=$this->Element;
                        include $this->TemplateHandler->Template('form_element');
    }
}
class OptionHandler
{
    var $OptionList;
    function OptionHandler()
    {
        $this->OptionList=array();
    }
    function Add($name,$value,$extra=null)
    {
        $this->OptionList[$name]=array('name'=>$name,'value'=>$value,'extra'=>$extra);
    }
    function Remove($name)
    {
        unset($this->OptionList[$name]);
    }
    function Get()
    {
        return $this->OptionList;
    }
}
?>