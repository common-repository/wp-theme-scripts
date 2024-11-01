<?php

// If uninstall not called from WordPress, then exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
	exit;
}

// delete stuff
delete_option('wpts_header_script');
delete_option('wpts_footer_script');
delete_option('wpts_after_body_script');
