<?php

// Template Name: Lost Password

if(is_user_logged_in())
{
	wp_redirect( get_site_url() );
	exit;
}

get_header();

?>

<section class="intro customer-login">

  <div class="container content">
      <div class="row intro-block">
          <div class="col-xs-12 col-md-12 col-lg-12 text-center">
              <h2>Welcome To Customer Login!</h2>
          </div>
      </div>

      <div class="row justify-content-center">

        <div class="col-xs-12 col-md-6 col-lg-5">

          <form class="register-form customer-login-lost-password-form">
            <div class="block">

              <div class="header">
                <div class="title">Recover A Lost Password</div>
                <div class="subtitle">Please enter your username or email address!</div>
              </div>

              <div class="content">

                <label for="username">Username or Email</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="user_login" id="user_login" placeholder="Email/Username" required>
                </div>

              </div>

              <div class="footer">

                <button type="submit" class="btn-yellow ld-ext-right">
                  Get A New Password
                  <div class="ld ld-ring ld-spin"></div>
                </button>

              </div>

            </div>

            <input type="hidden" name="action" value="ffmls_custom_lost_password">
          </form>

        </div>

      </div>

      </div>

  </div>

</section>

<?php


get_footer();

?>