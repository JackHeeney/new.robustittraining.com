<?php
// Change page title and meta tags here
$title = "Robust IT Training | EC-Council | Certified Ethical Hacker";
$meta['keywords'] = "Cyber Security, Certified Ethical Hacker, CEH, EC-Council";
$meta['description'] = "Robust IT Training Certified Ethical Hacker course. Learn how to hack ethically.";

// Social media meta tags
$title = "Robust IT Training | EC-Council | Certified Ethical Hacker";
$meta['og:description'] = "Robust IT Training Certified Ethical Hacker course. Learn how to hack ethically";
$meta['og:image'] = "";
$meta['og:url'] = "";

$leadIsFrom = "Lead is from /offers/banner/certified-ethical-hacker";

require '../../assets/php/inc/header.php';
require '../../assets/php/inc/nav.php';
?>

<div id="page work-details" class="section">
    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.5"
        data-bg-image="<?php echo SITE_ADDR ?>/assets/images/hero-image/offer-facebook-certified-ethical-hacker.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title py-3 px-3">Become a Certified Ethical Hacker - CEH</h1>
                <h2 class="title-h2 py-3 px-3">The average Cyber Security salary is £65,000 - £95,000+
                </h2>

            </div>
        </div>

    </div>
    <!-- Page Title Section End -->

    <div class="section section-padding-t90-b100" data-bg-color="#fff">
        <div class="container shape-animate">


            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                <div class="col mb-6 order-lg-2 order-sm-1" data-aos="fade-up">
                    <!-- Contact Form Start -->
                    <div class="landing-form-area box-shadow" data-overlay="1">
                        <!-- Section Title Start -->
                        <div class="section-title text-center mb-7">
                            <h2 class="title text-light">Find out more!</h2>

                        </div>

                        <!-- ajax form id="contact-form" -->
                        <!-- Section Title End -->

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

                            <div class="row mb-n4">
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="text" placeholder="First Name *" name="strLeadFirstName"
                                        id="strLeadFirstName" required="required">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="text" placeholder="Last Name *" name="strLeadLastName"
                                        id="strLeadLastName" required="required">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="phone" placeholder="Phone *" name="strLeadPhone1" id="strLeadPhone1"
                                        required="required">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="email" placeholder="Email *" name="strLeadEmail" id="strLeadEmail"
                                        required="required">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            By ticking this box I acknowledge that Robust IT will collect and
                                            process information relating to me in accordance with the company <a
                                                class="text-rb-gradient" href="<?php echo SITE_ADDR ?>/privacy-policy"
                                                alt="privacy policy">Privacy Policy</a> and agree to be contacted in
                                            relation to my enquiry.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            By ticking this box I agree to receive promotional updates via digital and
                                            offline marketing channels. For further information about how your data is
                                            used and stored please see our <a class="text-rb-gradient"
                                                href="<?php echo SITE_ADDR ?>/privacy-policy"
                                                alt="privacy policy">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mb-4">
                                    <button type="submit" name="submit" value="Submit"
                                        class="btn btn-primary btn-hover-secondary">Submit <i
                                            class="fas fa-chevron-right fcr-animate"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>

                    </div>
                    <!-- Contact Form End -->

                </div>

                <div class="col mb-6 order-lg-1 order-sm-2" data-aos="fade-up">
                    <h2 class="mb-5">Enquire now and we’ll send you a free essential guide to careers in Cyber Security.
                    </h2>
                    <h2 class="mb-5">93% employment success.</h2>

                </div>

            </div>


            <!-- Animation Shape Start -->
            <div class="shape shape-2 scene">
                <span data-depth="4"><img src="<?php echo SITE_ADDR ?>/assets/images/shape-animation/video-shape-1.png"
                        alt="shape"></span>
            </div>
            <!-- Animation Shape End -->


        </div>
    </div>

    <div class="section section-padding-t90-b100" data-bg-color="#f8faff">
        <div class="container shape-animate">


            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                <div class="col mb-6 order-lg-1 order-sm-2" data-aos="fade-up">
                    <!-- Contact Form Start -->
                    <div class="landing-form-area box-shadow" data-overlay="1">
                        <!-- Section Title Start -->
                        <div class="section-title text-center mb-7">
                            <h2 class="title text-light">Find out more!</h2>

                        </div>

                        <!-- ajax form id="contact-form" -->
                        <!-- Section Title End -->

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

                            <div class="row mb-n4">
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="text" placeholder="First Name *" name="strLeadFirstName"
                                        id="strLeadFirstName" required="required">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="text" placeholder="Last Name *" name="strLeadLastName"
                                        id="strLeadLastName" required="required">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="phone" placeholder="Phone *" name="strLeadPhone1" id="strLeadPhone1"
                                        required="required">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <input type="email" placeholder="Email *" name="strLeadEmail" id="strLeadEmail"
                                        required="required">
                                </div>
                                <div class="col-md-12 col-12 mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            By ticking this box I acknowledge that Robust IT will collect and
                                            process information relating to me in accordance with the company <a
                                                class="text-rb-gradient" href="<?php echo SITE_ADDR ?>/privacy-policy"
                                                alt="privacy policy">Privacy Policy</a> and agree to be contacted in
                                            relation to my enquiry.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            By ticking this box I agree to receive promotional updates via digital and
                                            offline marketing channels. For further information about how your data is
                                            used and stored please see our <a class="text-rb-gradient"
                                                href="<?php echo SITE_ADDR ?>/privacy-policy"
                                                alt="privacy policy">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mb-4">
                                    <button type="submit" name="submit" value="Submit"
                                        class="btn btn-primary btn-hover-secondary">Submit <i
                                            class="fas fa-chevron-right fcr-animate"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>

                    </div>
                    <!-- Contact Form End -->

                </div>

                <div class="col mb-6 order-lg-2 order-sm-1 py-lg-0 px-lg-15 px-sm-5 py-sm-5" data-aos="fade-up">
                    <!-- Section Title Two Start -->
                    <div class="section-title-two mb-8">
                        <h3 class="heading heading-h3"></h3>

                        <span class="sub-title">Globally Recognised</span>
                        <h2 class="title">
                            Our globally recognised cyber security training
                        </h2>
                        <p class="pt-3">will give you the skills needed to
                            be a career
                            ready cyber security professional</p>
                    </div>
                    <!-- Section Title Two End -->

                    <div class="mb-5">
                        <h3>Global opportunities
                        </h3>

                        <ul class="agency-list">
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    Earn an average salary of £65,000 - £95,000+ as a certified professional
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="mb-5">
                        <h3>Gain globally recognised cyber certifications
                        </h3>
                        <ul class="agency-list">
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    There's currently a 0% unemployment rate in cyber security
                                </div>
                            </li>
                        </ul>


                    </div>
                    <div class="mb-5">
                        <h3>Our Career Services team will help get you job-ready
                        </h3>
                        <ul class="agency-list">
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    Our students work the worlds biggest brands.
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>


            <!-- Animation Shape Start -->
            <div class="shape shape-2 scene">
                <span data-depth="4"><img src="<?php echo SITE_ADDR ?>/assets/images/shape-animation/video-shape-2.png"
                        alt="shape"></span>
            </div>
            <!-- Animation Shape End -->


        </div>
    </div>

    <div class="section section-padding-t90-b100" data-bg-color="#fff">
        <div class="container shape-animate">


            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                <div class="col mb-6 order-lg-1 order-sm-2" data-aos="fade-up">
                    <!-- Skill With Video Content Start -->
                    <div class="skill-with-video-content">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two mb-8">
                            <h3 class="heading heading-h3"></h3>

                            <span class="sub-title">Benefits at a Glance</span>
                            <h2 class="title">
                                Why use EC-Council?
                            </h2>
                        </div>
                        <!-- Section Title Two End -->


                        <ul class="agency-list">
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    EC-Council has certified over 200,000 security professionals.
                                </div>
                            </li>
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    Individuals who have achieved EC-Council certifications include those from
                                    some of the finest organizations around the world such as the US Army, the
                                    FBI, Microsoft, IBM, and the United Nations.
                                </div>
                            </li>
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    Many of these certifications are recognized worldwide and have received
                                    endorsements from various government agencies.
                                </div>
                            </li>
                            <li class="item">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    Moreover, the United States Department of Defense has included the CEH
                                    program into its Directive 8570 making it one of the mandatory standards to
                                    be achieved by Computer Network Defenders Service Providers (CND-SP).
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col mb-6 order-lg-2 order-sm-1 py-lg-25 px-lg-25 px-sm-5 py-sm-5" data-aos="fade-up">
                    <!-- Skill With Video Popup Start -->
                    <div class="video-popup-area">
                        <!-- Video Popup Start -->
                        <div class="skill-video" data-aos="fade-up">
                            <img class="image" src="<?php echo SITE_ADDR ?>/assets/images/video/skill-video.jpg"
                                alt="video popup">
                            <a href="https://www.youtube.com/watch?v=r9xbF0himt4" class="icon video-popup">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <!-- Video Popup End -->

                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                            <span data-depth="1">
                                <img src="<?php echo SITE_ADDR ?>/assets/images/shape-animation/video-shape-1.png"
                                    alt="">
                            </span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                    <!-- Skill With Video Popup End -->


                </div>

            </div>


            <!-- Animation Shape Start -->
            <div class="shape shape-2 scene">
                <span data-depth="4"><img src="<?php echo SITE_ADDR ?>/assets/images/shape-animation/video-shape-1.png"
                        alt="shape"></span>
            </div>
            <!-- Animation Shape End -->


        </div>
    </div>
