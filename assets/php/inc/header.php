<?php

/***************************************************
 * 
 * microsoft.robustittraining.com
 * @version v1.0.0
 * @author Jack Heeney
 * @page index.php
 * Copyright 2021 Robust IT Training
 * 
 ***************************************************/

define("SITE_ADDR", "http://localhost/new.robustittraining.com");
// define("SITE_ADDR", "http://www.bilmen.co.uk");
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <? echo $title ?>
    </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<? echo SITE_ADDR ?>/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<? echo SITE_ADDR ?>/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<? echo SITE_ADDR ?>/assets/images/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<? echo SITE_ADDR ?>/assets/images/favicon/favicon.ico">
    <link rel="manifest" href="<? echo SITE_ADDR ?>/assets/images/site.webmanifest">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Icon Font) -->
    <!--
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/vendor/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/vendor/muli-font.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!--
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/plugins/jquery.animatedheadline.css">
     -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/plugins/plugins.min.css">
    <!-- <link rel="stylesheet" href="<? echo SITE_ADDR ?>/assets/css/style.min.css"> -->

    <script type="text/javascript">
    /*****************************
     *        live search        *
     *****************************/
    function showResult(str) {
        if (str.length == 0) {
            document.getElementById("livesearch").innerHTML = "";
            document.getElementById("livesearch").style.border = "0px";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("livesearch").innerHTML = this.responseText;
                document.getElementById("livesearch").style.border = "5px solid #fff";
            }
        }
        xmlhttp.open("GET", "<? echo SITE_ADDR ?>/assets/php/inc/livesearch.php?q=" + str, true);
        xmlhttp.send();
    }
    </script>
</head>

<body>