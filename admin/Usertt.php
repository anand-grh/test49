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
            <select name="display_login" id="display_login">
          <option value="True">True</option>
          <option value="False">False</option>
          </select>
            </td>
        </tr>
    </table>
<?php
}

add_action( 'wp_create_application_password_form', 'custom_user_profile_fields', 10, 1 );

