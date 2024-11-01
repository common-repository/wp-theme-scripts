<?php

add_action( 'admin_menu', 'wpts_theme_scripts_plugin_menu' );

/** Step 1. */
function wpts_theme_scripts_plugin_menu() {
	add_options_page( 'WPTS Options', 'Theme Scripts', 'manage_options', 'wpts-theme-scripts', 'wpts_plugin_options' );
}



?>
