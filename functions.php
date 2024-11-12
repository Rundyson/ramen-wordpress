<?php


require_once get_template_directory() . '/includes/assets.php';
require_once get_template_directory() . '/includes/theme-supports.php';
require_once get_template_directory() . '/includes/custom-post-type.php';
require_once get_template_directory() . '/includes/custom-menu.php';


// add_filter('pre_get_posts', 'limit_change_posts_category');
// function limit_change_posts_category($query) {
//     if ( $query->is_category() ) {
//         $query->set('posts_per_page', 100);
//     }
//     return $query;

// }