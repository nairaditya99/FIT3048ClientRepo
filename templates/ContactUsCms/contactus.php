<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AboutUsCm[]|\Cake\Collection\CollectionInterface $aboutUsCms
 *  * * @var \App\Model\Entity\contactUsCm $ContactUsCms_info
 */

?>
<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- SECTION GREY -->
    <section class="background-grey p-b-0">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center" data-animate="fadeInUp">
                <div class="heading-text heading-section text-center mt-5">
                    <h1>Contact Us</h1>
                    <p>Interest in CCX? Get in touch with us today!</p>
                </div>
                <div class="col-lg-5"> <img alt="" src="images/other/polo-iphone6-v3.png"> </div>
            </div>
        </div>
    </section>
    <!-- end: SECTION GREY -->
    <!-- CONTENT -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase"><?= h($ContactUsCms_info->Title_1) ?></h3>
                    <p><?= h($ContactUsCms_info->Body_21) ?></p>
                    <div class="m-t-30">
                        <div class="col-lg-4">
                            <div class="icon-box effect medium border">
                                <div class="icon">
                                    <a href="<?= h($ContactUsCms_info->IG_1) ?>"><i class="fa fa-instagram"></i></a>
                                </div>
                                <BR>
                                <h5><?= h($ContactUsCms_info->IG_1) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-30">
                            <div class="icon-box effect  border">
                                <div class="icon">
                                    <a href="<?= h($ContactUsCms_info->IG_2) ?>"><i class="fa fa-instagram"></i></a>
                                </div>
                                <BR>
                                <h5><?= h($ContactUsCms_info->IG_2) ?></h5>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="col-lg-4">
                            <div class="icon-box effect medium border">
                                <div class="icon">
                                    <a href="<?= h($ContactUsCms_info->IG_3) ?>"><i class="fa fa-instagram"></i></a>
                                </div>
                                <BR>
                                <h5><?= h($ContactUsCms_info->IG_3) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="col-lg-4">
                            <div class="icon-box effect medium border">
                                <div class="icon">
                                    <a href="<?= h($ContactUsCms_info->IG_4) ?>"><i class="fa fa-instagram"></i></a>
                                </div>
                                <BR>
                                <h5><?= h($ContactUsCms_info->IG_4) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="col-lg-4">
                            <div class="icon-box effect medium border">
                                <div class="icon">
                                    <a href="<?= h($ContactUsCms_info->IG_5) ?>"><i class="fa fa-instagram"></i></a>
                                </div>
                                <BR>
                                <h5><?= h($ContactUsCms_info->IG_5) ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="col-lg-4">
                            <div class="icon-box effect medium border">
                                <div class="icon">
                                    <a href="<?= h($ContactUsCms_info->IG_6) ?>"><i class="fa fa-instagram"></i></a>
                                </div>
                                <BR>
                                <h5><?= h($ContactUsCms_info->IG_6) ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-uppercase"><?= h($ContactUsCms_info->Title_2) ?></h3>
                    <span><?= h($ContactUsCms_info->Body_2) ?></span>
                    <div class="row">
                        <div class="col-lg-6">
                            <br>
                            <address>
                                <h4>Contact Details</h4><br><br>
                                <div class="row"></div>
                                <div style="font-weight: bold;">Address:</div>
                                <?= h($ContactUsCms_info->Address) ?><br><br>
                                <div style="font-weight: bold;">Phone:</div>
                                 <?= h($ContactUsCms_info->Phone) ?><br><br>
                                <div style="font-weight: bold;">Email:</div>
                                <?= h($ContactUsCms_info->Email) ?><br><br>
                                <div style="font-weight: bold;">Website:</div>
                                <?= h($ContactUsCms_info->Website) ?><br><br>

                            </address>
                        </div>
                    </div>

                    <img src="<?=$this->Html->Url->image(h($ContactUsCms_info->Banner_photo_1))?>" alt="bts-gif" width="100%">

                </div>

            </div>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-uppercase">find us on social media</h3>
                    <div class="mb-4 social-icons  social-icons-large social-icons-border social-icons-colored-hover">
                        <ul>
                            <li class="social-rss"><a href="https://www.rss.com/"><i class="fa fa-rss"></i></a></li>
                            <li class="social-facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
                            <li class="social-twitter"><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-vimeo"><a href="https://www.vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                            <li class="social-youtube"><a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
                            <li class="social-instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li class="social-pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                            <li class="social-dribbble"><a href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-skype"><a href="https://www.skype.com/"><i class="fa fa-skype"></i></a></li>
                            <li class="social-linkedin"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-wordpress"><a href="https://www.wordpress.com/"><i class="fa fa-wordpress"></i></a></li>
                            <li class="social-flickr"><a href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end: Page Content -->
</div>
<!-- end: Body Inner -->



</body>
