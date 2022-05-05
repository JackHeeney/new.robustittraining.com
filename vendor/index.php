<?php

// Change page title and meta tags here
$title = "Robust IT Training | Search by Vendor";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$meta['og:title'] = "Robust IT Training | Search by Vendor";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";

$leadIsFrom = "Lead is from /search-by-vendor";

require '../assets/php/inc/header.php';
require '../assets/php/inc/nav.php';

?>


<div id="page" class="section">

    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7"
        data-bg-image="<?php echo SITE_ADDR ?>/assets/images/bg/breadcrumb-bg-two.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Courses by vendor</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="<?php echo SITE_ADDR ?>/">Home</a></li>
                    <li><a href="<?php echo SITE_ADDR ?>/learning-paths">Learning Paths</a></li>
                    <li class="current">Vendor</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Work Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center " data-aos="fade-up">
                <h2 class="title fz-32"> View paths by <a class="text-rb-primary" href="<? echo SITE_ADDR ?>/vendor"
                        alt="link to career vendor">vendor</a> :</h2>
            </div>
            <!-- Section Title End -->

            <!-- About Wrapper Start -->
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 mb-n6">

                <!-- Single Work Start -->
                <div class="col mb-6">
                    <div class="work single-portfolio">
                        <div class="thumbnail">
                            <a class="image" href="<?php echo SITE_ADDR ?>/vendor/ec-council"
                                alt="link to EC-council"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/project/ec-council/ec-council.jpg"
                                    alt="ec-council.jpg"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo SITE_ADDR ?>/vendor/ec-council"
                                    alt="link to EC-council">EC-Council</a></h3>
                            <p class="desc">EC-Council's key purpose is to build and refine the cybersecurity
                                profession. Through the development of world-class cybersecurity education programs and
                                their corresponding certifications, the company provides cybersecurity services to some
                                of the largest businesses around the globe.</p>
                            <a href="<?php echo SITE_ADDR ?>/vendor/ec-council" alt="link to EC-council">View Courses <i
                                    class="fas fa-chevron-right fcr-animate"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="col mb-6">
                    <div class="work single-portfolio">
                        <div class="thumbnail">
                            <a class="image" href="<?php echo SITE_ADDR ?>/vendor/aws"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/project/aws/aws.jpg" alt="aws.jpg"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo SITE_ADDR ?>/vendor/aws">Amazon Web Services</a>
                            </h3>
                            <p class="desc">Amazon Web Services, Inc. is a subsidiary of Amazon that provides on-demand
                                cloud computing platforms and APIs to individuals, companies, and governments, on a
                                metered pay-as-you-go basis. These cloud computing web services provide distributed
                                computing processing capacity and software tools via AWS server farms. </p>
                            <a href="<?php echo SITE_ADDR ?>/vendor/aws">View Courses <i
                                    class="fas fa-chevron-right fcr-animate"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="col mb-6">
                    <div class="work single-portfolio">
                        <div class="thumbnail">
                            <a class="image" href="<?php echo SITE_ADDR ?>/vendor/microsoft"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/project/microsoft/microsoft.jpg"
                                    alt="microsoft.jpg"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo SITE_ADDR ?>/vendor/microsoft">Microsoft</a></h3>
                            <p class="desc">Microsoft Certifications are earned by passing exams aligned to a specific
                                certification. The process of earning certification has changed multiple times since its
                                inception.</p>
                            <a href="<?php echo SITE_ADDR ?>/vendor/microsoft">View Courses <i
                                    class="fas fa-chevron-right fcr-animate"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="col mb-6">
                    <div class="work single-portfolio">
                        <div class="thumbnail">
                            <a class="image" href="<?php echo SITE_ADDR ?>/vendor/comptia"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/project/comptia/comptia.jpg"
                                    alt="comptia.jpg"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo SITE_ADDR ?>/vendor/comptia">CompTIA</a></h3>
                            <p class="desc">The Computing Technology Industry Association is an American non-profit
                                trade association, issuing professional certifications for the information technology
                                industry. It is considered one of the IT industry's top trade associations.</p>
                            <a href="<?php echo SITE_ADDR ?>/vendor/comptia">View Courses <i
                                    class="fas fa-chevron-right fcr-animate"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="col mb-6">
                    <div class="work single-portfolio">
                        <div class="thumbnail">
                            <a class="image" href="<?php echo SITE_ADDR ?>/vendor/cisco"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/project/cisco/cisco.jpg"
                                    alt="cisco.jpg"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo SITE_ADDR ?>/vendor/cisco">CISCO</a></h3>
                            <p class="desc">Cisco is an American multinational technology conglomerate corporation
                                headquartered in San Jose, California. Integral to the growth of Silicon Valley, Cisco
                                develops, manufactures, and sells networking hardware, software, telecommunications
                                equipment and other high-technology services and products.</p>
                            <a href="<?php echo SITE_ADDR ?>/vendor/cisco">View Courses <i
                                    class="fas fa-chevron-right fcr-animate"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="col mb-6">
                    <div class="work single-portfolio">
                        <div class="thumbnail">
                            <a class="image" href="<?php echo SITE_ADDR ?>/vendor/axelos"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/project/axelos/axelos.jpg"
                                    alt="work"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo SITE_ADDR ?>/vendor/axelos">Axelos</a></h3>
                            <p class="desc">AXELOS is a joint venture set up in 2014 by the Government of the United
                                Kingdom and Capita, to develop, manage and operate qualifications in best practice, in
                                methodologies formerly owned by the Office of Government Commerce.</p>
                            <a href="<?php echo SITE_ADDR ?>/vendor/axelos">View Courses <i
                                    class="fas fa-chevron-right fcr-animate"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Work End -->


                <!-- Single Work Start -->
                <div class="col mb-6">
                    <div class="work single-portfolio">
                        <div class="thumbnail">
                            <a class="image" href="<?php echo SITE_ADDR ?>/vendor/isaca"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/project/isaca/isaca.jpg"
                                    alt="isaca.jpg"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo SITE_ADDR ?>/vendor/isaca">ISACA</a></h3>
                            <p class="desc">ISACA is an international professional association focused on IT governance.
                                On its IRS filings, it is known as the Information Systems Audit and Control
                                Association, although ISACA now goes by its acronym only. ISACA currently offers 8
                                certification program as well as other micro-certificates.</p>
                            <a href="<?php echo SITE_ADDR ?>/vendor/isaca">View Courses <i
                                    class="fas fa-chevron-right fcr-animate"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Work End -->


                <!-- Single Work Start -->
                <div class="col mb-6">
                    <div class="work single-portfolio">
                        <div class="thumbnail">
                            <a class="image" href="<?php echo SITE_ADDR ?>/vendor/isc2"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/project/isc2/isc2.jpg" alt="isc.jpg"></a>
                        </div>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo SITE_ADDR ?>/vendor/isc2">(ISC)&#178;</a></h3>
                            <p class="desc">The International Information System Security Certification Consortium, or
                                (ISC)², is a non-profit organization which specializes in training and certifications
                                for cybersecurity professionals. It has been described as the "world's largest IT
                                security organization.</p>
                            <a href="<?php echo SITE_ADDR ?>/vendor/isc2">View Courses <i
                                    class="fas fa-chevron-right fcr-animate"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Work End -->


            </div>
            <!-- About Wrapper End -->


        </div>
    </div>
    <!-- Work Section End -->

    <!-- CTA Section Start -->
    <div class="section section-padding-t110-b120 newsletter-section" data-bg-color="#000" data-overlay="0.7"
        data-bg-image="<?php echo SITE_ADDR ?>/assets/images/bg/cta.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- CTA Content Start -->
                    <div class="cta-content text-center">
                        <!-- Section Title Start -->
                        <div class="section-title color-light text-center mb-0" data-aos="fade-up">
                            <h2 class="title">Need help finding the right path?</h2>
                            <p class="sub-title fz-18">Ready to start your Robust IT journey? Get started, by
                                clicking the button below this form will only be used to respond to your request.</p>
                        </div>
                        <!-- Section Title End -->
                        <a href="#" data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-secondary btn-hover--secondary mt-6"
                            style="min-width: 226px !important"><span class="call-back"></span>
                            <i class="fas fa-phone fcr-animate"></i></a>
                    </div>
                    <!-- CTA Content End -->
                </div>
            </div>
        </div>

        <!-- Animation Shape Start -->
        <div class="shape shape-1 scene">
            <span data-depth="1">
                <img src="<?php echo SITE_ADDR ?>/assets/images/shape-animation/newsletter-shape.png" alt="">
            </span>
        </div>
        <!-- Animation Shape End -->
    </div>
    <!-- CTA Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-top section-padding-bottom-190">
        <div class="container">

            <!-- About Wrapper Start -->
            <div class="row">

                <!-- About Image Area Start -->
                <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">
                    <div class="about-image-area">
                        <div class="about-image js-tilt">
                            <img src="<?php echo SITE_ADDR ?>/assets/images/about/about-3.jpg" alt="">
                        </div>
                        <div class="about-image js-tilt">
                            <img src="<?php echo SITE_ADDR ?>/assets/images/about/about-7.jpg" alt="">
                        </div>
                        <!-- Animation Shape Start -->
                        <div class="shape shape-2 scene">
                            <span data-depth="4"><img
                                    src="<?php echo SITE_ADDR ?>/assets/images/shape-animation/about-shape-2.png"
                                    alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
                <!-- About Image Area Start -->

                <!-- About Start -->
                <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">
                    <!-- About Content Area Start -->
                    <div class="about-content-area">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two">
                            <span class="sub-title">Search by career.</span>
                            <h3 class="title">Find your course searching by career.</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <p>
                            Do you know what career path you want to go down? Search for the perfect course by career.
                        </p>

                        <a class="btn btn-secondary btn-hover--secondary mt-xl-12 mt-lg-8 mt-md-6 mt-4"
                            href="<?php echo SITE_ADDR ?>/career">Search
                            by career <i class="fas fa-chevron-right fcr-animate"></i></a>
                    </div>
                    <!-- About Content Area Start -->
                </div>
                <!-- About Start -->

            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Brand Section Start -->
    <div class="brand-section section section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <? require '../assets/php/component/brand.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section End -->


</div>




<?php

require '../assets/php/inc/footer.php';

?>