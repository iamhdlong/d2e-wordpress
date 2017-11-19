<?php
use  D2e\Inc\D2e_theme;

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

require THEME_PATH .'/inc/autoload.php';

$d2e_theme = new D2e_theme();
