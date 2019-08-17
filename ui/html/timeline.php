<div class="pure-g timeline">
	<div class="pure-u-1-3 pure-u-md-4-24 time-date"></div><div class="pure-u-1-8 pure-u-md-3-24 time-dot space"></div><div class="pure-u-1 pure-u-md-17-24 time-spot"></div>
</div>
<div class="pure-g timeline <?php echo $timeColor ?>">
	<div class="pure-u-1-3 pure-u-md-4-24 time-date"><span><strong><?php echo $timeMonth ?></strong></span><span><?php echo $timeYear ?></span></div>
	<div class="pure-u-1-8 pure-u-md-3-24 time-dot"><div><span></span></div></div>
	<div class="pure-u-1 pure-u-md-17-24 time-spot">
		<p>
			<?php if ($timeImage != "") {?> 
			<amp-img src="ui/images/<?php echo $timeImage ?>" alt="timeline" width="100" height="75" class="post-image"></amp-img>
			<?php } ?>
			<amp-img src="ui/images/<?php echo $postAvatar ?>" alt="animtech" width="40" height="40" class="post-avatar"></amp-img>
			<strong><?php echo $timeTitle ?></strong><br>			
			<?php echo $timeBody ?>
			<?php if($timeTags != "") {?>
			<br><small class="tags"><?php echo $timeTags; ?></small>
			<?php } ?>
			<?php if($timeWeb != "") {?>
			<a class="icon icon-link" href="<?php echo $timeWeb; ?>"></a>
			<?php } ?>
		</p>
	</div>
</div>
<div class="pure-g timeline">
	<div class="pure-u-1-3 pure-u-md-4-24 time-date"></div><div class="pure-u-1-8 pure-u-md-3-24 time-dot space"></div><div class="pure-u-1 pure-u-md-17-24 time-spot"></div>
</div>