<?php
// Change page title and meta tags here
$title = "Robust IT Training | Bad Request!";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$title = "Robust IT Training | Bad Request!";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";

$leadIsFrom = "Lead is from /bad-request";

require '../assets/php/inc/header.php';
require '../assets/php/inc/nav.php';
?>

<div id="page contact" class="section">


    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7"
        data-bg-image="<?php echo SITE_ADDR ?>/assets/images/bg/breadcrumb-bg-five.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Bad Request!</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="<?php echo SITE_ADDR ?>/">Home</a></li>
                    <li class="current">Bad Request!</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->


    <div class="section section-padding-t90-b100">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title  mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title py-5">You have made a bad request.</h2>

                <p>
                    Please check the URL and try again, or click the button
                    to return to the <a class="text-rb-gradient" href="<?php echo SITE_ADDR ?>/" alt="home">home
                        page</a>
                </p>



            </div>
            <!-- Section Title End -->



        </div>
    </div>

</div>


<?php

require '../assets/php/inc/footer.php';

?>