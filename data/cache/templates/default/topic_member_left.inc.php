<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?><!--网站开启三栏后 显示左边  关于我的信息-->

<div class="t_col_main_ln <?php echo $t_col_main_lb; ?>">
<script type="text/javascript">
	$(document).ready(function(){
		$(".member_exp").mouseover(function(){$(".member_exp_c").show();});
		$(".member_exp").mouseout(function(){$(".member_exp_c").hide();});
		$("#m_avatar2").mouseover(function(){$(".avatar_tips").show();});
		$("#m_avatar2").mouseout(function(){$(".avatar_tips").hide();});
	});
</script>
<!--用户头像等信息-->
<?php if($my_member || $member) { ?>
<?php $_mymember = $my_member ? $my_member : $member ?>
<div class="sideBox" style="margin:0; padding:0;">
		<div class="avatar2" id="m_avatar2">
		<p class="avatar2_i"><a href="index.php?mod=<?php echo $_mymember['username']; ?>" title="<?php echo $_mymember['username']; ?>"><img src="<?php echo $_mymember['face_original']; ?>" alt="<?php echo $_mymember['nickname']; ?>" onerror="javascript:faceError(this);" /></a></p>
<?php if(MEMBER_ID == $_mymember['uid']) { ?>
<p class="avatar_tips"><a id="avatar_upload" href="index.php?mod=settings&code=face">上传头像</a></p>
<?php } ?>
</div>
		<div class="avatar2_info">
		<p><a href="index.php?mod=<?php echo $_mymember['username']; ?>" title="@<?php echo $_mymember['nickname']; ?>"><b><?php echo $_mymember['nickname']; ?></b></a><?php echo $_mymember['validate_html']; ?></p>
		<p>
<?php if($this->Config['level_radio']) { ?>
		  
<?php if($this->Config['topic_level_radio']) { ?>
		  <span class="wb_l_level" style="margin:0;">
			<a class="ico_level wbL<?php echo $_mymember['level']; ?>" title="点击查看微博等级"  href="index.php?mod=settings&code=exp" target="_blank"><?php echo $_mymember['level']; ?></a>
		  </span>
		  
<?php } ?>
<?php } ?>
<?php if($_mymember['credits']) { ?>
积分：<a title="点击查看我的积分" href="index.php?mod=settings&code=extcredits"><b><?php echo $_mymember['credits']; ?></b></a>
<?php } ?>
</p>
		<p style="width:132px; height:20px; overflow:hidden;">
<?php $member_signature = cut_str($_mymember['signature'],20); ?>
<?php if($_mymember['uid'] == MEMBER_ID ) { ?>
			<a href="javascript:viod(0);" onclick="follower_choose(<?php echo $_mymember['uid']; ?>,'<?php echo $_mymember['nickname']; ?>','topic_signature'); return false;" >
			<span ectype="user_signature_ajax_left_<?php echo $_mymember['uid']; ?>">
				<span  title="个人签名：<?php echo $_mymember['signature']; ?>">
<?php if($_mymember['signature']) { ?>
(<?php echo $member_signature; ?>)
<?php } else { ?>编辑个人签名
<?php } ?>
</span>
			</span>
			</a>
<?php } else { ?><span  title="个人签名：<?php echo $_mymember['signature']; ?>">
<?php if($_mymember['signature']) { ?>
<?php if('admin' == MEMBER_ROLE_TYPE) { ?>
				<a href="javascript:void(0);" onclick="follower_choose(<?php echo $_mymember['uid']; ?>,'<?php echo $_mymember['nickname']; ?>','topic_signature');" title="点击修改个人签名">
				<em ectype="user_signature_ajax_<?php echo $_mymember['uid']; ?>">(<?php echo $member_signature; ?>)</em>
				</a>
			
<?php } ?>
<?php } ?>
</span>
		
<?php } ?>
</p>
		<?php echo $this->hookall_temp['global_user_extra1']; ?>
		<?php echo $this->hookall_temp['global_user_extra2']; ?>
        <?php echo $this->hookall_temp['global_user_extra3']; ?>
	    </div>
   </div>
    
	<div class="sideBox">
    <div class="user_atten">
		<div class="person_atten_l">
			<p><span class="num"><a href="index.php?mod=<?php echo $_mymember['username']; ?>&code=follow" title="<?php echo $_mymember['nickname']; ?>关注的"><?php echo $_mymember['follow_count']; ?></a></span></p>
			<p><a href="index.php?mod=<?php echo $_mymember['username']; ?>&code=follow" title="<?php echo $_mymember['nickname']; ?>关注的">关注</a> </p>
		</div>
		<div class="person_atten_l">
			<p><span class="num"><a href="index.php?mod=<?php echo $_mymember['username']; ?>&code=fans" title="关注<?php echo $_mymember['nickname']; ?>的"><?php echo $_mymember['fans_count']; ?></a></span></p>
			<p><a href="index.php?mod=<?php echo $_mymember['username']; ?>&code=fans" title="关注<?php echo $_mymember['nickname']; ?>的">粉丝</a> </p>
		</div>
		<div class="person_atten_r">
			<p><span class="num"><a href="index.php?mod=<?php echo $_mymember['username']; ?>" title="<?php echo $_mymember['nickname']; ?>的微博"><?php echo $_mymember['topic_count']; ?></a></span></p>
			<p><a href="index.php?mod=<?php echo $_mymember['username']; ?>" title="<?php echo $_mymember['nickname']; ?>的微博">微博</a> </p>
		</div>
     </div>
		<?php echo $this->hookall_temp['global_user_extra4']; ?>
	</div>
<?php } ?>
<!------用户头像等信息------->


