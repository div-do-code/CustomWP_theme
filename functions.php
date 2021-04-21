
<?php

function load_stylesheets(){

    wp_register_style('font', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap.min');

    wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), 1, 'all');
    wp_enqueue_style('owl-carousel');

    wp_register_style('owl-theme-default', get_template_directory_uri() . '/css/owl.theme.default.css', array(), 1, 'all');
    wp_enqueue_style('owl-theme-default');

    

    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), 1, 'all');
    wp_enqueue_style('magnific-popup');

    wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');

     


}

add_action('wp_enqueue_scripts', 'load_stylesheets');




/*JAVASCRIPT PART*/
/*Enqueuing javascript files in funtion.php*/


function addjs(){

    wp_register_script('jquery', get_template_directory_uri() . '/js/script.js', array () , 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array () , 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('owl-carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', array () , 1, 1, 1);
    wp_enqueue_script('owl-carousel-min');

    wp_register_script('jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array () , 1, 1, 1);
    wp_enqueue_script('jquery.magnific-popup');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array () , 1, 1, 1);
    wp_enqueue_script('main');

add_action( 'wp_enqueue_scripts', 'addjs');

}








 

   





   


