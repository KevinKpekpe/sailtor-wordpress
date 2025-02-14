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
});


register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');
