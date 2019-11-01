<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php wp_title(); ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <div class="nav">

            <header class="header">
                <a href="/" class="logo">
                    <div class="logo_subblock">
                        <div class="media">
                            <img src="<?php bloginfo('template_url'); ?> /public/img/personal_avatar.png" alt="" />
                            <div class="media-body ">
                                <h4><?php bloginfo("name"); ?> <small><i></i></small></h4>
                                <p><?php bloginfo("description"); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <?php
                    $defaults = array(
                        "container" => "ul",
                        "theme_location" => "primary",
                        "menu_class" => "menu"
                    );

                    wp_nav_menu( $defaults );
                ?> 
            </header>

        </div>