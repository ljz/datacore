<?php /* 2013-01-26 in jishigou invalid request template */ if(!defined("IN_JISHIGOU")) exit("invalid request"); ?>
<?php if(!empty($myquns)) { ?>
<?php if($type==1) { ?>
<?php $__key='';if(!empty($this->Get['key'])) $__key=$this->Get['key']; ?>
<dl id="qun_select_<?php echo $__key; ?>" class="combobox">
			<dd>
				<ul>
<?php if(is_array($myquns)) { foreach($myquns as $val) { ?>
					<li>
						<a href="javascript:;">
							<img src="<?php echo $val['icon']; ?>" style="width:16px; height:16px;"/><?php echo $val['name']; ?><span class="value"><?php echo $val['qid']; ?></span>
						</a>
					</li>
				
<?php } } ?>
</ul>
			</dd>
		</dl><?php } elseif($type==2) { ?><div class="SC">
		<ul class="FTL FTL2 SC_taguanzhu_box">
		  
<?php if(is_array($myquns)) { foreach($myquns as $val) { ?>
			  <li style=" height:80px;">
				  <img onerror="javascript:faceError(this);" src="<?php echo $val['icon']; ?>" class="manface" title="<?php echo $val['name']; ?>"/>
				  <b><a href="index.php?mod=qun&qid=<?php echo $val['qid']; ?>" title="<?php echo $val['name']; ?>" target="_blank"><?php echo $val['name']; ?></a></b>
			  </li>
		  
<?php } } ?>
  <!--
		  <li><a class="cWhite" href="index.php?mod=<?php echo $member['username']; ?>&code=follow">更多</a></li>
		  -->
		</ul>
	  </div>
<?php } else { ?><dl id="my_qun_select" class="combobox">
			<dd>
				<ul>
					<li>
						<a href="javascript:;">不发布到微群<span class="value">0</span></a>
					</li>
<?php if(is_array($myquns)) { foreach($myquns as $val) { ?>
					<li>
						<a href="javascript:;">
							<img src="<?php echo $val['icon']; ?>" style="width:16px; height:16px;"/><?php echo $val['name']; ?><span class="value"><?php echo $val['qid']; ?></span>
						</a>
					</li>
				
<?php } } ?>
</ul>
			</dd>
		</dl>
		<span style="display:none;" id="toweibo_wp">
			<span>
				<input name="" id="checkbox_toweibo" type="checkbox" value="1" checked="checked" />
				<label for="checkbox_toweibo">同时发布到微博</label>
			</span>
			<span style="margin-left:10px;"><a href="javascript:;" target="_blank" id="goto_qun">去该群逛逛</a></span>
		</span>
	
<?php } ?>
<?php } else { ?>
<?php if($type==2) { ?>
		TA还没有加入任何微群
<?php } else { ?><div id="no_qun_wp_<?php echo $__key; ?>">
			抱歉，你还没有加入任何微群！<BR>
			<a href="index.php?mod=qun" target="_blank" >点此查看有趣的微群吧</a>
		</div>
	
<?php } ?>
<?php } ?>