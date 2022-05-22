<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LandingPage $landingPage
 */
?>
<section class="background-grey p-b-0">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="heading-text heading-section text-center mt-5">
                <h1>Manage Landing Page</h1>
            </div>
        </div>
    </div>
</section>

<div class="page-menu">
    <div class="container">
        <nav>
            <ul>
                <li class=><a href="#">Manage Fandoms &nbsp<i class="fa fa-globe"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $this->Url->build(['controller' => 'fandoms','action' => 'viewhome',1]) ?>">BTS Home</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'fandoms','action' => 'viewintro',1]) ?>">BTS Intro</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'fandoms','action' => 'viewvideo',1]) ?>">BTS Videos</a></li>
                    </ul>
                </li>
                <li class=><a href="#">Manage Landing Page &nbsp<i class="fa fa-home"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'viewLandingPage',1]) ?>">View Homepage 1</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'viewLandingPage1',1]) ?>">View Homepage 2</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'viewLandingPage2',1]) ?>">View Homepage 3</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'viewLandingPage3',1]) ?>">View Homepage 4</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'viewLandingPage4',1]) ?>">View Homepage 5</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'viewLandingPage5',1]) ?>">View Homepage 6</a></li>
                    </ul>
                </li>
                <li class=><a href="#">Manage About/Contact Us &nbsp<i class="fa fa-paper-plane"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $this->Url->build(['controller' => 'about-us-cms','action' => 'view',1]) ?>">View About Us</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'contact-us-cms','action' => 'view',1]) ?>">View Contact Us</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="pageMenu-trigger">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</div>
<div id="edit-button">
    <button type="button" class="btn btn-light custombutton"><?= $this->Html->link(__('Edit Landing Page'), ['controller'=>'Pages','action' => 'maintenance']) ?>
    </button>
</div>
<br>
<br>
<br>

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
