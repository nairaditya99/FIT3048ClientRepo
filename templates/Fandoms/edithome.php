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
                <h1>Edit Fandoms Home Page</h1>
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
            <?= $this->Form->create($fandom) ?>
            <section class="fullscreen background-white" data-bg-parallax="images/parallax/26.jpg">
                <div class="bg-overlay"></div>
                <div class="container-wide">
                    <div class="text-middle">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="heading-text  text-dark">
                                    <h5 class="text-uppercase">Featured</h5>
                                    Title:
                                    <?= $this->Form->control('Section_One_Title',array('type' => 'textarea2'))?>
                                    <br>
                                    Body:
                                    <?= $this->Form->control('Section_One_Body')?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="shadow ml-5"><br><br><br><br><br>Youtube Video:
                                    <?= $this->Form->control('Section_One_Video_URL')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><
                <div class="col-md-12 row d-flex justify-content-center align-content-center">
                    <?= $this->Form->button(__('Submit')) ?>
                </div>
            </section>


            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
