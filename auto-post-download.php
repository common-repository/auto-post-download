<?php
/*
 Plugin Name: Auto Post Download
Description: Plugin that automatically creates attachment with post content and its image
Version: 1.4.4
Author: Maciej Kopeć
Author URI: http://maciejkopec.pl
License: GPL2
*/

require_once 'APD_Attatchment.php';
require_once 'APD_Settings.php';

// plugin constants
if (!defined('APD_PLUGIN_NAME'))
	define('APD_PLUGIN_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));

if (!defined('APD_PLUGIN_DIR'))
	define('APD_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . APD_PLUGIN_NAME);

if (!defined('APD_PLUGIN_URL'))
	define('APD_PLUGIN_URL', WP_PLUGIN_URL . '/' . APD_PLUGIN_NAME);


function	apd_generate_attachment($post_id)	{
	if	(wp_is_post_revision($post_id))	{
		return;
	}
	$attachment	= new APD_Attatchment($post_id);
	$attachment->generate();
}

add_action('save_post',	'apd_generate_attachment', 1000);

if( is_admin() ){
	new APD_Settings();
}

// shortcode
// [auto-post-download]
// this one returns url to attachment
function apd_downloadUrl(){
	global $post;
	extract( shortcode_atts( array(
	'postId' => get_the_ID()
	), $atts ) );

	$attachmentId = get_post_meta($postId, 'adp_attachment_id', true);
	return wp_get_attachment_url($attachmentId);
}
add_shortcode('auto-post-download', 'apd_downloadUrl' );

?>