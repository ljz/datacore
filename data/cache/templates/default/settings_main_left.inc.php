<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?><div class="W_main_l">
  <div class="left_nav">
	<h3 class="person_info">资料设置</h3>
<?php $base_hoverCLS = ('base' == $this->Code ? 'tago' : 'tagn'); ?>

<?php $face_hoverCLS = ('face' == $this->Code ? 'tago' : 'tagn'); ?>

<?php $secret_hoverCLS = ('secret' == $this->Code ? 'tago' : 'tagn'); ?>

<?php $user_tag_hoverCLS = ('user_tag' == $this->Code ? 'tago' : 'tagn'); ?>

<?php $vip_intro_hoverCLS = ('vip_intro' == $this->Code ? 'tago' : 'tagn'); ?>

<?php $validate_extra_hoverCLS = ('validate_extra' == $this->Code ? 'tago' : 'tagn'); ?>
<li><div class="<?php echo $base_hoverCLS; ?>"><A HREF="index.php?mod=settings&code=base">我的资料</A></div></li>
	<li><div class="<?php echo $face_hoverCLS; ?>"><A HREF="index.php?mod=settings&code=face">我的头像</A></div></li>
	<li><div class="<?php echo $secret_hoverCLS; ?>"><A HREF="index.php?mod=settings&code=secret">修改密码</A></div></li>
	<li><div class="<?php echo $user_tag_hoverCLS; ?>"><A HREF="index.php?mod=user_tag">我的标签</A></div></li>
	<li><div class="<?php echo $vip_intro_hoverCLS; ?>"><A HREF="index.php?mod=other&code=vip_intro">申请V认证</A></div></li>
<?php if(($member['validate'] && $member['validate_extra'])) { ?>
	<li><div class="<?php echo $validate_extra_hoverCLS; ?>"><A HREF="index.php?mod=settings&code=validate_extra">专题设置</A></div></li>
	
<?php } ?>
<li><div class="tagb"></div></li>
  </div>
	
  <div class="left_nav">
	<h3 class="person_lever">积分等级</h3>
<?php $extcredits_hoverCLS = ('extcredits' == $this->Code ? 'tago' : 'tagn'); ?>

<?php $exp_hoverCLS = ('exp' == $this->Code ? 'tago' : 'tagn'); ?>
<li><div class="tagn <?php echo $extcredits_hoverCLS; ?>"><A HREF="index.php?mod=settings&code=extcredits">我的积分</A></div></li>
	<li><div class="tagn <?php echo $exp_hoverCLS; ?>"><A HREF="index.php?mod=settings&code=exp">微博等级</A></div></li>
	<li><div class="tagb"></div></li>
  </div>
	
  <div class="left_nav">
  
<?php $theme_hoverCLS = ('theme' == $this->Code ? 'tago2' : 'tagn2'); ?>
<h3 class="person_theme <?php echo $theme_hoverCLS; ?>"><A HREF="index.php?mod=skin">更换皮肤</A></h3>
	<li><div class="tagb"></div></li>
  </div>

  <div class="left_nav">
  
<?php $account_hoverCLS = (in_array($this->Code,array('qqwb','sina','yy','renren','kaixin','fjau_enable')) ? 'tago2' : 'tagn2'); ?>
<h3 class="person_account <?php echo $account_hoverCLS; ?>"><A HREF="index.php?mod=account">帐号绑定</A></h3>
	<li><div class="tagb"></div></li>
  </div>
  
  <div class="left_nav">
    
<?php $sms_hoverCLS = (in_array($this->Code,array('wap','mobile','iphone','android','pad','sms')) ? 'tago2' : 'tagn2'); ?>
<h3 class="person_phone <?php echo $sms_hoverCLS; ?>"><A HREF="index.php?mod=other&code=wap">手机应用</A></h3>
	<li><div class="tagb"></div></li>
  </div>
</div>