<?php 
function ramen_custom_post(){
    
    //RAMEN
    $ramen_label = array(
        'name'              => __('Ramen', 'textdomain'),
        'singular'          => __('Ramen', 'textdomain'),
        'add_new'           => __('Add Ramen', 'textdomain'),
        'add_new_item'      => __('Add New Ramen', 'textdomain'),
        'edit_item'         => __('Edit Ramen', 'textdomain'),
        'all_items'         => __('Ramen', 'textdomain')
    );

    $ramen_args = array(
        'labels'            => $ramen_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title', 'editor','thumbnail','excerpt')
    );

    register_post_type('ramen', $ramen_args);

    //BEER
    $drink_label = array(
        'name'              => __('Drink', 'textdomain'),
        'singular'          => __('Drink', 'textdomain'),
        'add_new'           => __('Add Drink', 'textdomain'),
        'add_new_item'      => __('Add New Drink', 'textdomain'),
        'edit_item'         => __('Edit Drink', 'textdomain'),
        'all_items'         => __('Drink', 'textdomain')
    );

    $drink_args = array(
        'labels'            => $drink_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title', 'editor','thumbnail','excerpt')
    );

    register_post_type('drink', $drink_args);
}
add_action('init','ramen_custom_post');