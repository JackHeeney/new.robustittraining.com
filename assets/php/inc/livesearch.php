<?php
/**
 * LiveSearch (Search bar function)
 *
 * PHP and AJAX search bar filter using links.xml file to search for the page
 * required and then show it to the user.
 *
 * PHP version 7.4.23
 *
 * @category   LiveSearch
 * @package    LiveSearch
 * @author     Jack Heeney <jackheeney1@googlemail.com>
 * @copyright  2009-2022 Robust IT Training
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       https://www.robustittraining.com
 * @see        #
 * @since      #
 * @deprecated #
 */

$xmlDoc = new DOMDocument();
$xmlDoc->load('links.xml');

$x = $xmlDoc->getElementsByTagName('link');

//Get the q parameter from URL

$q = $_GET["q"];

//Lookup all links from the xml file if length of q>0

if (strlen($q) > 0) {
    $hint = "";
    for ($i = 0; $i < ($x->length); $i++) {
        $y = $x->item($i)->getElementsByTagName('title');
        $z = $x->item($i)->getElementsByTagName('url');
        $d = $x->item($i)->getElementsByTagName('desc');
        if ($y->item(0)->nodeType == 1) {

            //find a link matching the search text
            if (stristr($y->item(0)->childNodes->item(0)->nodeValue, $q)) {

                if ($hint == "") {

                    $hint = "<a href='" .

                        $z->item(0)->childNodes->item(0)->nodeValue .
                        "'class='underline-hover'><div class='live-area'>" .

                        $y->item(0)->childNodes->item(0)->nodeValue .
                        "<br/> <span class='text-muted' style='font-size: 1rem'>" .

                        $d->item(0)->childNodes->item(0)->nodeValue .
                        "</span></div></a> ";
                } else {
                    
                    $hint = $hint . "<a href='" .

                        $z->item(0)->childNodes->item(0)->nodeValue .
                        "'class='underline-hover'><div class='live-area'>" .

                        $y->item(0)->childNodes->item(0)->nodeValue .
                        "<br/> <span class='text-muted' style='font-size: 1rem'>" .
                        $d->item(0)->childNodes->item(0)->nodeValue .
                        "</span></div></a>";
                }
            }
        }
    }
}

// Set Output to "No results found" if no hint was found or to the correct values

if ($hint == "") {
    $response = "No Results Found. Try Again...";
} else {
    $response = $hint;
}

//output the response
echo $response;