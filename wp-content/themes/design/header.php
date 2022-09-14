<!DOCTYPE html>
<html lang="ja">
<head>
    <?php
        get_template_part('./assets/meta/meta');
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/404.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/assets/img/favicon.png" type="image/x-icon">
</head>

<body>
    <header class="c-header">
        <div class="l-container">
            <h1 class="c-logo"><a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory') ?>/assets/img/logo.png" alt="Allgrow Labo"></a></h1>
            <nav class="c-gnav">
                <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'header-menu', 
                        'container' => 'false', 
                        'menu_id' => 'c-header-menu', 
                        'menu_class' => 'c-header-menu'
                    ) 
                ); ?>
            </nav>
        </div>
    </header><!-- /header -->
    <?php wp_head(); ?>