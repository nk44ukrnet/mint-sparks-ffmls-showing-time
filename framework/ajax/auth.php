<?php

class FFMLS_Auth {

    public function hooksAndActions() {

        add_action('login_form_lostpassword', [$this, 'ffmls_redirect_to_custom_lostpassword']);

        add_action('wp_ajax_nopriv_ffmls_custom_lost_password', [$this, 'ffmls_custom_lost_password']);
        add_action('wp_ajax_nopriv_ffmls_custom_login', [$this, 'ffmls_custom_login']);

        add_action('wp_logout', [$this, 'logout_redirect']);
    }

    public function ffmls_custom_login()
    {
       if( !session_id())
       {
          session_start();
       }

       $response = [ 'status' => 'error' ];

       $login_data = array();

       $login_data['user_login'] = !empty($_REQUEST['username']) ? $_REQUEST['username'] : '';
       $login_data['user_password'] = !empty($_REQUEST['password']) ? $_REQUEST['password'] : '';

       $user_verify = wp_signon( $login_data, true );

       if ( is_wp_error($user_verify) )
       {

         $response['message'] = "Profile not found!";

       } else {

         $response['status'] = 'ok';

         if(!empty($_SESSION['dashboard_referal']))
         {

           $response['redirect_url'] = $_SESSION['dashboard_referal'];

           unset($_SESSION['dashboard_referal']);

         } else {

           wp_set_current_user($user_verify->data->ID);

           $is_admin = get_field('dashboard_admin', 'user_'.$user_verify->data->ID);
           $is_agent = get_field('dashboard_agent', 'user_'.$user_verify->data->ID);

           if($is_admin)
           {

             $response['redirect_url'] = get_permalink( get_field('dashboard_admin_page', 'option') );

           } else if ($is_agent) {

             $response['redirect_url'] = get_permalink( get_field('dashboard_agent_page', 'option') );

           } else {

             $response['redirect_url'] = get_permalink( get_field('dashboard_page', 'option') );

           }

         }

       }

       echo json_encode( $response );
       die();
    }

    /* What to do on logout */
    public function logout_redirect() {
    	$login_page  = get_permalink( get_field('dashboard_customer_login_page', 'option') );
    	wp_redirect($login_page . "?login=false");
    	exit;
    }

    /**
     * Initiates password reset.
     */
    public function ffmls_custom_lost_password()
    {

    	$response = [ 'status' => 'error' ];

    	if ( 'POST' == $_SERVER['REQUEST_METHOD'] )
    	{
    	    $errors = $this->ffmls_retrieve_password();

    			$login_page  = get_permalink( get_field('dashboard_customer_login_page', 'option') );

    	    if ( is_wp_error( $errors ) )
    			{

    	        // Errors found
    	        $redirect_url = $login_page;

    					$response['message'] = 'There was an error, please contact site administrator!';

    	    } else {
    	        // Email sent
    	        $redirect_url = $login_page;

    					$response['status'] = 'ok';
    	    }

    			$response['redirect_url'] = $redirect_url;
    	}

    	echo json_encode( $response );
    	die();
    }

    /**
     * Redirects the user to the custom "Forgot your password?" page instead of
     * wp-login.php?action=lostpassword.
     */
    public function ffmls_redirect_to_custom_lostpassword() {
        if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {
            if ( is_user_logged_in() ) {
                wp_redirect(get_site_url());
                exit;
            }

    				$lost_password_page  = get_permalink( get_field('dashboard_customer_lost_password_page', 'option') );
    				wp_redirect($lost_password_page . "?login=false");
            exit;
        }
    }

