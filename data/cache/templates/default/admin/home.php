<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $__my=$this->MemberHandler->MemberFields; ?>

<?php $conf_charset=$this->Config['charset']; ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $conf_charset; ?>" />
<link href="./templates/default/styles/admincp.css?v=build+20120428" rel="stylesheet" type="text/css" />

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
<script language="JavaScript" type="text/javascript" src="./templates/default/js/cookies.js?v=build+20120428"></script>
<script type="text/javascript" src="templates/default/js/min.js?v=build+20120428"></script>
<script src="templates/default/./js/common.js?v=build+20120428" type="text/javascript"></script>
<script src="templates/default/./js/dialog.js?v=build+20120428" type="text/javascript"></script>
<script type="text/javascript" src="templates/default/./js/admin_script_common.js?v=build+20120428"></script>
<script type="text/javascript" src="./images/uploadify/jquery.uploadify.v2.1.4.min.js?v=build+20120428"></script>
<script language="JavaScript">
function checkalloption(form, value) {
	for(var i = 0; i < form.elements.length; i++) {
		var e = form.elements[i];
		if(e.value == value && e.type == 'radio' && e.disabled != true) {
			e.checked = true;
		}
	}
}
function checkallvalue(form, value, checkall) {
	var checkall = checkall ? checkall : 'chkall';
	for(var i = 0; i < form.elements.length; i++) {
		var e = form.elements[i];
		if(e.type == 'checkbox' && e.value == value) {
			e.checked = form.elements[checkall].checked;
		}
	}
}
function zoomtextarea(objname, zoom) {
	zoomsize = zoom ? 10 : -10;
	obj = $(objname);
	if(obj.rows + zoomsize > 0 && obj.cols + zoomsize * 3 > 0) {
		obj.rows += zoomsize;
		obj.cols += zoomsize * 3;
	}
}
function redirect(url) {
	window.location.replace(url);
}
function checkall(form, prefix, checkall) {
	var checkall = checkall ? checkall : 'chkall';
	for(var i = 0; i < form.elements.length; i++) {
		var e = form.elements[i];
		if(e.name != checkall && (!prefix || (prefix && e.name.match(prefix)))) {
			e.checked = form.elements[checkall].checked;
		}
	}
}
var collapsed = Cookies.getCookie('guanzhu_collapse');
function collapse_change(menucount) {
	if(document.getElementById('menu_' + menucount).style.display == 'none') {
		document.getElementById('menu_' + menucount).style.display = '';collapsed = collapsed.replace('[' + menucount + ']' , '');
		$('menuimg_' + menucount).src = './templates/default/images/admincp/menu_reduce.gif';
	} else {
		document.getElementById('menu_' + menucount).style.display = 'none';collapsed += '[' + menucount + ']';
		$('menuimg_' + menucount).src = './templates/default/images/admincp/menu_add.gif';
	}
	Cookies.setCookie('guanzhu_collapse', collapsed, 2592000);
}
function advance_search(o)
{
	o.innerHTML=$('advance_search').visible()?"高级搜索":"简单搜索";
	$('advance_search').toggle();
	return false;
}
</script>
</head>
<body>
<div id="show_message_area"></div>
<table width="100%" border="0" cellpadding="2" cellspacing="6" style="_margin-left:-10px; ">
<tr>
  <td><table width="100%" border="0" cellpadding="2" cellspacing="6">
    <tr>
      <td>
<?php if($__is_messager!=true) { ?>
        <div style="width:100%; height:15px;color:#000;margin:0px 0px 10px;">
          <div style="float:left;"><a href="admin.php?mod=index&code=home">控制面板首页</a>&nbsp;&raquo;&nbsp;
		  
<?php if($pluginconfig && $pluginname) { ?>
		  <?php echo $pluginconfig; ?>&nbsp;&raquo;&nbsp;<?php echo $pluginname; ?>
		  <?php } elseif($this->pluginconfig && $this->pluginname) { ?>  <?php echo $this->pluginconfig; ?>&nbsp;&raquo;&nbsp;<?php echo $this->pluginname; ?>
		  
<?php } else { ?>  
<?php echo $this->actionName(); ?>
  
<?php } ?>
  </div>
		  
<?php if($this->RoleActionId) { ?>
		  <div style="float: right;"><a title="查看谁操作过这个页面" href="admin.php?mod=logs&role_action_id=<?php echo $this->RoleActionId; ?>"><b style="color:red">查看当前页操作记录</b></a></div>
		  
<?php } ?>
        </div>
        
<?php } ?>
<?php $sub_menu_list = $_sub_menu_list?$_sub_menu_list:get_sub_menu(); ?>
<?php if($sub_menu_list) { ?>
<div class="nav3">
	<ul class="cc">
<?php if(is_array($sub_menu_list)) { foreach($sub_menu_list as $value) { ?>
<?php if($value['type'] == '1' && PLUGINDEVELOPER < 1)continue; ?>
<li 
<?php if($value['current']) { ?>
class="current"
<?php } ?>
>
<?php if($this->pluginid) { ?>
				<a href="<?php echo $value['link']; ?>&id=<?php echo $this->pluginid; ?>">
<?php } else { ?><a href="<?php echo $value['link']; ?>">
			
<?php } ?>
<?php echo $value['name']; ?></a>
			</li>
		
<?php } } ?>
</ul>
</div>
<?php } ?> <br />
<!--<script src="templates/default/./js/date/WdatePicker.js?v=build+20120428" type="text/javascript"></script>
<div align="center">
<div id ="test1"></div>
<br>
<div><span style="background-color:#66F4DF">这个颜色代表这天还有没管理过的微博内容。</span></div>
<br>
</div>

