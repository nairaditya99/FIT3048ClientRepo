
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
 * @var \App\Model\Entity\Fandom $fandom_info
 * @var \App\Model\Entity\LandingPage $landingPage_info
 */
?>

<!--  * @var \array $e1
 * @var \array $e2
 * @var \array $e3
 * @var \array $v1
 * @var \array $v2
 * @var \array $v3
 --><body>

<!-- Body Inner -->
<div class="body-inner">

    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" style="background-color:#4f1015;">

        <!-- Slide 1 -->
        <div class="slide">
            <div id="particles-snow1" class="particles"></div>
            <div class="container">
                <div class="slide-captions text-center text-light">
                    <!-- Captions -->
                    <h3>Warmest greetings and best wishes for the new year</h3>
                    <div class="text-lg fw-700">Korean Australia Culture Exchange</div>
                    <div class="text-lg-x3 fw-800">2022</div>
                    <a href="<?= $this->Url->build(['controller' => 'Fandoms','action' => 'fandomHome']) ?>" class="btn btn-light btn-outline">Learn more</a>
                    <a href="<?= $this->Url->build(['controller' => 'AboutUsCms','action' => 'aboutus']) ?>" class="btn btn-light">About Us</a>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->

    </div>
    <!--end: Inspiro Slider -->

    <!-- Particle snow -->
    <section style="background-color:#191b41;">
        <div id="particles-snow" class="particles"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">  <a class="twitter-timeline" data-chrome=" noscrollbar noheader nofooter" data-height="400" data-width="1000" data-theme="dark" href="https://twitter.com/Aditya_S_Nair/lists/1505435570574880773?ref_src=twsrc%5Etfw"  data-aria-polite="assertive"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
                <div class="col-lg-6">
                    <div class="heading-text heading-section mt-5">
                        <h5 class="text-uppercase" style="color: white">STAY connected
                            <thead></thead>
                        </h5>
                        <h2 class="fw-800" style="color: white">The Latest From KPop Twitter</h2>
                        <p style="color: white">Stay connected with BTS on Social Media</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Particle snow -->
    <?php

    $url = 'https://newsapi.org/v2/everything?q=Bangtan&sortBy=popularity&apiKey=ac88b43d59334decae2b8bfaf5c1feed';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);

    ?>
    <!-- Particle snow -->
    <section style="background-color:#191b41;">
        <div id="particles-snow2" class="particles"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading-text heading-section mt-5">
                        <h5 class="text-uppercase" style="color: white">STAY connected
                            <thead></thead>
                        </h5>
                        <h2 style="color: white">KPOP In The News</h2>
                        <p style="color: white">Cross Culture Exchange delivers the most comprehensive KPOP news of the moment to keep you up to date</p>
                        <a href="<?= $this->Url->build(['controller' => 'News','action' => 'news']) ?>" class="btn btn-roundeded btn-light">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="blog" class="grid-layout post-1-columns" data-item="post-item">
                        <?php $i=0;foreach ($NewsData->articles as $News){?>
                            <div class="post-item border">
                                <div class="post-item-wrap"  style="background-color: #1B2631;">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="<?php echo $News->urlToImage ?>"  width=100%>
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <span  style="color: white"class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $News->publishedAt ?></span>
                                        <span  style="color: white"class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i><?php echo $News->author ?></a></span>
                                        <h2><a style="color: white" href="#"><?php echo $News->title ?>
                                            </a></h2>
                                        <p style="color: white"><?php echo $News->description ?></p>
                                        <a  style="color: white"href="<?php echo $News->url ?>" class="item-link">Read Now <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php if (++$i == 1) break;} ?>
                    </div>
                </div>
        </div>
    </section>
    <!-- end: Particle snow -->


</div>
<!-- end: Body Inner -->

<!--Plugins-->

</body>
