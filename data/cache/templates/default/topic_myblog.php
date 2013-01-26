<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $__my=$this->MemberHandler->MemberFields; ?>
<base href="<?php echo $this->Config['site_url']; ?>/" />
<?php $conf_charset=$this->Config['charset']; ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $conf_charset; ?>" />
<title><?php echo $this->Title; ?> - <?php echo $this->Config['site_name']; ?>(<?php echo $this->Config['site_domain']; ?>)<?php echo $this->Config['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->MetaKeywords; ?>,<?php echo $this->Config['site_name']; ?><?php echo $this->Config['meta_keywords']; ?>" />
<meta name="Description" content="<?php echo $this->MetaDescription; ?>,<?php echo $this->Config['site_notice']; ?><?php echo $this->Config['meta_description']; ?>" />
<link rel="shortcut icon" href="templates/default/images/favicon.ico" >
<link href="templates/default/styles/main.css?v=build+20120428" rel="stylesheet" type="text/css" />
<?php if($this->Config['qun_theme_id']) { ?>
<link href="templates/default/qunstyles/<?php echo $this->Config['qun_theme_id']; ?>.css" rel="stylesheet" type="text/css" /><?php } elseif($this->Config['theme_id']) { ?><link href="theme/<?php echo $this->Config['theme_id']; ?>/theme.css?v=<?php echo SYS_BUILD; ?>" rel="stylesheet" type="text/css" />
<?php } ?>
<style type="text/css">
<?php if($this->Config['theme_text_color']) { ?>
body{ color:<?php echo $this->Config['theme_text_color']; ?>; }
<?php } ?>

<?php if($this->Config['theme_bg_color']) { ?>
body{ background-color:<?php echo $this->Config['theme_bg_color']; ?>; }
<?php } ?>

<?php if($this->Config['theme_bg_image']) { ?>
body{ background-image:url(<?php echo $this->Config['theme_bg_image']; ?>); }
<?php } ?>

<?php if($this->Config['theme_bg_position']) { ?>
body{ background-position:<?php echo $this->Config['theme_bg_position']; ?>; }
<?php } ?>

<?php if($this->Config['theme_bg_repeat']) { ?>
body{ background-repeat:<?php echo $this->Config['theme_bg_repeat']; ?>; }
<?php } ?>

<?php if($this->Config['theme_bg_fixed']) { ?>
body{ background-attachment:<?php echo $this->Config['theme_bg_fixed']; ?>; }
<?php } ?>

<?php if($this->Config['theme_text_color']) { ?>
body{ color:<?php echo $this->Config['theme_text_color']; ?>; }
<?php } ?>

<?php if($this->Config['theme_link_color']) { ?>
a:link{ color:<?php echo $this->Config['theme_link_color']; ?>; }
<?php } ?>
a.artZoom{ cursor:url(<?php echo $this->Config['site_url']; ?>/templates/default/images/magnifier_b.cur), pointer; }
.artZoomBox a.maxImgLink { cursor:url(<?php echo $this->Config['site_url']; ?>/templates/default/images/magnifier_s.cur), pointer; }

a.artZoom2{ cursor:url(<?php echo $this->Config['site_url']; ?>/templates/default/images/magnifier_b.cur), pointer; }

a.artZoom3{ cursor:url(<?php echo $this->Config['site_url']; ?>/templates/default/images/magnifier_b.cur), pointer; }
.artZoomBox a.maxImgLink3 { cursor:url(<?php echo $this->Config['site_url']; ?>/templates/default/images/magnifier_s.cur), pointer; }

a.artZoomAll{ cursor:url(<?php echo $this->Config['site_url']; ?>/templates/default/images/magnifier_b.cur), pointer; }
.artZoomBox a.maxImgLinkAll { cursor:url(<?php echo $this->Config['site_url']; ?>/templates/default/images/magnifier_s.cur), pointer; }
</style>

<script type="text/javascript">
var thisSiteURL = '<?php echo $this->Config['site_url']; ?>/';
var thisTopicLength = '<?php echo $this->Config['topic_input_length']; ?>';
var thisMod = '<?php echo $this->Module; ?>';
var thisCode = '<?php echo $this->Code; ?>';
var thisFace = '<?php echo $__my['face_small']; ?>';
<?php $qun_setting = ConfigHandler::get('qun_setting'); ?>
<?php if($qun_setting['qun_open']) { ?>
	
	var isQunClosed = false;
<?php } else { ?>var isQunClosed = true;
<?php } ?>
function faceError(imgObj)
{
	var errorSrc = '<?php echo $this->Config['site_url']; ?>/images/noavatar.gif';

	imgObj.src = errorSrc;
}
</script>
<script type="text/javascript">var __ALERT__='<?php echo $this->Config['verify_alert']; ?>';</script>
<script type="text/javascript" src="templates/default/js/min.js?v=build+20120428"></script>
<script type="text/javascript" src="templates/default/js/common.js?v=build+20120428"></script>
<script type="text/javascript" src="templates/default/js/topicManage.js?v=build+20120428"></script>
<script type="text/javascript" src="templates/default/js/rotate.js?v=build+20120428"></script>
<script type="text/javascript" src="templates/default/js/dialog.js?v=build+20120428" id="dialog_js"></script>
<script type="text/javascript" src="templates/default/js/lang.js?v=build+20120428"></script>
<script type="text/javascript" src="images/uploadify/jquery.uploadify.v2.1.4.min.js?v=build+20120428"></script>
<?php if(in_array($this->Code, array("follow","fans"))) { ?>
<script type="text/javascript" src="templates/default/js/relation.js?v=build+20120428"></script>
<?php } ?>

<?php if($this->Get['mod']=="vote") { ?>
<script type="text/javascript" src="templates/default/js/vote.js?v=build+20120428"></script>
<?php } ?>

<?php if($this->Get['mod']=="qun") { ?>
<script type="text/javascript" src="templates/default/js/qun.js?v=build+20120428"></script>
<?php } ?>
<!--[if IE 6]>
<script type="text/javascript" src="templates/default/js/DD_belatedPNG_0.0.8a-min.js?v=build+20120428" ></script>
<script type="text/javascript">DD_belatedPNG.fix('.header,.pweibo,.boxRNav2 li,.boxRNav2 li a');   </script>
<![endif]-->   

</head>
<?php echo $additional_str; ?>
<body>
<?php if(MEMBER_ID) { ?>
<?php if(MEMBER_STYLE_THREE_TOL == 1) { ?>
<?php $t_col_header ='t_col_header';  $t_col_logo ='t_col_logo'; $t_col_main='t_col_main'; $t_col_main_side='t_col_main_side'; $t_col_foot='t_col_foot'; $t_col_backTop='t_col_backTop'; $t_col_main_rn='t_col_main_rn'; $t_col_main_lb='t_col_main_lb'; $t_col_tagBox='t_col_tagBox';$bL_info_three='bL_info_three';  ?>
<?php } ?>

<?php if($member['open_extra'] and MEMBER_ID != $member['uid']) { ?>
<?php $t_col_header ='t_col_header';  $t_col_logo ='t_col_logo'; $t_col_main='t_col_main'; $t_col_main_side='t_col_main_side'; $t_col_foot='t_col_foot'; $t_col_backTop='t_col_backTop'; $t_col_main_rn='t_col_main_rn'; $t_col_main_lb='t_col_main_lb'; $t_col_tagBox='t_col_tagBox';$bL_info_three='bL_info_three';  ?>
<?php } ?>
<?php } ?>
<div class="header">
<div class="headerNav <?php echo $t_col_header; ?>">
	<ul class="hleft">

	<li class="logo2"><a href="index.php" title="<?php echo $this->Config['site_name']; ?>"></a></li>
<?php $navigation_config=ConfigHandler::get('navigation');global $rewriteHandler; ?>
<?php if(is_array($navigation_config['list'])) { foreach($navigation_config['list'] as $_v) { ?>
<?php if($_v['avaliable'] == 1) { ?>
		<script type="text/javascript">
		$(document).ready(function(){
			$(".t_c<?php echo $_v['code']; ?>").mouseover(function(){$(".t_c<?php echo $_v['code']; ?>_box").show();$(".t_c<?php echo $_v['code']; ?>").addClass("on");});
			$(".t_c<?php echo $_v['code']; ?>").mouseout(function(){$(".t_c<?php echo $_v['code']; ?>_box").hide();$(".t_c<?php echo $_v['code']; ?>").removeClass("on");});
			$(".t_c2").mouseover(function(){$(".t_c2_box").show();$(".t_c2").addClass("on");});
			$(".t_c2").mouseout(function(){$(".t_c2_box").hide();$(".t_c2").removeClass("on");});
			$(".t_c4").mouseover(function(){$(".t_c4_box").show();$(".t_c4").addClass("on");});
			$(".t_c4").mouseout(function(){$(".t_c4_box").hide();$(".t_c4").removeClass("on");});
			$(".t_c5").mouseover(function(){$(".t_c5_box").show();$(".t_c5").addClass("on");});
			$(".t_c5").mouseout(function(){$(".t_c5_box").hide();$(".t_c5").removeClass("on");});
			$(".t_c6").mouseover(function(){$(".t_c6_box").show();$(".t_c6").addClass("on");});
			$(".t_c6").mouseout(function(){$(".t_c6_box").hide();$(".t_c6").removeClass("on");});
		});
		</script>
<?php if($rewriteHandler)$_v['url']=$rewriteHandler->formatURL($_v['url']); ?>
<li class="t_c<?php echo $_v['code']; ?>"><a href="<?php echo $_v['url']; ?>" target="<?php echo $_v['target']; ?>" title="<?php echo $_v['name']; ?>"><?php echo $_v['name']; ?></a>
<?php if(!empty($_v['type_list'])  && $_v['avaliable'] == 1) { ?>
		<ul class="t_c1_box t_c<?php echo $_v['code']; ?>_box" style="display:none;">
		 
<?php if(is_array($_v['type_list'])) { foreach($_v['type_list'] as $val) { ?>
		 
<?php if($val['name']  && $val['avaliable'] == 1) { ?>
		 
<?php if($rewriteHandler)$val['url']=$rewriteHandler->formatURL($val['url']); ?>
 <li><a href="<?php echo $val['url']; ?>" target="<?php echo $val['target']; ?>"><?php echo $val['name']; ?></a></li>
		 
<?php } ?>
 
<?php } } ?>
 
<?php if(!empty($navigation_config['pluginmenu']) && $_v['code'] == 'app') { ?>
		 
<?php if(is_array($navigation_config['pluginmenu'])) { foreach($navigation_config['pluginmenu'] as $pmenus) { ?>
		 
<?php if(is_array($pmenus)) { foreach($pmenus as $pmenu) { ?>
		 
<?php if($pmenu['type'] == 1) { ?>
		 
<?php if($rewriteHandler)$pmenu['url']=$rewriteHandler->formatURL($pmenu['url']); ?>
 <li><a href="<?php echo $pmenu['url']; ?>" target="<?php echo $pmenu['target']; ?>"><?php echo $pmenu['name']; ?></a></li>
		 
<?php } ?>
 
<?php } } ?>
 
<?php } } ?>
 
<?php } ?>
 </ul>
	 
<?php } ?>
</li>
	
<?php } ?>
<?php } } ?>
<li class="sweibo">
		<div class="searchTool">
		  <form method="get" action="#" name="headSearchForm" id="headSearchForm" onsubmit="return headDoSearch();">
			<input id="headSearchType" name="searchType" type="hidden" value="userSearch">
			<div class="selSearch">
			  <div class="nowSearch" id="headSlected" onclick="if(document.getElementById('headSel').style.display=='none'){document.getElementById('headSel').style.display='block';}else {document.getElementById('headSel').style.display='none';};return false;" onmouseout="drop_mouseout('head');">用户</div>
			  <div class="btnSel"><a href="#" onclick="if(document.getElementById('headSel').style.display=='none'){document.getElementById('headSel').style.display='block';}else {document.getElementById('headSel').style.display='none';};return false;" onmouseout="drop_mouseout('head');"></a></div>
			  <div class="clear"></div>
			  <ul class="selOption" id="headSel" style="display:none;">
				<li><a href="#" onclick="return search_show('head','userSearch',this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">用户</a></li>
				<li><a href="#" onclick="return search_show('head','tagSearch',this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">话题</a></li>
				<li><a href="#" onclick="return search_show('head','topicSearch',this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">微博</a></li>
<?php $vote_setting = ConfigHandler::get('vote'); ?>
<?php if($vote_setting['vote_open']) { ?>
				<li><a href="#" onclick="return search_show('head','voteSearch',this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">投票</a></li>
				
<?php } ?>
<?php $qun_setting = ConfigHandler::get('qun_setting'); ?>
<?php if($qun_setting['qun_open']) { ?>
				<li><a href="#" onclick="return search_show('head','qunSearch',this)" onmouseover="drop_mouseover('head');" onmouseout="drop_mouseout('head');">微群</a></li>
				
<?php } ?>
  </ul>
			</div>
			<input class="txtSearch" id="headq" name="headSearchValue" type="text" value="请输入关键字" onfocus="this.value=''"/>
			<div class="btnSearch"> <a href="#" onclick="javascript:return headDoSearch();"><span class="lbl"></span></a></div>
		  </form>
		</div>
		</li>
		
	</ul>
	<ul class="hright">
	  <li class="pweibo" style="cursor:pointer;" onclick="showMainPublishBox();" title="发微博">发博
	  <input type="hidden" name="check_PublishBox_uid" id="check_PublishBox_uid"  value="<?php echo MEMBER_ID; ?>"/>
	  <input type="hidden" id="verify" name="verify" value="<?php echo $this->Config['verify']; ?>">
	  </li>
	  
<?php if(MEMBER_ID > 0) { ?>
	  <li class="t_c4"><a href="index.php" title="<?php echo $this->Config['site_name']; ?>">我的首页</a>
		<ul class="t_c4_box">
		  
<?php if($this->Config['qun_setting']['qun_open']) { ?>
		  <li><a href="index.php?mod=topic&code=qun">我的微群
<?php if($__my['qun_new']>0) { ?>
<span>+<?php echo $__my['qun_new']; ?></span>
<?php } ?>
</a></li>
		  
<?php } ?>
  <li><a href="index.php?mod=topic&code=tag">关注话题
<?php if($__my['topic_new']>0) { ?>
<span>+<?php echo $__my['topic_new']; ?></span>
<?php } ?>
</a></li>
		  
<?php if($this->Config['dzbbs_enable'] || ($this->Config['phpwind_enable'] && $this->Config['pwbbs_enable'])) { ?>
		  <li><a href="index.php?mod=topic&code=bbs">我的论坛</a></li>
		  
<?php } ?>
  
<?php if(($this->Config['dedecms_enable'] == 1)) { ?>
		  <li><a href="index.php?mod=topic&code=cms">我的资讯</a></li>
		  
<?php } ?>
  <li><a href="index.php?mod=topic&code=recd">官方推荐</a></li>
		  <li><a href="index.php?mod=topic&code=myfavorite">我的收藏</a></li>
		</ul>
	  </li>

	  <li class="t_c2"><a title="<?php echo MEMBER_NICKNAME; ?>" href="index.php?mod=<?php echo MEMBER_NAME; ?>"><?php echo MEMBER_NICKNAME; ?></a>
		<ul class="t_c2_box">
		  <li><a href="index.php?mod=<?php echo MEMBER_NAME; ?>&type=hot_reply">被热评的</a></li>
		  <li><a href="index.php?mod=<?php echo MEMBER_NAME; ?>&type=hot_forward">被热转的</a></li>
		  <li><a href="index.php?mod=topic&code=myfavorite">我收藏的</a></li>
		  <li><a href="index.php?mod=<?php echo MEMBER_NAME; ?>&type=my_verify">待审核的</a></li>
		</ul>
	  </li>

	  <li class="t_c6">消息
		<ul class="t_c6_box">
		  <li><a href="index.php?mod=topic&code=mycomment">评论我的
<?php if($__my['comment_new']>0) { ?>
<span>+<?php echo $__my['comment_new']; ?></span>
<?php } ?>
</a></li>
		  <li><a href="index.php?mod=topic&code=myat">@我的
<?php if($__my['at_new']>0) { ?>
<span>+<?php echo $__my['at_new']; ?></span>
<?php } ?>
</a></li>
		  <li><a href="index.php?mod=pm&code=list">私信我的
<?php if($__my['newpm']>0) { ?>
<span>+<?php echo $__my['newpm']; ?></span>
<?php } ?>
</a></li>
		  <li><a href="index.php?mod=<?php echo $__my['username']; ?>&code=fans">关注我的
<?php if($__my['fans_new']>0) { ?>
<span>+<?php echo $__my['fans_new']; ?></span>
<?php } ?>
</a></li>
		  <li><a href="index.php?mod=topic&code=favoritemy">收藏我的
<?php if($__my['favoritemy_new']>0) { ?>
<span>+<?php echo $__my['favoritemy_new']; ?></span>
<?php } ?>
</a></li>
		</ul>
	  </li>
	  
	  <li class="t_c5">帐号
	  <ul class="t_c5_box">
	  <li><a href="index.php?mod=settings">资料设置</a></li>
	  <li><a href="index.php?mod=settings&code=face">修改头像</a></li>
	  <li><a href="index.php?mod=settings&code=secret">修改密码</a></li>
	  <li><a href="index.php?mod=account">账户绑定</a></li>
	  <li><a href="index.php?mod=other&code=wap">手机</a></li>
	  <li><a href="index.php?mod=skin">换肤</a></li>
	  <li><a href="index.php?mod=profile&code=invite">邀请关注</a></li>
	  
<?php if($params['code'] == 'myhome') { ?>
	  <li>
	  <span id="web_list_type_<?php echo MEMBER_ID; ?>">
	  <input type="hidden" id="web_style" name="web_style" value="<?php echo MEMBER_STYLE_THREE_TOL; ?>"/>
	  
<?php if (MEMBER_STYLE_THREE_TOL == 1) $ajax_list = 'right'; else $ajax_list = 'left'; ?>
  <a href="javascript:void(0);" title="推荐三栏，导航更清晰" onclick="web_list_type(<?php echo MEMBER_ID; ?>,'web_style','<?php echo $params['code']; ?>','<?php echo $ajax_list; ?>','<?php echo $member['uid']; ?>'); return false;">
	  
<?php if(MEMBER_STYLE_THREE_TOL == 1) { ?>
换为两栏
<?php } else { ?>换为三栏
<?php } ?>
</a> 
	  <input type="hidden" name='hid_type' id='hid_type' value='<?php echo $type; ?>'>
	  </span>
	  </li>	 
      
<?php } ?>
 
	  
<?php if('admin'==MEMBER_ROLE_TYPE) { ?>
	  <li><a href="admin.php" target=_blank>后台管理</a></li>
	  
<?php } ?>
  <li><a href="<?php echo $this->Config['site_url']; ?>/index.php?mod=login&code=logout" rel="nofollow">退出</a> </li>
      
	  </ul>
	  </li>

	  
<?php } else { ?>  <li><a href="javascript:viod(0)" rel="nofollow" title="登录即可分享新鲜事" onclick="ShowLoginDialog(); return false;">快捷登录</a></li>
	  
<?php } ?>
</ul>
  </div>

</div>


<div class="logow <?php echo $t_col_logo; ?>">
<?php if(MEMBER_ID>0) { ?>
<?php if($__my['comment_new']>0 || $__my['fans_new']>0 || $__my['at_new']>0 || $__my['newpm']>0 || $__my['favoritemy_new']>0 || $__my['vote_new']>0 || $__my['qun_new']>0 || $__my['event_new']>0 || $__my['topic_new']>0 || $__my['event_post_new']>0 || $__my['fenlei_post_new']>0) { ?>
<?php $__tagBoxStyle='display:block;visibility:visible;'; ?>
<?php } else { ?><?php $__tagBoxStyle='display:none;visibility:hidden;'; ?>
<?php } ?>
<!--#if NEDU#-->
<?php if(defined('NEDU_MOYO')) { ?>
<?php if(nlogic('notify')->ups_haved()) { ?>
<?php $__tagBoxStyle='display:block;visibility:visible;'; ?>
<?php } ?>
<?php } ?>
<!--#endif#-->
	<script type="text/javascript">
		function tagBox_close()
		{
			var obj = document.getElementById("tagBox_<?php echo MEMBER_ID; ?>");
			obj.style.visibility = "hidden";
		}
	</script>
	<div class="tagBox <?php echo $t_col_tagBox; ?>" id="tagBox_<?php echo MEMBER_ID; ?>" style="<?php echo $__tagBoxStyle; ?>">
		<div id="tagBoxContent_<?php echo MEMBER_ID; ?>">
		<ul>
		  
<?php if($__my['newpm']>0) { ?>
		  <li><a href="index.php?mod=pm&code=list"><?php echo $__my['newpm']; ?>条新私信，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['comment_new']>0) { ?>
		  <li><a href="index.php?mod=topic&code=mycomment"><?php echo $__my['comment_new']; ?>条新评论，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['fans_new']>0) { ?>
		  <li><a href="index.php?mod=<?php echo $__my['username']; ?>&code=fans"><?php echo $__my['fans_new']; ?>人关注了我，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['at_new']>0) { ?>
		  <li><a href="index.php?mod=topic&code=myat"><?php echo $__my['at_new']; ?>人@提到我，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['favoritemy_new']>0) { ?>
		  <li><a href="index.php?mod=topic&code=favoritemy"><?php echo $__my['favoritemy_new']; ?>人收藏了我的，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['vote_new']>0) { ?>
		  <li><a href="index.php?mod=<?php echo $__my['uid']; ?>&type=vote&filter=new_update">投票新增<?php echo $__my['vote_new']; ?>人参与，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['qun_new']>0) { ?>
		  <li><a href="index.php?mod=topic&code=qun">微群新增<?php echo $__my['qun_new']; ?>条内容，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['event_new']>0) { ?>
		  <li><a href="index.php?mod=<?php echo $__my['uid']; ?>&type=event&filter=new_update">活动新增<?php echo $__my['event_new']; ?>人报名，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['topic_new']>0) { ?>
		  <li><a href="index.php?mod=topic&code=tag">话题新增<?php echo $__my['topic_new']; ?>条微博，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['event_post_new']>0) { ?>
		  <li><a href="index.php?mod=topic&code=other&view=event">新增<?php echo $__my['event_post_new']; ?>个关注的活动，查看</a></li>
		  
<?php } ?>
  
<?php if($__my['fenlei_post_new']>0) { ?>
		  <li><a href="index.php?mod=topic&code=other&view=fenlei">新增<?php echo $__my['fenlei_post_new']; ?>个关注的分类信息，查看</a></li>
		  
<?php } ?>
  <!--#if NEDU#-->
		  
<?php if(defined('NEDU_MOYO')) { ?>
			 <?php echo nlogic('notify')->ups_tips_html();; ?>  
<?php } ?>
  <!--#endif#-->
		</ul>
		</div>
		<div class="tagBox_del"><a href="javascript:tagBox_close();" title="关闭" javascript:void(0)><img src="templates/default/images/imgdel.gif" /></a></div>
	</div>
	
<?php } ?>
</div>

<div class="changeTheme"><a href="index.php?mod=skin" title="更换皮肤" javascript:void(0)></a></div>

<!--头部广告-->
<?php if($this->Config['ad_enable'] && $this->Config['ad']['ad_list']['group_myhome']['header']) { ?>
<div style="text-align:center" class="T_AD"><?php echo $this->Config['ad']['ad_list']['group_myhome']['header']; ?></div>
<?php } ?>
  
<!--头部广告-->
<?php if(MEMBER_ID ==0) { ?>
<div class="inventLine2"> 
  <div class="atxt">
	<p class="p_1"><span><?php echo $member['nickname']; ?></span>在这里写微博，想收到TA的最新消息吗？</p> 
	<p class="p_2">微博是现在最酷、最火的沟通交流工具，可以随时随地分享新鲜事，与朋友保持联络。</p> 
	<p class="p_3">10秒注册微博就可通过网页、手机、客户端随时随地分享新鲜事、关注所需的最新消息！</p>
  </div>
  <div class="abtn">
	<a href="index.php?mod=member&code&uid=<?php echo $member['uid']; ?>"><img src="templates/default/images/regbtn.gif"></a>
	<p>已有帐号，<a href="javascript:void(0);" onclick="ShowLoginDialog(); return false;">请点此登录</a></p>
  </div> 
</div>
<?php } ?>
<div class="main t_col_main">

  <!--此处三栏-->
  <div class="t_col_main_si t_col_main_side">
    <div class="t_col_main_fl">
	  <div id="topic_index_left_ajax_list">
	  <!--网站开启三栏后 显示左边  关于我的信息-->

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
	  </div>
    </div>
  </div>
  <!--此处三栏-->
	
  <!--中间栏-->
  <div class="mainL">
    
<?php $__my_link_='index.php?mod='.$member['username'];$__my_link_=get_invite_url($__my_link_,$this->Config['site_url']); ?>
<div class="member_list_top">
	   <div class="left_user_info">
		  <div class="avatar2_info">
          <style type="text/css">
          .member_list_top p.left_t_nick_name{ width:540px;}
		  .member_list_top p.left_t2{ width:540px;}
		  .add_mail, .blacklist, .dialogue{ padding:30px 0 5px;}
          </style>
			 <p class="left_t_nick_name">
			 <strong title="<?php echo $member['nickname']; ?>"><?php echo $member['nickname']; ?><?php echo $member['validate_html']; ?> </strong>
			 <a href="javascript:void(0)" onclick="follower_choose(<?php echo $member['uid']; ?>,'<?php echo $member['nickname']; ?>','at','');">(@<?php echo $member['nickname']; ?>)</a>
			  <!--备注-->
			  <span id="remarklist_<?php echo $member['uid']; ?>"><?php echo $buddys['remark']; ?></span>
			  <!--备注-->
			 
			   
<?php if($member['gender'] == 1) { ?>
			  <img src="templates/default/images/user.gif"  title="男"/>
			  
<?php } else { ?>  <img src="templates/default/images/user_female.gif"  title="女"/>
			  
<?php } ?>
 
			  </p>
			 <p class="left_t2"><a href="index.php?mod=<?php echo $member['username']; ?>"><?php echo $__my_link_; ?></a></p>
<?php if($member['invite_uid']) { ?>
			<p class="left_t2">推荐人：
<?php $_invite_member=jsg_member_info($member['invite_uid']); ?>
<a href="index.php?mod=<?php echo $_invite_member['username']; ?>"><span title="推荐人：<?php echo $_invite_member['nickname']; ?>"><?php echo $_invite_member['nickname']; ?></span></a></p>
			
<?php } ?>
<!-- 关注 拉黑 等操作选项-->
                
<?php if(MEMBER_ID && MEMBER_ID!=$member['uid']) { ?>
				<div id="topic_index_blacklist_<?php echo $member['uid']; ?>">
<?php if($member['uid'] == $list_blacklist['touid']) { ?>
						<div class="blacklist">
							他在你的黑名单里 <a href="javascript:void(0)" onclick="follower_choose(<?php echo $member['uid']; ?>,'<?php echo $member['nickname']; ?>','del','topic_black_ajax');"> [取消拉黑] </a>
						</div>
<?php } else { ?><div class="dialogue">
						 <?php echo $member['follow_html']; ?>
						 <span>
							 | <a href="javascript:void(0)" onclick="follower_choose(<?php echo $member['uid']; ?>,'','lahei','topic_black_ajax');">拉黑</a> |
						 <!--判断是否是好友-->
						 
<?php if($buddys) { ?>
							 <a href="javascript:void(0)" onclick="get_group_choose(<?php echo $member['uid']; ?>);">分组</a> |
							 <a href="javascript:void(0)" onclick="get_remark(<?php echo $member['uid']; ?>);return false;">备注</a> |
							 <a href="javascript:void(0)" onclick="follower_choose(<?php echo $member['uid']; ?>,'<?php echo $member['nickname']; ?>','buddys','');">推荐给朋友</a> |
							 
<?php } ?>
 	
							 <a href="javascript:void(0)" onclick="PmSend(<?php echo $member['uid']; ?>,'<?php echo $member['nickname']; ?>');return false;" >私信</a>
						 <!--判断是否是好友-->
						 </span>
                         
<?php if(MEMBER_ID>0 && 'admin'==MEMBER_ROLE_TYPE && MEMBER_ID!=$member['uid']) { ?>
				<div style="float:right;">
				  <!--<a href="index.php?mod=member&code=delete&id=<?php echo $member['uid']; ?>" onclick="return confirm('确认删除该用户？');"><font color="red">删除该用户</font></a>&nbsp;&nbsp;|&nbsp;&nbsp;-->
				  <a href="admin.php?mod=member&code=dosearch&uid=<?php echo $member['uid']; ?>" target="_blank"><font color="red">删除该用户</font></a>&nbsp;|&nbsp;
				  <a href="javascript:void(0);" onclick="force_out(<?php echo $member['uid']; ?>);"><font color="red">封杀</font></a>&nbsp;|&nbsp;
				  <a href="javascript:void(0);" onclick="force_ip('<?php echo $member['lastip']; ?>');"><font color="red">封IP</font></a>
				</div>
			
<?php } ?>
                         
						</div>
					
						<div id="Pmsend_to_user_area"></div>
						<div id="alert_follower_menu_<?php echo $member['uid']; ?>"></div>
						<span id="button_<?php echo $member['uid']; ?>" onclick="get_group_choose(<?php echo $member['uid']; ?>);"></span>
						<div id="global_select_<?php echo $member['uid']; ?>" class="alertBox" style="display:none"></div>
						<div id="get_remark_<?php echo $member['uid']; ?>" ></div>
					
<?php } ?>
</div> 
				
<?php } ?>
 

			<?php echo $this->hookall_temp['global_usernav_extra1']; ?>
			</div>
	   </div>
	</div>

<div style="width:540px; margin:0 auto 8px; overflow:hidden">
<script language="Javascript">
function listTopic( s , lh ) {	
	var s = 'undefined' == typeof(s) ? 0 : s;
	var lh = 'undefined' == typeof(lh) ? 1 : lh;
	if(lh) {
		window.location.hash="#listTopicArea";
	}
    $("#listTopicMsgArea").html("<div><center><span class='loading'>内容正在加载中，请稍候……</span></center></div>");
	var myAjax = $.post(
		"ajax.php?mod=topic&code=list",
		{
<?php if(is_array($params)) { foreach($params as $k => $v) { ?>
<?php echo $k; ?>:"<?php echo $v; ?>",
<?php } } ?>
start:s
		},
		function (d) {
			$("#listTopicMsgArea").html('');
			$("#listTopicArea").html(d);			
		}
	); 
}
</script>
</div>

 <div class="listBox">
<?php if($img_arr) { ?>
	<div class="listBoxNav">
	  <li style="float:left; font-weight:600; color:#333;">&nbsp;个人最新图片</li>
	  <ul class="imglist" style="width:540px; overflow:hidden;">
	    
<?php if(is_array($img_arr)) { foreach($img_arr as $val) { ?>
	    <li id="<?php echo $val['id']; ?>"><a href="index.php?mod=topic&code=<?php echo $val['tid']; ?>"><img src="<?php echo $val['image_small']; ?>" width="76px" height="76px"></a></li>
	    
<?php } } ?>
  </ul>
	</div>
	
<?php } ?>
  <div class="listBoxNav">
	   <div class="nleftL3">
	   
<?php if(MEMBER_ID == $member['uid']) $_my = '我'; elseif(1==$member['gender']) $_my = '他';else $_my = '她'; ?>
    
<?php if('my_reply' == $type) { ?>
	    <li>
	    
<?php if(MEMBER_ID == $member['uid']) { ?>
<span><a href="index.php?mod=topic&code=mycomment">评论我的</a></span>
<?php } ?>
    <span class="current"><a href="index.php?mod=<?php echo $member['username']; ?>&type=my_reply"><?php echo $_my; ?>评论的</a></span></li> 
	    <?php } elseif('pic' == $type) { ?><?php } elseif('video' == $type) { ?><!--<li style="float:left;">
		<span class="<?php echo $video; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=video"><?php echo $_my; ?>的视频 </a></span>&nbsp;|&nbsp;
		<span class="<?php echo $follow_video; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=video&follow=1"><?php echo $_my; ?>关注人的视频</a></span></li>--><?php } elseif('music' == $type) { ?>   
<?php if($this->Get['follow']) $follow_music = "current2"; else $music = "current" ?>
<li>
		<span class="<?php echo $music; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=music"><?php echo $_my; ?>的音乐 </a></span>
		<span class="<?php echo $follow_music; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=music&follow=1"><?php echo $_my; ?>关注人的音乐</a></span></li> <?php } elseif('attach' == $type) { ?>   
<?php if($this->Get['follow']) $follow_attach = "current2"; else $attach = "current" ?>
<li>
	    <span class="<?php echo $attach; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=attach"><?php echo $_my; ?>的附件 </a></span>
		<span class="<?php echo $follow_attach; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=attach&follow=1"><?php echo $_my; ?>关注人的附件</a></span></li> 
<?php } else { ?><li>
<?php if('my_reply' == $this->Get['type']) $reply = 'current';
		elseif('my_verify' == $this->Get['type']) $verify = 'current';
		elseif('hot_reply' == $this->Get['type']) $hot_reply = 'current';
		elseif('hot_forward' == $this->Get['type']) $hot_forward = 'current';
		else $main_class = 'current'; ?>
<span class="<?php echo $main_class; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>"><?php echo $_my; ?>的微博</a></span>
		<span class="<?php echo $hot_reply; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=hot_reply">本月热评</a></span>
		<span class="<?php echo $hot_forward; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=hot_forward">本月热转</a></span>
		<span class="<?php echo $verify; ?>"><a href="index.php?mod=<?php echo $member['username']; ?>&type=my_verify">等待审核</a></span>
		</li>
		
<?php } ?>
<?php echo $this->hookall_temp['global_index_extra2']; ?>
	   </div>
	   </div>
		
	 <div id="ajax_reminded"></div>
	
	 <div id="listTopicMsgArea"></div>
      <div id="listTopicArea">
	  	<!--微博列表 Begin--><div class="Listmain">
	<div class="mBlog_linedot"></div>
          
<?php if($topic_list) { ?>
		  
<?php if('favoritemy'==$this->Code) { ?>
			
				<!--收藏我的列表 Begin-->
<?php if(is_array($topic_list)) { foreach($topic_list as $val) { ?>
<?php $counts++; ?>
<script type="text/javascript">
						$(document).ready(function(){
							var objStr = "#topic_lists_<?php echo $val['tid']; ?>";
							$(objStr).mouseover(function(){$(objStr + " i").show();});
							$(objStr).mouseout(function(){$(objStr + " i").hide();});
						});
					</script>
					<div class="feedCell" id="topic_list_<?php echo $val['tid']; ?>"><div class="avatar">
	<a href="index.php?mod=<?php echo $favorite_members[$val['fuid']]['username']; ?>">
		<img onerror="javascript:faceError(this);" src="<?php echo $favorite_members[$val['fuid']]['face']; ?>" />
	</a>
</div>
<div class="Contant">
	<div id="topic_lists_<?php echo $val['tid']; ?>" style="_overflow:hidden;">
		<div class="oriTxt">
			<p>
				<a title="<?php echo $val['username']; ?>" href="index.php?mod=<?php echo $favorite_members[$val['fuid']]['username']; ?>">		 										<?php echo $favorite_members[$val['fuid']]['nickname']; ?>
				</a>
				<?php echo $favorite_members[$val['fuid']]['validate_html']; ?>：
				<span style="color:#666; font-size:12px;">收藏于<?php echo $val['favorite_time']; ?></span>
			</p>
			<span>
			<a href="index.php?mod=<?php echo $val['username']; ?>">
			  <?php echo $val['nickname']; ?>
			</a><?php echo $val['validate_html']; ?>:<?php echo $val['content']; ?>
			</span>
<?php if($val['attachid'] && $val['attach_list']) { ?>
<?php $val['attach_key']=$val['tid'].'_'.mt_rand(); ?>
<ul class="attachList" id="attach_area_<?php echo $val['attach_key']; ?>">
<?php if(is_array($val['attach_list'])) { foreach($val['attach_list'] as $iv) { ?>
	<li><img src="<?php echo $iv['attach_img']; ?>" class="attachList_img" />
	<div class="attachList_att">
	<p class="attachList_att_name"><b><?php echo $iv['attach_name']; ?></b>
	&nbsp;（<?php echo $iv['attach_size']; ?>）</p>
	<p class="attachList_att_doc"><a href="javascript:void(0);"
		onclick="downattach(<?php echo $iv['id']; ?>);">点此下载</a>（需<?php echo $iv['attach_score']; ?>积分，已下载<?php echo $iv['attach_down']; ?>次）</p>
	</div>
	</li>
	
<?php } } ?>
</ul>
<?php } ?>

<?php if($val['imageid'] && $val['image_list']) { ?>
<?php $val['image_key']=$val['tid'].'_'.mt_rand(); ?>
<ul class="imgList" id="image_area_<?php echo $val['image_key']; ?>">
<?php if(is_array($val['image_list'])) { foreach($val['image_list'] as $iv) { ?>
	<li><a href="<?php echo $iv['image_original']; ?>" class="artZoomAll"
		rel="<?php echo $iv['image_small']; ?>" rev="<?php echo $val['image_key']; ?>"><img
		src="<?php echo $iv['image_small']; ?>" /></a>
	<div class="artZoomBox" style="display: none;">
	<div class="tool"><a title="向右转" href="#" class="imgRight">向右转</a><a
		title="向左转" href="#" class="imgLeft">向左转</a><a title="查看原图"
		href="<?php echo $iv['image_original']; ?>" class="viewImg">查看原图</a></div>
	<a class="maxImgLinkAll" href="<?php echo $iv['image_original']; ?>"> <img
     src="<?php echo $iv['image_original']; ?>" class="maxImg"></a></div>
	</li>
	
<?php } } ?>
</ul>
<?php } ?>
<!--style="width:<?php echo $this->Config['thumbwidth']; ?>px; height:<?php echo $this->Config['thumbheight']; ?>px;"-->

<!--投票 Begin-->
<?php if($val['is_vote'] > 0) { ?>
<?php $val['vote_key']=$val['tid'].'_'.$val['random'] ?>
<ul class="imgList" id="vote_detail_<?php echo $val['vote_key']; ?>">
	<li><a href="javascript:;"
		onclick="getVoteDetailWidgets('<?php echo $val['vote_key']; ?>', <?php echo $val['is_vote']; ?>);"><img
		src='./images/vote_pic_01.gif' /></a></li>
</ul>
<div id="vote_area_<?php echo $val['vote_key']; ?>" style="display: none;">
<div class="blogTxt">
<div class="top"></div>
<div class="mid" id="vote_content_<?php echo $val['vote_key']; ?>"></div>
<div class="bottom"></div>
</div>
</div>
<?php } ?>
<!--投票 End-->
<?php if($val['videoid'] and $this->Config['video_status']) { ?>
<div class="feedUservideo"><a
	onClick="javascript:showFlash('<?php echo $val['VideoHosts']; ?>', '<?php echo $val['VideoLink']; ?>', this, '<?php echo $val['VideoID']; ?>','<?php echo $val['VideoUrl']; ?>');">
<div id="play_<?php echo $val['VideoID']; ?>" class="vP"><img
	src="images/feedvideoplay.gif" /></div>
<img src="<?php echo $val['VideoImg']; ?>" style="border: none" /> </a></div>
<?php } ?>

<?php if($val['musicid']) { ?>
<?php if($val['xiami_id']) { ?>
<div class="feedUserImg"><embed width="257" height="33"
	wmode="transparent" type="application/x-shockwave-flash"
	src="http://www.xiami.com/widget/0_<?php echo $val['xiami_id']; ?>/singlePlayer.swf"></embed></div>
<?php } else { ?><div class="feedUserImg">
<div id="play_<?php echo $val['MusicID']; ?>"></div>
<img src="images/music.gif" title="点击播放音乐"
	onClick="javascript:showFlash('music', '<?php echo $val['MusicUrl']; ?>', this, '<?php echo $val['MusicID']; ?>');"
	style="cursor: pointer; border: none;" /></div>
<?php } ?>
<?php } ?><script type="text/javascript"> var __TOPIC_VIEW__ = '<?php echo $topic_view; ?>'; </script>
<?php if(($tpid=$val['top_parent_id'])>0 && !in_array($this->Code, array('forward', 'reply'))) { ?>
<?php if(('mycomment'==$this->Code || $topic_view) && 'reply'==$val['type'] && $tpid!=($pid=$val['parent_id']) && $parent_list[$pid]) { ?>
<p class="feedP">回复{<a
	href="index.php?mod=<?php echo $parent_list[$pid]['username']; ?>"><?php echo $parent_list[$pid]['nickname']; ?>：</a><span><?php echo $parent_list[$pid]['content']; ?></span>}</p>
<?php } ?>

<?php if(!$topic_view) { ?>
<?php $pt=$parent_list[$tpid]; ?>
<div class="blogTxt">
<div class="top"></div>
<div class="mid">
<?php if($pt) { ?>
 <span> <a
	href="index.php?mod=<?php echo $pt['username']; ?>"
	onmouseover="get_user_choose(<?php echo $pt['uid']; ?>,'_reply_user',<?php echo $val['tid']; ?>);"
	onmouseout="clear_user_choose();"> <?php echo $pt['nickname']; ?> </a>
<?php echo $pt['validate_html']; ?> : <!--悬浮头像、弹出对话框--> <span
	id="user_<?php echo $val['tid']; ?>_reply_user"></span> <!--悬浮头像、弹出对话框--> </span> 
<?php $TPT_ = $TPT_ ? $TPT_ : 'TPT_'; ?>
<span id="topic_content_<?php echo $TPT_; ?><?php echo $pt['tid']; ?>_short"><?php echo $pt['content']; ?></span> <span
	id="topic_content_<?php echo $TPT_; ?><?php echo $pt['tid']; ?>_full"></span> 
<?php if($pt['longtextid'] > 0) { ?>
<span> <a href="javascript:;"
	onclick="view_longtext('<?php echo $pt['longtextid']; ?>', '<?php echo $pt['tid']; ?>', this, '<?php echo $TPT_; ?>', '<?php echo $val['tid']; ?>');return false;">查看全文</a>
</span> 
<?php } ?>
 
<?php if($pt['attachid'] && $pt['attach_list']) { ?>
<table class="attachst" style="width:440px;">
<?php if(is_array($pt['attach_list'])) { foreach($pt['attach_list'] as $iv) { ?>
	<tr>
		<td class="attachst_img"><img src="<?php echo $iv['attach_img']; ?>" /></td>
		<td class="attachst_att">
		<p class="attachList_att_name"><b><?php echo $iv['attach_name']; ?></b>&nbsp;（<?php echo $iv['attach_size']; ?>）</p>
		<p class="attachList_att_doc"><a href="javascript:void(0);"
		onclick="downattach(<?php echo $iv['id']; ?>);">点此下载</a>（需<?php echo $iv['attach_score']; ?>积分，已下载<?php echo $iv['attach_down']; ?>次）</p>

		</td>
	</tr>
	
<?php } } ?>
</table>
<?php } ?>
 
<?php if($pt['imageid'] && $pt['image_list']) { ?>
 
<?php $pt['image_key']=$pt['tid'].'_'.mt_rand(); ?>
<ul class="imgList" id="image_area_<?php echo $pt['image_key']; ?>">
<?php if(is_array($pt['image_list'])) { foreach($pt['image_list'] as $iv) { ?>
	<li><a href="<?php echo $iv['image_original']; ?>" class="artZoomAll"
		rel="<?php echo $iv['image_small']; ?>" rev="<?php echo $pt['image_key']; ?>"><img
		src="<?php echo $iv['image_small']; ?>" /></a>
	<div class="artZoomBox" style="display:none;">
	<div class="tool"><a title="向右转" href="#" class="imgRight">向右转</a><a
		title="向左转" href="#" class="imgLeft">向左转</a><a title="查看原图"
		href="<?php echo $iv['image_original']; ?>" class="viewImg">查看原图</a></div>
	<a class="maxImgLinkAll" href="<?php echo $iv['image_original']; ?>"> <img src="<?php echo $iv['image_original']; ?>" class="maxImg"></a></div>
	</li>
	
<?php } } ?>
</ul>
<?php } ?>
 <!--style="width:<?php echo $this->Config['thumbwidth']; ?>px; height:<?php echo $this->Config['thumbheight']; ?>px;"-->

<!--投票 Begin--> 
<?php if($pt['is_vote'] > 0) { ?>
 
<?php $__vote_key = $pt['tid'].'_'.$pt['random'] ?>
<ul class="imgList" id="vote_detail_<?php echo $__vote_key; ?>">
<li><a href="javascript:;" onclick="getVoteDetailWidgets('<?php echo $__vote_key; ?>', <?php echo $pt['is_vote']; ?>);"><img src='./images/vote_pic_01.gif' /></a></li>
</ul>
<div id="vote_area_<?php echo $__vote_key; ?>" style="display: none;">
<div class="vote_zf_box" id="vote_content_<?php echo $__vote_key; ?>"></div>
</div>
<?php } ?>
 <!--投票 End--> 
<?php if($pt['videoid'] and $this->Config['video_status']) { ?>
<div class="feedUservideo">
<a onClick="javascript:showFlash('<?php echo $pt['VideoHosts']; ?>', '<?php echo $pt['VideoLink']; ?>', this, '<?php echo $pt['VideoID']; ?>','<?php echo $pt['VideoUrl']; ?>');">
<div id="play_<?php echo $pt['VideoID']; ?>" class="vP"><img src="images/feedvideoplay.gif" /></div>
<img src="<?php echo $pt['VideoImg']; ?>" style="border: none" /> </a></div>
<?php } ?>
 
<?php if($pt['musicid']) { ?>
 
<?php if($pt['xiami_id']) { ?>
<div class="feedUserImg">
<embed width="257" height="33" wmode="transparent" type="application/x-shockwave-flash" src="http://www.xiami.com/widget/0_<?php echo $pt['xiami_id']; ?>/singlePlayer.swf"></embed></div>
<?php } else { ?><div class="feedUserImg">
<div id="play_<?php echo $pt['MusicID']; ?>"></div>
<img src="images/music.gif" title="点击播放音乐" onClick="javascript:showFlash('music', '<?php echo $pt['MusicUrl']; ?>', this, '<?php echo $pt['MusicID']; ?>');" style="cursor: pointer; border: none;" /></div>
<?php } ?>
 
<?php } ?>
<div style="width:400px; float:left; padding:5px 0; margin:0;">
<a href="index.php?mod=topic&code=<?php echo $tpid; ?>" target="_blank">原文评论(<?php echo $pt['replys']; ?>)</a>&nbsp;
<a onclick="get_forward_choose(<?php echo $tpid; ?>);return false;"href="index.php?mod=topic&code=<?php echo $tpid; ?>" target="_blank">转发原文(<?php echo $pt['forwards']; ?>)</a>&nbsp;
<?php echo $pt['from_html']; ?></div>
<?php } else { ?> 
<?php $val['reply_disable']=0; ?>
<p><span>原始微博已删除</span></p>
<?php } ?>
</div>
<div class="bottom"></div>
</div>
<?php } ?>
<?php } ?>
		</div>

		<div class="from">
			<span class="option"></span> 
			<span class="mycome"></span> 
		</div>
	</div>
	<div id="reply_area_<?php echo $val['tid']; ?>"></div>
	<!--编辑微博-->
	<div id="modify_topic_<?php echo $val['tid']; ?>"></div>
	<!--编辑微博-->
</div>
<div class="mBlog_linedot"></div>	
					</div>
				
<?php } } ?>
  		<!--收藏我的列表 End-->
		  
          
<?php } else { ?>  	<!--微博列表 Begin-->
<?php if($this->Code=='bbs' || $this->Code=='cms') { ?>
					<script type="text/javascript">
					function item_longtext(pidval){
					var full_id = 'c_' + pidval + '_full';
					var short_id = 'c_' + pidval + '_short';
					var link_id = 'linktext_' + pidval;
					if (document.getElementById(full_id).style.display == 'none'){
					document.getElementById(full_id).style.display = 'block';
					document.getElementById(short_id).style.display = 'none';
					document.getElementById(link_id).innerHTML = '收起全文';
					}else{
					document.getElementById(full_id).style.display = 'none';
					document.getElementById(short_id).style.display = 'block';
					document.getElementById(link_id).innerHTML = '查看全文';
					}
					}
					</script>
				
<?php } ?>
<?php if(is_array($topic_list)) { foreach($topic_list as $val) { ?>
<?php $counts++; ?>
<div class="feedCell" id="topic_list_<?php echo $val['tid']; ?>">
<?php if($this->Config['ad_enable']) { ?>
<?php if($counts == 3 && $this->Config['ad']['ad_list']['group_myhome']['middle_center']) { ?>
							<div class="L_AD"><?php echo $this->Config['ad']['ad_list']['group_myhome']['middle_center']; ?></div>
						
<?php } ?>

<?php if($counts == 10 && $this->Config['ad']['ad_list']['group_myhome']['middle_center1']) { ?>
							<div class="L_AD"><?php echo $this->Config['ad']['ad_list']['group_myhome']['middle_center1']; ?></div>
						
<?php } ?>
<?php } ?>
<?php if($this->Code=='bbs') { ?>
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
<div class="mBlog_linedot"></div><?php } elseif($this->Code=='cms') { ?>
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
<?php } else { ?><div class="wb_l_face"><div class="avatar"><img src="<?php echo $val['face']; ?>" title="未在微博登录的网站用户" onerror="javascript:faceError(this);" /></div></div>
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
<?php } else { ?><span class="un"><a title="未在微博登录的网站用户" href="javascript:;" ><?php echo $val['nickname']; ?></a></span>
			
<?php } ?>
<span class="ut"><a href="<?php echo $val['cmsurl']; ?>" target="_blank"><?php echo $val['dateline']; ?></a></span>
			</p>
<?php if($val['title']) { ?>
			<p>〖<?php echo $val['title']; ?>〗</p>
			
<?php } ?>
<span id="c_<?php echo $val['pid']; ?>_short"><?php echo $val['content']; ?></span>
			<span id="c_<?php echo $val['pid']; ?>_full" style="display:none;"><?php echo $val['content_full']; ?></span>
<?php if($val['longtext']) { ?>
				<span>
				<a id="linktext_<?php echo $val['pid']; ?>" href="javascript:;" onclick="item_longtext('<?php echo $val['pid']; ?>');return false;">查看全文</a>
				</span>
			
<?php } ?>
<div class="from"><div class="option"><ul><li><span>
<?php if($val['replys']) { ?>
			<a id="topic_list_reply_<?php echo $val['tid']; ?>_aid" href="javascript:void(0)" onclick="replyTopic(<?php echo $val['tid']; ?>,'reply_area_<?php echo $val['tid']; ?>','<?php echo $val['replys']; ?>',0,0,{item:'cms'});return false;">评论 (<?php echo $val['replys']; ?>)</a></span></li><li><span><a href="<?php echo $val['replyurl']; ?>" target="_blank"><?php echo $val['replytime']; ?></a>
<?php } else { ?>评论 (<?php echo $val['replys']; ?>)&nbsp;&nbsp;</span></li><li><span><?php echo $val['replytime']; ?>
			
<?php } ?>
</span></li></ul></div><div class="mycome">来自<a href="<?php echo $val['typeurl']; ?>" target="_blank">网站 - <?php echo $val['typetitle']; ?></a></div></div>
		</div>
	</div>
	<div id="reply_area_<?php echo $val['tid']; ?>"></div>
</div>
<div class="mBlog_linedot"></div>
<?php } else { ?>
<?php $talkanswerid = ''; ?>

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
<div class="Contant">
	<div id="topic_lists_<?php echo $val['tid']; ?>" style="_overflow:hidden">
		<div class="oriTxt">
<?php if('myfavorite'==$this->Code && $val['favorite_time']) { ?>
				<p style="color:#666; font-size:12px;">收藏于：<?php echo $val['favorite_time']; ?></p>
			
<?php } ?>
  
			<p class="utitle">
				<!--个人签名文件--><span class="un">
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
				<!--个人签名文件-->
				<span class="ut"><a href="index.php?mod=topic&code=<?php echo $val['tid']; ?>" target="_blank"><?php echo $val['dateline']; ?> </a></span>
			</p>
			<span id="topic_content_<?php echo $val['tid']; ?>_short"><?php echo $val['content']; ?></span>
			<span id="topic_content_<?php echo $val['tid']; ?>_full"></span>
<?php if($val['longtextid'] > 0) { ?>
				<span>
				<a href="javascript:;" onclick="view_longtext('<?php echo $val['longtextid']; ?>', '<?php echo $val['tid']; ?>', this);return false;">查看全文</a>
				</span>
			
<?php } ?>
<?php if($val['attachid'] && $val['attach_list']) { ?>
<?php $val['attach_key']=$val['tid'].'_'.mt_rand(); ?>
<ul class="attachList" id="attach_area_<?php echo $val['attach_key']; ?>">
<?php if(is_array($val['attach_list'])) { foreach($val['attach_list'] as $iv) { ?>
	<li><img src="<?php echo $iv['attach_img']; ?>" class="attachList_img" />
	<div class="attachList_att">
	<p class="attachList_att_name"><b><?php echo $iv['attach_name']; ?></b>
	&nbsp;（<?php echo $iv['attach_size']; ?>）</p>
	<p class="attachList_att_doc"><a href="javascript:void(0);"
		onclick="downattach(<?php echo $iv['id']; ?>);">点此下载</a>（需<?php echo $iv['attach_score']; ?>积分，已下载<?php echo $iv['attach_down']; ?>次）</p>
	</div>
	</li>
	
<?php } } ?>
</ul>
<?php } ?>

<?php if($val['imageid'] && $val['image_list']) { ?>
<?php $val['image_key']=$val['tid'].'_'.mt_rand(); ?>
<ul class="imgList" id="image_area_<?php echo $val['image_key']; ?>">
<?php if(is_array($val['image_list'])) { foreach($val['image_list'] as $iv) { ?>
	<li><a href="<?php echo $iv['image_original']; ?>" class="artZoomAll"
		rel="<?php echo $iv['image_small']; ?>" rev="<?php echo $val['image_key']; ?>"><img
		src="<?php echo $iv['image_small']; ?>" /></a>
	<div class="artZoomBox" style="display: none;">
	<div class="tool"><a title="向右转" href="#" class="imgRight">向右转</a><a
		title="向左转" href="#" class="imgLeft">向左转</a><a title="查看原图"
		href="<?php echo $iv['image_original']; ?>" class="viewImg">查看原图</a></div>
	<a class="maxImgLinkAll" href="<?php echo $iv['image_original']; ?>"> <img
     src="<?php echo $iv['image_original']; ?>" class="maxImg"></a></div>
	</li>
	
<?php } } ?>
</ul>
<?php } ?>
<!--style="width:<?php echo $this->Config['thumbwidth']; ?>px; height:<?php echo $this->Config['thumbheight']; ?>px;"-->

<!--投票 Begin-->
<?php if($val['is_vote'] > 0) { ?>
<?php $val['vote_key']=$val['tid'].'_'.$val['random'] ?>
<ul class="imgList" id="vote_detail_<?php echo $val['vote_key']; ?>">
	<li><a href="javascript:;"
		onclick="getVoteDetailWidgets('<?php echo $val['vote_key']; ?>', <?php echo $val['is_vote']; ?>);"><img
		src='./images/vote_pic_01.gif' /></a></li>
</ul>
<div id="vote_area_<?php echo $val['vote_key']; ?>" style="display: none;">
<div class="blogTxt">
<div class="top"></div>
<div class="mid" id="vote_content_<?php echo $val['vote_key']; ?>"></div>
<div class="bottom"></div>
</div>
</div>
<?php } ?>
<!--投票 End-->
<?php if($val['videoid'] and $this->Config['video_status']) { ?>
<div class="feedUservideo"><a
	onClick="javascript:showFlash('<?php echo $val['VideoHosts']; ?>', '<?php echo $val['VideoLink']; ?>', this, '<?php echo $val['VideoID']; ?>','<?php echo $val['VideoUrl']; ?>');">
<div id="play_<?php echo $val['VideoID']; ?>" class="vP"><img
	src="images/feedvideoplay.gif" /></div>
<img src="<?php echo $val['VideoImg']; ?>" style="border: none" /> </a></div>
<?php } ?>

<?php if($val['musicid']) { ?>
<?php if($val['xiami_id']) { ?>
<div class="feedUserImg"><embed width="257" height="33"
	wmode="transparent" type="application/x-shockwave-flash"
	src="http://www.xiami.com/widget/0_<?php echo $val['xiami_id']; ?>/singlePlayer.swf"></embed></div>
<?php } else { ?><div class="feedUserImg">
<div id="play_<?php echo $val['MusicID']; ?>"></div>
<img src="images/music.gif" title="点击播放音乐"
	onClick="javascript:showFlash('music', '<?php echo $val['MusicUrl']; ?>', this, '<?php echo $val['MusicID']; ?>');"
	style="cursor: pointer; border: none;" /></div>
<?php } ?>
<?php } ?><script type="text/javascript"> var __TOPIC_VIEW__ = '<?php echo $topic_view; ?>'; </script>
<?php if(($tpid=$val['top_parent_id'])>0 && !in_array($this->Code, array('forward', 'reply'))) { ?>
<?php if(('mycomment'==$this->Code || $topic_view) && 'reply'==$val['type'] && $tpid!=($pid=$val['parent_id']) && $parent_list[$pid]) { ?>
<p class="feedP">回复{<a
	href="index.php?mod=<?php echo $parent_list[$pid]['username']; ?>"><?php echo $parent_list[$pid]['nickname']; ?>：</a><span><?php echo $parent_list[$pid]['content']; ?></span>}</p>
<?php } ?>

<?php if(!$topic_view) { ?>
<?php $pt=$parent_list[$tpid]; ?>
<div class="blogTxt">
<div class="top"></div>
<div class="mid">
<?php if($pt) { ?>
 <span> <a
	href="index.php?mod=<?php echo $pt['username']; ?>"
	onmouseover="get_user_choose(<?php echo $pt['uid']; ?>,'_reply_user',<?php echo $val['tid']; ?>);"
	onmouseout="clear_user_choose();"> <?php echo $pt['nickname']; ?> </a>
<?php echo $pt['validate_html']; ?> : <!--悬浮头像、弹出对话框--> <span
	id="user_<?php echo $val['tid']; ?>_reply_user"></span> <!--悬浮头像、弹出对话框--> </span> 
<?php $TPT_ = $TPT_ ? $TPT_ : 'TPT_'; ?>
<span id="topic_content_<?php echo $TPT_; ?><?php echo $pt['tid']; ?>_short"><?php echo $pt['content']; ?></span> <span
	id="topic_content_<?php echo $TPT_; ?><?php echo $pt['tid']; ?>_full"></span> 
<?php if($pt['longtextid'] > 0) { ?>
<span> <a href="javascript:;"
	onclick="view_longtext('<?php echo $pt['longtextid']; ?>', '<?php echo $pt['tid']; ?>', this, '<?php echo $TPT_; ?>', '<?php echo $val['tid']; ?>');return false;">查看全文</a>
</span> 
<?php } ?>
 
<?php if($pt['attachid'] && $pt['attach_list']) { ?>
<table class="attachst" style="width:440px;">
<?php if(is_array($pt['attach_list'])) { foreach($pt['attach_list'] as $iv) { ?>
	<tr>
		<td class="attachst_img"><img src="<?php echo $iv['attach_img']; ?>" /></td>
		<td class="attachst_att">
		<p class="attachList_att_name"><b><?php echo $iv['attach_name']; ?></b>&nbsp;（<?php echo $iv['attach_size']; ?>）</p>
		<p class="attachList_att_doc"><a href="javascript:void(0);"
		onclick="downattach(<?php echo $iv['id']; ?>);">点此下载</a>（需<?php echo $iv['attach_score']; ?>积分，已下载<?php echo $iv['attach_down']; ?>次）</p>

		</td>
	</tr>
	
<?php } } ?>
</table>
<?php } ?>
 
<?php if($pt['imageid'] && $pt['image_list']) { ?>
 
<?php $pt['image_key']=$pt['tid'].'_'.mt_rand(); ?>
<ul class="imgList" id="image_area_<?php echo $pt['image_key']; ?>">
<?php if(is_array($pt['image_list'])) { foreach($pt['image_list'] as $iv) { ?>
	<li><a href="<?php echo $iv['image_original']; ?>" class="artZoomAll"
		rel="<?php echo $iv['image_small']; ?>" rev="<?php echo $pt['image_key']; ?>"><img
		src="<?php echo $iv['image_small']; ?>" /></a>
	<div class="artZoomBox" style="display:none;">
	<div class="tool"><a title="向右转" href="#" class="imgRight">向右转</a><a
		title="向左转" href="#" class="imgLeft">向左转</a><a title="查看原图"
		href="<?php echo $iv['image_original']; ?>" class="viewImg">查看原图</a></div>
	<a class="maxImgLinkAll" href="<?php echo $iv['image_original']; ?>"> <img src="<?php echo $iv['image_original']; ?>" class="maxImg"></a></div>
	</li>
	
<?php } } ?>
</ul>
<?php } ?>
 <!--style="width:<?php echo $this->Config['thumbwidth']; ?>px; height:<?php echo $this->Config['thumbheight']; ?>px;"-->

<!--投票 Begin--> 
<?php if($pt['is_vote'] > 0) { ?>
 
<?php $__vote_key = $pt['tid'].'_'.$pt['random'] ?>
<ul class="imgList" id="vote_detail_<?php echo $__vote_key; ?>">
<li><a href="javascript:;" onclick="getVoteDetailWidgets('<?php echo $__vote_key; ?>', <?php echo $pt['is_vote']; ?>);"><img src='./images/vote_pic_01.gif' /></a></li>
</ul>
<div id="vote_area_<?php echo $__vote_key; ?>" style="display: none;">
<div class="vote_zf_box" id="vote_content_<?php echo $__vote_key; ?>"></div>
</div>
<?php } ?>
 <!--投票 End--> 
<?php if($pt['videoid'] and $this->Config['video_status']) { ?>
<div class="feedUservideo">
<a onClick="javascript:showFlash('<?php echo $pt['VideoHosts']; ?>', '<?php echo $pt['VideoLink']; ?>', this, '<?php echo $pt['VideoID']; ?>','<?php echo $pt['VideoUrl']; ?>');">
<div id="play_<?php echo $pt['VideoID']; ?>" class="vP"><img src="images/feedvideoplay.gif" /></div>
<img src="<?php echo $pt['VideoImg']; ?>" style="border: none" /> </a></div>
<?php } ?>
 
<?php if($pt['musicid']) { ?>
 
<?php if($pt['xiami_id']) { ?>
<div class="feedUserImg">
<embed width="257" height="33" wmode="transparent" type="application/x-shockwave-flash" src="http://www.xiami.com/widget/0_<?php echo $pt['xiami_id']; ?>/singlePlayer.swf"></embed></div>
<?php } else { ?><div class="feedUserImg">
<div id="play_<?php echo $pt['MusicID']; ?>"></div>
<img src="images/music.gif" title="点击播放音乐" onClick="javascript:showFlash('music', '<?php echo $pt['MusicUrl']; ?>', this, '<?php echo $pt['MusicID']; ?>');" style="cursor: pointer; border: none;" /></div>
<?php } ?>
 
<?php } ?>
<div style="width:400px; float:left; padding:5px 0; margin:0;">
<a href="index.php?mod=topic&code=<?php echo $tpid; ?>" target="_blank">原文评论(<?php echo $pt['replys']; ?>)</a>&nbsp;
<a onclick="get_forward_choose(<?php echo $tpid; ?>);return false;"href="index.php?mod=topic&code=<?php echo $tpid; ?>" target="_blank">转发原文(<?php echo $pt['forwards']; ?>)</a>&nbsp;
<?php echo $pt['from_html']; ?></div>
<?php } else { ?> 
<?php $val['reply_disable']=0; ?>
<p><span>原始微博已删除</span></p>
<?php } ?>
</div>
<div class="bottom"></div>
</div>
<?php } ?>
<?php } ?>
<?php if($this->Module=='qun') { ?>
              <script type="text/javascript">
$(document).ready(function(){
var objStr1 = "#topic_lists_<?php echo $val['tid']; ?>_a";
var objStr2 = "#topic_lists_<?php echo $val['tid']; ?>_b";
$(objStr1).mouseover(function(){$(objStr2).show();});
$(objStr1).mouseout(function(){$(objStr2).hide();});
});
</script>
<?php if($this->Config['qun_attach_enable']) $allow_attach = 1; else $allow_attach = 0  ?>
<div class="from"> 
<div class="option"> 
<ul>
<?php if(MEMBER_ID>0) { ?>
<li>
<!--转发的判断 Begin-->
<?php if($val['managetype'] != 2) { ?>
<span>
<a href="javascript:void(0);" onclick="
<?php if($allow_list_manage) { ?>
get_forward_choose(<?php echo $val['tid']; ?>,<?php echo $allow_attach; ?>, {appitem:'<?php echo $val['item']; ?>', appitem_id:'<?php echo $val['item_id']; ?>',noReply:1});
<?php } else { ?>get_forward_choose(<?php echo $val['tid']; ?>,<?php echo $allow_attach; ?>);
<?php } ?>
" style="cursor:pointer;">转发
<?php if($val['forwards']) { ?>
(<?php echo $val['forwards']; ?>)
<?php } ?>
</a>
	 </span>
	 
<?php } else { ?> <span title="设置了特殊的权限，不允许转发">转发</span>
	 
<?php } ?>
<!--转发的判断 End-->
</li>
<li class="o_line_l">|</li>

<li>
<?php if(!$val['reply_disable'] && $val['managetype'] != 2) { ?>
<span>
<a href="javascript:void(0)" onclick="
<?php if($allow_list_manage) { ?>
replyTopic(<?php echo $val['tid']; ?>,'reply_area_<?php echo $val['tid']; ?>','<?php echo $val['replys']; ?>',1,<?php echo $allow_attach; ?>,{appitem:'<?php echo $val['item']; ?>', appitem_id:'<?php echo $val['item_id']; ?>'});
<?php } else { ?>replyTopic(<?php echo $val['tid']; ?>,'reply_area_<?php echo $val['tid']; ?>','<?php echo $val['replys']; ?>',0,<?php echo $allow_attach; ?>);
<?php } ?>
return false;">评论
<?php if($val['replys']) { ?>
(<?php echo $val['replys']; ?>)
<?php } ?>
</a>
</span>
<?php } else { ?><span>评论</span>
<?php } ?>
</li>

<li class="o_line_l">|</li>
<li id="topic_lists_<?php echo $val['tid']; ?>_a" class="mobox"><a href="javascript:void(0)" class="moreti" ><span class="txt">更多</span><span class="more"></span></a> 
<div id="topic_lists_<?php echo $val['tid']; ?>_b" class="molist" style="display:none">
<?php if(MEMBER_ID>0) { ?>
<?php if('myfavorite'==$this->
Code) { ?>
 <span id="favorite_<?php echo $val['tid']; ?>"><a href="javascript:void(0)" onclick="favoriteTopic(<?php echo $val['tid']; ?>,'delete');return false;">取消收藏</a></span>
<?php } else { ?><span id="favorite_<?php echo $val['tid']; ?>"><a href="javascript:void(0)" onclick="favoriteTopic(<?php echo $val['tid']; ?>,'add');return false;">收藏</a></span> 
<?php } ?>
<?php } ?>
<?php if($this->Config['is_report'] || MEMBER_ID > 0) { ?>
<a href="javascript:void(0)" onclick="ReportBox('<?php echo $val['tid']; ?>')" title="举报不良信息">举报</a>
<?php } ?>

<?php if($val['uid']==MEMBER_ID || 'admin'==MEMBER_ROLE_TYPE) { ?>
<?php if($this->Code > 0  ||  in_array($this->Code,array('list_reply','do_add'))) $eid = 'reply_list'; else $eid = 'topic_list'  ?>
<a href="javascript:void(0)" onclick="deleteTopic(<?php echo $val['tid']; ?>,'<?php echo $eid; ?>_<?php echo $val['tid']; ?>');return false;">删除</a>
<?php $datetime = time(); $modify_time = $this->Config['topic_modify_time'] * 60 ?>
<?php if($datetime - $val['addtime'] < $modify_time || 'admin'==MEMBER_ROLE_TYPE ) { ?>
<?php if($val['replys'] <= 0 && $val['forwards'] <= 0 || 'admin'==MEMBER_ROLE_TYPE) { ?>
<a href="javascript:void(0);" onclick="modifyTopic(<?php echo $val['tid']; ?>,'modify_topic_<?php echo $val['tid']; ?>','<?php echo $eid; ?>',<?php echo $allow_attach; ?>);return false;" style="cursor:pointer;">编辑</a>
<?php } ?>
<?php } ?>
<!--推荐开始 Begin-->
		<a href="javascript:void(0)" onclick="showTopicRecdDialog({'tid':'<?php echo $val['tid']; ?>'});return false;">推荐</a>
	<!--推荐开始 End-->
<?php } ?>
</div>
</li>
<?php } ?>
</ul>
</div> 
<div class="mycome">
<?php if(!$no_from) { ?>
<?php echo $val['from_html']; ?>
<?php } ?>
</div> 
</div>
<?php } else { ?><script type="text/javascript">
$(document).ready(function(){
var objStr1 = "#<?php echo $talkanswerid; ?>topic_lists_<?php echo $val['tid']; ?>_a";
var objStr2 = "#<?php echo $talkanswerid; ?>topic_lists_<?php echo $val['tid']; ?>_b";
$(objStr1).mouseover(function(){$(objStr2).show();});
$(objStr1).mouseout(function(){$(objStr2).hide();});
});
</script>
<?php if($this->Config['attach_enable']) $allow_attach = 1; else $allow_attach = 0  ?>
<div class="from"> 
<div class="option">
<!--不是群内成员无法对群内的微博进行操作-->
<ul>
<?php if($this->Get['mod'] == 'talk' &&  $val['reply_ok']) { ?>
<li><span id="answer_<?php echo $val['tid']; ?>" class="talkreply" onclick="showMainPublishBox('answer','talk','<?php echo $talk['lid']; ?>','<?php echo $val['tid']; ?>','<?php echo $val['uid']; ?>');return false;">回答</span></li><li class="o_line_l">|</li>
<?php } ?>

<?php if($this->Get['type'] != 'my_verify') { ?>
<?php $tpid=$val['top_parent_id']; if ($tpid&&$parent_list[$tpid]) $root_type=$parent_list[$tpid]['type']; ?>
<?php if((!isset($root_type)) || (isset($root_type) && in_array($root_type, get_topic_type('forward')))) { ?>
	<li>
	  <!--转发的判断 Begin-->
	  
<?php if((in_array($val['type'], get_topic_type('forward')) || $this->Module=='qun') && $val['managetype'] != 2) { ?>
	  
<?php $not_allow_forward=0; ?>
<span 
<?php if(MEMBER_ID <1 ) { ?>
 onclick="ShowLoginDialog();" 
<?php } ?>
>
			<a href="javascript:void(0);" onclick="get_forward_choose(<?php echo $val['tid']; ?>,<?php echo $allow_attach; ?>);" style="cursor:pointer;">转发
<?php if($val['forwards']) { ?>
(<?php echo $val['forwards']; ?>)
<?php } ?>
</a>
		</span>
	 
<?php } else { ?> 
<?php $not_allow_forward=1; ?>
 
<?php if(isset($val['fansgroup'])) { ?>
	  <span><?php echo $val['fansgroup']; ?></span>
	 
<?php } else { ?> <span title="设置了特殊的权限，不允许转发">转发</span>
	 
<?php } ?>
 
<?php } ?>
 <!--转发的判断 End-->
	</li>
	<li class="o_line_l">|</li>
<?php } else { ?><?php $not_allow_forward=1; ?>
<?php } ?>
<li>
<?php if(!$val['reply_disable'] && $val['managetype'] != 2) { ?>
	<span>
		<a id="topic_list_reply_<?php echo $val['tid']; ?>_aid" href="javascript:void(0)" 
<?php if(MEMBER_ID <1 ) { ?>
 onclick="ShowLoginDialog();" 
<?php } ?>
 onclick="replyTopic(<?php echo $val['tid']; ?>,'<?php echo $talkanswerid; ?>reply_area_<?php echo $val['tid']; ?>','<?php echo $val['replys']; ?>',<?php echo $not_allow_forward; ?>,<?php echo $allow_attach; ?>);return false;">评论
<?php if($val['replys']) { ?>
(<?php echo $val['replys']; ?>)
<?php } ?>
</a>
		</span>
	 
<?php } else { ?> <span>评论</span>
	
<?php } ?>
</li>

	<li class="o_line_l">|</li>

	<li id="<?php echo $talkanswerid; ?>topic_lists_<?php echo $val['tid']; ?>_a" class="mobox">
		<a href="javascript:void(0)" class="moreti" ><span class="txt">更多</span><span class="more"></span></a> 
		<div id="<?php echo $talkanswerid; ?>topic_lists_<?php echo $val['tid']; ?>_b" class="molist" style="display:none">
<?php if('myfavorite'==$this->Code) { ?>
 
				<span id="favorite_<?php echo $val['tid']; ?>" 
<?php if(MEMBER_ID <1 ) { ?>
 onclick="ShowLoginDialog();" 
<?php } ?>
>
					<a href="javascript:void(0)" onclick="favoriteTopic(<?php echo $val['tid']; ?>,'delete');return false;">取消收藏</a>
				</span>
<?php } else { ?><span id="favorite_<?php echo $val['tid']; ?>" 
<?php if(MEMBER_ID < 1) { ?>
 onclick="ShowLoginDialog();" 
<?php } ?>
>
					<a href="javascript:void(0)" onclick="favoriteTopic(<?php echo $val['tid']; ?>,'add');return false;">收藏</a>
				</span> 
			
<?php } ?>
<?php if($this->Config['is_report'] || MEMBER_ID > 0) { ?>
			<span 
<?php if(MEMBER_ID <1 ) { ?>
 onclick="ShowLoginDialog();" 
<?php } ?>
><a href="javascript:void(0)" onclick="ReportBox('<?php echo $val['tid']; ?>')" title="举报不良信息">举报</a></span>
			
<?php } ?>
<?php if($val['uid']==MEMBER_ID || 'admin'==MEMBER_ROLE_TYPE) { ?>
<?php if($this->Code > 0  ||  in_array($this->Code,array('list_reply','do_add'))) $eid = 'reply_list'; else $eid = 'topic_list'  ?>
<a href="javascript:void(0)" onclick="deleteTopic(<?php echo $val['tid']; ?>,'<?php echo $eid; ?>_<?php echo $val['tid']; ?>');return false;">删除</a>
<?php $datetime = time(); $modify_time = $this->Config['topic_modify_time'] * 60 ?>
<?php if($datetime - $val['addtime'] < $modify_time || 'admin'==MEMBER_ROLE_TYPE ) { ?>
<?php if($val['replys'] <= 0 && $val['forwards'] <= 0 || 'admin'==MEMBER_ROLE_TYPE) { ?>
						<a href="javascript:void(0);" onclick="modifyTopic(<?php echo $val['tid']; ?>,'modify_topic_<?php echo $val['tid']; ?>','<?php echo $eid; ?>',<?php echo $allow_attach; ?>);return false;" style="cursor:pointer;">编辑</a>
					
<?php } ?>
<?php } ?>
<!--推荐开始 Begin-->
					<a href="javascript:void(0)" onclick="showTopicRecdDialog({'tid':'<?php echo $val['tid']; ?>','tag_id':'<?php echo $tag_id; ?>'});return false;">推荐</a>
				<!--推荐开始 End-->
				
			
<?php } ?>
<?php if('admin'==MEMBER_ROLE_TYPE) { ?>
			    <a onclick="force_out(<?php echo $val['uid']; ?>);" href="javascript:void(0);">封杀</a>
			    <a onclick="force_ip('<?php echo $val['postip']; ?>');" href="javascript:void(0);">封IP</a>
			
<?php } ?>
</div>
	</li>
<?php } else { ?><li id="topic_lists_<?php echo $val['id']; ?>_a" class="mobox">
<?php if($val['uid']==MEMBER_ID || 'admin'==MEMBER_ROLE_TYPE) { ?>
	  
<?php if($this->Code > 0  ||  in_array($this->Code,array('list_reply','do_add'))) $eid = 'reply_list'; else $eid = 'topic_list'  ?>
  <a href="javascript:void(0)" onclick="deleteVerify(<?php echo $val['id']; ?>,'<?php echo $eid; ?>_<?php echo $val['id']; ?>');return false;">删除</a>
	
<?php } ?>
</li>
<?php } ?>
</ul>
</div> 
<div class="mycome">
<!-- <a href="index.php?mod=topic&code=<?php echo $val['tid']; ?>"><?php echo $val['dateline']; ?></a>  -->
<?php if(!$no_from) { ?>
<?php echo $val['from_html']; ?>
<?php } ?>
<?php echo $this->hookall_temp['global_topiclist_extra3']; ?>
</div>
<?php echo $this->hookall_temp['global_topiclist_extra4']; ?>
</div>
			
<?php } ?>
</div>
	</div>
	<div id="reply_area_<?php echo $val['tid']; ?>"></div>
	<div id="modify_topic_<?php echo $val['tid']; ?>"></div>
	<div id="forward_menu_<?php echo $val['tid']; ?>" class="Fbox"></div>
</div>
<?php if(!$no_mBlog_linedot2) { ?>
	<div class="mBlog_linedot"></div>
<?php } ?>
					
<?php } ?>
</div>
		  	
<?php } } ?>
<!--微博列表 End-->
		
<?php } ?>
  
          
<?php if($page_arr['html']) { ?>
          <div class="pageStyle">
            <li><?php echo $page_arr['html']; ?></li>
          </div>
          
<?php } ?>
  
<?php } else { ?>
<?php if('bbs' == $this->Code || 'cms' == $this->Code) { ?>
	<br>暂时没有可显示的内容
<?php } else { ?><br>分类下暂时没有发布微博。
	
<?php } ?>
  	
<?php } ?>
  
		  
<?php if('groupview'== $this->Code && $counts <=0) { ?>
		   <BR />
			"<strong><?php echo $groupname; ?></strong>" 分组下的用户暂时没有发布微博。
		  
<?php } ?>
          
