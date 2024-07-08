<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>武蔵</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="page_above page_animation"></div>
    <div class="page_below page_animation"></div>
    <div class="page_left page_animation"></div>
    <div class="page_right page_animation"></div>
        <div class="page_description">
            <header class="header">
                <h1 class="header_logo">
                    <a class="btn_nav top_link" href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.png' ); ?>" alt="">
                    </a>
                </h1>
                <div class="header_list">
                    <nav>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url("/supporters")); ?>">SUPPORTERS</a></li>
                            <li><a href="<?php echo esc_url(home_url("/profile")); ?>">PROFILE</a></li>
                            <li><a href="<?php echo esc_url(home_url("/activities")); ?>">ACTIVITIES</a></li>
                            <li><a href="<?php echo esc_url(home_url("/gallery")); ?>">GALLERY</a></li>
                            <li><a href="<?php echo esc_url(home_url("/sns")); ?>">SNS</a></li>
                        </ul>
                    </nav>
                    <ul class="sns_list">
                        <li><a href="https://www.instagram.com/kosashi634/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_ig.jpg'); ?>" alt=""></a></li>
                        <li><a href="https://www.youtube.com/channel/UCqzQ-g8bo3B_N1rz9A8pFIA" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_youtube.jpg' ); ?>" alt=""></a></li>
                        <li><a href="https://lin.ee/2xjGZ3l" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/sns_line.jpg' ); ?>" alt=""></a></li>
                    </ul>
                    <div class="hamburger">
                        <p>MENU</p>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="menu">
                    <ul class="menu_list">
                        <li><a href="<?php echo esc_url(home_url("/supporters")); ?>">SUPPORTERS</a></li>
                        <li><a href="<?php echo esc_url(home_url("/profile")); ?>">PROFILE</a></li>
                        <li><a href="<?php echo esc_url(home_url("/activities")); ?>">ACTIVITIES</a></li>
                    </ul>
                </div>
                <div class="menu_back"></div>
            </header>