    private function ffmls_retrieve_password() {
    	$errors = new WP_Error();

    	if ( empty( $_POST['user_login'] ) || ! is_string( $_POST['user_login'] ) ) {
    		$errors->add( 'empty_username', __( '<strong>ERROR</strong>: Enter a username or email address.' ) );
    	} elseif ( strpos( $_POST['user_login'], '@' ) ) {
    		$user_data = get_user_by( 'email', trim( wp_unslash( $_POST['user_login'] ) ) );
    		if ( empty( $user_data ) ) {
    			$errors->add( 'invalid_email', __( '<strong>ERROR</strong>: There is no account with that username or email address.' ) );
    		}
    	} else {
    		$login     = trim( $_POST['user_login'] );
    		$user_data = get_user_by( 'login', $login );
    	}

    	/**
    	 * Fires before errors are returned from a password reset request.
    	 *
    	 * @since 2.1.0
    	 * @since 4.4.0 Added the `$errors` parameter.
    	 *
    	 * @param WP_Error $errors A WP_Error object containing any errors generated
    	 *                         by using invalid credentials.
    	 */
    	do_action( 'lostpassword_post', $errors );

    	if ( $errors->has_errors() ) {
    		return $errors;
    	}

    	if ( ! $user_data ) {
    		$errors->add( 'invalidcombo', __( '<strong>ERROR</strong>: There is no account with that username or email address.' ) );
    		return $errors;
    	}

    	// Redefining user_login ensures we return the right case in the email.
    	$user_login = $user_data->user_login;
    	$user_email = $user_data->user_email;
    	$key        = get_password_reset_key( $user_data );

    	if ( is_wp_error( $key ) ) {
    		return $key;
    	}

    	if ( is_multisite() ) {
    		$site_name = get_network()->site_name;
    	} else {
    		/*
    		 * The blogname option is escaped with esc_html on the way into the database
    		 * in sanitize_option we want to reverse this for the plain text arena of emails.
    		 */
    		$site_name = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
    	}

    	$message = __( 'Someone has requested a password reset for the following account:' ) . "\r\n\r\n";
    	/* translators: %s: Site name. */
    	$message .= sprintf( __( 'Site Name: %s' ), $site_name ) . "\r\n\r\n";
    	/* translators: %s: User login. */
    	$message .= sprintf( __( 'Username: %s' ), $user_login ) . "\r\n\r\n";
    	$message .= __( 'If this was a mistake, just ignore this email and nothing will happen.' ) . "\r\n\r\n";
    	$message .= __( 'To reset your password, visit the following address:' ) . "\r\n\r\n";
    	$message .= '<' . network_site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . ">\r\n";

    	/* translators: Password reset notification email subject. %s: Site title. */
    	$title = sprintf( __( '[%s] Password Reset' ), $site_name );

    	/**
    	 * Filters the subject of the password reset email.
    	 *
    	 * @since 2.8.0
    	 * @since 4.4.0 Added the `$user_login` and `$user_data` parameters.
    	 *
    	 * @param string  $title      Default email title.
    	 * @param string  $user_login The username for the user.
    	 * @param WP_User $user_data  WP_User object.
    	 */
    	$title = apply_filters( 'retrieve_password_title', $title, $user_login, $user_data );

    	/**
    	 * Filters the message body of the password reset mail.
    	 *
    	 * If the filtered message is empty, the password reset email will not be sent.
    	 *
    	 * @since 2.8.0
    	 * @since 4.1.0 Added `$user_login` and `$user_data` parameters.
    	 *
    	 * @param string  $message    Default mail message.
    	 * @param string  $key        The activation key.
    	 * @param string  $user_login The username for the user.
    	 * @param WP_User $user_data  WP_User object.
    	 */
    	$message = apply_filters( 'retrieve_password_message', $message, $key, $user_login, $user_data );

    	if ( $message && ! wp_mail( $user_email, wp_specialchars_decode( $title ), $message ) ) {
    		$errors->add(
    			'retrieve_password_email_failure',
    			sprintf(
    				/* translators: %s: Documentation URL. */
    				__( '<strong>ERROR</strong>: The email could not be sent. Your site may not be correctly configured to send emails. <a href="%s">Get support for resetting your password</a>.' ),
    				esc_url( __( 'https://wordpress.org/support/article/resetting-your-password/' ) )
    			)
    		);
    		return $errors;
    	}

    	return true;
    }
}

(new FFMLS_Auth)->hooksAndActions();

?>