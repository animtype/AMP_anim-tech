<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<title><?php echo Base::instance()->get("title"); ?></title>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta name="description" content="<?php echo Base::instance()->get("description"); ?>"/>
<link rel="canonical" href="<?php echo Base::instance()->get("url"); ?>">
<meta property="fb:app_id" content="<?php echo Base::instance()->get("app"); ?>"> 
<meta property="og:type"   content="<?php echo Base::instance()->get("type"); ?>"> 
<meta property="og:url"    content="<?php echo Base::instance()->get("url"); ?>"> 
<meta property="og:title"  content="<?php echo Base::instance()->get("title"); ?>">
<meta property="og:image"  content="<?php echo Base::instance()->get("base"); ?>/ui/images/<?php echo Base::instance()->get("share"); ?>"> 
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:description" content="<?php echo Base::instance()->get("description"); ?>">
<meta name="author" content="Dr.Peter">
<?php echo View::instance()->render('ui/html/favicon.php'); ?>
<?php echo View::instance()->render('ui/css/css-min.php'); ?>
</head>
<body>
<main class="pure-g">
	<div class="sidebar pure-u-1 pure-u-md-1-4"><?php echo View::instance()->render('ui/html/sidebar.php'); ?></div>
	<div class="content pure-u-1 pure-u-md-3-4"><span class="gradient"></span>
		<section class="posts">
            <?php echo $this->render(Base::instance()->get('content')); ?>
            <?php
            if (
                (Base::instance()->get("countrycode") === "SI")
                and
                (Base::instance()->get("footnote") === "home")
            ) { ?>   
            <div class="footnote">
            Pozdravljeni na anim.tech blog-u. Če želite nadaljevati svoje potovanje v <strong>slovenskem jeziku</strong>, sledite <a href="<?php echo Base::instance()->get("base"); ?>/si/opis"><strong>tej povezavi</strong></a>.
            </div>
             <?php } ?>
		</section>
	</div>	
</main>
</body>
</html>