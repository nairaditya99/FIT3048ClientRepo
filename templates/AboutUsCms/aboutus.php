<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AboutUsCm[]|\Cake\Collection\CollectionInterface $aboutUsCms
 * * @var \App\Model\Entity\AboutUsCm $AboutUsCms_info
 */

?>
<body>
<div class="body-inner">

    <!-- SECTION GREY -->
    <section class="background-grey p-b-0">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center" data-animate="fadeInUp">
                <div class="col-lg-12">
                    <div class="heading-text heading-section text-end mt-5">
                        <h1>About Us</h1>
                        <p>Who we are</p>
                    </div>
                </div>
                <div class="col-lg-5"> <img alt="" src="images/other/polo-iphone6-v3.png"> </div>
            </div>
        </div>
    </section>
    <!-- end: SECTION GREY -->
    </div>
    <!--end: Inspiro Slider -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="heading-text heading-section">
                        <h2><?= h($AboutUsCms_info->S1_Title) ?></h2>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12"><?= h($AboutUsCms_info->S1_Body)?></div>
                </div>

            </div>
        </div>
    </section>

    <! -- 1,2,3 DOT POINT SETION -->
    <section class="box-fancy section-fullwidth text-light p-b-0">
        <div class="row">
            <div style="background-color:#917d5d" class="col-lg-4">
                <h1 class="text-lg text-uppercase">01.</h1>
                <h3><?= h($AboutUsCms_info->S1_Sub_Title_1)?></h3>
                <span><?= h($AboutUsCms_info->S1_Sub_Body_1)?></span>
            </div>

            <div style="background-color:#a08c6c" class="col-lg-4">
                <h1 class="text-lg text-uppercase">02.</h1>
                <h3><?= h($AboutUsCms_info->S1_Sub_Title_2)?></h3>
                <span><?= h($AboutUsCms_info->S1_Sub_Body_2)?></span>
            </div>

            <div style="background-color:#ad9979" class="col-lg-4">
                <h1 class="text-lg text-uppercase">03.</h1>
                <h3><?= h($AboutUsCms_info->S1_Sub_Title_3)?></h3>
                <SPAN><?= h($AboutUsCms_info->S1_Sub_Body_3)?></SPAN>
            </div>
        </div>
    </section>

<section id="page-content" class="p-b-0">
    <div class="container">
        <h2 class="m-b-30" style="font-size: 25px; text-align: center; font-weight: bold;"><?= h($AboutUsCms_info->S2_Title) ?></h2>
        <div class="row m-b-40">


            <div class="sidebar sticky-sidebar col-lg-7">

                <div class="project-description" >
                    <h3 style="font-size: 15px; font-weight: bold"><?= h($AboutUsCms_info->S2_Sub_Title) ?></h3>
                </div>
                <div class="project-description" >
                    <h3 style="font-size: 15px;">1. &nbsp;<?= h($AboutUsCms_info->S2_Body) ?></h3>
                    <h3 style="font-size: 15px;">2. &nbsp;<?= h($AboutUsCms_info->S2_Sub_Body) ?></h3>
                </div>
                <h2 class="m-b-30" style="font-size: 25px;"><?= h($AboutUsCms_info->S3_Title) ?></h2>
                <div class="project-description" >
                    <h3 style="font-size: 15px; font-weight: bold"><?= h($AboutUsCms_info->S3_Sub_Title_1) ?></h3>
                    <h3 style="font-size: 15px;">&#11044; <?= h($AboutUsCms_info->S3_Sub_Body_1) ?></h3>
                    <h3 style="font-size: 15px; font-weight: bold"> <?= h($AboutUsCms_info->S3_Sub_Title_2) ?></h3>
                    <h3 style="font-size: 15px;">&#11044; <?= h($AboutUsCms_info->S3_Sub_Body_2) ?></h3>
                </div>
                <div class="project-description" >

                </div>
            </div>
            <div class="col-lg-4 offset-1">
                        <img src="<?=$this->Html->Url->image(h($AboutUsCms_info->S2_Sub_Photo))?>" width="100%">
                    <br><br><br><br><br>
                        <img src="<?=$this->Html->Url->image(h($AboutUsCms_info->S3_Photo))?>" width="100%">
            </div>
        </div>
    </div>

</section>
<!-- end: Content -->


</div>

</body>
