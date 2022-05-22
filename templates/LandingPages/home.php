<?php
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};
$this->disableAutoLayout();
$cakeDescription = 'CakePHP: the rapid development PHP framework';

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LandingPage $landingPage
 * @var \App\Model\Entity\contactUsCm $LandingPage_info
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>CCX - Cross Culture Exchange</title>
    <!-- Stylesheets & Fonts -->
    <?= $this->Html->css(['/css/plugins.css'])?>
    <?= $this->Html->css(['/css/style.css'])?>
    <?= $this->Html->css(['https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'])?>

    <style>
        .fxo-messenger-iframe {
            width:20%;
            max-width: 500px; /* This is the width you want your chat widget to be on a big enough screen */
        }
    </style>
</head>

<body data-icon="12">

<style type="text/css">

    /*google translate Dropdown */

    #google_translate_element select{
        background:transparent; !important;

        border: none;
        border-radius:3px;

    }

    /*google translate link | logo */
    .goog-logo-link{
        display:none!important;
    }
    .goog-te-gadget{
        color:transparent!important;
    }

    .goog-te-gadget-simple{
        background-color: transparent; !important;

        border:none; !important;

        font-size: 14px; !important;


    }

    .goog-te-gadget img {
        display:none!important;
    }

    .goog-tooltip {
        display: none !important;
    }
    .goog-tooltip:hover {
        display: none !important;
    }
    .goog-text-highlight {
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }
    .goog-te-gadget-simple .goog-te-menu-value span {

        padding-right: 7px; !important;
        font-family: "Poppins", sans-serif; !important;
        font-size: 17px !important;
        font-weight: 600; !important;
        text-transform: uppercase; !important;

    }

    /* google translate banner-frame */

    .goog-te-banner-frame{
        display: none !important;
    }
    body {
        top: 0px !important;
    }
</style>

