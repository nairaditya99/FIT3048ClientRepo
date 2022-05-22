<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AboutUsCm $aboutUsCm
 */
?>

<section class="background-grey p-b-0">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="heading-text heading-section text-center mt-5">
                <h1>Manage About us Page</h1>
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
    <button type="button" class="btn btn-light custombutton"><?= $this->Html->link(__('Edit About Us Page'), ['action' => 'edit', $aboutUsCm->id], ['class' => 'side-nav-item']) ?>
    </button>
</div>

<!-- Kpop in AUS Setion -->
<section class="move-down">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2><?= h($aboutUsCm->S1_Title) ?></h2>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12"><?= h($aboutUsCm->S1_Body)?></div>
                </div>

            </div>
        </div>
</section>

<!-- 1,2,3 DOT POINT SECTION -->
<section class="box-fancy section-fullwidth text-light p-b-0">
    <div class="row">
        <div style="background-color:#917d5d" class="col-lg-4">
            <h1 class="text-lg text-uppercase">01.</h1>
            <h3><?= h($aboutUsCm->S1_Sub_Title_1)?></h3>
            <span><?= h($aboutUsCm->S1_Sub_Body_1)?></span>
        </div>

        <div style="background-color:#a08c6c" class="col-lg-4">
            <h1 class="text-lg text-uppercase">02.</h1>
            <h3><?= h($aboutUsCm->S1_Sub_Title_2)?></h3>
            <span><?= h($aboutUsCm->S1_Sub_Body_2)?></span>
        </div>

        <div style="background-color:#ad9979" class="col-lg-4">
            <h1 class="text-lg text-uppercase">03.</h1>
            <h3><?= h($aboutUsCm->S1_Sub_Title_3)?></h3>
            <SPAN><?= h($aboutUsCm->S1_Sub_Body_3)?></SPAN>
        </div>
    </div>
</section>

<!-- Rest of About Us Content -->
<section id="page-content" class="p-b-0">
    <div class="container">
        <h2 class="m-b-30" style="font-size: 25px; text-align: center; font-weight: bold;"><?= h($aboutUsCm->S2_Title) ?></h2>
        <div class="row m-b-40">


            <div class="sidebar sticky-sidebar col-lg-7">

                <div class="project-description" >
                    <h3 style="font-size: 15px; font-weight: bold"><?= h($aboutUsCm->S2_Sub_Title) ?></h3>
                </div>
                <div class="project-description" >
                    <h3 style="font-size: 15px;">1. &nbsp;<?= h($aboutUsCm->S2_Body) ?></h3>
                    <h3 style="font-size: 15px;">2. &nbsp;<?= h($aboutUsCm->S2_Sub_Body) ?></h3>
                </div>
                <h2 class="m-b-30" style="font-size: 25px;"><?= h($aboutUsCm->S3_Title) ?></h2>
                <div class="project-description" >
                    <h3 style="font-size: 15px; font-weight: bold"><?= h($aboutUsCm->S3_Sub_Title_1) ?></h3>
                    <h3 style="font-size: 15px;">&#11044; <?= h($aboutUsCm->S3_Sub_Body_1) ?></h3>
                    <h3 style="font-size: 15px; font-weight: bold"> <?= h($aboutUsCm->S3_Sub_Title_2) ?></h3>
                    <h3 style="font-size: 15px;">&#11044; <?= h($aboutUsCm->S3_Sub_Body_2) ?></h3>
                </div>
                <div class="project-description" >

                </div>
            </div>
            <div class="col-lg-4 offset-1">
                <img src="<?=$this->Html->Url->image(h($aboutUsCm->S2_Sub_Photo))?>" width="100%">
                <br><br>
                <img src="<?=$this->Html->Url->image(h($aboutUsCm->S3_Photo))?>" width="100%">
            </div>
        </div>
    </div>

</section>