<?php if($counts <=5) { ?>
          <div id="topic_list_<?php echo $counts; ?>">
            
<?php if('myat'== $this->
            Code) { ?>
 <BR />
            这里会显示含有"@<?php echo MEMBER_NICKNAME; ?>"的微博。<BR />
            <BR />
            <span>@昵称 </span>技巧：注意昵称后面有“空格”，可以理解为向某人说，被@昵称 提到的人如果在系统中存在，那么TA就可在其个人首页“@提到我的”的栏目中看到你发布的内容。
            <?php } elseif('mycomment' == $this->
            Code) { ?> <BR />
            <BR />
            <BR />
            这里会显示他人对你微博所做的评论。<BR />
            <BR />
            <A HREF="index.php?mod=<?php echo $member['username']; ?>&code=fans" title="关注<?php echo $member['nickname']; ?>的">关注你的</A>人越多，就会有越多人参与你分享内容的讨论，尝试通过<A HREF="index.php?mod=profile&code=invite">邀请好友</A>来让更多人关注你；<BR /><?php } elseif('tocomment' == $this->Code) { ?> <BR />
            <BR />
            <BR />
            这里会显示你对他人微博所做的评论。<BR />
            <BR />
            <?php } elseif('myfavorite' == $this->
            Code) { ?> <BR />
            这里会显示你所收藏的微博。<BR />
            <BR />
            在登录状态下，每个微博的下方都有一个收藏连接，点击即可自动完成收藏，然后你就可以在这里看到了。你可以访问<A HREF="index.php?mod=topic&code=hot">热门微博</A>来发现有收藏价值的内容；<BR />
            <?php } elseif('favoritemy' == $this->
            Code) { ?> <BR />
            这里会显示谁收藏了你的微博。<BR />
            <BR />
            赶快分享些有价值的新鲜事吧，当有人收藏后，你就会在这里看到。<BR /><?php } elseif('myhome' == $this->Code ) { ?><BR /><BR />
			这里显示我和我关注人的微博。<BR /><BR />
			关注你喜欢的人，你就可以在这看到他们分享的内容，尝试通过<A HREF="index.php?mod=topic&code=top">达人榜</A>、<A HREF="index.php?mod=profile&code=search">找人</A>选择用户加关注；<BR /><?php } elseif('tag' == $this->Code ) { ?><BR /><BR />
			这里显示我关注话题的相关微博。<BR /><BR />
			对你感兴趣的话题进行关注，就可以在这里直接查看相关微博，还可以结识有共同话题的人，尝试通过<A HREF="index.php?mod=tag">话题榜</A> 选择话题关注；<BR /><?php } elseif('event' == $view ) { ?><BR />
			这里显示我关注活动的相关微博。<BR />
			对你感兴趣的活动进行关注，就可以在这里直接查看相关微博，还可以结识有共同话题的人。<BR /><?php } elseif('qun' == $this->Code ) { ?><BR /><BR />
			这里显示我加入的群相关的微博。<BR /><BR />
			加入你感兴趣的群，就可以在这里直接查看相关微博，还可以结识有共同话题的人。<a href="index.php?mod=qun" target="_blank">去群里逛逛吧~~</a><BR /><?php } elseif('recd' == $this->Code ) { ?><BR /><BR />
			这里显示推荐的微博。<BR /><BR /><?php } elseif('cms' == $this->Code ) { ?><BR /><BR />
			这里显示来自<a href="<?php echo $cms_url; ?>" target="_blank">网站资讯</a>的内容。<BR /><BR />
<?php if('admin'==MEMBER_ROLE_TYPE) { ?>
			前提条件是：微博必须整合了DedeCMS系统。<BR /><BR />
			
<?php } ?>
<?php } elseif('bbs' == $this->Code ) { ?><BR /><BR />
<?php if($this->Config['dzbbs_enable']) { ?>
			这里显示来自<a href="<?php echo $bbs_url; ?>" target="_blank">论坛</a>的帖子。<BR /><BR />
<?php if('admin'==MEMBER_ROLE_TYPE) { ?>
			前提条件是：微博必须整合了Ucenter系统和Discuz论坛。<BR /><BR />
			
<?php } ?>
<?php } elseif($this->Config['phpwind_enable']) { ?>这里显示来自<a href="<?php echo $bbs_url; ?>" target="_blank">论坛</a>的帖子。<BR /><BR />
<?php if('admin'==MEMBER_ROLE_TYPE) { ?>
			前提条件是：微博必须整合了PhpWind论坛，且同时开启了调用phpwind论坛帖子。<BR /><BR />
			
<?php } ?>
<?php } ?>
<?php } elseif('fenlei' == $view ) { ?><BR />
			这里显示我关注分类的相关微博。<BR />
			对你感兴趣的分类进行关注，就可以在这里直接查看相关微博。<BR />	
			
<?php } ?>
          </div>
          
<?php } ?>
        </div>
