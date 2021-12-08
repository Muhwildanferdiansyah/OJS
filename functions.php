<?php

add_action('wp_enqueue_scripts', 'ojs_enqueue');

function ojs_enqueue()
{
    if (true) {

        wp_enqueue_style('css1', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', 'all');
        wp_enqueue_style('css2', "https://fonts.googleapis.com/css?family=ABeeZee", 'all');
        wp_enqueue_style('css3', "https://fonts.googleapis.com/css?family=Raleway", 'all');
        wp_enqueue_style('css4', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', 'all');
        wp_enqueue_style('css5', get_template_directory_uri() . '/assets/fonts/ionicons.min.css', 'all');
        wp_enqueue_style('css6', get_template_directory_uri() . '/assets/css/Carousel_Image_Slider-1.css', 'all');
        wp_enqueue_style('css7', get_template_directory_uri() . '/assets/css/Carousel_Image_Slider.css', 'all');
        wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/Footer-Basic.css', 'all');
        wp_enqueue_style('css8', get_template_directory_uri() . '/assets/css/Footer-Dark.css', 'all');
        wp_enqueue_style('css9', get_template_directory_uri() . '/assets/css/Header-Dark.css', 'all');
        wp_enqueue_style('css10', get_template_directory_uri() . '/assets/css/Media-Slider-Bootstrap-3-1.css', 'all');
        wp_enqueue_style('css11', get_template_directory_uri() . '/assets/css/Media-Slider-Bootstrap-3.css', 'all');
        wp_enqueue_style('css12', get_template_directory_uri() . '/assets/css/Navigation-Clean.css', 'all');
        wp_enqueue_style('css13', get_template_directory_uri() . '/assets/css/Navigation-with-Search.css', 'all');
        wp_enqueue_style('css14', get_template_directory_uri() . '/assets/css/sidebar-1.css', 'all');
        wp_enqueue_style('css15', get_template_directory_uri() . '/assets/css/sidebar.css', 'all');
        wp_enqueue_style('css16', get_template_directory_uri() . '/assets/css/Simple-Side-Nav.css', 'all');
        wp_enqueue_style('css17', get_template_directory_uri() . '/assets/css/Social-Navi.css', 'all');
        wp_enqueue_style('css18', get_template_directory_uri() . '/assets/css/styles.css', 'all');
        wp_enqueue_style('css19', get_template_directory_uri() . '/assets/css/Swiper-Slider-Card-For-Blog-Or-Product-1.css', 'all', true);
        wp_enqueue_style('css20', get_template_directory_uri() . '/assets/css/Swiper-Slider-Card-For-Blog-Or-Product.css', 'all', true);
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', 'jQuery', 'all');
        wp_enqueue_script('js_bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', 'jQuery', 'all', true);
        wp_enqueue_script('js_slider', get_template_directory_uri() . '/assets/js/Media-Slider-Bootstrap-3.js', 'jQuery', 'all', true);
        wp_enqueue_script('js_nav', get_template_directory_uri() . '/assets/js/Simple-Side-Nav.js', 'jQuery', 'all', true);
        wp_enqueue_script('js_card_for', get_template_directory_uri() . '/assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js', 'jQuery', 'all', true);
    } else {
    }
}