<!------用户勋章信息------->

<script type="text/javascript">
$(document).ready(function(){
	$(".sina_weibo").mouseover(function(){$(".sina_weibo_c").show();});
	$(".sina_weibo").mouseout(function(){$(".sina_weibo_c").hide();});
	$(".qqwb").mouseover(function(){$(".qqwb_c").show();});
	$(".qqwb").mouseout(function(){$(".qqwb_c").hide();});
	$(".qqim").mouseover(function(){$(".qqim_c").show();});
	$(".qqim").mouseout(function(){$(".qqim_c").hide();});
	$(".tel").mouseover(function(){$(".tel_c").show();});
	$(".tel").mouseout(function(){$(".tel_c").hide();});
<?php if(is_array($medal_list)) { foreach($medal_list as $v) { ?>
		$(".medal_<?php echo $v['id']; ?>").mouseover(function(){$(".medal_c_<?php echo $v['id']; ?>").show();});
		$(".medal_<?php echo $v['id']; ?>").mouseout(function(){$(".medal_c_<?php echo $v['id']; ?>").hide();});
	
<?php } } ?>
});
</script>

<ul class="Vimg">
<?php if('tag'!=$this->Get['mod'] || $_mymember['style_three_tol'] == 1) { ?>
<?php if($this->Config['sina_enable'] && sina_weibo_init($this->Config)) { ?>
	<li class="sina_weibo">
<?php echo sina_weibo_bind_icon($_mymember['uid']); ?>
 &nbsp; 
		<div class="sina_weibo_c">
			<div class="VM_box">
				<div class="VM_top">
					<div class="med_img"><img src="./templates/default/images/medal/M_sina.gif"></div>
					<div class="med_intro">
						<p>新浪微博</p>
						 绑定后，可以使用新浪微博帐号进行登录，在本站发的微博可以同步发到新浪微博<br />
<?php $sina_return  = sina_weibo_has_bind($member['uid']); ?>
<?php if(!$sina_return) { ?>
						<a href="index.php?mod=account&code=sina">绑定新浪微博</a> |
						
<?php } ?>
<a target="_blank" href="index.php?mod=other&code=medal&view=my">查看我的勋章</a>
					</div>
				</div>
			</div>
		</div>		
	</li>
	
<?php } ?>
<?php if($this->Config['qqwb_enable'] && qqwb_init($this->Config)) { ?>
	<li class="qqwb">
<?php echo qqwb_bind_icon($_mymember['uid']); ?>
 &nbsp; 
		<div class="qqwb_c">
			<div class="VM_box">
				<div class="VM_top">
					<div class="med_img"><img src="./templates/default/images/medal/qqwb.png"></div>
					<div class="med_intro">
						<p>腾讯微博</p>
						 绑定后，可以使用腾讯微博帐号进行登录，在本站发的微博可以同步发到腾讯微博<br />
<?php $qqwb_return  = qqwb_bind_icon($member['uid']); ?>
<?php if(!$qqwb_return) { ?>
						<a href="index.php?mod=account&code=qqwb">绑定腾讯微博</a> |
						
<?php } ?>
<a target="_blank" href="index.php?mod=other&code=medal&view=my">查看我的勋章</a>
					</div>
				</div>
			</div>
		</div>
	</li>
	
<?php } ?>
<?php if($this->Config['imjiqiren_enable'] && imjiqiren_init($this->Config)) { ?>
	<li class="qqim">
<?php echo imjiqiren_bind_icon($_mymember['uid']); ?>
 &nbsp; 
		<div class="qqim_c">
			<div class="VM_box">
				<div class="VM_top">
					<div class="med_img"><img src="./templates/default/images/medal/M_qq.gif"></div>
					<div class="med_intro">
					<p>QQ机器人</p>
					用自己的QQ发微博、通过QQ签名发微博，如果有人@你、评论你、关注你、给你发私信，你都可以第一时间收到QQ机器人的通知<br />
<?php $imjiqiren_return  = imjiqiren_has_bind($member['uid']); ?>
<?php if(!$imjiqiren_return) { ?>
					<a href="index.php?mod=tools&code=imjiqiren">绑定QQ机器人</a> |
					
<?php } ?>
<a target="_blank" href="index.php?mod=other&code=medal&view=my">查看我的勋章</a>
					</div>
				</div>
			</div>
		</div>
	</li>
	
<?php } ?>
<?php if($this->Config['sms_enable'] && sms_init($this->Config)) { ?>
	<li class="tel">
<?php echo sms_bind_icon($_mymember['uid']); ?>
 &nbsp; 
		<div class="tel_c">
			<div class="VM_box">
				<div class="VM_top">
					<div class="med_img"><img src="./templates/default/images/medal/Tel.gif"></div>
					<div class="med_intro">
					<p>手机短信</p>
					用自己的手机发微博、通过手机签名发微博，如果有人@你、评论你、关注你、给你发私信，你都可以第一时间收到手机短信的通知<br />
<?php $sms_return  = sms_has_bind($_mymember['uid']); ?>
<?php if(!$sms_return) { ?>
					<a href="index.php?mod=other&code=sms">绑定手机短信</a> |
					
<?php } ?>
<a target="_blank" href="index.php?mod=other&code=medal&view=my">查看我的勋章</a>
					</div>
				</div>
			</div>
		</div>
	</li>
	
<?php } ?>
<?php } ?>
<?php if($member['validate'] || $medal_list) { ?>
<?php if(is_array($medal_list)) { foreach($medal_list as $val) { ?>
<?php $medal_type = unserialize($val['conditions']); ?>
<li class="medal_<?php echo $val['id']; ?>"><a href="index.php?mod=other&code=medal" target="_blank"><img src="<?php echo $val['medal_img']; ?>"/></a> &nbsp; 
		<div class="medal_c medal_c_<?php echo $val['id']; ?>">
			<div class="VM_box">
				<div class="VM_top">
				<div class="med_img"><img src="<?php echo $val['medal_img']; ?>"/></div>
					<div class="med_intro">
					<p><?php echo $val['medal_name']; ?></p>
					<?php echo $val['medal_depict']; ?> <br />
<?php if(MEMBER_ID != $member['uid']) { ?>
(他于：<?php echo $val['dateline']; ?> 获得) <br />
<?php if($medal_type['type'] == 'topic') { ?>
					<a href="index.php?mod=topic&code=myhome" target="_blank">我要发微博</a> |<?php } elseif($medal_type['type'] == 'reply') { ?><a href="index.php?mod=topic&code=new" target="_blank">我要发评论</a> |<?php } elseif($medal_type['type'] == 'tag') { ?><a href="index.php?mod=tag&code=<?php echo $medal_type['tagname']; ?>" target="_blank">我要发话题</a> |<?php } elseif($medal_type['type'] == 'invite') { ?><a href="index.php?mod=profile&code=invite" target="_blank">马上去邀请好友</a> |<?php } elseif($medal_type['type'] == 'shoudong') { ?>管理员手动发放  |	
					
<?php } ?>
<?php } else { ?>(我于：<?php echo $val['dateline']; ?> 获得) <br />
					
<?php } ?>
<a target="_blank" href="index.php?mod=other&code=medal&view=my">查看我的勋章</a>
					</div>
				</div>
			</div>
		</div>
	</li>
	
<?php } } ?>
<?php } ?>
<?php if($this->Config['yy_enable'] && yy_init($this->Config)) { ?>
	<li class="yy">
<?php echo yy_bind_icon($_mymember['uid']); ?>
 &nbsp;</li>
	
<?php } ?>

