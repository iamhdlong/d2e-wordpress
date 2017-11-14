<?php
/**
 * @package WordPress
 * @subpackage D2E theme
 * @since 1.0
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	//require get_template_directory() . '/inc/back-compat.php';
	return;
}

define(THEME_URI, get_template_directory_uri());
define(THEME_PATH, get_template_directory());

//require get_parent_theme_file_path( '/inc/icon-functions.php' );

require THEME_PATH .'/inc/class.d2e-settings.php';
require THEME_PATH .'/inc/class.d2e-theme.php';

$d2e_theme = new D2E_theme();
