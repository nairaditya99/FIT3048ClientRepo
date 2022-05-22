<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fandom $fandom_info
 */
?>

<!-- SECTION VIDEO BACKGROUND -->
<section class="text-light" data-bg-video="video/for-benny/for-benny.mp4">
    <div class="container">
        <div class="row align-items-center">
            <div class="heading-text text-center text-light">
                <h1>BTS Introduction</h1>
                <p>Who is BTS? An Army Introduction</p>
<!--                <a class="btn btn-primary" href="#"><i class="fa fa-tint"></i> Learn more</a>-->
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
                        <h4><?= h($fandom_info->Section_Four_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12"><?= h($fandom_info->Section_Four_Body)?></div>
        </div>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="grid-layout grid-1-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$this->Html->Url->image(h($fandom_info->Section_Four_Video_URL))?>" data-lightbox="gallery-image"><img src="<?=$this->Html->Url->image(h($fandom_info->Section_Four_Video_URL))?>"></a>
            </div>
        </div>
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
                            <h4><span><?= h($fandom_info->Section_Five_Title)?></span></h4>
                            <p><?= h($fandom_info->Section_Five_Body)?></p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="shadow ml-5">
                            <iframe height="450"
                                    src="<?= h($fandom_info->Section_Five_Video_URL)?>" type="video/mp4"></iframe>
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
                        <h4><?= h($fandom_info->Section_Six_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12 p-b-20">
                    <p style = "font-size: 120%;" ><?= h($fandom_info->Section_Six_Body)?></p>
                </div>

                <div class="ratio ratio-16x9">
                        <iframe src="<?= h($fandom_info->Section_Six_Video_URL)?>"></iframe>
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
                        <h4><?= h($fandom_info->Section_Seven_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12 p-b-20">
                    <p style = "font-size: 120%;"><?= h($fandom_info->Section_Seven_Body)?></p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom_info->Section_Seven_Photo)?>" allowfullscreen></iframe>
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
                        <h4><?= h($fandom_info->Section_Eight_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;"><?= h($fandom_info->Section_Eight_Body)?></p><br>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom_info->Section_Eight_Photo)?>" allowfullscreen></iframe>
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
                        <h4><?= h($fandom_info->Section_Nine_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;">
                    </p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom_info->Section_Nine_Video_URL)?>" allowfullscreen></iframe>
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
                        <h4><?= h($fandom_info->Section_Ten_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;">
                    </p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom_info->Section_Ten_Video_One_URL)?>" allowfullscreen></iframe>
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
                        <h4><?= h($fandom_info->Section_Eleven_Title)?></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p style = "font-size: 120%;">
                    </p>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="<?= h($fandom_info->Section_Eleven_Photo)?>" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>




