<h4>Editors' pick</h4>
<?php

    /* buy bitcoins */ 
    $postLink = Base::instance()->get("base") . "/blog/buy-bitcoins";
    $postTitle = "How to buy Bitcoins with a credit card [Visa, MasterCard, Diners]";
    $postAvatar = Base::instance()->get("base") . "/ui/images/avatar.jpg";
    $postAuthor = "Dr.Peter";
    $postTags = array("Bitcoin","CreditCard","Visa","Mastercard","Diners","Cryptocurrency");
    $postDescription = "I think you will agree with me when I say: It is really hard to convert hard currency to Bitcoins quickly. Or is it? Well, it turns out, you can dramatically  speed up transaction time by buying Bitcoins with Credit Cards. Of course, I am not talking about large amounts of money, in that case a  bank transfer and waiting for a couple of days for the transaction is a necessity.";
    include 'ui/html/post.php'; 

    /* get a credit card */ 
    $postLink = "#";
    $postTitle = "I would like to secure my Bitcoins [hardware wallet]";
    $postAvatar = Base::instance()->get("base") . "/ui/images/avatar.jpg";
    $postAuthor = "Dr.Peter";
    $postTags = array("Bitcoin","HardwareWallet","Trezor","Ethereum", "Cryptocurrency");
    $postDescription = "The most trusted and secure way to store your bitcoins is within USB hardware wallet. Isolate your private keys into the safety of USB security stick and enjoy Bitcoin without risk. The best protection at no cost to your convenience. Advanced cryptography, reliable hardware, simple interface. All in perfect cooperation.";
    include 'ui/html/post.php'; 

    include 'ui/html/disclaimer.php'; 
    include 'ui/html/short-footer.php'; 

?>