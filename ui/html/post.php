<article class="post">
	<header>
		<amp-img src="<?php echo $postAvatar ?>" alt="animtech" width="40" height="40" class="post-avatar"></amp-img>
		<h1><a href="<?php echo $postLink ?>" title="find out"><?php echo $postTitle ?></a></h1>
		<p class="post-meta">
			By <?php echo $postAuthor ?> #
			<?php
			foreach($postTags as $tags) {
				echo '<span class="post-category">'.$tags.'</span>';	
				
			} ?>
		</p>
	</header>
	<p><?php echo $postDescription ?></p>
	<?php if ($postLink != "#") { ?>
	<a class="pure-button pure-button-primary" href="<?php echo $postLink ?>" title="find more">Read more...</a>
	<?php } else {?>
	<a class="pure-button" href="<?php echo $postLink ?>" title="find more">Coming soon...</a>
	<?php } ?>
</article>