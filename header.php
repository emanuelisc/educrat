<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">


    <meta name="theme-color" content="#282664" />
    <meta name="msapplication-navbutton-color" content="#282664">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#282664">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/safari-pinned-tab.svg" color="#282664">

    <title><?php the_title(); ?></title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="top-head">
        <a href="#top">
            <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img-svg/logo.svg" alt="<?php the_title(); ?>">
            <ul class="top-menu">
                <li><a class="active" href="#top-link">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#collections">COLLECTIONS</a></li>
                <li><a href="#flymap">FLYMAP</a></li>
                <li><a href="#team">TEAM</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
            <div class="hamburger"></div>
            <div class="mobile-pop">
                <div class="el1"></div>
                <div class="el2"></div>
                <div class="el3"></div>
                <ul class="pop-menu">
                    <li><a class="active" href="#top-link">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#collections">COLLECTIONS</a></li>
                    <li><a href="#flymap">FLYMAP</a></li>
                    <li><a href="#team">TEAM</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
    </header>