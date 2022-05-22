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
                <h1>Manage BTS Introduction Page</h1>
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
    <button type="button" class="btn btn-light custombutton"><?= $this->Html->link(__('Edit BTS Introduction Page'), ['action' => 'editintro', $fandom->id], ['class' => 'side-nav-item']) ?>
    </button>
</div>

<section id="page-content" class="move-down">
    <div class="container">
        <div class="grid-system-demo-live">
            <div class="row">
                <div class="col-lg-12 p-t-80 p-b-20">
                    <div class="heading-text heading-section">
                        <h4><?= h($fandom->Section_Four_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12"><?= h($fandom->Section_Four_Body)?></div>
            </div>
        </div>
</section>

<section id="page-content">
    <div class="container">
        <img src="<?=$this->Html->Url->image(h($fandom->Section_Four_Video_URL))?>"alt="" width="100%">
    </div>
</section>

<section class="fullscreen" data-bg-parallax="images/parallax/26.jpg">
    <div class="bg-overlay"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <div class="heading-text  text-light">
                            <h5 class="text-uppercase">Features
                            </h5>
                            <h4><span><?= h($fandom->Section_Five_Title)?></span></h4>
                            <p><?= h($fandom->Section_Five_Body)?></p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="shadow ml-5">
                            <iframe height="450"
                                    src="<?= h($fandom->Section_Five_Video_URL)?>" type="video/mp4"></iframe>
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
                    <div class="heading-text heading-section">
                        <h4><?= h($fandom->Section_Six_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12 p-b-20">
                    <p style = "font-size: 120%;" ><?= h($fandom->Section_Six_Body)?></p>
                </div>

                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom->Section_Six_Video_URL)?>"></iframe>
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
                    <div class="heading-text heading-section">
                        <h4><?= h($fandom->Section_Seven_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12 p-b-20">
                    <p style = "font-size: 120%;"><?= h($fandom->Section_Seven_Body)?></p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom->Section_Seven_Photo)?>" allowfullscreen></iframe>
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
                    <div class="heading-text heading-section">
                        <h4><?= h($fandom->Section_Eight_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;"><?= h($fandom->Section_Eight_Body)?></p><br>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom->Section_Eight_Photo)?>" allowfullscreen></iframe>
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
                    <div class="heading-text heading-section">
                        <h4><?= h($fandom->Section_Nine_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;">
                    </p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom->Section_Nine_Video_URL)?>" allowfullscreen></iframe>
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
                    <div class="heading-text heading-section">
                        <h4><?= h($fandom->Section_Ten_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;">
                    </p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom->Section_Ten_Video_One_URL)?>" allowfullscreen></iframe>
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
                    <div class="heading-text heading-section">
                        <h4><?= h($fandom->Section_Eleven_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;">
                    </p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom->Section_Eleven_Photo)?>" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
