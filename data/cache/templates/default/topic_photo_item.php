<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?><li class="vg_line">

<div class="item_photo"><a target="_blank" href="index.php?mod=topic&code=<?php echo $val['tid']; ?>"><img src="<?php echo $val['photo']; ?>" width="<?php echo $val['width']; ?>" height="<?php echo $val['height']; ?>"></a></div>

<div class="vg_line_solid"></div>

<div class="ws_bd">
<div class="wb_l_face">
<div class="avatar">
<?php if($this->Code && 'photo'!=$this->Code) { ?>
    
<?php if(MEMBER_ID != $val['uid']) { ?>
    <a href="javascript:void(0)" onmouseover="get_user_choose(<?php echo $val['uid']; ?>,'_user',<?php echo $val['id']; ?>);" onmouseout="clear_user_choose();">
        <img src="<?php echo $val['face']; ?>" onerror="javascript:faceError(this);" />
    </a>
    
<?php } else { ?>        <img src="<?php echo $val['face']; ?>" onerror="javascript:faceError(this);" />
    
<?php } ?>
<?php } else { ?><a href="index.php?mod=<?php echo $val['username']; ?>"><img src="<?php echo $val['face']; ?>" onerror="javascript:faceError(this);" /></a>
<?php } ?>
<?php if($this->Config['is_topic_user_follow'] && 'photo'!=$this->Code) { ?>
<?php echo $val['follow_html']; ?>
<?php } ?>
</div>
<?php if($val['user_css']) { ?>
<p class="<?php echo $val['user_css']; ?>"><?php echo $val['user_str']; ?></p>
<?php } ?>
</div>


<!--悬浮头像、弹出对话框-->
<div id="user_<?php echo $val['id']; ?>_user"></div>
<!--悬浮头像、弹出对话框-->

<!--私信对话框-->
<div id="Pmsend_to_user_area" style="width:430px;display:none"></div>
<!--私信对话框-->

<!--AT、拉黑对话框-->
<div id="alert_follower_menu_<?php echo $val['uid']; ?>" style="display:none"></div>
<!--AT、拉黑对话框-->

<div id="button_<?php echo $val['uid']; ?>" onclick="get_group_choose(<?php echo $val['uid']; ?>);" style="display:none"></div>

<!--分组对话框-->
<div id="global_select_<?php echo $val['uid']; ?>" class="alertBox" style="display:none"></div>
<!--分组对话框-->

<!--备注对话框-->
<div id="get_remark_<?php echo $val['uid']; ?>" style="display:none"></div>
<!--备注对话框-->

<!--微博内容中 @用户 悬浮提示-->
<div id="at_<?php echo $val['id']; ?>_user" class="at_style" style="display:none;"></div>
<!--微博内容中 @用户 悬浮提示-->
<h5><span class="photo_vip"><span class="un">
<a title="查看<?php echo $val['nickname']; ?>的微博" href="index.php?mod=<?php echo $val['username']; ?>" class="photo_vip_t_name"><?php echo $val['nickname']; ?></a>
<?php if($val['validate_html']) { ?>
<?php echo $val['validate_html']; ?>&nbsp;
<?php } else { ?>
<?php if($this->Config['topic_level_radio']) { ?>
<span class="wb_l_level">
<a class="ico_level wbL<?php echo $val['level']; ?>" title="点击查看微博等级" href="index.php?mod=settings&code=exp" target="_blank"><?php echo $val['level']; ?></a>
</span>
<?php } ?>
<?php } ?>
<?php if($this->Config['is_signature']) { ?>
<?php if(!$_GET['mod_original'] && 'photo'!=$this->Code) { ?>
<?php if($val['signature']) { ?>
<span class="signature">
<?php if($val['uid'] == MEMBER_ID ||  'admin' == MEMBER_ROLE_TYPE) { ?>
<a href="javascript:void(0);" onclick="follower_choose(<?php echo $val['uid']; ?>,'<?php echo $val['nickname']; ?>','topic_signature');" title="点击修改个人签名">
<em ectype="user_signature_ajax_<?php echo $val['uid']; ?>">(<?php echo $val['signature']; ?>)</em>
</a>
<?php } else { ?><em>(<?php echo $val['signature']; ?>)</em>
<?php } ?>
</span>
<?php } ?>
<?php } ?>
<?php } ?>
<?php echo $this->hookall_temp['global_topiclist_extra1']; ?>
</span>
<?php echo $this->hookall_temp['global_topiclist_extra2']; ?></span><span class="photo_fca"><?php echo $val['dateline']; ?></span></h5>
</div>

<div class="photo_tk">
<p><?php echo $val['content']; ?><a href="index.php?mod=topic&code=<?php echo $val['tid']; ?>" class="creply" target="_blank">查看详细&gt;&gt;</a></p>
</div>

<div class="favorite">
<?php echo $val['follow_html']; ?> &nbsp; 
<a href="index.php?mod=topic&code=<?php echo $val['tid']; ?>"title="已有<?php echo $val['replys']; ?>人评论" class="creply" target="_blank">评论</a>
<a href="javascript:void(0)" title="已有<?php echo $val['forwards']; ?>人转发" onclick="get_forward_choose(<?php echo $val['tid']; ?>,<?php echo $allow_attach; ?>);return false;" class="favaImg">转发</a> 

</div>

</li>