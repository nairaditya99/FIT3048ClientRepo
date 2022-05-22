<!-- SECTION GREY -->
<section class="background-grey p-b-0">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center" data-animate="fadeInUp">
            <div class="heading-text heading-section text-center mt-5">
                <h1>Choose Layout</h1>
                <p>Customise my user experience!</p>
            </div>
            <div class="col-lg-5"> <img alt="" src="images/other/polo-iphone6-v3.png"> </div>
        </div>
    </div>
</section>
<!-- end: SECTION GREY -->

</section>
<!-- end: Page title -->
<!-- Content -->
<section id="page-content">
    <div class="container">
        <!-- Portfolio Filter -->
        <nav class="grid-filter gf-outline" data-layout="#portfolio">
            <ul>
                <li class="active"><a href="#" data-category="*">Show All</a></li>
                <li><a href="#" data-category=".ct-dynamic">Animation</a></li>
                <li><a href="#" data-category=".ct-bw">Black & White</a></li>
                <li><a href="#" data-category=".ct-grid">Grid Layout</a></li>
            </ul>
            <div class="grid-active-title">Show All</div>
        </nav>
        <!-- end: Portfolio Filter -->
        <!-- Portfolio -->
        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="0">
            <!-- portfolio item -->
            <div class="portfolio-item img-zoom">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home']) ?>"><img src="<?=$this->Html->Url->image('/img/hp1.png') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home']) ?>">
                            <h3>HOMEPAGE 1</h3>
                            <span>Navigation Overlay / Dynamic Title</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item img-zoom">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home1']) ?>"><img src="<?=$this->Html->Url->image('/img/hp2.png') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home1']) ?>">
                            <h3>HOMEPAGE 2</h3>
                            <span>Video Slider / Events Focus</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-grid">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home3']) ?>"><img src="<?=$this->Html->Url->image('/img/hp4.png') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home3']) ?>">
                            <h3>HOMEPAGE 3</h3>
                            <span>Grid Layout / Events Focus</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-dynamic">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home2']) ?>"><img src="<?=$this->Html->Url->image('/img/hp3.png') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home2']) ?>">
                            <h3>HOMEPAGE 4</h3>
                            <span>Dot Effect / News Focus</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->

            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-dynamic">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home4']) ?>"><img src="<?=$this->Html->Url->image('/img/hp5.png') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home4']) ?>">
                            <h3>HOMEPAGE 5</h3>
                            <span>Snow Effect</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->
            <!-- portfolio item -->
            <div class="portfolio-item img-zoom ct-bw">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home5']) ?>"><img src="<?=$this->Html->Url->image('/img/hp6.png') ?>" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home5']) ?>">
                            <h3>HOMEPAGE 6</h3>
                            <span>Parallax</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end: portfolio item -->
        </div>
        <!-- end: Portfolio -->
    </div>
</section>
<!-- end: Content -->
