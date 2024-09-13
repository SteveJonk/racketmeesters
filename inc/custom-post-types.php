<?php

function theme_post_types()
{
    $labelsTestimonial = array(
        'name'                  => _x('Testimonials', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Testimonial', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Testimonials', 'text_domain'),
        'name_admin_bar'        => __('Testimonial', 'text_domain'),
        'archives'              => __('Testimonial Archieven', 'text_domain'),
        'attributes'            => __('Testimonial Attributen', 'text_domain'),
        'all_items'             => __('Alle Testimonials', 'text_domain'),
        'add_new_item'          => __('Nieuwe Testimonial', 'text_domain'),
        'add_new'               => __('Nieuwe Testimonial', 'text_domain'),
        'new_item'              => __('New Testimonial', 'text_domain'),
        'edit_item'             => __('Testimonial Bewerken', 'text_domain'),
        'update_item'           => __('Testimonial Updaten', 'text_domain'),
        'view_item'             => __('Toon Testimonial', 'text_domain'),
        'view_items'            => __('Toon Testimonials', 'text_domain'),
        'search_items'          => __('Zoek Testimonial', 'text_domain'),
        'insert_into_item'      => __('Invoegen in Testimonial', 'text_domain'),
        'items_list'            => __('Testimonial lijst', 'text_domain'),
        'items_list_navigation' => __('Testimonials lijst navigatie', 'text_domain'),
        'filter_items_list'     => __('Filter Testimonial lijst', 'text_domain'),
    );

    $argsTestimonial = array(
        'label'                 => __('Testimonial', 'text_domain'),
        'description'           => __('Testimonials', 'text_domain'),
        'labels'                => $labelsTestimonial,
        'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'menu_position'         => 4,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-testimonial',
        'exclude_from_search'   => true,

    );

    register_post_type('testimonial', $argsTestimonial);
}

add_action('init', 'theme_post_types');
