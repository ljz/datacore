<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?>
<?php if($val['attachid'] && $val['attach_list']) { ?>
<?php $val['attach_key']=$val['tid'].'_'.mt_rand(); ?>
<ul class="attachList" id="attach_area_<?php echo $val['attach_key']; ?>">
	  
<?php if(is_array($val['attach_list'])) { foreach($val['attach_list'] as $iv) { ?>
	  <li><img src="<?php echo $iv['attach_img']; ?>" class="attachList_img"/><div class="attachList_att"><p class="attachList_att_name"><b><?php echo $iv['attach_name']; ?></b> <a href="javascript:void(0);"  onclick="downattach(<?php echo $iv['id']; ?>);">下载</a>(<?php echo $iv['attach_down']; ?>次)</p><p class="attachList_att_doc"><?php echo $iv['attach_size']; ?> 积分：<?php echo $iv['attach_score']; ?>分</p></div></li>
	  
<?php } } ?>
</ul>
<?php } ?>

<?php if($val['imageid'] && $val['image_list']) { ?>
<?php $val['image_key']=$val['tid'].'_'.mt_rand(); ?>
<ul class="imgList" id="image_area_<?php echo $val['image_key']; ?>">
	  
<?php if(is_array($val['image_list'])) { foreach($val['image_list'] as $iv) { ?>
	  <li>
	  <a href="index.php?mod=topic&code=<?php echo $val['tid']; ?>"  class="miniImg">
	  <img style="width:<?php echo $this->Config['thumbwidth']; ?>px; height:<?php echo $this->Config['thumbheight']; ?>px;" src="<?php echo $iv['image_small']; ?>" /></a>
	  </li>
	  
<?php } } ?>
</ul>
<?php } ?>
<!--投票 Begin-->
<?php if($val['is_vote'] > 0) { ?>
<?php $val['vote_key']=$val['tid'].'_'.$val['random'] ?>
<ul class="imgList" id="vote_detail_<?php echo $val['vote_key']; ?>">
		  <li><a href="javascript:;" onclick="getVoteDetailWidgets('<?php echo $val['vote_key']; ?>', <?php echo $val['is_vote']; ?>);"><img src='./images/vote_pic_01.gif'/></a> </li>
		</ul>
		<div id="vote_area_<?php echo $val['vote_key']; ?>" style="display:none;">
			<div class="blogTxt"> 
				<div class="top"></div> 
				<div class="mid" id="vote_content_<?php echo $val['vote_key']; ?>"> 
				</div> 
				<div class="bottom"></div> 
			</div>
		</div>
	
<?php } ?>
              
<!--投票 End-->
<?php if($val['videoid'] and $this->Config['video_status']) { ?>
<div class="feedUservideo">
	<a href="index.php?mod=topic&code=<?php echo $val['tid']; ?>" class="miniImg">
  	<div id="play_<?php echo $val['VideoID']; ?>" class="vP"><img src="images/feedvideoplay.gif"  /></div>
  	<img src="<?php echo $val['VideoImg']; ?>" style="border:none"/> </a></div>
<?php } ?>

<?php if($val['musicid']) { ?>
<?php if($val['xiami_id']) { ?>
<div class="feedUserImg"><embed width="257" height="33" wmode="transparent" type="application/x-shockwave-flash" src="http://www.xiami.com/widget/0_<?php echo $val['xiami_id']; ?>/singlePlayer.swf"></embed></div>
<?php } else { ?><div class="feedUserImg"><div id="play_<?php echo $val['MusicID']; ?>"></div><img src="images/music.gif" title="点击播放音乐" onClick="javascript:showFlash('music', '<?php echo $val['MusicUrl']; ?>', this, '<?php echo $val['MusicID']; ?>');" style="cursor:pointer; border:none;" /> </div>
<?php } ?>
<?php } ?>