</div>


<div class="section section-padding-t90-b100" data-bg-color="#f8faff">
    <div class="container shape-animate">


        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6 ">
            <div class="col mb-6 order-lg-1 order-sm-2" data-aos="fade-up">
                <!-- Contact Form Start -->
                <div class="landing-form-area box-shadow" data-overlay="1">
                    <!-- Section Title Start -->
                    <div class="section-title text-center mb-7">
                        <h2 class="title text-light">Find out more!</h2>

                    </div>

                    <!-- ajax form id="contact-form" -->
                    <!-- Section Title End -->

                    <form action="https://robust.flg360.co.uk/api/APIHTTPPost.php" method="post"
                        onsubmit="javascript:return fncValidateForm(this);" id="" name="request_form" id="contact-form">

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
                        <input type="hidden" name="strLeadData2" id="strLeadData2" value="<?php echo $leadIsFrom ?>/" />
                        <!-- //end -->

                        <div class="row mb-n4">
                            <div class="col-md-12 col-12 mb-4">
                                <input type="text" placeholder="First Name *" name="strLeadFirstName"
                                    id="strLeadFirstName" required="required">
                            </div>
                            <div class="col-md-12 col-12 mb-4">
                                <input type="text" placeholder="Last Name *" name="strLeadLastName" id="strLeadLastName"
                                    required="required">
                            </div>
                            <div class="col-md-12 col-12 mb-4">
                                <input type="phone" placeholder="Phone *" name="strLeadPhone1" id="strLeadPhone1"
                                    required="required">
                            </div>
                            <div class="col-md-12 col-12 mb-4">
                                <input type="email" placeholder="Email *" name="strLeadEmail" id="strLeadEmail"
                                    required="required">
                            </div>
                            <div class="col-md-12 col-12 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        By ticking this box I acknowledge that Robust IT will collect and
                                        process information relating to me in accordance with the company <a
                                            class="text-rb-gradient" href="<?php echo SITE_ADDR ?>/privacy-policy"
                                            alt="privacy policy">Privacy Policy</a> and agree to be contacted in
                                        relation to my enquiry.
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        By ticking this box I agree to receive promotional updates via digital
                                        and
                                        offline marketing channels. For further information about how your data
                                        is
                                        used and stored please see our <a class="text-rb-gradient"
                                            href="<?php echo SITE_ADDR ?>/privacy-policy" alt="privacy policy">Privacy
                                            Policy</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <button type="submit" name="submit" value="Submit"
                                    class="btn btn-primary btn-hover-secondary">Submit <i
                                        class="fas fa-chevron-right fcr-animate"></i></button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>

                </div>
                <!-- Contact Form End -->

            </div>

            <div class="col mb-6 order-lg-2 order-sm-1 py-lg-20 px-lg-20 px-sm-5 py-sm-5" data-aos="fade-up">
                <!-- Section Title Two Start -->
                <div class="section-title-two mb-8">
                    <span class="sub-title">
                        Get certified today
                    </span>
                    <h2 class="title">
                        Get certified today with our world class training.
                    </h2>


                </div>
                <!-- Section Title Two End -->
                <h2 class="mb-5">
                </h2>
                <ul class="agency-list">
                    <li class="item">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">
                            Cyber career starter
                        </div>
                    </li>
                    <li class="item">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">
                            Penetration Tester
                        </div>
                    </li>
                    <li class="item">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">
                            Ethical hacker
                        </div>
                    </li>
                    <li class="item">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">
                            Cyber Analyst
                        </div>
                    </li>
                    <li class="item">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">
                            Cloud Computing
                        </div>
                    </li>
                    <li class="item">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">
                            IT Security
                        </div>
                    </li>
                    <li class="item">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">
                            Network Defender
                        </div>
                    </li>
                    <li class="item">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">
                            Forensic Investigator
                        </div>
                    </li>
                </ul>

            </div>

        </div>


        <!-- Animation Shape Start -->
        <div class="shape shape-2 scene">
            <span data-depth="4"><img src="<?php echo SITE_ADDR ?>/assets/images/shape-animation/video-shape-1.png"
                    alt="shape"></span>
        </div>
        <!-- Animation Shape End -->


    </div>
