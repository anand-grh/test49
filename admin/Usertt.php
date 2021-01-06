<?php
/**
 * Show custom user profile fields
 * Add Time Login in Customer Login page.
 * @param  object $profileuser A WP_User object
 * @return void
 */

function custom_user_profile_fields( $profileuser ) {
?>
    <table class="form-table">
        <tr>
            <th>
                <label for="user_location"><?php esc_html_e( 'Enable Time Login :' ); ?></label>
            </th>
            <td>
            <select name="Tracker" id="Tracker">
          <option value="True">True</option>
          <option value="False">False</option>
          <?php
			$public_display['Tracker'] = $profileuser->Tracker;

		foreach ( $public_display as $id => $item ) {
			?>
		<option <?php selected( $profileuser->Tracker, $item ); ?> ><?php echo $item; ?></option>
			<?php
		}
		?>
          </select>
            </td>
        </tr>
    </table>
<?php
}

function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'Tracker', $_POST['Tracker'] );
}


add_action( 'wp_create_application_password_form', 'custom_user_profile_fields', 10, 1 );
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

