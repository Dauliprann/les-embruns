<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Les_Embruns
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/style.css">-->
    <link rel="shortcut icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
    <?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
<?php wp_body_open(); ?>

<header>
    <div class="container d-none d-lg-block">
        <div class="row py-2">
            <div class="col-12 col-md-3 d-flex align-items-center">
                <h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo"></a></h1>
            </div>
            <?php wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'menu_class' => 'd-flex align-items-center justify-content-around w-100',
                'container' => 'nav',
                'container_class' => 'navbar col-11 col-md-9',
            )); ?>
        </div>
    </div>
</header>
<section class="top-banner<?php if (is_front_page()) { ?> home<?php } else { ?> page<?php } ?>">
    <div class="bg-img"
         style="background: url('<?php if (is_front_page()) {
             echo get_field("home_bg_img")["url"];
         } else {
             echo get_field('page_bg_img', get_the_ID())['url'];
         } ?>') center;background-size: cover">
        <span class="overlay-red"></span>
        <div class="container h-100">
            <div class="txt-content h-100 d-flex flex-column align-items-center justify-content-center">
                <div class="content text-center<?php if (is_front_page()) { ?> mb-md-5<?php } ?>">
                    <?php if (is_front_page()) {
                        the_field('home_txt');
                    } else {
                        the_title();
                    } ?>
                </div>
                <?php if (is_front_page()) { ?>
                    <a href="<?php echo get_field('home_button')['link'] ?>" class="button white"><?php echo get_field('home_button')['label'] ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<main>
