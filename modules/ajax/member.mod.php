<?php
if(!defined('IN_DATACORE'))
{
    exit('invalid request');
}
class ModuleObject extends MasterObject
{
    function ModuleObject(& $config)
    {
        $this->MasterObject($config);
        $this->Execute();
    }
    function Execute()
    {
        switch ($this->Code)
        {
            case 'check_username':
                $this->CheckUsername();
                break;
            case 'check_email':
                $this->CheckEmail();
                break;
            case 'check_nickname':
                $this->CheckNickname();
                break;
            case 'check_seccode':
                $this->CheckSeccode();
                break;            
            case 'sel':
                $this->makeSel();
                break;
            default:
                $this->Main();
                break;
        }
    }
    function Main()
    {
        response_text("正在建设中……");
    }
        function makeSel(){
                    $show_h = "<option value=''>请选择</option>\t\n";
                        $province = $this->Get['province'];
        $hid_city = $this->Get['hid_city'];
        if($province && $province != 0){
            $query = $this->DatabaseHandler->Query("select * from `".TABLE_PREFIX."common_district` where upid = $province order by list ");
            while ($rs = $query->GetRow()){
                if($hid_city == $rs['id']){
                    $show .= "<option value={$rs['id']} selected>{$rs['name']}</option>\t\n";
                }else{
                    $show .= "<option value={$rs['id']} >{$rs['name']}</option>\t\n";
                }
            }
        }
                $city = $this->Get['city'];
        $hid_area = $this->Get['hid_area'];
        if($city && $city != 0){
            $query = $this->DatabaseHandler->Query("select * from `".TABLE_PREFIX."common_district` where upid = $city order by list ");
            while ($rs = $query->GetRow()){
                if($hid_area == $rs['id']){
                    $show .= "<option value={$rs['id']} selected>{$rs['name']}</option>\t\n";
                }else{
                    $show .= "<option value={$rs['id']} >{$rs['name']}</option>\t\n";
                }
            }
        }
                $area = $this->Get['area'];
        $hid_street = $this->Get['hid_street'];
        if($area && $area != 0){
            $query = $this->DatabaseHandler->Query("select * from `".TABLE_PREFIX."common_district` where upid = $area order by list ");
            while ($rs = $query->GetRow()){
                if($hid_street == $rs['id']){
                    $show .= "<option value={$rs['id']} selected>{$rs['name']}</option>\t\n";
                }else{
                    $show .= "<option value={$rs['id']} >{$rs['name']}</option>\t\n";
                }
            }
        }
        if($show){
            echo $show = $show_h.$show;
            exit();
        }else{
            echo '';
        }
    }
    function CheckUsername()
    {
        $username=trim($this->Post['username'] ? $this->Post['username'] : $this->Post['check_value']);
        $ret = jsg_member_checkname($username);
        if($ret < 1)
        {
            $rets = array(
                '0' => '[未知错误] 有可能是站点关闭了注册功能',
                '-1' => '个性域名/微博地址 不合法',
                '-2' => '个性域名/微博地址 不允许注册',
                '-3' => '个性域名/微博地址 已经存在了',
            );
            response_text($rets[$ret]);
        }
    }
    function CheckEmail()
    {
        $email=trim($this->Post['email'] ? $this->Post['email'] : $this->Post['check_value']);
        $ret = jsg_member_checkemail($email);
        if($ret < 1)
        {
            $rets = array(
                '0' => '[未知错误] 有可能是站点关闭了注册功能',
                '-4' => 'Email 不合法',
                '-5' => 'Email 不允许注册',
                '-6' => 'Email 已经存在了',
            );
            response_text($rets[$ret]);
        }
    }
    function CheckNickname()
    {            
        $nickname=trim($this->Post['nickname'] ? $this->Post['nickname'] : $this->Post['check_value']);
        $ret = jsg_member_checkname($nickname, 1);
        if($ret < 1)
        {
            $rets = array(
                '0' => '[未知错误] 有可能是站点关闭了注册功能',
                '-1' => '昵称 不合法',
                '-2' => '昵称 不允许注册',
                '-3' => '昵称 已经存在了',
            );
            response_text($rets[$ret]);
        }
    }
        function CheckSeccode()
    {
        $seccode = $this->Post['check_value'];
        if (!ckseccode($seccode)) {
            response_text("验证码不正确，重新输入下吧。");
        }
    }
}
?>