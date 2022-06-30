<?php

// Block Css
function enqueue_foundation_in_admin() {
	$current_screen = get_current_screen();
	if ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() ) {
		//Check if we're on a Gutenberg Page
		wp_enqueue_style( 'foundation', home_url() . '/wp-content/theme/hookedfoods/scripts/css/main.css' );
	}
}
add_action( 'admin_enqueue_scripts', 'enqueue_foundation_in_admin' );

//Custom Blocks
add_action('acf/init', 'hookedfoods_acf_blocks_init');
function hookedfoods_acf_blocks_init(){
	if(function_exists('acf_register_block_type')){

		// Stores and Restaurants block type
		acf_register_block_type(array(
			'name' 				=> 'stores-restaurants',
			'title' 			=> __('Stores and Restaurants'),
			'description' 		=> __('A custom stores-restaurants block.'),
			'render_template' 	=> 'template-parts/blocks/stores-restaurants.php',
			'category' 			=> 'layout',
			'icon' 				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4.828 21l-.02.02-.021-.02H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H4.828zM20 15V5H4v14L14 9l6 6zm0 2.828l-6-6L6.828 19H20v-1.172zM8 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>',
		));

	}
}

?>
