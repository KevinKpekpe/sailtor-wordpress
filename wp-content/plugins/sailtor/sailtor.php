<?php

/**
 * Plugin Name: Sailtor Plugin
 * Text Domain: sailtor
 * Domain Path: /languages
 */

defined('ABSPATH') or die('rien à voir');

add_action('init', function () {
    register_post_type('service', [
        'label' => __('Services', 'agence'),
        'menu_icon' => 'dashicons-hammer',
        'labels' => [
            'name'                     => __('Services', 'sailtor'),
            'singular_name'            => __('Service', 'sailtor'),
            'edit_item'                => __('Edit Service', 'sailtor'),
            'new_item'                 => __('New Service', 'sailtor'),
            'view_item'                => __('View Service', 'sailtor'),
            'view_items'               => __('View Services', 'sailtor'),
            'search_items'             => __('Search Services', 'sailtor'),
            'not_found'                => __('No services found.', 'sailtor'),
            'not_found_in_trash'       => __('No services found in Trash', 'sailtor'),
            'all_items'                => __('All Services', 'sailtor'),
            'archives'                 => __('Service Archive', 'sailtor'),
            'attributes'               => __('Service Attributes', 'sailtor'),
            'insert_into_item'         => __('Insert into service', 'sailtor'),
            'uploaded_to_this_item'    => __('Uploaded to this service', 'sailtor'),
            'filter_items_list'        => __('Filter services list', 'sailtor'),
            'items_list_navigation'    => __('Services list navigation', 'sailtor'),
            'items_list'               => __('Services list', 'sailtor'),
            'item_published'           => __('Service published.', 'sailtor'),
            'item_published_privately' => __('Service published privately.', 'sailtor'),
            'item_reverted_to_draft'   => __('Service reverted to draft.', 'sailtor'),
            'item_scheduled'           => __('Service scheduled.', 'sailtor'),
            'item_updated'             => __('Service updated.', 'sailtor'),
        ],
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'rewrite' => [
            'slug' => _x('service', 'URL', 'sailtor')
        ],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);
    register_post_type('portfolio', [
        'label' => __('Portfolio', 'sailtor'),
        'menu_icon' => 'dashicons-portfolio',
        'labels' => [
            'name'                     => __('Portfolio Items', 'sailtor'),
            'singular_name'            => __('Portfolio Item', 'sailtor'),
            'edit_item'                => __('Edit Portfolio Item', 'sailtor'),
            'new_item'                 => __('New Portfolio Item', 'sailtor'),
            'view_item'                => __('View Portfolio Item', 'sailtor'),
            'view_items'               => __('View Portfolio Items', 'sailtor'),
            'search_items'             => __('Search Portfolio', 'sailtor'),
            'not_found'                => __('No portfolio items found.', 'sailtor'),
            'not_found_in_trash'       => __('No portfolio items found in Trash', 'sailtor'),
            'all_items'                => __('All Portfolio Items', 'sailtor'),
            'archives'                => __('Portfolio Archive', 'sailtor'),
            'attributes'               => __('Portfolio Attributes', 'sailtor'),
            'insert_into_item'         => __('Insert into portfolio item', 'sailtor'),
            'uploaded_to_this_item'    => __('Uploaded to this portfolio item', 'sailtor'),
            'filter_items_list'        => __('Filter portfolio list', 'sailtor'),
            'items_list_navigation'    => __('Portfolio list navigation', 'sailtor'),
            'items_list'               => __('Portfolio list', 'sailtor'),
            'item_published'           => __('Portfolio item published.', 'sailtor'),
            'item_published_privately' => __('Portfolio item published privately.', 'sailtor'),
            'item_reverted_to_draft'   => __('Portfolio item reverted to draft.', 'sailtor'),
            'item_scheduled'           => __('Portfolio item scheduled.', 'sailtor'),
            'item_updated'             => __('Portfolio item updated.', 'sailtor'),
        ],
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'rewrite' => [
            'slug' => _x('portfolio', 'URL', 'sailtor')
        ],
        'taxonomies' => ['portfolio_category'],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);
    register_post_type('team_member', [
        'label'       => __('Team Members', 'sailtor'),
        'menu_icon'   => 'dashicons-groups',
        'labels'      => [
            'name'                     => __('Team Members', 'sailtor'),
            'singular_name'            => __('Team Member', 'sailtor'),
            'edit_item'                => __('Edit Team Member', 'sailtor'),
            'new_item'                 => __('New Team Member', 'sailtor'),
            'view_item'                => __('View Team Member', 'sailtor'),
            'view_items'               => __('View Team Members', 'sailtor'),
            'search_items'             => __('Search Team Members', 'sailtor'),
            'not_found'                => __('No team members found.', 'sailtor'),
            'not_found_in_trash'       => __('No team members found in Trash', 'sailtor'),
            'all_items'                => __('All Team Members', 'sailtor'),
            'archives'                 => __('Team Member Archive', 'sailtor'),
            'attributes'               => __('Team Member Attributes', 'sailtor'),
            'insert_into_item'         => __('Insert into team member', 'sailtor'),
            'uploaded_to_this_item'    => __('Uploaded to this team member', 'sailtor'),
            'filter_items_list'        => __('Filter team members list', 'sailtor'),
            'items_list_navigation'    => __('Team members list navigation', 'sailtor'),
            'items_list'               => __('Team members list', 'sailtor'),
            'item_published'           => __('Team member published.', 'sailtor'),
            'item_published_privately' => __('Team member published privately.', 'sailtor'),
            'item_reverted_to_draft'   => __('Team member reverted to draft.', 'sailtor'),
            'item_scheduled'           => __('Team member scheduled.', 'sailtor'),
            'item_updated'             => __('Team member updated.', 'sailtor'),
        ],
        'has_archive'           => true,
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => false,
        'rewrite'               => [
            'slug' => _x('team', 'URL', 'sailtor')
        ],
        'supports'              => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);

    register_post_type('pricing', [
        'label' => __('Pricing', 'sailtor'),
        'menu_icon' => 'dashicons-cart',
        'labels' => [
            'name'                     => __('Pricing Items', 'sailtor'),
            'singular_name'            => __('Pricing Item', 'sailtor'),
            'edit_item'                => __('Edit Pricing Item', 'sailtor'),
            'new_item'                 => __('New Pricing Item', 'sailtor'),
            'view_item'                => __('View Pricing Item', 'sailtor'),
            'view_items'               => __('View Pricing Items', 'sailtor'),
            'search_items'             => __('Search Pricing', 'sailtor'),
            'not_found'                => __('No pricing items found.', 'sailtor'),
            'not_found_in_trash'       => __('No pricing items found in Trash', 'sailtor'),
            'all_items'                => __('All Pricing Items', 'sailtor'),
            'archives'                 => __('Pricing Archive', 'sailtor'),
            'attributes'               => __('Pricing Attributes', 'sailtor'),
            'insert_into_item'         => __('Insert into pricing item', 'sailtor'),
            'uploaded_to_this_item'    => __('Uploaded to this pricing item', 'sailtor'),
            'filter_items_list'        => __('Filter pricing items list', 'sailtor'),
            'items_list_navigation'    => __('Pricing items list navigation', 'sailtor'),
            'items_list'               => __('Pricing items list', 'sailtor'),
            'item_published'           => __('Pricing item published.', 'sailtor'),
            'item_published_privately' => __('Pricing item published privately.', 'sailtor'),
            'item_reverted_to_draft'   => __('Pricing item reverted to draft.', 'sailtor'),
            'item_scheduled'           => __('Pricing item scheduled.', 'sailtor'),
            'item_updated'             => __('Pricing item updated.', 'sailtor'),
        ],
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'rewrite' => [
            'slug' => _x('pricing', 'URL', 'sailtor')
        ],
    ]);
    
    register_taxonomy('portfolio_category', 'portfolio', [
        'meta_box_cb' => 'post_categories_meta_box',
        'hierarchical' => true,
        'labels' => [
            'name'                       => __('Portfolio Categories', 'sailtor'),
            'singular_name'              => __('Portfolio Category', 'sailtor'),
            'search_items'               => __('Search Categories', 'sailtor'),
            'popular_items'              => __('Popular Categories', 'sailtor'),
            'all_items'                  => __('All Categories', 'sailtor'),
            'edit_item'                  => __('Edit Category', 'sailtor'),
            'view_item'                  => __('View Category', 'sailtor'),
            'update_item'                => __('Update Category', 'sailtor'),
            'add_new_item'               => __('Add New Category', 'sailtor'),
            'new_item_name'              => __('New Category Name', 'sailtor'),
            'separate_items_with_commas' => __('Separate categories with commas', 'sailtor'),
            'add_or_remove_items'        => __('Add or remove categories', 'sailtor'),
            'choose_from_most_used'      => __('Choose from the most used categories', 'sailtor'),
            'not_found'                  => __('No categories found.', 'sailtor'),
            'no_terms'                   => __('No categories', 'sailtor'),
            'items_list_navigation'      => __('Categories list navigation', 'sailtor'),
            'items_list'                 => __('Categories list', 'sailtor'),
            'back_to_items'              => __('&larr; Back to Categories', 'sailtor'),
        ],
        'rewrite' => [
            'slug' => 'portfolio-category'
        ]
    ]);
});



register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');
