<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Restro</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="logoimage" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
            </a>
        </div><!-- Logo -->
        <div class="header-information">
            <div class="socials">
                <?php
                    $args = array(
                        'theme_location' =>'social-menu',
                        'container'      => 'nav',
                        'container_class'=> 'socials',
                        'container_id'   => 'socials',
                        'link_before'    => '<span class="sr-text">',
                        'link_after'     => '</span>'
                    );
                    wp_nav_menu($args);
                ?>
            </div> <!-- .socials -->
            <div class="address">
                <p>2134 Big Market Bazaar, New Delhi -110011</p>
                <p>Phone Number: +91-91919-19191</p>
            </div>
        </div> <!-- .header-information -->
    </div><!-- .container -->
</header>
<div class="main-menu">
    <div class="mobile-menu">
        <a href="#" class="mobile"><i class="fa fa-bars"></i> Menu</a>
    </div>
    <div class="navigation container">
        <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container'      => 'nav',
                'container_class'=> 'site-nav'
            );

            wp_nav_menu($args);
        ?>
    </div>
</div>