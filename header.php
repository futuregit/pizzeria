<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <title>Pizzeria</title>
    <?php wp_head(); ?>

</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logoimage">
                </a>
            </div><!--.logo-->
            <div class="header-information">
                <div class="socials">
                    <?php
                        $args = array(
                            'theme_location'    => 'social-menu',
                            'container'         => 'nav',
                            'container_class'   => 'socials',
                            'container_id'      => 'socials',
                            'link_before'       => '<span class="sr-text">',
                            'link_after'        =>  '<span>'
                        );
                        wp_nav_menu($args);
                    ?>
                </div><!--.socials-->
                <div class="address">
                    <p>1234 MainLand, Center, USA</p>
                    <p>Phone Number: +1-234-567-8901</p>
                </div>
            </div><!--header-information-->
        </div><!--.container-->
    </header>
    <div class="main-menu">
      <div class="mobile-menu">
        <a href="#" class="mobile"><i class="fa fa-bars"></i> Menu</a>
      </div>
        <div class="navigation container">
            <?php
                $args = array(
                    'theme_location'    => 'header-menu',
                    'container'         =>      'nav',
                    'container_class'   => 'site-nav'
                );
                wp_nav_menu($args);
            ?>

        </div>
    </div>
