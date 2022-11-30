<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/wp-content/themes/jimstheme/assets/images/logo.png">
    <?php
    wp_head();
    ?>

</head>

<body class="custom-background">
    <?php
    if (function_exists("the_custom_logo")) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, '225', '278');
    }
    ?>
    <nav id="JK_nav">
        <a href="<?= get_bloginfo('wpurl') ?>">
            <img id="JK_nav_logo" src="<?= $logo[0] ?>" />
        </a>
        <?php
        wp_nav_menu(array(
            "menu" => "primary",
            "container" => "",
            "theme_location" => "primary",
            "items_wrap" => '<ul id="JK_nav_ul" class="">%3$s</ul>'
        ));
        ?>
    </nav>