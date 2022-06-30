<?php
/**
 * Hookedfoods functions and definitions
 *
 * @package Hookedfoods
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

$hookedfoods_inc_dir = get_template_directory() . '/inc';

// Array of files to include
$hookedfoods_includes = array(
	'/setup.php',
	'/widgets.php',
	'/enqueue.php',
	'/menus.php',
	'/post_types.php',
	'/filter.php',
	'/blocks.php',
);

// Include files
foreach($hookedfoods_includes as $file){
	require_once $hookedfoods_inc_dir . $file;
}
// Allow SVG upload
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

?>
