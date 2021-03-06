<?php
if(!defined('IN_DATACORE'))
{
    exit('invalid request');
}
class ModuleObject extends MasterObject
{
    function ModuleObject($config)
    {
        $this->MasterObject($config);
        $this->Execute();
    }
    function Execute()
    {
        ob_start();    
        switch($this->Code)
        {
            case 'show':
                $this->ShowReminded();
                break;              
            default:
                $this->Main();
                break;
        }
        response_text(ob_get_clean());
    }
    function Main()
    {
        response_text('正在建设中……');
    }
        function ShowReminded()
    {
        if((int) $this->Config['ajax_topic_time'] < 1) {
            exit;
        }
        $uid = max(0, (int) $this->Post['uid']);
        if($uid < 1) {
            exit;
        }
        $__my = jsg_member_info($uid);
        if(!$__my) {
            exit;
        }
        $time = TIMESTAMP;
                $is_uptime = $this->Post['is_uptime'];
        if($is_uptime == 1) {
            DB::query("update `".TABLE_PREFIX."members` set `lastactivity`='{$time}' where `uid`='$uid'");
            Load::model('cache/db')->del("{$uid}-topic-%", 1);
            echo '<success></success>';
            echo "<script language='Javascript'>";
                        echo "listTopic(0,0);";
            echo "</script>";
            exit;
        }
        $total_record = Load::model('buddy')->check_new_topic($uid);
        include($this->TemplateHandler->Template('ajax_reminded'));
    }
}
?>
