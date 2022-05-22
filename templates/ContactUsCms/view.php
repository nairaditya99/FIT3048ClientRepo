<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUsCm $contactUsCm
 */
?>

<section class="background-grey p-b-0">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="heading-text heading-section text-center mt-5">
                <h1>Manage Contact us Page</h1>
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
     <button type="button" class="btn btn-light custombutton"><?= $this->Html->link(__('Edit Contact Us Page'), ['action' => 'edit', $contactUsCm->id], ['class' => 'side-nav-item']) ?>
     </button>

    <div class="col-lg-5"> <img alt="" src="images/other/polo-iphone6-v3.png"> </div>
</div>


<section class="move-down">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase"><?= h($contactUsCm->Title_1) ?></h3>
                <p><?= h($contactUsCm->Body_21) ?></p>
                <div class="m-t-30">
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border">
                            <div class="icon">
                                <a href="<?= h($contactUsCm->IG_1) ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                            <BR>
                            <h5><?= h($contactUsCm->IG_1) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="m-t-10">
                    <div class="icon-box effect  border">
                        <div class="icon">
                            <a href="<?= h($contactUsCm->IG_2) ?>"><i class="fa fa-instagram"></i></a>
                        </div>
                        <BR>
                        <h5><?= h($contactUsCm->IG_2) ?></h5>
                    </div>
                </div>
                <div class="m-t-10">
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border">
                            <div class="icon">
                                <a href="<?= h($contactUsCm->IG_3) ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                            <BR>
                            <h5><?= h($contactUsCm->IG_3) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="m-t-10">
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border">
                            <div class="icon">
                                <a href="<?= h($contactUsCm->IG_4) ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                            <BR>
                            <h5><?= h($contactUsCm->IG_4) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="m-t-10">
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border">
                            <div class="icon">
                                <a href="<?= h($contactUsCm->IG_5) ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                            <BR>
                            <h5><?= h($contactUsCm->IG_5) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="m-t-10">
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border">
                            <div class="icon">
                                <a href="<?= h($contactUsCm->IG_6) ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                            <BR>
                            <h5><?= h($contactUsCm->IG_6) ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase"><?= h($contactUsCm->Title_2) ?></h3>
                <span><?= h($contactUsCm->Body_2) ?></span>
                <div class="row">
                    <div class="col-lg-6">
                        <br>
                        <address>
                            <h4>Contact Details</h4><br><br>
                            <div class="row"></div>
                            <div style="font-weight: bold;">Address:</div>
                            <?= h($contactUsCm->Address) ?><br><br>
                            <div style="font-weight: bold;">Phone:</div>
                            <?= h($contactUsCm->Phone) ?><br><br>
                            <div style="font-weight: bold;">Email:</div>
                            <?= h($contactUsCm->Email) ?><br><br>
                            <div style="font-weight: bold;">Website:</div>
                            <?= h($contactUsCm->Website) ?><br><br>

                        </address>
                    </div>
                </div>

                <img src="<?=$this->Html->Url->image(h($contactUsCm->Banner_photo_1))?>" alt="bts-gif" width="100%">

            </div>
        </div>
    </div>
    <br><br><br>
</section>

