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
                <h1>Edit Fandom Video Page</h1>
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
            <br><br>
            <div class="container">
                <div class="row">
                    <h4>Carousel sliding photos:</h4>
                </div><br><br>
                <div class="row">
                    <div class="col">
                        Photo 1:
                        <?= $this->Form->control('Section_Twelve_Photo', ['type'=>'file'])?>
                    </div>
                    <div class="col">
                        Photo 2:
                        <?= $this->Form->control('Section_Ten_Video_Two_URL', ['type'=>'file'])?>
                    </div>
                    <div class="col">
                        Photo 3:
                        <?= $this->Form->control('Section_Ten_Photo', ['type'=>'file'])?>
                    </div>
                </div>
            </div>

            <br><br><br><br><br>

            <div class="row m-b-40 p-b-20">
                <div class="col-lg-8 center">
                    <div class="project-description text-center">
                        <h2><?= $this->Form->control('Section_Thirteen_Title',array('type' => 'textarea2'))?></h2>
                        <p style = "font-size: 120%;"><?= $this->Form->control('Section_Thirteen_Body')?></p>
                    </div>
                </div>
            </div>

            <br><br><br><br><br>

            <div class="container">
                <h4>Section 1:</h4><br>
                Section 1 Title:
                <?= $this->Form->control('Section_Fourteen_Title',array('type' => 'textarea2'))?><br>
                Section 2 Body:
                <?= $this->Form->control('Section_Fourteen_Body')?><br>
                Call to Action link:<br>
                (Click here to view the whole dedicated playlist of over 100 videos)
                <?= $this->Form->control('Section_Nine_Body',array('type' => 'textarea2'))?><br><br>
                Photo:
                <?= $this->Form->control('Section_Fourteen_Photo', ['type'=>'file'])?>
            </div>

            <br><br><br><br><br>

            <div class="container">
                <h4>Section 2:</h4><br>
                Section 2 Title:
                <?= $this->Form->control('Section_Fifteen_Title',array('type' => 'textarea2'))?><br>
                Section 2 Body:
                <?= $this->Form->control('Section_Fifteen_Body')?><br>
                Section 2 Call to Action link:<br>
                (Click here to view the whole dedicated playlist)
                <?= $this->Form->control('Section_Ten_Body_One',array('type' => 'textarea2'))?><br><br>
                Section 2 Photo:
                <?= $this->Form->control('Section_Fifteen_Photo', ['type'=>'file'])?>
            </div>

            <br><br><br><br>

            <div class="container">
                <h4>Section 3:</h4><br>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        Section 3 Photo:
                        <?= $this->Form->control('Section_Three_Video_URL', ['type'=>'file'])?>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-text heading-section mt-5">
                            Section 3 Title:
                            <?= $this->Form->control('Section_Two_Photo',array('type' => 'textarea2'))?><br>
                            Section 3 Body:
                            <?= $this->Form->control('Section_Two_Body')?><br>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br><br><br>

            <div class="container">
                <h4>Section 4:</h4><br>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="heading-text heading-section mt-5">
                            Section 4 Title:
                            <?= $this->Form->control('Home_Page_Title',array('type' => 'textarea2'))?><br>
                            Section 4 Body:
                            <?= $this->Form->control('Section_Ten_Body_Two')?><br>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        Section 4 Photo:
                        <?= $this->Form->control('Name', ['type'=>'file'])?>
                    </div>
                </div><br>
                Section 4 Video:
                <?= $this->Form->control('Home_Page_Photo',array('type' => 'textarea2'))?><br>
            </div>

            <br><br><br><br><br>

            <div class="container">
                <h4>Section 5:</h4><br>
                Section 5 Title:
                <?= $this->Form->control('Section_Three_Body',array('type' => 'textarea2'))?><br>
                Section 5 Body - 1:
                <?= $this->Form->control('Section_Twelve_Title')?><br><br>
                Section 5: Video Link - 1
                <?= $this->Form->control('Section_Thirteen_Photo',array('type' => 'textarea2'))?><br>
                Section 5: Video Link - 2
                <?= $this->Form->control('Section_Fifteen_Video_URL',array('type' => 'textarea2'))?><br><br>
                Section 5: Body - 2:
                <?= $this->Form->control('Section_Twelve_Body')?><br>
                Section 5: Body - 3:
                <?= $this->Form->control('Section_Eleven_Body')?>
            </div>

            <br><br><br><br><br>

            <div class="col-md-12 row d-flex justify-content-center align-content-center">
                <?= $this->Form->button(__('Submit')) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