<?php echo $this->js_show_msg(); ?>
		<!--微博列表 End-->
      </div>
    </div>
  </div>
  <!--中间栏-->
  
  <!--页面右侧-->
  
<?php if($member['open_extra'] && '' == $this->Get['type']) { ?>
    <script language="javascript">
		var vote_open = '<?php echo $this->Config['vote_open']; ?>';
		
		$(document).ready(function(){
		//这里的函数可以随便更改位置，加载的顺序也会不同。
			get_validate_remark(); 
			get_validate_cement();
			get_validate_link();
			get_validate_video();
			if(vote_open){
				get_validate_vote();
			}
		});
	
		function get_validate_remark(){
			//认证 专题 简介
			right_show_ajax('<?php echo $member['uid']; ?>','validate_remark','remark_content','validate');
		}
	
		
		function get_validate_cement(){
			//认证 专题 公告
			right_show_ajax('<?php echo $member['uid']; ?>','validate_cement','cement_content','validate');
		}
		
		function get_validate_link(){
			//认证 专题 公告
			right_show_ajax('<?php echo $member['uid']; ?>','validate_link','link_content','validate');
		}
	
		
		function get_validate_video(){
			//认证 专题 视频
			right_show_ajax('<?php echo $member['uid']; ?>','validate_video','video_content','validate');
		}
		
		function get_validate_vote(){
			//认证 专题 投票
			right_show_ajax('<?php echo $member['uid']; ?>','validate_vote','vote_content','validate');
		}

</script>

<div>
  <div class="mainR">
    
	
    <!--用户认证 专题简介-->
    <script type="text/javascript">
			$(document).ready(function(){
			$(".SC_benzhouremen").click(function(){$(this).parent().toggleClass("fold_benzhouremen");$(".SC_benzhouremen_box").toggle();});
			});
	</script>
	<div id="<?php echo $member['uid']; ?>_remark_content"></div>
  
	
	<!--用户认证 专题 友情链接 -->
    <script type="text/javascript">
			$(document).ready(function(){
			$(".SC_benzhouremen").click(function(){$(this).parent().toggleClass("fold_benzhouremen");$(".SC_benzhouremen_box").toggle();});
			});
	</script>
	<div id="<?php echo $member['uid']; ?>_link_content"></div>
		
	
	<!--用户认证 专题 公告栏 -->
    <script type="text/javascript">
			$(document).ready(function(){
			$(".SC_benzhouremen").click(function(){$(this).parent().toggleClass("fold_benzhouremen");$(".SC_benzhouremen_box").toggle();});
			});
	</script>
	<div id="<?php echo $member['uid']; ?>_cement_content"></div>
	
	
	<!--用户认证 专题 视频 -->
    <script type="text/javascript">
			$(document).ready(function(){
			$(".SC_benzhouremen").click(function(){$(this).parent().toggleClass("fold_benzhouremen");$(".SC_benzhouremen_box").toggle();});
			});
	</script>
	<div id="<?php echo $member['uid']; ?>_video_content"></div>
	
	
	<!--用户认证 专题 投票 -->

	<div id="<?php echo $member['uid']; ?>_vote_content"></div>
	<div id="alert_follower_menu_<?php echo $member['uid']; ?>" style="display:none"></div>

  </div>
</div>
  
<?php } else { ?>    <!--我的首页 右侧导航-->
<div>
<div class="mainR">

<!--右侧顶部广告-->
<?php if($this->Config['ad_enable']) { ?>
  
<?php if('myhome'== $this->Code) { ?>
    
<?php if($this->Config['ad']['ad_list']['group_myhome']['middle_right']) { ?>
<div class="R_AD"> <?php echo $this->Config['ad']['ad_list']['group_myhome']['middle_right']; ?></div>	
<?php } ?>
  <?php } elseif('tag'== $this->Get['mod']) { ?>    
<?php if($this->Config['ad']['ad_list']['tag_view']['middle_right']) { ?>
<div class="R_AD"><?php echo $this->Config['ad']['ad_list']['tag_view']['middle_right']; ?></div>
<?php } ?>
  
<?php } ?>
<?php } ?>
<!--右侧顶部广告-->

<div id="topic_right_ajax_list"></div>

<?php echo $this->hookall_temp['global_usernav_extra2']; ?>
<?php if('pic' == $this->Get['type']) { ?>
  <script type="text/javascript">
	$(document).ready(function(){
		right_show_ajax('<?php echo $member['uid']; ?>','photo','photo');
	});
  </script>
  <div class="SC">
	<h3><span><a style="float:left;" href="index.php?mod=topic&code=photo&uid=<?php echo $member['uid']; ?>">关注人的图片</a></span></h3>
	<div id="<?php echo $member['uid']; ?>_photo"></div>
  </div><?php } elseif('my_reply' == $this->Get['type']) { ?>  <script type="text/javascript">
	$(document).ready(function(){
		right_show_ajax('<?php echo $member['uid']; ?>','mycomment_user','mycomment_user');
	});
  </script>
  <div class="SC">
	<h3>
<?php if($member['uid']==MEMBER_ID) { ?>
本周我常评论的人
<?php } else { ?>本周<?php echo $member['gender_ta']; ?>常评论的人
<?php } ?>
    <a class="btn SC_to_user_tag" href="javascript:void(0);"></a>
	</h3>
	  <ul class="FTL SC_to_user_tag_box">
		<div id="<?php echo $member['uid']; ?>_mycomment_user"></div>
	  </ul>
   </div><?php } elseif('video' == $this->Get['type']) { ?>  <script type="text/javascript">
	$(document).ready(function(){
		right_show_ajax('<?php echo $member['uid']; ?>','video_content','video_content');
	});
  </script>
  <div class="SC">
	<h3>
<?php if($member['uid']==MEMBER_ID) { ?>
我关注人的视频
<?php } else { ?><?php echo $member['gender_ta']; ?>关注人的视频
<?php } ?>
    <a class="btn SC_to_user_tag" href="javascript:void(0);"></a>
	</h3>
	  <ul class="FTL" id="<?php echo $member['uid']; ?>_video_content"></ul>
   </div><?php } elseif('music' == $this->Get['type']) { ?>  <script type="text/javascript">
	$(document).ready(function(){
		right_show_ajax('<?php echo $member['uid']; ?>','music_user','music_user');
	});
  </script>
  <div class="SC">
	<h3>本月音乐达人
	    <a class="btn SC_to_user_tag" href="javascript:void(0);"></a>
	</h3>
	  <ul class="FTL SC_to_user_tag_box">
		<div id="<?php echo $member['uid']; ?>_music_user"></div>
	  </ul>
   </div>
<?php } else { ?><!--认证资料-->
<?php if($member['vip_info']) { ?>
		<div class="SC S15">
			<div class="vipBox">
				
                <div class="ico_vData"><img src="images/vip_c2.png" /></div>
				<p class="vipBox_info"><?php echo $member['vip_info']; ?></p>
				<p class="vipBox_info" style="text-align:right;"><a href="index.php?mod=other&code=vip_intro">点击申请认证</a></p>
			</div>
		</div>
		
<?php } ?>
  
<?php if(MEMBER_ID != $member['uid']) { ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".SC_guanyu").click(function(){$(this).parent().toggleClass("fold_guanyu");$(".SC_guanyu_box").toggle();});
		});
	</script>
	<div class="SC">
		<h3>关于<?php echo $member['nickname']; ?><a class="btn SC_guanyu" href="javascript:void(0)"></a></h3>
		<ul class="FTL SC_guanyu_box">
