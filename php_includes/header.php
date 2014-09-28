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

    <title>Neelabh Gupta - <?php echo $settings["currentPage"]; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="humans.txt">

    <link rel="shortcut icon" href="<?php echo $settings["website_root"]; ?>img/favicon.ico" type="image/x-icon">

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

    <script src="<?php echo $settings["website_root"]; ?>js/libs/modernizr-2.6.2.min.js"></script>

    <?php if($settings["load_google_analytics"]): ?>
        <?php include_once $settings["google_analytics_tracking_file"]; ?>
    <?php endif; ?>

    <?php if($settings["load_mixpanel_analytics"]): ?>
        <?php include_once $settings["mixpanel_analytics_tracking_file"]; ?>
    <?php endif; ?>

    <script type="text/javascript">
        pageProperties = {
            page: '<?php echo $settings["currentPage"]; ?>',
            enableEventTracking: <?php echo $settings["enableEventTracking"] ? "true" : "false"; ?>,
            env: '<?php echo $env; ?>'
        };
    </script>
</head>

<body>
    <div class="navcontain" id="nav1-contain">
        <div class="navbar" data-fixed="top" id="nav1">
            <div class="row">
                <a class="toggle" data-trigger="#nav1 &gt; .row &gt; ul" href="#"><i class="icon-menu"></i></a>
                <h2 class="four columns logo">
                    <a href="<?php echo $settings["website_root"]; ?>" style="color: <?php echo get_logo_color(); ?>">Neelabh Gupta</a>
                </h2>
                <div class="four columns"></div>
                <ul class="four columns">
                    <li><a href="<?php echo $settings["website_root"]; ?>">Home</a></li>
                    <li><a href="<?php echo $settings["website_root"]; ?>projects/">Projects</a></li>
                    <li><a href="#" class="skip" data-goto="[data-target='contact']">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="header-img-wrapper" class="hide-on-all-phones">
        <?php $header_img = get_random_header_img(); ?>
        <div id="header-img" style="background-image: url('<?php echo $header_img[0]; ?>')"></div>
        <?php if(trim($header_img[1])): ?>
            <div id="header-img-description"><?php echo $header_img[1]; ?></div>
        <?php endif; ?>
    </div>
    
    <div id="quote" class="default alert"><?php $quote = get_random_quote(); echo "&ldquo;" . $quote[0] . "&rdquo;" . " &mdash; " . $quote[1]; ?></div>
