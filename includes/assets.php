<?php

function portfoliowebsite_assets(){
    wp_enqueue_style('portfoliowebsite-css', get_template_directory_uri() . '/css/main.min.css' , microtime());


}


add_action('wp_enqueue_scripts', 'portfoliowebsite_assets');


?>
