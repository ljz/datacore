<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?>
<?php if($val['uid']) { ?>
<div class="wb_l_face">
<div class="avatar">
<?php if($this->Code != '') { ?>
    
<?php if(MEMBER_ID != $val['uid']) { ?>
    <a href="javascript:void(0)" onmouseover="get_user_choose(<?php echo $val['uid']; ?>,'_user<?php echo $talkanswerid; ?>',<?php echo $val['tid']; ?>);" onmouseout="clear_user_choose();">
        <img src="<?php echo $val['face']; ?>" onerror="javascript:faceError(this);" />
    </a>
    
<?php } else { ?>        <img src="<?php echo $val['face']; ?>" onerror="javascript:faceError(this);" />
    
<?php } ?>
<?php } else { ?><a href="index.php?mod=<?php echo $val['username']; ?>"><img src="<?php echo $val['face']; ?>" onerror="javascript:faceError(this);" /></a>
<?php } ?>
<?php if($this->Config['is_topic_user_follow']) { ?>
<?php echo $val['follow_html']; ?>
<?php } ?>
</div>
<?php if($val['user_css']) { ?>
<p class="<?php echo $val['user_css']; ?>"><?php echo $val['user_str']; ?></p>
<?php } ?>
</div>


<!--悬浮头像、弹出对话框-->
<div id="user_<?php echo $val['tid']; ?>_user<?php echo $talkanswerid; ?>"></div>
<!--悬浮头像、弹出对话框-->

<!--私信对话框-->
<div id="Pmsend_to_user_area" style="width:430px;" style="display:none"></div>
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
<div id="at_<?php echo $val['tid']; ?>_user" class="at_style" style="display:none;"></div>
<!--微博内容中 @用户 悬浮提示-->
<?php } else { ?><div class="wb_l_face"><div class="avatar"><img src="<?php echo $val['face']; ?>" title="未在微博登录的论坛用户" onerror="javascript:faceError(this);" /></div></div>
<?php } ?>
<div class="Contant">
	<div style="_overflow:hidden">
		<div class="oriTxt">
			<p class="utitle">
<?php if($val['uid']) { ?>
<span class="un">
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
<?php echo $this->hookall_temp['global_topiclist_extra2']; ?>
<?php } else { ?><span class="un"><a title="未在微博登录的论坛用户" href="javascript:;" ><?php echo $val['nickname']; ?></a></span>
			
<?php } ?>
<span class="ut"><a href="<?php echo $val['bbsurl']; ?>" target="_blank"><?php echo $val['dateline']; ?></a></span>
			</p>
<?php if($val['title']) { ?>
			<p><b><?php echo $val['title']; ?></b></p>
			
<?php } ?>
<span id="c_<?php echo $val['pid']; ?>_short"><?php echo $val['content']; ?></span>
			<span id="c_<?php echo $val['pid']; ?>_full" style="display:none;"><?php echo $val['content_full']; ?></span>
<?php if($val['longtext']) { ?>
				<span>
				<a id="linktext_<?php echo $val['pid']; ?>" href="javascript:;" onclick="item_longtext('<?php echo $val['pid']; ?>');return false;">查看全文</a>
				</span>
			
<?php } ?>

<?php if($val['first'] == 0) { ?>
			<div class="blogTxt">
				<div class="top"></div>
				<div class="mid">
<?php if($val['tuid']) { ?>
					<span>
					<a href="index.php?mod=<?php echo $val['t_username']; ?>" onmouseover="get_user_choose(<?php echo $val['tuid']; ?>,'_reply_user',<?php echo $val['tid']; ?>);" onmouseout="clear_user_choose();"><?php echo $val['t_nickname']; ?></a><?php echo $val['t_validate_html']; ?> : 
					<!--悬浮头像、弹出对话框-->
					<span id="user_<?php echo $val['tid']; ?>_reply_user"></span>
					<!--悬浮头像、弹出对话框-->
					</span>
<?php } else { ?><span><a title="未在微博登录的论坛用户" href="javascript:;"><?php echo $val['t_nickname']; ?></a>: </span>
					
<?php } ?>
<span><?php echo $val['t_title']; ?></span>
					<div>发布于：<?php echo $val['t_dateline']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $val['bbsurl']; ?>" target="_blank">回帖(<?php echo $val['replys']; ?>)</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo $val['lasturl']; ?>" target="_blank"><?php echo $val['lastpost']; ?></a></div>
				</div>
				<div class="bottom"></div>
			</div>
			<div class="from"><div class="option"><ul><li></li></ul></div><div class="mycome">来自<a href="<?php echo $val['forumurl']; ?>" target="_blank">论坛 - <?php echo $val['forumtitle']; ?></a></div></div>
<?php } else { ?><div class="from"><div class="option"><ul><li><span>
<?php if($val['replys']) { ?>
			<a id="topic_list_reply_<?php echo $val['tid']; ?>_aid" href="javascript:void(0)" onclick="replyTopic(<?php echo $val['rid']; ?>,'reply_area_<?php echo $val['tid']; ?>','<?php echo $val['replys']; ?>',0,0,{item:'bbs'});return false;">回帖 (<?php echo $val['replys']; ?>)</a></span></li><li><span><a href="<?php echo $val['lasturl']; ?>" target="_blank"><?php echo $val['lastpost']; ?></a>
<?php } else { ?>回帖 (<?php echo $val['replys']; ?>)&nbsp;&nbsp;</span></li><li><span><?php echo $val['lastpost']; ?>
			
<?php } ?>
</span></li></ul></div><div class="mycome">来自<a href="<?php echo $val['forumurl']; ?>" target="_blank">论坛 - <?php echo $val['forumtitle']; ?></a></div></div>
			
<?php } ?>
</div>
	</div>
	<div id="reply_area_<?php echo $val['tid']; ?>"></div>
</div>
<div class="mBlog_linedot"></div>