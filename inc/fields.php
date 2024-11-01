<?php

function wpts_plugin_options() {

  if ( !current_user_can( 'manage_options' ) )  {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  echo '<div class="wrap">';
  ?>

  <h2><?php esc_attr_e( 'Theme Scripts', 'WpAdminStyle' ); ?></h2>

  <div class="inside">
    <p><?php esc_attr_e( 'Add scripts to your website.','WpAdminStyle' ); ?></p>
  </div>

  <form method="post" action="options.php">

    <?php
    settings_fields( 'wpts_settings' );
    do_settings_sections( 'wpts_settings' );
    ?>

    <h2><?php esc_attr_e( 'Header Scripts', 'WpAdminStyle' ); ?></h2>
    <textarea id="wpts_header_script" name="wpts_header_script" cols="80" rows="10" class="large-text" placeholder="Header Scripts" value="<?php echo get_option( 'wpts_header_script' ); ?>" /><?php echo get_option( 'wpts_header_script' ); ?></textarea>
    <br />
    <br />


    <h2><?php esc_attr_e( 'After Body Scripts', 'WpAdminStyle' ); ?></h2>
	<textarea <?php echo wpts_disable_field(); ?>  id="wpts_after_body_script" name="wpts_after_body_script" cols="80" rows="10" class="large-text" placeholder="After Body Scripts" value="<?php echo get_option( 'wpts_after_body_script' ); ?>" ><?php echo get_option( 'wpts_after_body_script' ); ?></textarea>
    <br />
    <br />

    <h2><?php esc_attr_e( 'Footer Scripts', 'WpAdminStyle' ); ?></h2>
    <textarea id="wpts_footer_script" name="wpts_footer_script" cols="80" rows="10" class="large-text" placeholder="Footer Script" value="<?php echo get_option( 'wpts_footer_script' ); ?>" /><?php echo get_option( 'wpts_footer_script' ); ?></textarea>
    <br />
    <br />

    <input class="button-primary" type="submit" name="Save Settings" value="<?php esc_attr_e( 'Save Theme Scripts' ); ?>" />

  </form>

  <?php
  echo '</div>';
}
