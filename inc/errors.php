<?php


function wpts_check_wp_body_open(){

  if ( ! function_exists( 'wp_body_open' ) ) {

    $version = get_bloginfo('version');

    $error_text = 'Currently running WordPress Version '.$version.' however version <strong> >= 5.2</strong> is required for After Body Scripts.';

    return new WP_Error( 'broke bruh', __( $error_text, "my_textdomain" ) );

  }

}

$check_if_wp_body_open_result = wpts_check_wp_body_open();

if ( is_wp_error($check_if_wp_body_open_result) ){

  echo '<div id="message" class="error"><p>' . $check_if_wp_body_open_result->get_error_message() . '</p></div>';
}


function wpts_disable_field(){

  $check_if_wp_body_open_result = wpts_check_wp_body_open();

  if(!empty($check_if_wp_body_open_result)) {
    return 'disabled';
  }

}
