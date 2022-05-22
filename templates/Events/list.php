<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 * @var \array $e1
 * @var \array $e2
 * @var \array $e3
 * @var \array $v1
 * @var \array $v2
 * @var \array $v3
 */
?>

<?php

$url = 'https://serpapi.com/search.json?engine=google_events&q=Kpop+&location=Australia&api_key=e63836a38cee4f392cf6b68756557688e7fc704a4310050e7c7f0b01fbd76698';
$response = file_get_contents($url);
$EventsData = json_decode($response);
$ImageInfo = json_decode($response);

?>


<div id="ajaxArea">
    <div class="pageContentArea">

        <!-- SECTION GREY -->
        <section class="background-grey p-b-0">
            <div class="container">
                <div class="row align-items-center d-flex justify-content-center" data-animate="fadeInUp">
                    <div class="heading-text heading-section text-center mt-5">
                            <h1>Events</h1>
                            <p>KPOP Events for Our Aussie Audience!</p>
                    </div>
                    <div class="col-lg-5"> <img alt="" src="images/other/polo-iphone6-v3.png"> </div>
                </div>
            </div>
        </section>
        <!-- end: SECTION GREY -->

        <!--=================================
        Latest Events
        =================================-->
        <?php
        error_reporting(    E_ALL ^ E_NOTICE);

        ?>

        <section id="latest-events">
            <div class="container">
                <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="20">
                    <?php $i=0; foreach ($EventsData->events_results as $Events){?>
                        <div class="portfolio-item light-bg no-overlay img-zoom ct-photography ct-marketing ct-media">
                            <div class="portfolio-item-wrap">
                                <div class="portfolio-image">
                                    <a href="<?php echo $Events->link ?>" target="_blank" ><img src="<?php echo $Events->thumbnail ?>" alt=""></a>
                                </div>
                                <div class="portfolio-description">
                                    <a href="<?php echo $Events->link ?>" target="_blank">
                                        <h3><?php echo $Events->title ?></h3>
                                        <span><?php echo $Events->date->start_date ?></span><br>
                                        <span><?php echo $Events->venue->name ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php if (++$i == 15) break;} ?>
                </div>
            </div><!--//container-->
        </section>
        <div class="clearfix"></div>

        <!--=================================
        Previous Events
        =================================-->


    </div><!--pageContent-->
</div><!--ajaxwrap-->

