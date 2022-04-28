<?php
// Change page title and meta tags here
$title = "Robust IT Training | Contact Us";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$title = "Robust IT Training | Contact Us";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";

$leadIsFrom = "Lead is from /contact-us";

require './assets/php/inc/header.php';
require './assets/php/inc/nav.php';
?>

<div id="page contact" class="section">


    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7"
        data-bg-image="assets/images/bg/breadcrumb-bg-five.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Get in touch.</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="<?php echo SITE_ADDR ?>/">Home</a></li>
                    <li class="current">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Contact Information Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title">Contact our professional course advisors today.</h2>

            </div>
            <!-- Section Title End -->

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
                                <a href="#">info@robustittraining.com</a>
                                <br>
                                <a href="#">support@robustit.co.uk</a>
                                <br>
                                <a href="#">compliance@robustittraining.com</a>


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

    <!--Google Map Area Start-->
    <!-- <div class="google-map-area section text-center section-padding-bottom">
        <div class="container">
            <div class="contact-map-area">
                <iframe class="contact-map"
                    src=""
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div> -->
    <!--Google Map Area Start-->

    <!-- Contact Form Section Start -->
    <div class="contact-form-section section section-padding-t90-b100" data-bg-color="#fff">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2 class="title fz-32">Get in touch today!</h2>
                        <p class="sub-title">We have made it easier for you to reach us and begin your learning journey.
                        </p>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-form">
                        <form action="https://robust.flg360.co.uk/api/APIHTTPPost.php" method="post"
                            onsubmit="javascript:return fncValidateForm(this);" id="" name="request_form"
                            id="contact-form">

                            <!-- form details for sending info to leadsite -->
                            <input type="hidden" name="intLeadGroupID" value="54553" />
                            <input type="hidden" name="strSource" value="" />
                            <input type="hidden" name="strMedium" value="" />
                            <input type="hidden" name="strTerm" value="" />
                            <input type="hidden" name="intSiteID" value="15334" />
                            <input type="hidden" name="intReferrerBuyerID" value="0" />
                            <input type="hidden" name="intDPAStatusPhoneID" value="1">
                            <input type="hidden" name="intDPAStatusSMSID" value="1">
                            <input type="hidden" name="intDPAStatusEmailID" value="1">
                            <input type="hidden" name="strAPISuccessURL" value="<?php echo SITE_ADDR ?>/thankyou" />
                            <input type="hidden" name="strAPIFailURL" value="<?php echo SITE_ADDR ?>/sorry" />
                            <input type="hidden" name="strLeadData2" id="strLeadData2"
                                value="<?php echo $leadIsFrom ?>/" />
                            <!-- //end -->

                            <div class="row mb-n6">
                                <div class="col-md-6 col-12 mb-6">
                                    <input type="text" placeholder="First Name *" name="strLeadFirstName"
                                        id="strLeadFirstName">
                                </div>
                                <div class="col-md-6 col-12 mb-6">
                                    <input type="text" placeholder="Last Name *" name="strLeadLastName"
                                        id="strLeadLastName">
                                </div>
                                <div class="col-md-6 col-12 mb-6">
                                    <input type="email" placeholder="Email *" name="strLeadEmail" id="strLeadEmail">
                                </div>
                                <div class="col-md-6 col-12 mb-6">
                                    <input type="phone" placeholder="Phone *" name="strLeadPhone1" id="strLeadPhone1">
                                </div>
                                <div class="col-12 mb-6">
                                    <textarea name="message" placeholder="Message" name="strLeadData4"
                                        id="strLeadData4"></textarea>
                                </div>
                                <div class="col-12 text-center mb-6">
                                    <button type="submit" name="submit" value="Submit"
                                        class="btn btn-primary btn-hover-secondary">Submit <i
                                            class="fas fa-chevron-right fcr-animate"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Section End -->


</div>



<?php

require './assets/php/inc/footer.php';

?>