<?php if($this->Config['renren_enable'] && renren_init($this->Config)) { ?>
	<li class="renren">
<?php echo renren_bind_icon($_mymember['uid']); ?>
 &nbsp;</li>
	
<?php } ?>

<?php if($this->Config['kaixin_enable'] && kaixin_init($this->Config)) { ?>
	<li class="kaixin">
<?php echo kaixin_bind_icon($_mymember['uid']); ?>
 &nbsp;</li>
	
<?php } ?>

<?php if($this->Config['fjau_enable'] && fjau_init($this->Config)) { ?>
	<li class="fjau">
<?php echo fjau_bind_icon($_mymember['uid']); ?>
 &nbsp;</li>
	
<?php } ?>
 
    
    
</ul>   
<?php if(MEMBER_ID == $_mymember['uid'] ) { ?>
	  <div class="blackBox"></div>
	  <ul class="boxRNav2">
<?php if(in_array($this->Code,array('myhome','tag','groupview','qun','cms','bbs','recd'))) $current_myhome = 'current' ?>
  
<?php if('myat'== $this->Code) $current_myat = 'current' ?>
 
<?php if('mycomment'== $this->Code) $current_mycomment = 'current' ?>
 
<?php if('myfavorite'== $this->Code) $current_myfavorite = 'current' ?>
 
		<li class="index <?php echo $current_myhome; ?>"> 
		  <a href="index.php?mod=topic&code=myhome" hidefocus="true" title="我的首页">我的首页</a>
		</li>
		<li class="about <?php echo $current_myat; ?>"> 
		  <a href="index.php?mod=topic&code=myat" hidefocus="true" title="提到我的">提到我的</a>
		</li>
		<li class="letter <?php echo $current_mycomment; ?>"> 
		  <a href="index.php?mod=topic&code=mycomment" hidefocus="true" title="评论我的">评论我的</a>
		</li>
		<li class="myfav <?php echo $current_myfavorite; ?>"> 
		  <a href="index.php?mod=topic&code=myfavorite" hidefocus="true" title="我的收藏">我的收藏</a>
		</li>
      </ul>
	
<?php } ?>
      <div class="blackBox"></div>
		<ul class="boxRNav2">
        
