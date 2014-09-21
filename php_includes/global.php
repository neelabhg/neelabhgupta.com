<?php

    $settings = array(
        // per page settings
        "page" => "",
        
        // global settings
        "website_root" => "/",
        "load_google_analytics" => FALSE,
        "load_mixpanel_analytics" => FALSE,
    );
    // add locations of the header and footer files.
    // this is separate from the array declaration because we are referencing a variable (website_root) from the array itself.
    $includes_base = $_SERVER["DOCUMENT_ROOT"] . $settings["website_root"] . "php_includes/";
    $settings["header"] = $includes_base . "header.php";
    $settings["footer"] = $includes_base . "footer.php";
    $settings["google_analytics_tracking_file"] = $includes_base . "google_analytics_tracking.php";
    $settings["mixpanel_analytics_tracking_file"] = $includes_base . "mixpanel_analytics_tracking.php";

    $quotes = array(
        array("If you can't explain it to a six year old, you don't understand it yourself.", "Albert Einstein"),
        array("Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.", "Albert Einstein"),
        array("Never memorize something that you can look up.", "Albert Einstein"),
        array("I love deadlines. I like the whooshing sound they make as they fly by.", "Douglas Adams"),
    );
    
    $header_imgs = array(
        array($settings["website_root"] . "img/UIUC_Quad2.jpg", "The University of Illinois main Quad"),
        array($settings["website_root"] . "img/java_code.png", "Peek of the rt-wiki-dashboard code"),
        array($settings["website_root"] . "img/logic.png", "Peek of a TTL circuit design in Logisim"),
    );
    
    $logo_colors = array(
        "#d04526",
        "#d04526",
    );

    function get_random_quote() {
        global $quotes;
        return $quotes[rand(0, count($quotes)-1)];
    }
    
    function get_random_header_img() {
        global $header_imgs;
        return $header_imgs[rand(0, count($header_imgs)-1)];
    }
    
    function get_logo_color() {
        global $logo_colors;
        return $logo_colors[rand(0, count($logo_colors)-1)];
    }
?>