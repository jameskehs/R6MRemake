<?php

function jimsTheme_theme_support()
{
    //Adds dynamic title tag support
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-background");
}

add_action("after_setup_theme", "jimsTheme_theme_support");

function jimsTheme_menus()
{
    $locations = array(
        "primary" => "Top Nav",
    );

    register_nav_menus($locations);
}

add_action('init', "jimsTheme_menus");

function jimsTheme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("jimstheme-adobeFonts", "https://use.typekit.net/uxd2ctd.css", array(), $version, 'all');
    wp_enqueue_style("jimstheme-style", get_template_directory_uri() . "/style.css", array("jimstheme-adobeFonts"), $version, 'all');
};

add_action('wp_enqueue_scripts', "jimsTheme_register_styles");

function jimsTheme_register_scripts()
{
    wp_enqueue_script("jimstheme-mainJS", get_template_directory_uri() . "/assets/javascript/main.js", array(), "1.0", true);
};
add_action('wp_enqueue_scripts', "jimsTheme_register_scripts");
