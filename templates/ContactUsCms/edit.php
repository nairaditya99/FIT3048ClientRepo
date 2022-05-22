<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUsCm $contactUsCm
 */
$formTemplate =[
        'button' => '<button class="btn btn-dark SubmitButton"{{attrs}}>{{text}}</button>',
        'file' => '<input type="file" name="{{name}}" class="form-control" {{attrs}}>',
        'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
        'label' => '',
        'textarea' => '<textarea name="{{name}}"class="form-control"{{attrs}}>{{value}}</textarea>',
        'textarea2' => '<textarea name="{{name}}" class="text-uppercase H3"{{attrs}}>{{value}}</textarea>'
];
$this->Form->setTemplates($formTemplate);
?>

<section class="background-grey p-b-0">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="heading-text heading-section text-center mt-5">
                <h1>Edit Contact us Page</h1>
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


<div>
    <div class="row">
    <div class="column-responsive column-80">
        <div class="contactUsCms form content">
            <?= $this->Form->create($contactUsCm, ['type'=>'file']) ?>
            <fieldset>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="text-uppercase"><?= $this->Form->control('Title_1', array('type' => 'textarea2'))?></h3>
                                <p><?= $this->Form->control('Body_21');?></p>
                                <div class="m-t-10"><br><br>
                                    <div class ="row">
                                        <div class="icon-box effect medium border col-lg-2">
                                            <div class="icon">
                                                <a href="<?= h($contactUsCm->IG_1) ?>"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class ="col-lg-10"><br>
                                            <h5><?= $this->Form->control('IG_1', array('type' => 'textarea2'));?></h5>
                                        </div>
                                    </div>

                                </div>
                                <div class="m-t-10">
                                    <div class ="row">
                                        <div class="icon-box effect medium border col-lg-2">
                                            <div class="icon">
                                                <a href="<?= h($contactUsCm->IG_2) ?>"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class ="col-lg-10"><br>
                                            <h5><?= $this->Form->control('IG_2', array('type' => 'textarea2'));?></h5>
                                        </div>
                                    </div>

                                </div>
                                <div class="m-t-10">
                                    <div class ="row">
                                        <div class="icon-box effect medium border col-lg-2">
                                            <div class="icon">
                                                <a href="<?= h($contactUsCm->IG_3) ?>"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class ="col-lg-10"><br>
                                            <h5><?= $this->Form->control('IG_3', array('type' => 'textarea2'));?></h5>
                                        </div>
                                    </div>

                                </div>
                                <div class="m-t-10">
                                    <div class ="row">
                                        <div class="icon-box effect medium border col-lg-2">
                                            <div class="icon">
                                                <a href="<?= h($contactUsCm->IG_4) ?>"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class ="col-lg-10"><br>
                                            <h5><?= $this->Form->control('IG_4', array('type' => 'textarea2'));?></h5>
                                        </div>
                                    </div>

                                </div>
                                <div class="m-t-10">
                                    <div class ="row">
                                        <div class="icon-box effect medium border col-lg-2">
                                            <div class="icon">
                                                <a href="<?= h($contactUsCm->IG_5) ?>"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class ="col-lg-10"><br>
                                            <h5><?= $this->Form->control('IG_5', array('type' => 'textarea2'));?></h5>
                                        </div>
                                    </div>

                                </div>
                                <div class="m-t-10">
                                    <div class ="row">
                                        <div class="icon-box effect medium border col-lg-2">
                                            <div class="icon">
                                                <a href="<?= h($contactUsCm->IG_6) ?>"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class ="col-lg-10"><br>
                                            <h5><?= $this->Form->control('IG_6', array('type' => 'textarea2'));?></h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="text-uppercase"><?= $this->Form->control('Title_2', array('type'=>'textarea2'));?></h3>
                                <span><?= $this->Form->control('Body_2');?></span>
                                <div class="row">
                                        <br>
                                        <address><br>
                                            <h4>Contact Details</h4><br>
                                            <div style="font-weight: bold;">Address:</div>
                                            <?= $this->Form->control('Address', array('type'=>'textarea2')); ?><br>
                                            <div style="font-weight: bold;">Phone:</div>
                                            <?=$this->Form->control('Phone', array('type'=>'textarea2'));?><br>
                                            <div style="font-weight: bold;">Email:</div>
                                            <?= $this->Form->control('Email', array('type'=>'textarea2')); ?><br>
                                            <div style="font-weight: bold;">Website:</div>
                                            <?= $this->Form->control('Website', array('type'=>'textarea2')); ?>
                                        </address>
                                </div>
                                <div style="font-weight: bold;">Map:</div>
                                <?= $this->Form->control('Banner_photo_1', ['type'=>'file' , 'accept'=>'.png, .jpg, .jpeg']) ;?>
                            </div>
                        </div>
                    </div>
                </section>

            </fieldset>
            <div class="row d-flex justify-content-center align-content-center">
                <?= $this->Form->button(__('Submit')) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
