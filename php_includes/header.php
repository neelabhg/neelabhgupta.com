<?php
    $logo_color = get_logo_color();
    $header_img = get_random_header_img();
    $quote = get_random_quote();
?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope="" itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
             More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Neelabh Gupta - <?php echo $settings["page"]; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="humans.txt">

    <link rel="shortcut icon" href="<?php echo $settings["website_root"]; ?>img/illinois_favicon.ico" type="image/x-icon">

    <!-- Facebook Metadata /-->
    <meta property="fb:page_id" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:title" content="">

    <!-- Google+ Metadata /-->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo $settings["website_root"]; ?>css/gumby.css">
    <link rel="stylesheet" href="<?php echo $settings["website_root"]; ?>css/style.css">
    <?php
        if ($settings["load_custom_css"])
            echo '<link rel="stylesheet" href="' . $settings["custom_css_file"] . '">';
    ?>

    <script src="<?php echo $settings["website_root"]; ?>bower_components/gumby/js/libs/modernizr-2.6.2.min.js"></script>
    <!-- start Mixpanel --><script type="text/javascript">(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
            for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="//cdn.mxpnl.com/libs/mixpanel-2.2.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
        mixpanel.init("e28475194956a016cac8dd8f9b6f22fb");</script><!-- end Mixpanel -->
</head>

<body>
    <div class="navcontain" id="nav1-contain">
        <div class="navbar" gumby-fixed="top" id="nav1">
            <div class="row">
                <a class="toggle" gumby-trigger="#nav1 &gt; .row &gt; ul" href="#"><i class="icon-menu"></i></a>
                <h2 class="four columns logo">
                    <a href="<?php echo $settings["website_root"]; ?>" style="color: <?php echo $logo_color; ?>">Neelabh Gupta</a>
                </h2>
                <div class="four columns"></div>
                <ul class="four columns">
                    <li><a href="<?php echo $settings["website_root"]; ?>projects">Projects</a></li>
                    <li><a href="#" class="skip" gumby-goto="[data-target='contact']">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="header-img-wrapper" class="hide-on-all-phones">
        <div id="header-img" style="background-image: url('<?php echo $header_img; ?>')"></div>
    </div>
    
    <div id="quote" class="default alert"><?php echo "&ldquo;" . $quote[0] . "&rdquo;" . " &mdash; " . $quote[1]; ?></div>
    
