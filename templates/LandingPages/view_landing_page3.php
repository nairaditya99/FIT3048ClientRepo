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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LandingPage $landingPage
 */
?>
<!-- SECTION BOXED GRID -->
<section class="p-b-0">
    <div class="container">

        <!-- Portfolio -->
        <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="20">

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#page-content"><img src="<?=$this->Html->Url->image('/img/grid/9.jpg') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="#page-content">
                            <h3>Explore News</h3>
                            <span>Australia / Korea</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="<?=$this->Html->Url->image('/img/grid/8.jpg') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'Fandoms','action' => 'fandomHome']) ?>">
                            <h3>BTS Fandom</h3>
                            <span>Latest News / Events</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="<?= $this->Url->build(['controller' => 'AboutUsCms','action' => 'aboutus']) ?>"><img src="<?=$this->Html->Url->image('/img/grid/7.jpg') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'AboutUsCms','action' => 'aboutus']) ?>">
                            <h3>Contact CCX</h3>
                            <span>Research Study / Melbourne-Seoul</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="<?= $this->Url->build(['controller' => 'AboutUsCms','action' => 'aboutus']) ?>"><img src="<?=$this->Html->Url->image('/img/grid/6.jpg') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'AboutUsCms','action' => 'aboutus']) ?>">
                            <h3>About CCX</h3>
                            <span>Cross Culture / KPOP</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="<?=$this->Html->Url->image('/img/grid/10.jpg') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="portfolio-page-grid-gallery.html">
                            <h3>KPOP Events</h3>
                            <span>Find KPOP events in Melbourne</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->
        </div>
        <!-- end: Portfolio -->
    </div>


</section>
<!-- end: SECTION BOXED GRID -->
