<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?>
<?php if(MEMBER_ID ==0) { ?>
<div class="inventLine2"> 
  <div class="atxt">
	<p class="p_2">微博是现在最酷、最火的沟通交流工具，可以随时随地分享新鲜事，与朋友保持联络。</p> 
	<p class="p_3">10秒注册微博就可通过网页、手机、客户端随时随地分享新鲜事、关注所需的最新消息！</p>
  </div>
  <div class="abtn">
	<a href="index.php?mod=member&code&uid=<?php echo $member['uid']; ?>"><img src="templates/default/images/regbtn.gif"></a>
	<p>已有帐号，<a href="javascript:void(0);" onclick="ShowLoginDialog(); return false;">请点此登录</a></p>
  </div> 
</div>
<?php } ?>
<div class="W_main_l">
  <div class="left_nav">
    <h4>广场</h4>
<?php $new_class=('new'==$this->Code && $this->Get['type']!='pic')?"tago":"tagn"; ?>

<?php $pic_class=('new'==$this->Code && 'pic'==$this->Get['type'])?"tago":"tagn"; ?>
    
<?php $tc_class=('tc'==$this->Code)?"tago":"tagn"; ?>
    
<?php $newreply_class=('newreply'==$this->Code)?"tago":"tagn"; ?>
    
<?php $hotforward_class=('hotforward'==$this->Code)?"tago":"tagn"; ?>
    
<?php $hotreply_class=('hotreply'==$this->Code)?"tago":"tagn"; ?>
    
    
<?php $top_class=('top'==$this->Code)?"tago":"tagn"; ?>
    
<?php $tag_class=('tag'==$this->Code)?"tago":"tagn"; ?>
    
<?php $media_class=('media'==$this->Code || 'media_more'==$this->Code)?"tago":"tagn"; ?>
    
    
<?php $people_class=(in_array($this->Code,array('people','view','province','city')))?"tago":"tagn"; ?>
    <ul class="topic_New">    
    <li class="<?php echo $tc_class; ?> new_tc"><a href="index.php?mod=topic&code=tc">同城微博</a></li>
    <li class="<?php echo $new_class; ?> new_new"><a href="index.php?mod=topic&code=new">
<?php if($this->Config['only_show_vip_topic']) { ?>
最新V博
<?php } else { ?>最新微博
<?php } ?>
</a></li>
	<li class="<?php echo $pic_class; ?> new_photo"><a href="index.php?mod=topic&code=photo">图片墙</a></li>
    <li class="<?php echo $newreply_class; ?> new_newreply"><a href="index.php?mod=topic&code=newreply">最新评论</a></li>
    <li class="<?php echo $hotforward_class; ?> new_forword"><a href="index.php?mod=topic&code=hotforward">热门转发</a></li>
    <li class="<?php echo $hotreply_class; ?> new_hotreply"><a href="index.php?mod=topic&code=hotreply">热门评论</a></li>
    
	<li class="<?php echo $top_class; ?> new_top"><a href="index.php?mod=topic&code=top" title="查看和关注微博达人">达人榜</a></li>
	<li class="<?php echo $tag_class; ?> new_keyword"><a href="index.php?mod=tag" title="寻找和关注话题">话题榜</a></li>
	<li class="<?php echo $media_class; ?> new_media"><a href="index.php?mod=other&code=media" title="查看名人或媒体">媒体汇</a></li>
	<li class="<?php echo $people_class; ?> new_Masters"><a href="index.php?mod=people" title="查看名人堂">名人堂</a></li>
    </ul>
  </div>
</div>