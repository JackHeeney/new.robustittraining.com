<?php
// Change page title and meta tags here
$title = "Robust IT Training | Support Tickets";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$title = "Robust IT Training | Support Tickets";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";

$leadIsFrom = "Lead is from /support-tickets";

require './assets/php/inc/header.php';
require './assets/php/inc/nav.php';

?>

<div id="page contact" class="section">


    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7"
        data-bg-image="<?php echo SITE_ADDR ?>/assets/images/bg/support-ticket.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Support Tickets.</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="<?php echo SITE_ADDR ?>/">Home</a></li>
                    <li class="current">Support Tickets</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <div class="section section-padding-t90-b100">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title">Do we know your issue already?</h2>

            </div>
            <!-- Section Title End -->

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                <div class="col mb-6" data-aos="fade-up">
                    <a href="javascript(void);" data-toggle="modal" data-target="#supportModal" alt="pop up form">
                        <!-- Contact Information Start -->
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject"
                                    src="<?php echo SITE_ADDR ?>/assets/images/svg/linea/linea-arrows-circle-plus.svg"
                                    alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Ready to take exam?</h4>
                                <span class="info-text"> I am ready to take my exam what do I do now?</span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </a>
                </div>
                <div class="col mb-6" data-aos="fade-up">
                    <!-- Contact Information Start -->
                    <a href="javascript(void);" data-toggle="modal" data-target="#supportModal" alt="pop up form">
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject"
                                    src="<?php echo SITE_ADDR ?>/assets/images/svg/linea/linea-arrows-circle-plus.svg"
                                    alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Course access?</h4>
                                <span class="info-text"> I need access to the next course on my program?</span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </a>
                </div>
                <div class="col mb-6" data-aos="fade-up">
                    <a href="javascript(void);" data-toggle="modal" data-target="#supportModal" alt="pop up form">
                        <!-- Contact Information Start -->
                        <div class="contact-info" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject"
                                    src="<?php echo SITE_ADDR ?>/assets/images/svg/linea/linea-arrows-circle-plus.svg"
                                    alt="">
                            </div>
                            <div class="info">
                                <h4 class="title">Login Issues?</h4>
                                <span class="info-text"> My log in details are not working?

                                </span>
                            </div>
                        </div>
                        <!-- Contact Information End -->
                    </a>
                </div>
            </div>


            <!-- Animation Shape Start -->
            <div class="shape shape-1 scene">
                <span data-depth="4"><img src="assets/images/shape-animation/video-shape-1.png" alt="shape"></span>
            </div>
            <!-- Animation Shape End -->



        </div>
    </div>

    <div class="section section-padding-t90-b100">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title  mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title py-5">Robust IT Technical Support</h2>

                <p>
                    If you are in need of some technical support fill in the form below to request a member of our
                    technical support team give you a call, or email back. Leaving a breif outline of the problem you
                    are having will help the support technician to resolve your issue quicker so please leave
                    description of this aswell
                </p>
            </div>
            <!-- Section Title End -->
        </div>
    </div>

    <!-- Contact Form Section Start -->
    <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255, 1) 90%);">
        <div class="contact-form-section section section-padding-t90-b100" data-overlay="0.8"
            data-bg-image="<?php echo SITE_ADDR ?>/assets/images/hero-image/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                        <!-- Section Title Start -->
                        <div class="section-title text-center " data-aos="fade-up">
                            <h2 class="title text-light">Get the support you need!</h2>
                            <p class="sub-title text-light">Request support using the form below and one of our support
                                technicians will be in touch.
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
                                        <input type="phone" placeholder="Phone *" name="strLeadPhone1"
                                            id="strLeadPhone1">
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
    </div>
    <!-- Contact Form Section End -->


</div>

<!-- Brand Section Start -->
<div class="brand-section section section-padding">
    <div class="container">
        <div class="row my-lg-10 my-10">
            <div class="col-lg-12">
                <? require './assets/php/component/brand.php';
                    ?>
            </div>
        </div>
    </div>
</div>
<!-- Brand Section End -->


<?php

require './assets/php/inc/footer.php';

?>