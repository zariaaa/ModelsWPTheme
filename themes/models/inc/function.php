<?php

add_action( 'init', 'ara__register_cpt_girls' );

function ara__register_cpt_girls() {
	$labels = array(
		'name'               => _x( 'Момичета', 'post type general name', 'models' ),
		'singular_name'      => _x( 'Момиче', 'post type singular name', 'models' ),
		'menu_name'          => _x( 'Момичета', 'admin menu', 'models' ),
		'name_admin_bar'     => _x( 'Момиче', 'add new on admin bar', 'models' ),
		'add_new'            => _x( 'Добави', 'book', 'models' ),
		'add_new_item'       => __( 'Добави момиче', 'models' ),
		'new_item'           => __( 'Ново момиче', 'models' ),
		'edit_item'          => __( 'Редактиране', 'models' ),
		'view_item'          => __( 'Преглед', 'models' ),
		'all_items'          => __( 'Всички Момичета', 'models' ),
		'search_items'       => __( 'Търсене ', 'models' ),
		'parent_item_colon'  => __( 'Родител:', 'models' ),
		'not_found'          => __( 'No Момичета found.', 'models' ),
		'not_found_in_trash' => __( 'No Момичета found in Trash.', 'models' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'models' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'момичета' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'ara_girls', $args );
}