<?php
// Change page title and meta tags here
$title = "Robust IT Training | Career Advice";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$title = "Robust IT Training | Career Advice";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";

$leadIsFrom = "Lead is from /career-advice";

require './assets/php/inc/header.php';
require './assets/php/inc/nav.php';
?>

<div id="page contact" class="section">


    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7"
        data-bg-image="assets/images/bg/breadcrumb-bg-five.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Career Advice.</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="<?php echo SITE_ADDR ?>/">Home</a></li>
                    <li class="current">Career Advice</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <div class="section section-padding-t90-b100">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title  mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title py-5">For Students</h2>

                <p>
                    As a company that supports students fully throughout our courses, it would be remiss not to aid with
                    the recruitment process. A new career, career change or a step up in the industry can be daunting.
                    Our team is here to help.
                </p>
                <ul>
                    <li>CV writing</li>
                    <li>LinkedIn profile</li>
                    <li>Understanding the value of networking</li>
                    <li>Job searching</li>
                    <li>Interview techniques</li>
                    <li>Realistic expectations and career progression</li>
                </ul>



            </div>
            <!-- Section Title End -->

            <!-- Section Title Start -->
            <div class="section-title  mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title py-5">For Employers</h2>

                <p>
                    Looking for your next hire? Being an official provider for multiple IT qualifications, we have
                    numerous quality candidates for roles across this industry. Our training packages have been designed
                    to help ready our clients for the workplace.
                </p>
                <p>
                    If you are part of the armed forces covenant, we are an ELCAS provider and have many students
                    transitioning from the military with specialist skillsets and abilities
                </p>


                <!-- Animation Shape Start -->
                <div class="shape shape-1 scene">
                    <span data-depth="4"><img src="assets/images/shape-animation/video-shape-1.png" alt="shape"></span>
                </div>
                <!-- Animation Shape End -->

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
                            <h2 class="title text-light">Speak to our recruitment team.</h2>
                            <p class="sub-title text-light">We have made it easier for you to reach us and begin your
                                learning journey.
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