<?php if(MEMBER_ID == $_mymember['uid']) $_my = '我'; elseif(1==$_mymember['gender']) $_my = '他';else $_my = '她'; ?>
        
<?php if('myblog'== $params['code'] && !$type) $current_myblog = 'current' ?>
        
<?php if('myblog'== $params['code'] && 'pic' == $type) $current_pic = 'current' ?>
        
<?php if('myblog'== $params['code'] && 'video' == $type) $current_video = 'current' ?>
        
<?php if('myblog'== $params['code'] && 'music' == $type) $current_music = 'current' ?>
        
<?php if('myblog'== $params['code'] && 'attach' == $type) $current_attach = 'current' ?>
        
<?php if('myblog'== $params['code'] && 'my_reply' == $type) $current_my_reply = 'current' ?>
        
<?php if('myblog'== $params['code'] && 'vote' == $type) $current_vote = 'current' ?>
        
<?php if('myblog'== $params['code'] && 'event' == $type) $current_event = 'current' ?>
<li class="mypub <?php echo $current_myblog; ?>"> 
		  <a href="index.php?mod=<?php echo $_mymember['username']; ?>" hidefocus="true" title="<?php echo $_my; ?>的微博"><?php echo $_my; ?>的微博</a>
		</li>

        <li class="mycomment <?php echo $current_my_reply; ?>">
		  <a href="index.php?mod=<?php echo $_mymember['username']; ?>&type=my_reply" hidefocus="true" title="<?php echo $_my; ?>的图片"><?php echo $_my; ?>的评论</a>
		</li>

        <li class="mypic <?php echo $current_pic; ?>">
		  <a href="index.php?mod=<?php echo $_mymember['username']; ?>&type=pic" hidefocus="true" title="<?php echo $_my; ?>的图片"><?php echo $_my; ?>的图片</a>
		</li>
        
        <li class="myvoid <?php echo $current_video; ?>">
		  <a href="index.php?mod=<?php echo $_mymember['username']; ?>&type=video" hidefocus="true" title="<?php echo $_my; ?>的视频"><?php echo $_my; ?>的视频</a>
		</li>
        
        <li class="mymusic <?php echo $current_music; ?>">
		  <a href="index.php?mod=<?php echo $_mymember['username']; ?>&type=music" hidefocus="true" title="<?php echo $_my; ?>的音乐"><?php echo $_my; ?>的音乐</a>
		</li>
        
        <li class="myatt <?php echo $current_attach; ?>">
		  <a href="index.php?mod=<?php echo $_mymember['username']; ?>&type=attach" hidefocus="true" title="<?php echo $_my; ?>的附件"><?php echo $_my; ?>的附件</a>
		</li>
        
