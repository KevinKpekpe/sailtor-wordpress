<?php 
require_once('inc/supports.php');
require_once('inc/assets.php');
require_once('inc/menus.php');
require_once('inc/apparence.php');
require_once('inc/walkers/Bootstrap_walker_nav_menu.php');



function sailtor_restrict_search_to_posts($query) {
    if ($query->is_search() && !is_admin()) { 
        $query->set('post_type', 'post'); 
    }
}
add_action('pre_get_posts', 'sailtor_restrict_search_to_posts');