<?php

// create custom plugin settings menu
add_action('admin_menu', 'footer_options_menu');

function footer_options_menu() {

    //create new top-level menu
    add_menu_page('Footer Options', 'Footer Options', 'administrator', __FILE__, 'footer_options_page');

    //call register settings function
    add_action( 'admin_init', 'register_footer_options' );
}


function register_footer_options() {
    //register our settings
    register_setting( 'footer-options-group', 'address' );
    register_setting( 'footer-options-group', 'hours' );
    register_setting( 'footer-options-group', 'twitter' );
    register_setting( 'footer-options-group', 'facebook' );
    register_setting( 'footer-options-group', 'instagram' );
    register_setting( 'footer-options-group', 'leafly' );
    register_setting( 'footer-options-group', 'phone' );
    register_setting( 'footer-options-group', 'email' );
}

function footer_options_page() {
?>
<div class="wrap">
<h2>Footer Options</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'footer-options-group' ); ?>
    <?php do_settings_sections( 'footer-options-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Address</th>
        <td><input type="text" name="address" value="<?php echo esc_attr( get_option('address') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Hours</th>
        <td><input type="text" name="hours" value="<?php echo esc_attr( get_option('hours') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Twitter URL</th>
        <td><input type="text" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Facebook URL</th>
        <td><input type="text" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Instagram URL</th>
        <td><input type="text" name="instagram" value="<?php echo esc_attr( get_option('instagram') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Leafly URL</th>
        <td><input type="text" name="leafly" value="<?php echo esc_attr( get_option('leafly') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Phone</th>
        <td><input type="text" name="phone" value="<?php echo esc_attr( get_option('phone') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Email</th>
        <td><input type="text" name="email" value="<?php echo esc_attr( get_option('email') ); ?>" /></td>
        </tr>

    </table>
    <?php submit_button(); ?>
</form>
</div>
<?php } ?>
