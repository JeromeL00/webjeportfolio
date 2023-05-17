<?php

function portfoliowebsite_custom_post() {

    $portfoliowebsitePost_label = array (
        'name'          => __('Portfolio Post', 'textdomain'),
        'singular_name' => __('Portfolio Post', 'textdomain'),
        'add_new'       => __('Add Portfolio Post', 'textdomain'),
        'add_new_item'  => __('Add New Portfolio Post', 'textdomain'),
        'edit_item'     => __('Edit Portfolio Post', 'textdomain'),
        'all_items'     => __('Portfolio Post', 'textdomain')
    );
    $portfoliowebsitePost_args = array (
        'labels'        => $portfoliowebsitePost_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('portfoliowebsitePost', $portfoliowebsitePost_args); 
}

add_action('init', 'portfoliowebsite_custom_post');