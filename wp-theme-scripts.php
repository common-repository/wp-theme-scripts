<?php
/**
 * Plugin Name:     WP Theme Scripts
 * Plugin URI:      https://www.sindustries.co.uk/portfolio/wp-theme-scripts/
 * Description:     WP Theme Scripts handles adding scripts to the header, after the body tag and the footer of your theme!
 * Author:          Sindustries
 * Author URI:      https://www.sindustries.co.uk/
 * Text Domain:     wp-theme-scripts
 * Domain Path:     /languages
 * Version:         0.0.1
 *
 * @package         wp-theme-scripts
 */

$dir = plugin_dir_path( __FILE__ );

include $dir . 'inc/register.php';
include $dir . 'inc/menu.php';
include $dir . 'inc/errors.php';
include $dir . 'inc/fields.php';
include $dir . 'inc/actions.php';
