<?php
// Change page title and meta tags here
$title = "Robust IT Training | Sorry!";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$title = "Robust IT Training | Sorry!";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";

$leadIsFrom = "Lead is from /sorry";

require './assets/php/inc/header.php';
require './assets/php/inc/nav.php';
?>

<div id="page contact" class="section">


    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7"
        data-bg-image="assets/images/bg/breadcrumb-bg-five.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Your enquiry was unsuccessful.</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="<?php echo SITE_ADDR ?>/">Home</a></li>
                    <li class="current">Sorry</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->


    <div class="section my-10">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title  mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title py-5">Your form was unsuccessfully submitted.</h2>

                <p>
                    Oops, it looks like there was an error dealing with your request. There seems to have been a problem
                    - please e-mail <a href="mailto:info@robustit.co.uk">info@robustit.co.uk</a> or call 02038 757 827
                    (for uk) or 0800 677 1232 (freephone).
                </p>
            </div>
            <!-- Section Title End -->
        </div>
    </div>


    <!-- Contact Information Section Start -->
    <div class="section ">
        <div class="container shape-animate">



            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                <div class="col mb-6" data-aos="fade-up">
                    <!-- Contact Information Start -->
                    <div class="contact-info" data-vivus-hover>
                        <div class="icon">
                            <img class="svgInject" src="assets/images/svg/linea/linea-basic-map.svg" alt="">
                        </div>
                        <div class="info">
                            <h4 class="title">Our Locations</h4>
                            <span class="info-text"> Harlow Enterprise Hub, Kao Hockham Building Edinburgh Way, Harlow,
                                Essex, CM20 2NQ.</span>
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>
                <div class="col mb-6" data-aos="fade-up">
                    <!-- Contact Information Start -->
                    <div class="contact-info" data-vivus-hover>
                        <div class="icon">
                            <img class="svgInject" src="assets/images/svg/linea/linea-basic-message-txt.svg" alt="">
                        </div>
                        <div class="info">
                            <h4 class="title">Give Us A Call</h4>
                            <span class="info-text">
                                Sales Team: 02038 757 827 <br>
                                Support Team: 02038 757 831 <br>
                                Freephone: 0800 677 1232
                            </span>
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>
                <div class="col mb-6" data-aos="fade-up">
                    <!-- Contact Information Start -->
                    <div class="contact-info" data-vivus-hover>
                        <div class="icon">
                            <img class="svgInject" src="assets/images/svg/linea/linea-basic-mail-open-text.svg" alt="">
                        </div>
                        <div class="info">
                            <h4 class="title"> Help Desk</h4>
                            <span class="info-text">
                                <a href="#">info@robustit.co.uk</a>
                                <br>
                                <a href="#">support@robustit.co.uk</a>
                                <br>
                                <a href="#">compliance@robustit.co.uk</a>


                            </span>
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>
            </div>

            <!-- Animation Shape Start -->
            <div class="shape shape-1 scene">
                <span data-depth="4"><img src="assets/images/shape-animation/video-shape-1.png" alt="shape"></span>
            </div>
            <!-- Animation Shape End -->


            <!-- Animation Shape Start -->
            <div class="shape shape-2 scene">
                <span data-depth="4"><img src="assets/images/shape-animation/video-shape-1.png" alt="shape"></span>
            </div>
            <!-- Animation Shape End -->


        </div>
    </div>
    <!-- Contact Information Section End -->


</div>



<?php

require './assets/php/inc/footer.php';

?>