<?php if($member['aboutme']) { ?>
			<li>&nbsp;<?php echo $member['aboutme']; ?></li><?php } elseif(MEMBER_ID==$member['uid'] && !$_GET['mod_original']) { ?><li><a href="index.php?mod=settings">快来写一句话</a>，向大家介绍一下吧</li>
<?php } else { ?>这家伙很懒，什么都没留下。
			
<?php } ?>
</ul>
	</div>
	
<?php } ?>
  
		
	<!--属于TA的标签-->

			  <script type="text/javascript">
				$(document).ready(function(){
					//属于他的标签
					get_to_user_tag();
					//他关注的人
					get_user_follow();
					//关注的话题
					get_Right3();
					
					$(".SC_to_user_tag").click(function(){$(this).parent().toggleClass("fold_to_user_tag");$(".SC_to_user_tag_box").toggle();});
					$(".SC_woguanzhu").click(function(){$(this).parent().toggleClass("fold_woguanzhu");$(".SC_woguanzhu_box").toggle();});
				});
				function get_to_user_tag(){
					//属于他的标签
					right_show_ajax('<?php echo $member['uid']; ?>','to_user_tag','to_user_tag');
				}
				function get_user_follow(){
					//他关注的人
					right_show_ajax('<?php echo $member['uid']; ?>','user_follow','user_follow');
				}
				function get_Right3(){
					right_show_ajax('<?php echo $member['uid']; ?>','myfavoritetags','right_myfavoritetags');
				}
			  </script>
			  <div class="SC">
				<h3>
