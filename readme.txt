=== WP Theme Scripts ===

Contributors: Bryan Davis
Donate link: https://www.sindustries.co.uk/
Tags: theme scripts, css, javascript
Requires at least: 5.2.1
Tested up to: 5.2.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


A plugin to handle adding CSS and JS to the header, footer and from 5.2.1 after the body tag.

== Description ==

WP Theme Scripts handles adding scripts to the header, after the body tag and the footer of your theme!

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Unzip/Upload `wp-theme-scripts` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Ensure your theme is using `<?php wp_head(); ?>`, `<?php wp_footer(); ?>`   `<?php wp_body_open(); ?>` in your templates.
4. Add scripts via settings --> Theme Scripts.

== Frequently Asked Questions ==

= Can I add php? =

No.

= Does the plugin store data after being uninstalled? =

No, the plugin removes all data so when you're uninstalling the plugin you will need to move data to a suitable location.

== Screenshots ==

screenshot-1.png

== Changelog ==

= 0.1 =
* Plugin init

== Upgrade Notice ==
