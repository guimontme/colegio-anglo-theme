<?php

function cptui_register_my_home() {

	/**
	 * Post Type: Sections da Home.
	 */

	$labels = array(
		"name" => __( "Sections da Home", "wp-bootstrap-starter" ),
		"singular_name" => __( "Section da Home", "wp-bootstrap-starter" ),
	);

	$args = array(
		"label" => __( "Sections da Home", "wp-bootstrap-starter" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
        "show_in_menu" => true,
        "menu_position" => 5,
		"menu_icon" => "dashicons-admin-multisite",
		"show_in_nav_menus" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "home_section", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields", "page-attributes" ),
	);

	register_post_type( "home_section", $args );

	/**
	 * Post Type: Banners da Home.
	 */

	// $labels = array(
	// 	"name" => __( "Banners da Home", "wp-bootstrap-starter" ),
	// 	"singular_name" => __( "Banner da Home", "wp-bootstrap-starter" ),
	// );

	// $args = array(
	// 	"label" => __( "Banners da Home", "wp-bootstrap-starter" ),
	// 	"labels" => $labels,
	// 	"description" => "",
	// 	"public" => true,
	// 	"publicly_queryable" => false,
	// 	"show_ui" => true,
	// 	"delete_with_user" => false,
	// 	"show_in_rest" => false,
	// 	"rest_base" => "",
	// 	"rest_controller_class" => "WP_REST_Posts_Controller",
	// 	"has_archive" => false,
	// 	"show_in_menu" => true,
	// 	"show_in_nav_menus" => true,
	// 	"exclude_from_search" => true,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
    //     "hierarchical" => false,
    //     "menu_icon" => "dashicons-images-alt",
	// 	"rewrite" => array( "slug" => "banner_home", "with_front" => false ),
	// 	"query_var" => true,
	// 	"menu_position" => 6,
	// 	"supports" => array( "title", "editor", "thumbnail", "custom-fields", "page-attributes" ),
	// );

	// register_post_type( "banner_home", $args );
}

add_action( 'init', 'cptui_register_my_home' );