<?php if($member['uid']==MEMBER_ID) { ?>
属于我的标签
<?php } else { ?>属于<?php echo $member['gender_ta']; ?>的标签
<?php } ?>
    <a class="btn SC_to_user_tag" href="javascript:void(0);"></a>
				</h3>
				  <ul class="FTL SC_to_user_tag_box">
					<div id="<?php echo $member['uid']; ?>_to_user_tag"></div>
				  </ul>
			   </div>
			   
			  <div class="SC">
				<h3>
<?php if($member['uid']==MEMBER_ID) { ?>
我关注的人
<?php } else { ?><?php echo $member['gender_ta']; ?>关注的人
<?php } ?>
(<?php echo $member['follow_count']; ?>)
					<a class="btn SC_taguanzhu" href="javascript:void(0)"></a>
				</h3>
				<ul class="FTL FTL2 SC_taguanzhu_box">
					<div id="<?php echo $member['uid']; ?>_user_follow"></div>
				</ul>
			  </div>
			  <div class="SC">
			    <h3>
<?php if($member['uid']==MEMBER_ID) { ?>
我关注的话题
<?php } else { ?><?php echo $member['gender_ta']; ?>关注的话题
<?php } ?>
        <a class="btn SC_woguanzhu" href="javascript:void(0);" ></a></h3>
			    <ul class="FTL SC_woguanzhu_box">
				  <div id="<?php echo $member['uid']; ?>_right_myfavoritetags"></div>
			    </ul>
			  </div>

	   <!--属于TA的标签-->
	   
	  