</div>

<!-- Trust pilot Section Start -->
<div class="video-section section section-padding" data-bg-color="#000" data-overlay="0.7"
    data-bg-image="<?php echo SITE_ADDR ?>/assets/images/bg/video-bg.jpg">

    <div class="container text-center">

        <!-- Section Title Start -->
        <div class="section-title color-light text-center" data-aos="fade-up">

            <div class="trustpilot" style="position: relative; right: 0px!important;">

                <!-- TrustBox widget - Micro Combo -->
                <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6ffb0d04a076446a9af"
                    data-businessunit-id="5e470c6a94d8c3000152bc70" data-style-height="20px" data-style-width="100%"
                    data-theme="dark"> <a href="https://uk.trustpilot.com/review/www.robustittraining.com"
                        target="_blank" rel="noopener">Trustpilot</a> </div>
                <!-- End TrustBox widget -->
            </div>
        </div>
        <!-- Section Title End -->
        <!-- <a href="https://www.youtube.com/watch?v=r9xbF0himt4" class="play-btn icon video-popup"><i
                    class="fas fa-play"></i></i></a> -->

    </div>

    <!-- Animation Shape Start -->
    <div class="shape shape-1 scene">
        <span data-depth="1">
            <img src="assets/images/shape-animation/newsletter-shape.png" alt="">
        </span>
    </div>
    <!-- Animation Shape End -->

</div>
<!-- Trust pilot Section End -->


<!-- Brand Section Start -->
<div class="brand-section section section-padding">
    <div class="container">
        <div class="row my-lg-10 my-10">
            <div class="col-lg-12">
                <? require '../../assets/php/component/brand.php';
                    ?>
            </div>
        </div>
    </div>
</div>
<!-- Brand Section End -->



</div>

<?php
require '../../assets/php/inc/footer.php';
?>