<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Fandom $fandom_info
 */
?>
<!-- SECTION DARK -->

<section class="text-light" data-bg-video="video/for-benny/for-benny.mp4">
    <div class="container">
        <div class="row align-items-center">
            <div class="heading-text text-center text-light">
                <h1>BTS Home</h1>
                <p>
                    BTS Home
                    This site helps one to know who BTS artists are, what they do, their individual and group journeys
                    from they first started in 2013 to where they are today in 2022. Information about their fan
                    communities (fandom) and their projects you can join; their albums and tracks; and the latest
                    official news updates.</p>
                <!--                <a class="btn btn-primary" href="#"><i class="fa fa-tint"></i> Learn more</a>-->
            </div>
        </div>
    </div>
</section>

<section class="fullscreen background-white" data-bg-parallax="images/parallax/26.jpg">
        <div class="bg-overlay"></div>
        <div class="container-wide">
            <div class="container-fullscreen">
                <div class="text-middle">
                    <div class="row justify-content-between">
                        <div class="col-md-5">
                            <div class="heading-text  text-dark">
                                <h5 class="text-uppercase">Featured
                                </h5>
                                <h2><span><?= h($fandom_info->Section_One_Title)?></span></h2>
                                    <p><?= h($fandom_info->Section_One_Body)?></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="shadow ml-5">
                                <iframe height="450"
                                    src="<?= h($fandom_info->Section_One_Video_URL)?>" type="video/mp4"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Fullscreen HTML5 video -->

