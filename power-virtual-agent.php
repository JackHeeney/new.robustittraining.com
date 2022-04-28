<?php
// Change page title and meta tags here
$title = "Robust IT Training | Power Virtual Agent";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$title = "Robust IT Training | Power Virtual Agent";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";


$leadIsFrom = "Lead is from /home page";

require './assets/php/inc/header.php';
require './assets/php/inc/nav.php';

?>



<div id="page" class="section">


    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-bg-color="#000" data-overlay="0.7"
        data-bg-image="<?php echo SITE_ADDR ?>/assets/images/bg/breadcrumb-bg.jpg">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Power Virtual Agent</h1>
            </div>
        </div>
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="<?php echo SITE_ADDR ?>/">Home</a></li>
                    <li class="current">Power Virtual Agent</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <div class="container">
        <div class="row vh-100 mb-30">

            <style>

            </style>

            <h2 class="py-10">
                Speak with our Robust Bot to see if he can help you find what you are looking for? Ask him a question,
                to begin. Type "restart" to restart the chat.

            </h2>


            <!DOCTYPE html>
            <html>

            <body><iframe
                    src="https://web.powerva.microsoft.com/environments/Default-7840128c-b7c2-4ff8-900b-e9b2a1346253/bots/new_bot_ed9d88e14f814a858f3644a8540a9244/webchat"
                    frameborder="0" style="width: 100%; height: 100%;"></iframe></body>

            </html>
        </div>
    </div>


</div>


<?php

require './assets/php/inc/footer.php';

?>