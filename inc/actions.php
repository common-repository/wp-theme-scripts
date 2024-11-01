<?php




function wpts_add_header_script(){

  $field = esc_html(get_option('wpts_header_script'));

if($field){
  echo $field;
}

}
add_action("wp_head", 'wpts_add_header_script');






function wpts_add_footer_script(){

  $field = esc_html(get_option('wpts_footer_script'));

  if($field){
    echo $field;
  }

}
add_action("wp_footer", 'wpts_add_footer_script');







function wpts_add_after_body_script(){

  $field = esc_html(get_option('wpts_after_body_script'));

  if($field){
    echo $field;
  }

}
add_action("wp_body_open", 'wpts_add_after_body_script');
