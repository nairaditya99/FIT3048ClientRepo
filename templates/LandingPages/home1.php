
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
 * @var \App\Model\Entity\LandingPage $landingPage_info
 * @var string $homepage_name
 */
?>
    <!-- end: Header -->
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
        <!-- Slide 2 -->
        <div class="slide" data-bg-video="<?=$this->Html->Url->image('/img/l2bg2.mp4') ?>">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-start text-light">
                    <!-- Captions -->
                    <h1>Korean Australian Cultural Exchange</h1>
                    <p class="text-small">Explore Korea Online!</p>
                    <div><a href="#welcome" class="btn btn-primary scroll-to">Explore more</a></div>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->
        <!-- Slide 1 -->
        <div class="slide kenburns" data-bg-image="<?=$this->Html->Url->image('/img/l2bg1.jpg') ?>">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center text-light">
                    <!-- Captions -->
                    <h1 data-caption-animate="zoom-out">Cross Culture Exchange</h1>
                    <p>A website to bring Korean and Australian BTS Fans together</p>
                    <div><a href="#welcome" class="btn btn-primary scroll-to">Explore more</a></div>
                    </span>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->

    </div>
    <!--end: Inspiro Slider -->
<?php

$url = 'https://newsapi.org/v2/everything?q=Bangtan&sortBy=popularity&apiKey=ac88b43d59334decae2b8bfaf5c1feed';
$response = file_get_contents($url);
$NewsData = json_decode($response);

?>
<!-- Content -->
<section id="page-content">
    <div class="container">
        <div class="grid-system-demo-live">
            <div class="row">
                <div class="col-lg-12 p-t-80 p-b-20">
                    <div class="heading-text heading-section">
                        <h2>KPOP In The News</h2>

                    </div>
                </div>
                <div class="col-lg-12">
                    <p style="font-size: 18px;">Cross Culture Exchange delivers the most comprehensive KPOP news of the moment to keep you up to date</p>
                </div>
                <div class="col-lg-12">
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
                            <?php if (++$i == 3) break;} ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p style="font-size: 18px;">Come and discover more latest news on CCX News</p>
                    <a href="<?= $this->Url->build(['controller' => 'News','action' => 'news']) ?>" class="btn btn-roundeded btn-light">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Content -->

<!-- Content -->
<section id="page-content">
    <div class="container">
        <div class="grid-system-demo-live">
            <div class="row">
                <div class="col-lg-12 p-t-80 p-b-20">
                    <div class="heading-text heading-section">
                        <h2>The Latest From KPop Twitter</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style="font-size: 18px;">Stay connected with BTS on Social Media</p>
                </div>
                <div class="col-lg-12">  <a class="twitter-timeline" data-chrome=" noscrollbar noheader nofooter" data-height="800" data-width="1000" data-theme="dark" href="https://twitter.com/Aditya_S_Nair/lists/1505435570574880773?ref_src=twsrc%5Etfw"  data-aria-polite="assertive"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Content -->



