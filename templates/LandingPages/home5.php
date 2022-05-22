
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


<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/14.jpg">
    <div class="bg-overlay"></div>
    <div class="shape-divider" data-style="1" data-height="300"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Australia Korea Culture Exchange</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-roundeded">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<?php

$url = 'https://newsapi.org/v2/everything?q=Bangtan&sortBy=popularity&apiKey=ac88b43d59334decae2b8bfaf5c1feed';
$response = file_get_contents($url);
$NewsData = json_decode($response);

?>
<section class="fullscreen" data-bg-parallax="images/parallax/14.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="2"></div>
    <div class="shape-divider" data-style="2" data-position="top" data-flip-vertical="true"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading-text heading-section mt-5">
                        <h1 style="color: white">K-POP In The News </h1>
                        <p style="color: white" >Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        <a  class="btn btn-primary" href="#"><i class="fa fa-tint"></i> Learn more</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="blog" class="grid-layout post-1-columns"  data-item="post-item">
                        <?php $i=0;foreach ($NewsData->articles as $News){?>
                            <div class="post-item border">
                                <div class="post-item-wrap" style="background-color: #1B2631;">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="<?php echo $News->urlToImage ?>" height="200px" width="360px">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <span style="color: white" class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $News->publishedAt ?></span>
                                        <span style="color: white" class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i><?php echo $News->author ?></a></span>
                                        <h2 ><a style="color: white" href="#"><?php echo $News->title ?>
                                            </a></h2>
                                        <p style="color: white"><?php echo $News->description ?></p>
                                        <a  style="color: white" href="<?php echo $News->url ?>" class="item-link">Read More <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php if (++$i == 1) break;} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->


<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="6" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="6"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">  <a class="twitter-timeline" data-chrome=" noscrollbar noheader nofooter" data-height="600" data-width="600" data-theme="dark" href="https://twitter.com/Aditya_S_Nair/lists/1505435570574880773?ref_src=twsrc%5Etfw"  data-aria-polite="assertive"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
            <div class="col-lg-6">
                <div class="heading-text heading-section mt-5">
                    <h1 style="color: white">The Latest From KPop Twitter</h1>
                    <p style="color: white">Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                    <a class="btn btn-primary" href="#"><i class="fa fa-tint"></i> Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->

<?php /*
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay" data-style="7"></div>
    <div class="shape-divider" data-style="7" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="7"></div>
    <div class="container">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-outline btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="8" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="8"></div>
    <div class="container">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-outline btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay"></div>
    <div class="shape-divider" data-style="9" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="9"></div>
    <div class="container">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-outline btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="10" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="10"></div>
    <div class="container">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-outline btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay"></div>
    <div class="shape-divider" data-style="11" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="11"></div>
    <div class="container">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-outline btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="12" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="12"></div>
    <div class="container">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-outline btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay"></div>
    <div class="shape-divider" data-style="13" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="13"></div>
    <div class="container">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-outline btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/15.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="14" data-position="top" data-flip-vertical="true"></div>
    <div class="shape-divider" data-style="14"></div>
    <div class="container">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-outline btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/14.jpg">
    <div class="bg-overlay"></div>
    <div class="shape-divider" data-style="15"></div>
    <div class="shape-divider" data-style="15" data-position="top" data-flip-vertical="true"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/14.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="16"></div>
    <div class="shape-divider" data-style="16" data-position="top" data-flip-vertical="true"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/14.jpg">
    <div class="bg-overlay"></div>
    <div class="shape-divider" data-style="17"></div>
    <div class="shape-divider" data-style="17" data-position="top" data-flip-vertical="true"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/14.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="18"></div>
    <div class="shape-divider" data-style="18" data-position="top" data-flip-vertical="true"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/14.jpg">
    <div class="bg-overlay"></div>
    <div class="shape-divider" data-style="19"></div>
    <div class="shape-divider" data-style="19" data-position="top" data-flip-vertical="true"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
<!-- Section -->
<section class="fullscreen" data-bg-parallax="images/parallax/14.jpg">
    <div class="bg-overlay" data-style="2"></div>
    <div class="shape-divider" data-style="20"></div>
    <div class="shape-divider" data-style="20" data-position="top" data-flip-vertical="true"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="heading-text text-light col-lg-6">
                    <h2 class="fw-800"><span>Create beautiful websites with ease</span></h2>
                    <p>Polo is jam packed with tons of features that will give you the power to create the web as you always wanted.</p>
                    <a href="#" class="btn btn-light btn-roundeded">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
 */?>