<script type="text/javascript">
$(document).ready(function() {
WdatePicker({eCont:'test1',highLineWeekDay:false,opposite:true,disabledDates:[<?php echo $datelist; ?>],specialDates:[<?php echo $datelist; ?>]});
});
</script>
-->
<table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
  <tr class="header">
    <td colspan="12">
    <div class="NavaL ndt">主要设置引导</div>
      </td>
  </tr>
	<tr class=""> <td>
	1、初期设置：
	<a href="admin.php?mod=setting&code=modify_normal">核心设置</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=show&code=editlogo"><span style="color:blue">Logo更新</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=modify_mobile"><span class="fred">手机应用</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=modify_smtp">邮件设置</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=modify_rewrite">伪静态</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=vipintro&code=categorylist"><span style="color:red">V认证分类</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=ucenter&code=ucenter">UCenter整合</a> <br>
	2、运营调整：
	<a href="admin.php?mod=setting&code=modify_register">注册控制</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=modify_filter">关键词过滤</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=regfollow"><span style="color:blue">自动关注</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=role&code=list&type=normal">角色权限</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=show&code=modify_theme"><span style="color:red">皮肤风格</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=modify_slide">幻灯广告</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=modify_credits">积分规则</a> <br>
	3、特色功能：
	<a href="admin.php?mod=output&code=output_setting"><span style="color:red">微博评论模块</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=dzbbs&code=discuz_setting"><span style="color:blue">论坛帖子调用</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=bbs_plugin"><span style="color:green">帖子发作微博</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="admin.php?mod=setting&code=modify_sina">平台账号设置</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="http://cnrdn.com/G8f4" title="避免受到同IP网站的连带惩罚">监测同IP网站</a> </td>
	</tr>
</table>

<table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
  <tr class="header">
    <td colspan="12">
      网站数据统计 </td>
  </tr>
  <tr class="altbg1">
    
<?php if(is_array($item_list)) { foreach($item_list as $item_name => $item) { ?>
    <td title="<?php echo $item_name; ?>个数"><?php echo $item_name; ?></td>
    
<?php } } ?>
    <td title="数据库占用空间">数据库</td>
  </tr>
  <tr class="altbg2">
    
<?php if(is_array($statistic)) { foreach($statistic as $item => $count) { ?>
    <td><a href="admin.php?mod=<?php echo $item; ?>" title="管理"><?php echo $count; ?></a></td>
    
<?php } } ?>
    <td><a href="admin.php?mod=db&code=export" title="备份"><?php echo $data_length; ?></a>&nbsp;|&nbsp;<a href="admin.php?mod=db&code=optimize" title="优化碎片">优化</a></td>
  </tr>
</table>
<div class="c"></div>

<table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
  <tr class="header">
    <td colspan="12">待审核记录</td>
  </tr>
  <tr class="altbg1">
    
<?php if(is_array($data_verify['name'])) { foreach($data_verify['name'] as $name) { ?>
    <td title="<?php echo $name; ?>个数"><?php echo $name; ?></td>
    
<?php } } ?>
  </tr>
  <tr class="altbg2">
    
<?php if(is_array($data_verify['count'])) { foreach($data_verify['count'] as $count) { ?>
    <td><?php echo $count; ?></td>
    
<?php } } ?>
  </tr>
</table>
<div class="c"></div>

<script type="text/javascript" src="./templates/default/js/min.js?v=build+20120428"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$.get('admin.php?mod=index&code=recommend', function(data)
	{
		if (data != '')
        {
            $('#recommend_tabler').show();
            $('#recommend').html(data);
        }
	})
   
    if (typeof(lrcmd) != 'undefined' && typeof(lrcmd) == 'string')
    {
        $.get('admin.php?mod=index&code=lrcmd_nt&lv='+lrcmd, function(data){
            if (data != 'false')
            {
                $('#lic_recommend').html(data).slideDown();
            }
        });
    }
});

</script>