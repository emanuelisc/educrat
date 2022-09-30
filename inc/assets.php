<?php


// in header
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
    $theme_url = get_stylesheet_assets();
    wp_enqueue_style('normalize', $theme_url . '/assets/css/normalize.min.css', array(), '7ebc2395cfa2c2');

    wp_enqueue_style("rest-styles", $theme_url . "/assets/css/rest.min.css", array(), "820bcffa04afad");
    wp_enqueue_style("fonts", $theme_url . "/assets/css/fonts.min.css", array(), "dc66f3fcfed4e6");
}

add_action('get_footer', 'add_footer_scripts');
function add_footer_scripts()
{
    $theme_url = get_stylesheet_assets();

    wp_enqueue_script('main-js', $theme_url . '/assets/js/main-script.min.js', array('jquery'), '96d662fe9b0265');
};
