<?php

function wpts_register_settings() {
	// whitelist options
  register_setting( 'wpts_settings', 'wpts_header_script' );
  register_setting( 'wpts_settings', 'wpts_after_body_script' );
  register_setting( 'wpts_settings', 'wpts_footer_script' );
}

add_action( 'admin_init', 'wpts_register_settings' );