<?php $qun_setting = ConfigHandler::get('qun_setting'); ?>
  
<?php if($qun_setting['qun_open']) { ?>
		  <!--他的微群 Begin-->
			<script type="text/javascript">
				$(document).ready(function(){
					if(<?php echo $member['uid']; ?> > 0){
						get_my_qun();
					}
					$(".SC_my_qun").click(function(){$(this).parent().toggleClass("fold_qun");$(".SC_qun_box").toggle();});
				});
				function get_my_qun(){
					right_show_ajax('<?php echo $member['uid']; ?>','my_qun','qun_box');
				}
			</script>
			<div class="SC">
				<h3>
<?php if($member['uid']==MEMBER_ID) { ?>
我加入的微群
<?php } else { ?><?php echo $member['gender_ta']; ?>加入的微群
<?php } ?>
<a class="btn SC_my_qun" href="javascript:void(0);" onclick="right_show_ajax('<?php echo $member['uid']; ?>','my_qun','qun_box'); return false;">
					</a>
				</h3>
				<ul class="FTL SC_qun_box">
					<div id="<?php echo $member['uid']; ?>_qun_box"></div>
				</ul>
			</div>
		  <!--他的微群 End-->
	  
<?php } ?>
  <!-- 意见反馈-->
<script type="text/javascript">
	$(document).ready(function(){
	$(".SC_yijianfankui").click(function(){$(this).parent().toggleClass("fold_yijianfankui");$(".SC_yijianfankui_box").toggle();});
	});
  </script>
  <div class="SC">
  <h3><?php echo $this->Config['site_name']; ?>意见反馈<a class="btn SC_yijianfankui" href="javascript:void(0)"></a></h3>
  <ul class="FTL SC_yijianfankui_box">
	  <li>众人拾柴火焰高，如您有任何建议欢迎点<a href="index.php?mod=tag&code=意见反馈" target="_blank">意见反馈</a>告诉我们。</li>
	  <li>&nbsp;</li>
	</ul>
  </div>
