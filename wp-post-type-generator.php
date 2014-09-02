<?php

$block->document->each('@list', function($item, $prop) use ($block) {
    if (is_array($prop) || is_object($prop)) {

    } else {
        $labels = [
            'name'               => _x( $prop, 'post type general name', 'your-plugin-textdomain' ),
            'singular_name'      => _x( $prop, 'post type singular name', 'your-plugin-textdomain' ),
            'menu_name'          => _x( $prop, 'admin menu', 'your-plugin-textdomain' ),
            'name_admin_bar'     => _x( $prop, 'add new on admin bar', 'your-plugin-textdomain' ),
            'add_new'            => _x( 'Add New', strtolower($prop), 'your-plugin-textdomain' ),
            'add_new_item'       => __( 'Add New ' . $prop, 'your-plugin-textdomain' ),
            'new_item'           => __( 'New ' . $prop, 'your-plugin-textdomain' ),
            'edit_item'          => __( 'Edit ' . $prop, 'your-plugin-textdomain' ),
            'view_item'          => __( 'View ' . $prop, 'your-plugin-textdomain' ),
            'all_items'          => __( 'All ' . $prop, 'your-plugin-textdomain' ),
            'search_items'       => __( 'Search ' . $prop, 'your-plugin-textdomain' ),
            'parent_item_colon'  => __( 'Parent ' . $prop . ':', 'your-plugin-textdomain' ),
            'not_found'          => __( 'No ' . strtolower($prop) . ' found.', 'your-plugin-textdomain' ),
            'not_found_in_trash' => __( 'No ' . strtolower($prop) . ' found in Trash.', 'your-plugin-textdomain' )
        ];
        $args = [
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => strtolower($prop )),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        ];
    }
    register_post_type($prop, $args);
});
