<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-secondary">
    <div class="container px-5">
        <a class="navbar-brand" href="/">
        <img src="<?php echo(get_template_directory_uri()); ?>/images/logo1.png" width="60px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

            <?php
                $locations = get_nav_menu_locations();

                if ( isset( $locations['primary'] ) ) {
                    $menu_items = wp_get_nav_menu_items( $locations['primary'] );

                    if ( ! empty( $menu_items ) ) {

                        foreach ( $menu_items as $menu_item ) {
                            $classes = implode( ' ', $menu_item->classes );
                            $link = $menu_item->url;
                            $title = $menu_item->title;

                            echo '<li class="nav-item ' . $classes . '"><a class="nav-link " href="' . $link . '">' . $title . '</a></li>';
                        }

                    }
                }

                ?>
            <li class="nav-item"><a class="nav-link " href="#">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link " href="#">About Us</a></li>
            </ul>
        </div>
    </div>
</nav>



