<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?><!--
设置分组 设置备注  点击关注触发分组 私信  @谁  拉黑  头像悬浮  操作框
-->
<div id="user_<?php echo $val['uid']; ?>_user"></div>
<div id="alert_follower_menu_<?php echo $val['uid']; ?>"></div>
<div id="global_select_<?php echo $val['uid']; ?>" class="alertBox alertBox_2" style="display:none"></div>
<div id="get_remark_<?php echo $val['uid']; ?>" ></div>
<div id="button_<?php echo $val['uid']; ?>" onclick="get_group_choose(<?php echo $val['uid']; ?>);"></div>
<div id="Pmsend_to_user_area"></div>