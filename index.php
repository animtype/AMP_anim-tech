<?php

// Kickstart the framework
$f3=require('lib/base.php');

// geoIP Class
require_once('lib/geoplugin.class/geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$f3->set("countryname",$geoplugin->countryName);
$f3->set("countrycode",$geoplugin->countryCode);
//$f3->set("countrycode","SI");


class WebPage {
    function renderLayout() {        
        echo View::instance()->render('ui/layout.php');       
    }
    
    function homePage($f3) {
        
        $f3->set('title','Creative side up | anim.tech');
        $f3->set('description','Creative side up of computer programming. If a user is not able to understand his or her way around your interface your time spent on design or technical solution is rendered useless. Anim.tech is a small dedicated group of creative-minded souls. Our projects will show that UX works of the users, by the users, for the users.');
        $f3->set('share','animtech-share-me.jpg');        
        $f3->set('content','ui/home.php');
        $f3->set('footnote','home');
        $this->renderLayout();
        
    }  

    function contactPage($f3) {
        
        $f3->set('title','Contact us | Creative side up');
        $f3->set('description','Contact us via online form or email. Interested in cooperation or have just a great idea to share? Creative side up of computer programming and Cryptocurrency [Bitcoin, Ethereum. Ripple and Tokens].');
        $f3->set('share','animtech-share-me.jpg');        
        $f3->set('content','ui/contact.php');
        $this->renderLayout();
        
    }    
    
    function legalPage($f3) {
        
        $f3->set('title','Legal notice and privacy policy | Creative side up');
        $f3->set('description','Creative side up, legal notice and privacy policy.');
        $f3->set('share','animtech-share-me.jpg');        
        $f3->set('content','ui/legal.php');
        $this->renderLayout(); 
        
    }   
    
    function blogPage($f3) {
        
        $f3->set('title','Blog | Creative side up');
        $f3->set('description','Creative side up is your go-to resource on how to make money online through Bitcoins, Ethereum, Ripple, Tokens. Check out our blog section with reviews tips, guides & practical advice.');
        $f3->set('share','animtech-share-me.jpg');        
        $f3->set('content','ui/blog.php');
        $this->renderLayout(); 
        
    }    
    
    function blogBuyBitcoins($f3) {
        
        $f3->set('title','How to buy Bitcoins with a credit card | Master Card or Visa');
        $f3->set('description','It is really hard to convert hard currency to Bitcoins quickly. Or is it? Well, it turns out, you can dramatically speed up transaction time by buying Bitcoins with Credit Cards. Of course, I am not talking about large amounts of money, in that case a bank transfer and waiting for a couple of days for the transaction is a necessity.');
        $f3->set('type','article');
        $f3->set('share','share-buybitcoins.jpg');        
        $f3->set('content','ui/blog-buybitcoins.php');
        $f3->set('blogPath','buy-bitcoins');
        $f3->set('date','2019-04-12 12:00:00');
        $this->renderLayout(); 
        
    }

    function blogBTChalving($f3) {
        
        $f3->set('title','BITCOIN halving countdown, 12th of May');
        $f3->set('description','The Bitcoin halving decreases the number of new bitcoins generated per block. In most markets, lower BTC supply with steady demand usually leads to higher prices. Should we experience something similar to this year halving? What do you think?');
        $f3->set('type','article');
        $f3->set('share','share-btchalving.jpg');        
        $f3->set('content','ui/blog-btchalving.php');
        $f3->set('blogPath','btc-halving');
        $f3->set('date','2020-02-02 12:00:00');
        $this->renderLayout(); 
        
    }
    
    function siPage($f3,$params) {
        
        $f3->set('title','Peter Dragar s.p.');
        $f3->set('description','Samo sanjati o lepši prihodnosti ni dovolj. Potrebno je stopiti iz svoje lupine ter delati vse, da sanje postanejo resničnost.');
        $f3->set('type','website');
        $f3->set('share','animtech-share-me.jpg');        
        echo View::instance()->render('ui/peterdragar.php');  
        
    }
    
    function geoipPage($f3) {
        echo View::instance()->render('ui/geoip.php');    
    }
    
    function errorPage($f3) {
        
        $f3->set('title','Not found 404 | anim.tech');
        $f3->set('description','The requested URL was not found on this server.');
        $f3->set('share','animtech-share-me.jpg');        
        $f3->set('content','ui/404.php');
        $this->renderLayout();
        
    }
    
}

/* globals */
$f3->set('CACHE',TRUE);
$cashTime = 0; //2590;
$f3->set('url',$f3->get('PATH'));
$f3->set('uri',$f3->get('URI'));
$f3->set('base',$f3->get('BASE'));
$f3->set('app','963224253825414');
$f3->set('type','website');
$f3->set('footnote','n/a');

/* local or live */
if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false) {
    /* localhost */
} else if ($f3->get('SCHEME')!='https')  {
    /* live server */
    /* redirect to https */
    $f3->reroute('https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
}


// test
// printf ("A Busy Hive: <pre>%s</pre>", var_export( $f3->hive(), true ) );

/* routes */
$f3->redirect('GET /home', '/',$cashTime);
$f3->redirect('GET /index*', '/',$cashTime);
$f3->redirect('GET /default*', '/',$cashTime);

$f3->route('GET /','WebPage->homePage',$cashTime);
$f3->route('GET /contact','WebPage->contactPage',$cashTime);
$f3->route('GET /legal','WebPage->legalPage',$cashTime);
$f3->route('GET /blog','WebPage->blogPage',$cashTime);
$f3->route('GET /blog/buy-bitcoins','WebPage->blogBuyBitcoins',$cashTime);
$f3->route('GET /blog/btc-halving','WebPage->blogBTChalving',$cashTime);
$f3->route('GET /si/@count','WebPage->siPage',0);
$f3->route('GET /geoip','WebPage->geoipPage',0);


/* 404 */
$f3->set('ONERROR','WebPage->errorPage');

$f3->run();