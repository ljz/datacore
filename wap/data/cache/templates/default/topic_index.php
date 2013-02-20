<?php /* 2013-01-27 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?>
<?php echo '<'.'?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<?php $__my=$this->MemberHandler->MemberFields; ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo $this->Config['wap_url']; ?>/" />
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta name="MobileOptimized" content="236"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $this->Title; ?> - 
<?php echo array_iconv($this->Config['charset'],'utf-8',$this->Config['site_name']); ?>
微博手机版 - 
<?php echo array_iconv($this->Config['charset'],'utf-8',$this->Config['page_title']); ?>
</title>
<link href="templates/default/images/wap_style.css?v=build+20120428" rel="stylesheet" type="text/css" />
</head>
<body>
<?php if(MEMBER_ID) { ?>
	<div class="logo">
	<a href="index.php"><img src="<?php echo $this->Config['site_url']; ?>/wap/templates/default/images/wap_logo.gif" /></a>
	<a name="top" id="top"></a></div>
<?php $member=($member ? $member : wap_iconv($this->MemberHandler->MemberFields)); ?>
<div class="topbg">
	<span>
<?php if($this->Code == 'myhome') $myhome_hb = 'hb'; ?>
<?php if($this->Code == 'info')   $info_hb = 'hb'; ?>
<a href="index.php?mod=topic&amp;code=new" title="最新微博"><span class="<?php echo $topic_new_hb; ?>">广场</span></a>| 
	<a href="index.php?mod=tag"><span class="<?php echo $tag_hb; ?>">话题</span></a>| 
	<a href="index.php?mod=topic&amp;code=myhome" title="我的首页"><span class="<?php echo $myhome_hb; ?>">首页</span></a>| 
	<a href="index.php?mod=topic&amp;code=myfavorite" title="我的收藏"><span class="<?php echo $favorite_hb; ?>">收藏</span></a>
	</span>
	</div>
	<div class="topbg">
	<span>
<?php if($member['uid'] == MEMBER_ID) { ?>
<?php if($member['comment_new']>0 || $member['at_new']>0 || $member['newpm']>0 || $member['fans_new']>0) $info_notice = '<img src="templates/default/images/new.gif" alt="" width="" height="" />'; ?>
<?php } ?>
<a href="index.php?mod=pm" title="私信"><span class="<?php echo $pm_hb; ?>">私信</span></a>|
	<a href="index.php?mod=settings&code=base&uid=<?php echo MEMBER_ID; ?>" title="设置"><span class="<?php echo $setting_hb; ?>">设置</span></a>| 
    <a href="index.php?mod=topic&code=info" title="消息"><span class="<?php echo $info_hb; ?>">消息<?php echo $info_notice; ?></span></a>| 
	<a href="index.php?mod=topic&code=add" title="发微博"><span class="<?php echo $addtopic_hb; ?>">发微博</span></a>
	</span>
	</div>
<?php if(in_array($this->Code,array('myhome','myblog','fans','follow','info')) || $params['code'] == 'myblog' || $this->Code > 0 || $this->Get['mod'] == 'pm') { ?>
	<div class="u">
		<span>
			<a href="index.php"><img onerror="javascript:faceError(this);" src="<?php echo $member['face']; ?>" style="width:45px; height:45px;padding:1px;border:1px solid #ccc; background:#fff;"/></a>
			<a href="index.php?mod=<?php echo $member['username']; ?>"><?php echo $member['nickname']; ?></a> | 
            <a href="index.php?mod=settings&code=base&uid=<?php echo $member['uid']; ?>">资料</a>
<?php if($member['uid'] == MEMBER_ID) { ?>
 | <a href="index.php?mod=login&amp;code=logout">退出</a>
<?php } ?>
<br />
<?php if($this->Code == 'follow') $follow_hb = 'hb'; ?>
<?php if($this->Code == 'fans') $fans_hb = 'hb'; ?>
<?php if($topic_selected == 'myblog') $myblog_hb = 'hb'; ?>
		  <span class="<?php echo $follow_hb; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&amp;code=follow">关注<?php echo $member['follow_count']; ?>人</a> |</span>
		  <span class="<?php echo $fans_hb; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&amp;code=fans">粉丝<?php echo $member['fans_count']; ?>人</a> | </span>
		  <span class="<?php echo $myblog_hb; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>">微博<?php echo $member['topic_count']; ?>条</a></span><br />
<?php if($this->Code != 'fans' && $this->Code != 'follow') { ?>
		  <?php echo $member['follow_html']; ?>
<?php } ?>
</span> 
	</div>
<?php } ?>
<?php if(in_array($this->Code,array('myhome')) || !empty($tag_value)) { ?>
<div class="m">
    <div style="padding:2px;">
<?php if($tag) { ?>
	针对# <?php echo $tag; ?> #说点什么
<?php } else { ?>随便说说
<?php } ?>
<?php if($this->Config['topic_input_length']>0) { ?>
	：(<?php echo $this->Config['topic_input_length']; ?>字以内)
<?php } ?>
</div>
        <div class="u2">
        <form action="index.php?mod=topic&amp;code=do_add" method="post" enctype="multipart/form-data" name="forminfo" id="forminfo">
             <div>
                <textarea name="content" id="content" style="width:98%;" rows="2" cols="" /></textarea>
				<p>图片：(注：需要浏览器支持)<input name="topic" type="file" id="topic" style="width:190px;"/></p>
             </div>
            <input name="topictype" type="hidden" id="topictype" value="first" />
             <input name="tag" type="hidden" id="tag" value="<?php echo $tag; ?>" />
             <div style="margin-top:3px;">
			 	<input type="submit" name="addTopic" value="发布" />	
<?php if($this->Config['sina_enable'] && sina_weibo_init()) { ?>
<?php echo array_iconv($this->Config['charset'],'utf-8',sina_weibo_syn()); ?>
<?php } ?>
<?php if($this->Config['qqwb_enable'] && qqwb_init()) { ?>
<?php echo array_iconv($this->Config['charset'],'utf-8',qqwb_syn()); ?>
<?php } ?>
<?php if($this->Config['kaixin_enable'] && kaixin_init()) { ?>
<?php echo array_iconv($this->Config['charset'],'utf-8',kaixin_syn_html()); ?>
<?php } ?>
<?php if($this->Config['renren_enable'] && renren_init()) { ?>
<?php echo array_iconv($this->Config['charset'],'utf-8',renren_syn_html()); ?>
<?php } ?>
             </div>
             <div>
             <input name="tag" type="hidden" id="tag" value="<?php echo $tag_value; ?>" />
             </div>
            <input name="return_code" type="hidden" id="return_code" value="mod=<?php echo $this->Get['mod']; ?>&code=<?php echo $this->Code; ?>" />
            <input type="hidden" />
        </form> 
        </div>
</div>
<?php } ?>
<?php } else { ?><div class="logo">
		<a href="index.php"><img src="<?php echo $this->Config['site_url']; ?>/wap/templates/default/images/wap_logo.gif" /></a>
	</div>
	<div class="topbg">
		<span>
		<a href="index.php?mod=topic&amp;code=new" title="最新微博">广场</a>|
		<a href="index.php?mod=tag">话题</a>|
		<a href="index.php?mod=login">登录</a>|
		<a href="index.php?mod=member"><font color="red">免费注册</font></a>
		</span>
	</div>
<?php } ?>
<div class="u2">
	<div style="padding:2px;">
<?php if($params['code'] == myblog ) { ?>
<?php if(MEMBER_ID == $member['uid']) $_my = '我'; else $_my = $member['nickname']; ?>
<?php } ?>
<?php if($this->Code == 'myhome') { ?>
		<span>我的首页</span><?php } elseif($this->Code == 'myat') { ?><span>提到我的</span>
<?php } ?>
<?php if(in_array($this->Code,array('mycomment','tocomment'))) { ?>
<?php if($this->Code == 'mycomment') $mycomment = 'hb'; ?>
<?php if($this->Code == 'tocomment') $tocomment = 'hb'; ?>
		<span class="<?php echo $mycomment; ?>"><a href="index.php?mod=topic&code=mycomment">评论我的</a></span>
		<span class="<?php echo $tocomment; ?>" style="margin-left:10px;"><a href="index.php?mod=topic&code=tocomment">我的评论</a></span>
<?php } ?>
<?php if(in_array($this->Code,array('myfavorite','favoritemy'))) { ?>
<?php if($this->Code == 'myfavorite') $my_favorite = 'hb'; ?>
<?php if($this->Code == 'favoritemy') $favoritemy = 'hb'; ?>
		<span class="<?php echo $my_favorite; ?>"><a href="index.php?mod=topic&amp;code=myfavorite">我的收藏</a></span>
		<span class="<?php echo $favoritemy; ?>"><a href="index.php?mod=topic&amp;code=favoritemy">收藏我的</a></span>
<?php } ?>
</div>
</div>	
<div class="m">
  <div>
    <!--列表开始-->
    <div>
<?php if($topic_list) { ?>
      <!-- 收藏我的开始 -->
<?php if('favoritemy'==$this->
      Code) { ?>
<?php if(is_array($topic_list)) { foreach($topic_list as $val) { ?>
<?php $counts++; ?>
      <!--列表区块开始-->
      <div>
        <div>
          <!--右边主体-->
          <div>
            <!--微博主体-->
            <div>
              <div> <span><a href="index.php?mod=<?php echo $val['username']; ?>"><?php echo $val['nickname']; ?></a>
<?php if($val['validate_html']) { ?>
                <img class='vipImg' title='<?php echo $val['vip_info']; ?>' src='<?php echo $this->Config['site_url']; ?>/images/vip.gif' />
<?php } ?>
                <?php echo $val['content']; ?></span> <a href="index.php?mod=topic&amp;code=<?php echo $val['tid']; ?>" target="_blank">原文评论
<?php if($val['replys']) { ?>
                <?php echo $val['replys']; ?>
<?php } ?>
                </a> <a href="index.php?mod=topic&amp;code=<?php echo $val['tid']; ?>" target="_blank">原文转发
<?php if($val['forward']) { ?>
                <?php echo $val['forward']; ?>
<?php } ?>
                </a> </div>
            </div>
            <!--微博管理-->
          </div>
          <!--右边主体结束-->
        </div>
      </div>
      <!--列表区块结束-->
<?php } } ?>
      <!-- 收藏我的结束 -->
<?php } else { ?>      
<?php if(is_array($topic_list)) { foreach($topic_list as $val) { ?>
<?php $counts++; ?>
      <!--列表区块开始-->
      <div>
        <div style="padding:2px;">
          <div class="t_list_b">
            <!--微博主体-->
            <div> <a title="<?php echo $val['username']; ?>" href="index.php?mod=<?php echo $val['username']; ?>"><?php echo $val['nickname']; ?></a>
<?php if($val['validate_html']) { ?>
              <img class='vipImg' title='<?php echo $val['vip_info']; ?>' src='<?php echo $this->Config['site_url']; ?>/images/vip.gif' />
<?php } ?>
              :<span><?php echo $val['content']; ?></span> 
<?php if($val['longtextid']) { ?>
 <a href="index.php?mod=topic&amp;code=<?php echo $val['tid']; ?>">[查看全文]</a>
<?php } ?>
<br />
            </div>
<?php if($val['imageid'] && $val['image_list']) { ?>
            <div class="t_list_b"> 
<?php if(is_array($val['image_list'])) { foreach($val['image_list'] as $iv) { ?>
				<a href="index.php?mod=topic&code=<?php echo $val['tid']; ?>"><img src="<?php echo $iv['image_small']; ?>" /></a> 
<?php } } ?>
</div>
<?php } ?>
<?php if(($tpid=$val['top_parent_id'])>0) { ?>
            <div class="t_list_b">
              <div class="transpond">
<?php if(($pt=$parent_list[$tpid])) { ?>
					<p>
						<span>
						<a href="index.php?mod=<?php echo $pt['username']; ?>"><?php echo $pt['nickname']; ?></a>
<?php if($pt['validate_html']) { ?>
<img class='vipImg' title='<?php echo $pt['vip_info']; ?>' src='<?php echo $this->Config['site_url']; ?>/images/vip.gif' />
<?php } ?>
: 
						<?php echo $pt['content']; ?> 
						</span>
					</p>
<?php if($pt['imageid'] && $pt['image_list']) { ?>
					<div class="Im">
<?php if(is_array($pt['image_list'])) { foreach($pt['image_list'] as $iv) { ?>
						<img src="<?php echo $iv['image_small']; ?>" />
<?php } } ?>
</div>
<?php } ?>
<a href="index.php?mod=topic&amp;code=<?php echo $tpid; ?>">原文评论(<?php echo $pt['replys']; ?>)</a> <a href="index.php?mod=topic&amp;code=<?php echo $tpid; ?>">原文转发(<?php echo $pt['forwards']; ?>)</a>
<?php } else { ?><?php $val['reply_disable']=0; ?>
<span>原始微博已删除</span>
<?php } ?>
              </div>
            </div>
<?php } ?>
            <!--微博管理-->
            <!--微博管理-->
<div class="t_manger"> 
  <span class="p_time">
  <?php echo $val['dateline']; ?> <?php echo $val['from_string']; ?>
  </span> 
  <br>
  <span>
<?php if(MEMBER_ID>0) { ?>
<?php if(!$val['reply_disable']) { ?>
   <a href="index.php?mod=topic&amp;code=<?php echo $val['tid']; ?>">评论(<?php echo $val['replys']; ?>)</a>
<?php } ?>
<?php $tpid=$val['top_parent_id']; if ($tpid&&$parent_list[$tpid]) $root_type=$parent_list[$tpid]['type']; ?>
<?php if((!isset($root_type)) || (isset($root_type) && in_array($root_type, get_topic_type('forward')))) { ?>
<?php if(in_array($val['type'], get_topic_type('forward'))) { ?>
		<a href="index.php?mod=topic&amp;code=forward&tid=<?php echo $val['tid']; ?>">(转发<?php echo $val['forwards']; ?>)</a>
<?php } else { ?>
<?php if(isset($val['fansgroup'])) { ?>
		<span><?php echo $val['fansgroup']; ?></span>
<?php } else { ?><span title="设置了特殊的权限，不允许转发">转发</span>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if($val['uid']==MEMBER_ID || 'admin'==MEMBER_ROLE_TYPE) { ?>
  <a href="index.php?mod=topic&amp;code=del&amp;tid=<?php echo $val['tid']; ?>">删除</a>   
<?php if(time() - $val['addtime'] < 3600 || 'admin'==MEMBER_ROLE_TYPE) { ?>
<?php if($val['replys'] <= 0 && $val['forwards'] <= 0 || 'admin'==MEMBER_ROLE_TYPE) { ?>
  <a href="index.php?mod=topic&amp;code=modify&amp;tid=<?php echo $val['tid']; ?>">编辑</a>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if($this->Code == 'myfavorite') { ?>
  <a href="index.php?mod=topic&amp;code=favorite&amp;tid=<?php echo $val['tid']; ?>&amp;act=delete">取消收藏</a>
<?php } else { ?>  <a href="index.php?mod=topic&amp;code=favorite&amp;tid=<?php echo $val['tid']; ?>&amp;act=add">收藏</a>
<?php } ?>
  </span>
</div>
<!--微博管理-->
            <!--微博管理-->
          </div>
          <!--右边主体结束-->
        </div>
      </div>
      <div class="lineDot"></div>
      <!--列表区块结束-->
<?php } } ?>
<?php } ?>
<?php if($page_arr['html']) { ?>
      <div style="margin-top:15px; "> <span><?php echo $page_arr['html']; ?></span> </div>
<?php } ?>
<?php } ?>
      <!-- 正文列表结束 -->
    </div>
  </div>
  <!--微博区块结束-->
  <div id="topic_list_{<?php echo $counts; ?>++}" class="t_list_b">
<?php if('myat'== $this->
    Code) { ?>
    这里会显示含有"@<?php echo $__my['nickname']; ?>"的微博。<BR />
    <?php } elseif('mycomment' == $this->
    Code) { ?> 
    这里会显示他人对你微博所做的评论。<BR />
    <?php } elseif('myfavorite' == $this->
    Code) { ?> 
    这里会显示你所收藏的微博。<BR />
    在登录状态下，每个微博的下方都有一个收藏连接，点击即可自动完成收藏，然后你就可以在这里看到了。你可以访问<A HREF="index.php?mod=topic&code=hot">热门微博</A>来发现有收藏价值的内容；
    <?php } elseif('favoritemy' == $this->
    Code) { ?> 
    这里会显示谁收藏了你的微博。<BR />
    赶快分享些有价值的新鲜事吧，当有人收藏后，你就会在这里看到。<BR />
<?php } ?>
  </div>
  <!-- 显示帮助信息结束 -->
</div>
</div><div style="height:20px;"></div>
<div class="topbg">
<span>
<a href="index.php?mod=topic&code=add" title="发微博">发微博</a>  |  
<a href="#" id="top" title="返回顶部">返回顶部</a>
</span>
</div>
<div class="">
<span>
<a href="index.php?mod=topic&amp;code=new" title="最新微博">微博广场</a>  |   
<a href="index.php?mod=topic&amp;code=myhome" title="我的首页">我的首页</a>
<?php if($member['uid'] == MEMBER_ID) { ?>
 | <a href="index.php?mod=login&amp;code=logout">退出</a>
<?php } ?>
</span>
</div>
<div style="height:20px;"></div>
<div><?php echo $this->Config['tongji']; ?><!--
<?php $__server_execute_time = round(microtime(true) - $GLOBALS['_J']['time_start'], 5) . " Second "; ?>
<?php $__gzip_tips = ((defined('GZIP') && GZIP) ? "&nbsp;Gzip Enable." : "Gzip Disable."); ?>
<span title="网页执行信息：<?php echo $__server_execute_time; ?>,<?php echo $__gzip_tips; ?>">
&nbsp; Execute：<?php echo $__server_execute_time; ?>,<?php echo $__gzip_tips; ?></span>
-->
</div>
<?php echo $GLOBALS['schedule_html']; ?>
</body> 
</html>
<?php if($this->MemberHandler) $this->MemberHandler->UpdateSessions(); ?>