<!--意见反馈-->
<?php if($member['uid']) { ?>
<div id="add_remark_<?php echo $member['uid']; ?>" class="alertBox" style="display:none" >
	<ul class="manBox">
	 <li>
		<div class="tt1">
			<span>设置备注名</span>
			<div class="mclose" onclick="getElementById('add_remark_<?php echo $member['uid']; ?>').style.display=(getElementById('add_remark_<?php echo $member['uid']; ?>').style.display=='none')?'':'none'"></div>
		</div>
		<div class="mWarp">
			 <form action="ajax.php?mod=topic&code=add_remark" method="POST"  name="remarkform"   onsubmit="publishSubmit_remark('remark_<?php echo $member['uid']; ?>',<?php echo $member['uid']; ?>);return false;">
<input type="hidden" name="FORMHASH" value='<?php echo FORMHASH; ?>'/>
			  给朋友加个备注名，方便认出他是谁（0~6个字符）
					<table >
					  <tr>
						<td><input name="remark_<?php echo $member['uid']; ?>" type="text" id="remark_<?php echo $member['uid']; ?>" class="text-area2" value="<?php echo $buddys['remark']; ?>" size="6" maxlength="6"/>
						</td>
						<td align="left">
						<input type="button" class="shareI" value="保 存" onclick="publishSubmit_remark('remark_<?php echo $member['uid']; ?>',<?php echo $member['uid']; ?>);return false;" /> 
						</td>
					  </tr>
					</table>
			  </form>
		  </div>
		</li>
	 </ul>
 </div>
<?php } ?>
<?php } ?>
</div>
</div>
  
