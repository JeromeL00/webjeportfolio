<?php

function portfoliowebsite_assets(){
    wp_enqueue_style('portfoliowebsite-css', get_template_directory_uri() . '/css/main.min.css' , microtime());
    wp_enqueue_script('arch_slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js',  NULL, true);
    wp_enqueue_style('arch_style_slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.min.css',  1);


}


add_action('wp_enqueue_scripts', 'portfoliowebsite_assets');


?>
