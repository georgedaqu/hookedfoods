<?php

// Recipes post type
function recipes_post_type(){
	register_post_type('recipes', [
		'label'  => null,
		'labels' => [
			'name'				=> 'Recipes',
			'singular_name'		=> 'Recipe',
			'add_new'			=> 'Add Recipe',
			'add_new_item'		=> 'Add Recipe',
			'edit_item'			=> 'Edit Recipe',
			'new_item'			=> 'New Recipe',
			'view_item'			=> 'Watch Recipe',
			'search_items'		=> 'Search Recipe',
			'not_found'			=> 'Not found',
		],
		'description'		=> 'Post for Recipe',
		'public'			=> true,
		'show_in_menu'		=> true,
		'show_in_rest'		=> true,
		'rest_base'			=> true,
		'menu_position'		=> true,
		'menu_icon'			=> 'dashicons-megaphone',
		'hierarchical'		=> true,
		'supports'			=> ['title', 'thumbnail'],
		'taxonomies'		=> [],
		'has_archive'		=> true,
		'rewrite'			=> true,
		'query_var'			=> true,
	]);
}
add_action('init', 'recipes_post_type');

//Team Members Post Type

function team_post_type(){
	register_post_type('team', [
		'label'  => null,
		'labels' => [
			'name'				=> 'Team',
			'singular_name'		=> 'Team',
			'add_new'			=> 'Add Team Member',
			'add_new_item'		=> 'Add Team Member',
			'edit_item'			=> 'Edit Team Member',
			'new_item'			=> 'New Team Member',
			'view_item'			=> 'Watch Team Member',
			'search_items'		=> 'Search Team Member',
			'not_found'			=> 'Not found',
		],
		'description'		=> 'Post for Team Member',
		'public'			=> true,
		'show_in_menu'		=> true,
		'show_in_rest'		=> true,
		'rest_base'			=> true,
		'menu_position'		=> true,
		'menu_icon'			=> 'dashicons-groups',
		'hierarchical'		=> true,
		'supports'			=> ['title', 'thumbnail', 'editor'],
		'taxonomies'		=> [],
		'has_archive'		=> true,
		'rewrite'			=> true,
		'query_var'			=> true,
	]);
}
add_action('init', 'team_post_type');


//Companies Members Post Type
function companies_post_type(){
	register_post_type('companies', [
		'label'  => null,
		'labels' => [
			'name'				=> 'Companies',
			'singular_name'		=> 'Companies',
			'add_new'			=> 'Add Companies Member',
			'add_new_item'		=> 'Add Companies Member',
			'edit_item'			=> 'Edit Companies Member',
			'new_item'			=> 'New Companies Member',
			'view_item'			=> 'Watch Companies Member',
			'search_items'		=> 'Search Companies Member',
			'not_found'			=> 'Not found',
		],
		'description'		=> 'Post for Companies Member',
		'public'			=> true,
		'show_in_menu'		=> true,
		'show_in_rest'		=> true,
		'rest_base'			=> true,
		'menu_position'		=> true,
		'menu_icon'			=> 'dashicons-groups',
		'hierarchical'		=> true,
		'supports'			=> ['title', 'thumbnail', 'editor'],
		'taxonomies'		=> [],
		'has_archive'		=> true,
		'rewrite'			=> true,
		'query_var'			=> true,
	]);
}
add_action('init', 'companies_post_type');

?>
