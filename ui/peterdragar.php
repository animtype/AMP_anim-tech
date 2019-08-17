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
<meta property="og:description" content="<?php echo Base::instance()->get("description"); ?>">
<?php echo View::instance()->render('ui/html/favicon.php'); ?>
<?php echo View::instance()->render('ui/css/css-min.php'); ?>
</head>
<body>
<main class="pure-g">
	<div class="sidebar pure-u-1 pure-u-md-1-4">
        <aside class="header">
            <a href="<?php echo Base::instance()->get("base"); ?>/"><amp-img src="<?php echo Base::instance()->get("base"); ?>/ui/images/animtech.png" alt="animtech" width="140" height="140" class="header-image"></amp-img></a>
            <br>
            <h3>anim.tech, računalniško svetovanje in programiranje</h3>
            <h2>Peter Dragar s.p.</h2>   
            <nav>
                <a href="<?php echo Base::instance()->get("base"); ?>/">Pojdi nazaj na BLOG</a>
            </nav>	
        </aside>
    </div>
	<div class="content pure-u-1 pure-u-md-3-4"><span class="gradient"></span>
		<section class="posts">            
            
            <h4>anim.tech, računalniško svetovanje in programiranje, Peter Dragar s.p.</h4>
            <br>
            <amp-img src="<?php echo Base::instance()->get("base"); ?>/ui/images/drpeter.jpg" alt="dr" width="50" height="50" class="post-image"></amp-img>
            <p>Pozdravljeni, moje ime je Peter Dragar, slišim pa tudi na Dr.Peter, tako med prijatelji.</p>
            <p>Kontaktirate me lahko na ta elektronski naslov: <strong>creative(at)anim.tech</strong><br>Dobite me pa lahko tudi na <a href="https://www.linkedin.com/in/peter-dragar-46b90bb2/"><strong>LinekdIn</strong></a> strani, ter brez skrbi, sem kar ažuren pri odgovarjanju. </p>

            <h4>Moje preteklo delo</h4>
            <p><em>Določeni nazivi so v angleškem jeziku, ker so bili to moji uradni nazivi</em></p>
            <ul>
                <li>2018 CEO anim.tech, Peter Dragar s.p.</li>
                <li>2016 CPO Chief Product Officer for entire Edition Digital System, <small>Edition Digital Ltd.</small></li>
                <li>2015 CPO Chief Product Officer, <small>Edition Digital Ltd.</small></li>
                <li>2014 Technology lead in creating Edition Digital System, <small>Edition Digital Ltd.</small></li>
                <li>2006 Vodja razvoja, <small>Citadela d.o.o.</small></li>
                <li>1999 DTP Grafični oblikovalec, <small>Citadela d.o.o.</small></li>
            </ul>
            
            <h4>Sposojena misel</h4>
            <blockquote class="quote" cite="https://anim.tech/contact/"><span class="signs">”</span><em>Samo sanjati o lepši prihodnosti ni dovolj. Potrebno je stopiti iz svoje lupine ter delati vse, da sanje postanejo resničnost.<small>―&nbsp;Peter&nbsp;Dragar</small></em></blockquote>
            
		</section>
	</div>	
</main>

<?php if (Base::instance()->get("PARAMS.count") === "opis") { ?>
<amp-analytics type="googleanalytics">
<script type="application/json">
{
  "vars": {
    "account": "UA-47077018-4"
  },
  "triggers": {
    "trackPageview": {
      "on": "visible",
      "request": "pageview"
    }
  }
}
</script>
</amp-analytics> 
<div class="footnote small">
Stran uporablja Google Analytics piškotke, kateri beležijo statistični obisk. Če želite izklopiti piškotke na tej strani
<a href="<?php echo Base::instance()->get("base"); ?>/si/nocookies"><strong>kliknite tu</strong></a>.
</div>
<?php } else { 
    // no cookies
    // unset cookies
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time()-1000);
            setcookie($name, '', time()-1000, '/');
        }
    }
} ?>
</body>
</html>