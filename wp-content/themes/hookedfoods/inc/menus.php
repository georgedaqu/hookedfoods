<?php

// Register menus
function hookedfoods_register_nav_menu(){
	register_nav_menu('header_menu', 'Header Menu');
	register_nav_menu('hamburger_menu', 'Hamburger Menu');
}
add_action('after_setup_theme', 'hookedfoods_register_nav_menu');

?>