<?php } ?>
  <!--页面右侧-->
</div>

<!--底部广告-->
<?php if($this->Config['ad_enable'] && $this->Config['ad']['ad_list']['group_myhome']['footer']) { ?>
  <div style="text-align:center" class="T_AD">
  <?php echo $this->Config['ad']['ad_list']['group_myhome']['footer']; ?>
 </div>
<?php } ?>
<!--底部广告-->

<!--页面底部--><script type="text/javascript" src="templates/default/js/jsgst.js?v=build+20120428"></script>
<script type="text/javascript" src="templates/default/js/jsgst_autocomplete.js?v=build+20120428"></script>
<script type="text/javascript" src="templates/default/js/ai.js?v=build+20120428"></script>
<script type="text/javascript" src="templates/default/js/combobox.js?v=build+20120428"></script>
<!-- JS消息提示层 show_message('发布成功') -->
<div id="show_message_area"></div>
<?php echo $this->js_show_msg(); ?>
<?php echo $GLOBALS['schedule_html']; ?>
<?php if($GLOBALS['jsg_schedule_mark'] || jsg_getcookie('jsg_schedule')) echo jsg_schedule(); ?>
<!-- Ajax端内容返回 -->
<div id="ajax_output_area"></div>
<?php if(MEMBER_ID ==0) { ?>
<style type="text/css">
.bottomLinks{width:930px;}
.bottomLinks .bL_info{width:180px;}

</style>
<?php } ?>
<div class="bottomLinks_R">
<div class="bottomLinks <?php echo $t_col_foot; ?> bottomLinks_reg">
<div class="bL_List">
<div class="bL_info bL_io1 <?php echo $bL_info_three; ?>">  
        <h4 class="MIB_txtar">找感兴趣的人</h4>
        <ul>
			<li class="MIB_linkar"><a href="index.php?mod=people">名人堂</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=other&code=media">媒体汇</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=topic&code=top">排行榜</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=profile&code=maybe_friend" rel="nofollow">猜你喜欢的</a></li>
        </ul>
    </div>
	<div class="bL_info bL_io2 <?php echo $bL_info_three; ?>">  
        <h4 class="MIB_txtar">精彩内容</h4>
        <ul>
            <li class="MIB_linkar"><a href="index.php?mod=live">微直播</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=talk">微访谈</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=topic&code=new">最新微博</a></li>
			<li class="MIB_linkar"><a href="index.php?mod=topic&code=recd">官方推荐</a></li>
        </ul>
    </div>
	<div class="bL_info bL_io3 <?php echo $bL_info_three; ?>">  
        <h4 class="MIB_txtar">热门应用</h4>
        <ul>
            <li class="MIB_linkar"><a href="index.php?mod=show&code=show">微博秀</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=topic&code=photo">图片墙</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=wall&code=control">上墙</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=tools&code=qmd">图片签名档</a></li>
        </ul>
    </div>
	<div class="bL_info bL_io4 <?php echo $bL_info_three; ?>">  
        <h4 class="MIB_txtar">手机舆情</h4>
        <ul>
            <li class="MIB_linkar"><a href="index.php?mod=other&code=wap">WAP访问</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=other&code=mobile" target=_blank>3G网页</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=other&code=android">android客户端</a></li>
            <li class="MIB_linkar"><a href="index.php?mod=other&code=iphone">iphone客户端</a></li>
        </ul>
    </div>

	<div class="bL_info bL_io5 <?php echo $bL_info_three; ?>">  
        <h4 class="MIB_txtar">关于我们</h4>
        <ul>
		    <li class="MIB_linkar"><a href="index.php?mod=other&code=contact">联系我们</a></li>
			<li class="MIB_linkar"><a href="index.php?mod=other&code=vip_intro">申请V认证</a></li>
<?php if(!empty($navigation_config['pluginmenu'])) { ?>
<?php if(is_array($navigation_config['pluginmenu'])) { foreach($navigation_config['pluginmenu'] as $pmenus) { ?>
<?php if(is_array($pmenus)) { foreach($pmenus as $pmenu) { ?>
<?php if($pmenu['type'] == 2) { ?>
			<li><a href="<?php echo $pmenu['url']; ?>" target="<?php echo $pmenu['target']; ?>"><?php echo $pmenu['name']; ?></a></li>
			
<?php } ?>
<?php } } ?>
<?php } } ?>
<?php } ?>
<li><?php echo $this->Config['tongji']; ?></li>
            <li class="MIB_linkar">
				<a href="http://www.miibeian.gov.cn/" target="_blank" title="网站备案" rel="nofollow"><?php echo $this->Config['icp']; ?></a></li>
			<!-- <li class="MIB_linkar">
				<a href="index.php?mod=other&code=notice" target="_blank" title="网站公告" rel="nofollow">网站公告</a></li> -->
            <li class="MIB_linkar">
<?php $__server_execute_time = round(microtime(true) - $GLOBALS['_J']['time_start'], 5) . " Second "; ?>

<?php $__gzip_tips = ((defined('GZIP') && GZIP) ? "&nbsp;Gzip Enable." : "Gzip Disable."); ?>
<span title="<?php echo $__server_execute_time; ?>,<?php echo $__gzip_tips; ?>">网页执行信息</span>
                <?php echo upsCtrl()->Comlic(); ?></li>
			<li></li>
        </ul>
    </div>
</div>
</div></div>
<script type="text/javascript">
$(document).ready(function(){
$('.goTop').click(function(e){
e.stopPropagation();
$('html, body').animate({scrollTop: 0},300);
backTop();
return false;
});
});
</script>
<div id="backtop" class="backTop"><a href="/#" class="goTop" title="返回顶部"></a></div>
<script type="text/javascript">
window.onscroll=backTop;
function backTop(){
var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  if(scrollTop==0){
   document.getElementById('backtop').style.display="none";
   }else{
   document.getElementById('backtop').style.display="block";
    }
  }
backTop();
</script>
</body>
</html>
<?php echo $GLOBALS['iframe']; ?>
<!--页面底部-->