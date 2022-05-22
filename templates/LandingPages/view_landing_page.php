<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LandingPage $landingPage
 */
?>

<body data-icon="12">
<!-- Body Inner -->
<div class="body-inner">

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
        <button type="button" class="btn btn-light custombutton"><?= $this->Html->link(__('Edit Landing Page'), ['action' => 'editLandingPage', $landingPage->id], ['class' => 'side-nav-item']) ?>
        </button>
    </div>
    <br>
    <br>
    <br>
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


</div>
<!-- end: Body Inner -->


</body>