<?php if($this->Config['vote_open']) { ?>
		<li class="myvote <?php echo $current_vote; ?>">
		  <a href="index.php?mod=<?php echo $_mymember['username']; ?>&type=vote" hidefocus="true" title="<?php echo $_my; ?>的投票"><?php echo $_my; ?>的投票</a>
		</li>
		
<?php } ?>

<?php if($this->Config['event_open']) { ?>
        <li class="myact <?php echo $current_event; ?>">
           <a href="index.php?mod=<?php echo $_mymember['username']; ?>&type=event" hidefocus="true" title="<?php echo $_my; ?>的活动"><?php echo $_my; ?>的活动</a>
		</li>
		
<?php } ?>
        
<?php $navigation_config=ConfigHandler::get('navigation') ?>
<?php if(!empty($navigation_config['pluginmenu'])) { ?>
		 
<?php if(is_array($navigation_config['pluginmenu'])) { foreach($navigation_config['pluginmenu'] as $pmenus) { ?>
		 
<?php if(is_array($pmenus)) { foreach($pmenus as $pmenu) { ?>
		  
<?php if($pmenu['type'] == 3) { ?>
		  
<?php if('topic'==$this->require) { ?>
		  <li class="mypub current">
		  
<?php } else { ?>  <li class="mypub">
		  
<?php } ?>
  <a href="<?php echo $pmenu['url']; ?>&require=topic" hidefocus="true" title="<?php echo $pmenu['name']; ?>"><?php echo $pmenu['name']; ?></a></li>
		   
<?php } ?>
 
<?php } } ?>
 
<?php } } ?>
 
<?php } ?>
      </ul>
      <div class="blackBox2"></div>

</div>