<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fandom $fandom
 */
?>

<section class="background-grey p-b-0">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="heading-text heading-section text-center mt-5">
                <h1>Manage BTS Video Page</h1>
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
    <button type="button" class="btn btn-light custombutton"><?= $this->Html->link(__('Edit BTS Introduction Page'), ['action' => 'editvideo', $fandom->id], ['class' => 'side-nav-item']) ?>
    </button>
</div>

<section id="page-content" class="p-b-0 p-t-60 move-down">
    <div class="container">
        <hr class="space">
        <div class="col-lg-10 center">
            <div class="carousel carousel-promotion m-b-40" data-items="1" data-margin="40" data-loop="true"
                 data-autoplay="true">
                <div class="portfolio-item">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <img style="background-size: cover";" src="<?=$this->Html->Url->image( h($fandom->Section_Twelve_Photo))?>" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <img src="<?=$this->Html->Url->image(h($fandom->Section_Ten_Video_Two_URL))?>" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <img src="<?=$this->Html->Url->image(h($fandom->Section_Ten_Photo))?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-b-40 p-b-20">
            <div class="col-lg-8 center">
                <div class="project-description text-center">
                    <h2><?= h($fandom->Section_Thirteen_Title)?></h2>
                    <p style = "font-size: 120%;"><?= h($fandom->Section_Thirteen_Body)?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="grid-system-demo-live">
            <div class="row">
                <div class="col-lg-12 p-t-80 p-b-20">
                    <div class="heading-text heading-section text-center">
                        <h4><?= h($fandom->Section_Fourteen_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;"><?= h($fandom->Section_Fourteen_Body)?></p><br>
                    <p style = "font-size: 120%;" class="text-center" >
                        <a href="<?= h($fandom->Section_Nine_Body)?>">Click here to view the whole dedicated playlist of over 100 videos.</a><br>
                    </p>
                    <div class="grid-item">
                        <img src="<?=$this->Html->Url->image(h($fandom->Section_Fourteen_Photo))?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="grid-system-demo-live">
            <div class="row">
                <div class="col-lg-12 p-t-80 p-b-20">
                    <div class="heading-text heading-section text-center">
                        <h4><?= h($fandom->Section_Fifteen_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;">
                        <?= h($fandom->Section_Fifteen_Body)?>
                    </p><br>
                    <p style = "font-size: 120%;" class="text-center" >
                        <a href="<?= h($fandom->Section_Ten_Body_One)?>">Click here to view the whole dedicated playlist.</a><br>
                    <div class="grid-item">
                        <img src="<?= $this->Html->Url->image(h($fandom->Section_Fifteen_Photo))?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="p-b-0" style="padding-bottom: 80px;!important;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?= $this->Html->Url->image(h($fandom->Section_Three_Video_URL))?>"width="80%">
            </div>
            <div class="col-lg-6">
                <div class="heading-text heading-section mt-5">
                    <h4><?= h($fandom->Section_Two_Photo)?></h4>
                    <p style = "font-size: 120%;">
                        <?= h($fandom->Section_Two_Body)?>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading-text heading-section mt-5">
                    <h4><?= h($fandom->Home_Page_Title)?></h4>
                    <p style = "font-size: 120%;">
                        <?= h($fandom->Section_Ten_Body_Two)?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6" style="padding-left: 5%">
                <img src="<?= $this->Html->Url->image(h($fandom->name))?>"width="100%">
            </div>
            <div class="ratio ratio-16x9">
                <iframe src="<?= h($fandom->Home_Page_Photo)?>" allowfullscreen></iframe>
            </div>
        </div>
</section>

<section id="page-content" class="background-grey p-b-0" style="margin-bottom: 80px;!important;">
    <div class="container">
        <div class="grid-system-demo-live">
            <div class="row">
                <div class="col-lg-12 p-t-80 p-b-20">
                    <div class="heading-text heading-section">
                        <h4><?= h($fandom->Section_Three_Body)?></h4>
                    </div>
                </div>
                <div class="col-lg-12 p-b-20">
                    <p style = "font-size: 120%;">
                        <?= h($fandom->Section_Twelve_Title)?>
                    </p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom->Section_Thirteen_Photo)?>" allowfullscreen></iframe>
                </div>
                <p><br><br></p>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom->Section_Fifteen_Video_URL)?>" allowfullscreen></iframe>
                </div>
                <p><br><br></p>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;">
                        <?= h($fandom->Section_Twelve_Body)?>
                    </p>
                    <p style = "font-size: 120%;">
                        <?= h($fandom->Section_Eleven_Body)?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