<!-- Body Inner -->
<div class="body-inner">
    <!-- Topbar -->
    <div id="topbar" class="topbar-transparent topbar-fullwidth dark d-none d-xl-block d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="top-menu">
                        <li><a href="#">Phone: +1 (234) 567-890</a></li>
                        <li><a href="#">Email: ccxaustralia@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6 d-none d-sm-block">
                    <div class="social-icons social-icons-colored-hover">
                        <ul>
                            <li class="social-facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
                            <li class="social-twitter"><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                            <li class="social-vimeo"><a href="https://www.vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                            <li class="social-linkedin"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-dribbble"><a href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-youtube"><a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
                            <li class="social-rss"><a href="https://www.rss.com/"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Topbar -->
    <!-- Header -->
    <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo">
                    <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home']) ?>">
                        <span class="logo-default">CCX</span>
                        <span class="logo-dark">CCX</span>
                    </a>
                </div>
                <!--End: Logo-->

                <!-- Search -->
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="fa fa-times"></i></a>
                    <form class="search-form" action="<?= $this->Url->build(['controller' => 'Pages','action' => 'maintenance']) ?>" method="get">
                        <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                    </form>
                </div>
                <!-- end: search -->


                <!--end: Header Extras-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <!-- end: search -->
                <!--Navigation-->
                <div id="mainMenu" class="menu-center light"  >
                    <div class="container">
                        <nav style="padding-left: 30px">
                            <ul>
                                <li class="dropdown" ><?=$this->Html->link('Home', ['controller' => 'LandingPages', 'action' => 'home']);?></li>
                                <?php
                                $result = $this->request->getAttribute('identity');
                                if ($result) :?>
                                    <li class="dropdown"><?=$this->Html->link('Choose Layout', ['controller' => 'LandingPages', 'action' => 'chooseLayout']);?></li>
                                <?php endif;?>
                                <li class="dropdown"><?=$this->Html->link('About', ['controller' => 'AboutUsCms', 'action' => 'aboutus']);?>
                                    <ul class="dropdown-menu">
                                        <li ><?=$this->Html->link('About Us', ['controller' => 'AboutUsCms', 'action' => 'aboutus']);?></li>
                                        <li ><?=$this->Html->link('Contact Us', ['controller' => 'ContactUsCms', 'action' => 'contactus']);?></li>
                                    </ul>
                                </li>
                                <li ><?=$this->Html->link('Events', ['controller' => 'Events', 'action' => 'list']);?></li>
                                <li ><?=$this->Html->link('Forum', ['controller' => 'Fandoms', 'action' => 'forum']);?></li>

                                <li class="dropdown"><?=$this->Html->link('Fandoms', ['controller' => 'Fandoms', 'action' => 'fandomHome']);?>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu"><span class="dropdown-menu-title-only">BTS</span>
                                            <ul class="dropdown-menu">
                                                <li><?=$this->Html->link('BTS Home', ['controller' => 'Fandoms', 'action' => 'fandomHome']);?></li>
                                                <li><?=$this->Html->link('BTS Intro', ['controller' => 'Fandoms', 'action' => 'fandomIntro']);?></li>
                                                <li><?=$this->Html->link('BTS Videos', ['controller' => 'Fandoms', 'action' => 'fandomVideos']);?></li>
                                                <li ><?=$this->Html->link('BTS News', ['controller' => 'News', 'action' => 'news']);?></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <?php
                                $result = $this->request->getAttribute('identity');
                                if ($result) :
                                    if ($result['is_admin']) :?>
                                        <li ><?=$this->Html->link('Admin', ['controller' => 'Pages', 'action' => 'adminDashboard']);?></li>
                                        <li ><?=$this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']);?></li>
                                    <?php elseif ($result) :?>
                                        <li style="padding-top: 3px;" ><?=$this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']);?></li>
                                    <?php endif;?>
                                <?php else :?>
                                    <li><a href="<?= $this->Url->build(['controller' => 'Users','action' => 'login']) ?>">Login <i class="fa fa-user"></i></a>
                                    </li>
                                <?php endif;?>
                                <li <a id="google_translate_element"></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->

                <!--Dots Menu -->
                <nav id="dotsMenu">
                    <ul>
                        <li><a href="#slider"><span>Home</span></a></li>
                        <li><a href="#section1"><span>Twitter</span></a></li>
                        <li><a href="#section2"><span>News</span></a></li>
                        <li><a href="#footer"><span>Contact Us</span></a></li>
                    </ul>
                </nav>
                <!--End: Dots Menu -->
            </div>
        </div>
    </header>
    <!-- end: Header -->
    <?php
    error_reporting(E_ALL ^ E_NOTICE);

    ?>


    <section id = "slider" class="fullscreen" data-bg-parallax="<?=$this->Html->Url->image('/img/bg4.png') ?>">
        <div class="bg-overlay"></div>
        <div class="container container-fullscreen">
            <div class="text-middle text-center text-light">
                <h2 class="text-lg"><span class="text-rotator">Korean Cultural, Australian Cultural, BTS Fan </span><br>Exchange</h2>
                <p class="lead">A website to bring Korean and Australian BTS Fans together</p>
                    <a href="<?= $this->Url->build(['controller' => 'about-us-cms','action' => 'aboutus']) ?>" class="btn btn-light btn-outline btn-roundeded">Learn More</a>
            </div>
        </div>
    </section>
    <section id="section1"class="p-b-0" style="padding-bottom: 80px;!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">  <a class="twitter-timeline" data-chrome=" noscrollbar noheader nofooter" data-height="600" data-width="600" data-theme="dark" href="https://twitter.com/Aditya_S_Nair/lists/1505435570574880773?ref_src=twsrc%5Etfw"  data-aria-polite="assertive"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
                <div class="col-lg-6">
                    <div class="heading-text heading-section mt-5">
                        <h1>The Latest From KPop Twitter</h1>
                        <p>Stay connected with BTS on Social Media</p>
                        <a class="btn btn-primary" href="<?= $this->Url->build(['controller' => 'Fandoms','action' => 'fandomHome']) ?>"><i class="fa fa-tint"></i> Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php

    $url = 'https://newsapi.org/v2/everything?q=Bangtan&sortBy=popularity&apiKey=ac88b43d59334decae2b8bfaf5c1feed';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);

    ?>

    <section id = "section2" class="background-grey p-b-0" style="margin-bottom: 80px;!important;">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading-text heading-section mt-5">
                        <h1>KPOP In The News</h1>
                        <p>Cross Culture Exchange delivers the most comprehensive KPOP news of the moment to keep you up to date</p>
                        <a class="btn btn-primary" href="<?= $this->Url->build(['controller' => 'News','action' => 'news']) ?>"><i class="fa fa-tint"></i> Learn more</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="blog" class="grid-layout post-1-columns"  data-item="post-item">
                        <?php $i=0;foreach ($NewsData->articles as $News){?>
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="<?php echo $News->urlToImage ?>"  width=100%>
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $News->publishedAt ?></span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i><?php echo $News->author ?></a></span>
                                        <h2><a href="#"><?php echo $News->title ?>
                                            </a></h2>
                                        <p><?php echo $News->description ?></p>
                                        <a href="<?php echo $News->url ?>" class="item-link">Read More <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php if (++$i == 1) break;} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="widget">
                            <div class="widget-title">Cross Cultural Exchange</div>
                            <p class="mb-5">Built by Team 114 in FIT 3048<br> All rights reserved. Copyright © 2022. CCX .</p>
                            <a href="<?= $this->Url->build(['controller' => 'Pages','action' => 'disclaimer']) ?>" class="btn btn-dark btn-outline btn-roundeded">Disclaimer</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><?=$this->Html->link('BTS Home', ['controller' => 'Fandoms', 'action' => 'fandomHome']);?></li>
                                            <li><?=$this->Html->link('BTS Intro', ['controller' => 'Fandoms', 'action' => 'fandomIntro']);?></li>
                                            <li><?=$this->Html->link('BTS Videos', ['controller' => 'Fandoms', 'action' => 'fandomVideos']);?></li>
                                            <li ><?=$this->Html->link('BTS News', ['controller' => 'News', 'action' => 'news']);?></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li ><?=$this->Html->link('Events', ['controller' => 'Events', 'action' => 'list']);?></li>
                                            <li><?=$this->Html->link('Fandoms', ['controller' => 'Fandoms', 'action' => 'fandomHome']);?></li>
                                            <li><?=$this->Html->link('Choose Layout', ['controller' => 'LandingPages', 'action' => 'chooseLayout']);?></li>
                                            <li ><?=$this->Html->link('Forum', ['controller' => 'Fandoms', 'action' => 'forum']);?></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Learn More</div>
                                        <ul class="list">
                                            <li ><?=$this->Html->link('About Us', ['controller' => 'AboutUsCms', 'action' => 'aboutus']);?></li>
                                            <li ><?=$this->Html->link('Contact Us', ['controller' => 'ContactUsCms', 'action' => 'contactus']);?></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2022 CCX - Cross Cultural Exchange Website. All Rights Reserved.</div>
                </div>
            </div>
    </footer>
    <!-- end: Footer -->

</div>
<!-- end: Body Inner -->

<!-- Scroll top -->

<!--Plugins-->
<?= $this->Html->script('/js/jquery.js'); ?>
<?= $this->Html->script('/js/plugins.js'); ?>
<?= $this->Html->script('/js/functions.js'); ?>

<?= $this->Html->script('//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'); ?>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ko,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
    }
</script>
<script src="//code.tidio.co/4wkhpvjuzfip4yb4eolkdl6f1bndfg5a.js" async></script>
<a id="scrollTop" style="margin-bottom: 100px;left: 150px;"><i class="fa fa-chevron-up"></i><i class="fa fa-chevron-up"></i></a>
</body>

</html>
