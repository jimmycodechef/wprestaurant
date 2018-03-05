<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>WP Restaurant</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logoimage" alt="">
                </a>
            </div><!-- Logo -->
            <div class="header-information">
                <div class="socials">
                    <?php
                        $args = array(
                                'theme_location'    => 'social-menu',
                                'container'         => 'nav',
                                'container_class'   => 'socials',
                                'container_id'      => 'socials',
                                'link_before'       =>  '<span class="sr-text">',
                                'link_after'        =>  '</span>'
                        );
                        wp_nav_menu($args);
                    ?>
                </div> <!-- end Social Menu -->
                <div class="address">
                    <p>2123 Bay Avenue, Mountain View, IL 20223</p>
                    <p>Phone Number: +1-23-456-5852</p>
                </div><!-- end Address -->
            </div><!-- end Header Information -->
        </div><!--.container-->
    </header>
    <div class="main-menu">
        <div class="mobile-menu">
            <a class="mobile" href="#"><i class="fa fa-bars"></i> Menu</a>
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