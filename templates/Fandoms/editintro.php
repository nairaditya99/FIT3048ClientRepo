<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fandom $fandom
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
                <h1>Edit Fandom Introduction Page</h1>
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

<div class="row">
    <div class="column-responsive column-80">
        <div class="fandoms form content">
            <?= $this->Form->create($fandom, ['type'=>'file']) ?>

            <section id="page-content">
                <div class="container">
                    <h4>Section 1</h4>
                    <div class="grid-system-demo-live">
                        <div class="row">
                            <div class="col-lg-12 p-t-80 p-b-20">
                                <div class="heading-text heading-section">
                                    Section 1 Title:
                                    <h4><?= $this->Form->control('Section_Four_Title',array('type' => 'textarea2'))?></h4>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                Section 1 Body:
                                <?= $this->Form->control('Section_Four_Body')?></div>
                            <br><br>
                        </div>
                        Section 1 Photo:
                        <?= $this->Form->control('Section_Four_Video_URL',  ['type'=>'file'])?>
                    </div>
            </section>



            <section class="fullscreen" data-bg-parallax="images/parallax/26.jpg">
                <div class="bg-overlay"></div>
                <div class="container-wide">
                    <div class="text-middle">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="heading-text  text-light">
                                    <h4>Section 2:</h4><br><br>
                                    <h5 class="text-uppercase">Features
                                    </h5>
                                    Section 2 Title:<?= $this->Form->control('Section_Five_Title',array('type' => 'textarea2'))?><br>
                                    Section 2 Body:<?= $this->Form->control('Section_Five_Body')?>
                                </div>
                            </div>
                            <div class="col-md-6"><br><br><br><br><br><br><br><br><br><br>
                                <div class="whitetext"> Section 2 Video:</div>
                                <div class="shadow ml-5">
                                    <?= $this->Form->control('Section_Five_Video_URL')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="page-content">
                <div class="container">
                    <h4>Section 3:</h4>
                    <div class="grid-system-demo-live">
                        <div class="row">
                            <div class="col-lg-12 p-t-80 p-b-20">
                                <div class="heading-text heading-section">
                                    Section 3 Title:<?= $this->Form->control('Section_Six_Title',array('type' => 'textarea2'))?><br>
                                    Section 3 Body:<?= $this->Form->control('Section_Six_Body')?>
                                </div><br>
                                <div class="col-lg-12 p-b-20">Section 3 Video:
                                    <?= $this->Form->control('Section_Six_Video_URL')?>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="page-content">
                <div class="container">
                    <h4>Section 4:</h4>
                    <div class="grid-system-demo-live">
                        <div class="row">
                            <div class="col-lg-12 p-t-80 p-b-20">
                                <div class="heading-text heading-section">
                                    Section 4 Title:<?= $this->Form->control('Section_Seven_Title', array('type' => 'textarea2'))?><br>
                                    Section 4 Body:<?= $this->Form->control('Section_Seven_Body')?>
                                </div>
                            </div>
                            <div class="col-lg-12 p-b-20">Section 4 Video:
                                <?= $this->Form->control('Section_Seven_Photo')?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="page-content">
                <div class="container">
                    <h4>Section 5:</h4>
                    <div class="grid-system-demo-live">
                        <div class="row">
                            <div class="col-lg-12 p-t-80 p-b-20">
                                <div class="heading-text heading-section">
                                    Section 5 Title:<?= $this->Form->control('Section_Eight_Title', array('type' => 'textarea2'))?><br>
                                    Section 5 Body:<?= $this->Form->control('Section_Eight_Body')?>
                                </div>
                            </div>
                            <div class="col-lg-12 p-b-20">Section 5 Video:
                                <?= $this->Form->control('Section_Eight_Photo')?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="page-content">
                <div class="container">
                    <h4>Section 6:</h4>
                    <div class="grid-system-demo-live">
                        <div class="row">
                            <div class="col-lg-12 p-t-80 p-b-20">
                                <div class="heading-text heading-section">
                                    Section 6 Title:<?= $this->Form->control('Section_Nine_Title', array('type' => 'textarea2'))?><br><br>
                                    Section 6 Video:
                                    <?= $this->Form->control('Section_Nine_Video_URL')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="page-content">
                <div class="container">
                    <h4>Section 7:</h4>
                    <div class="grid-system-demo-live">
                        <div class="row">
                            <div class="col-lg-12 p-t-80 p-b-20">
                                Section 7 Title:<?= $this->Form->control('Section_Ten_Title',array('type' => 'textarea2'))?><br>
                                Section 7 Video:
                                <?= $this->Form->control('Section_Ten_Video_One_URL')?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="page-content">
                <div class="container">
                    <h4>Section 8:</h4>
                    <div class="grid-system-demo-live">
                        <div class="row">
                            <div class="col-lg-12 p-t-80 p-b-20">
                                <div class="heading-text heading-section">
                                    Section 8 Title:<?= $this->Form->control('Section_Eleven_Title',array('type' => 'textarea2'))?><br>
                                    Section 8 Video:
                                    <?= $this->Form->control('Section_Eleven_Photo')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-md-12 row d-flex justify-content-center align-content-center">
                <?= $this->Form->button(__('Submit')) ?>
            </div><br>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
