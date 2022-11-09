<?php

// Template Name: Customer Login

if(is_user_logged_in())
{
	wp_redirect( get_site_url() );
	exit;
}

$lost_password_page  = get_permalink( get_field('dashboard_customer_lost_password_page', 'option') );

get_header();

?>

<section class="intro customer-login">

  <div class="container content">
      <div class="row intro-block">
          <div class="col-xs-12 col-md-12 col-lg-12 text-center">
              <h2>Welcome To Customer Login!</h2>
          </div>
      </div>

      <div class="row">

        <div class="col-xs-12 col-md-12 col-lg-12">

        <form class="login-form customer-login-register-form">
          <div class="block">

            <div class="header">
              <div class="title">Login To Your Account</div>
              <div class="subtitle">Login if you have registered account</div>
            </div>

            <div class="content">

              <label for="username">Your Email</label>
              <div class="input-group">
                <input type="email" class="form-control" name="username" id="username" placeholder="Email" required>
              </div>

              <label for="password">Choose Your Password</label>
              <div class="input-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>

							<div class="forgot-password">
								<a href="<?php echo $lost_password_page; ?>">
									Lost Password?
								</a>
							</div>

            </div>

            <div class="footer">

              <button type="submit" class="btn-yellow ld-ext-right">
                Submit
                <div class="ld ld-ring ld-spin"></div>
              </button>

            </div>

          </div>

          <input type="hidden" name="action" value="ffmls_custom_login">
        </form>

      </div>

      </div>

      </div>

  </div>

</section>

<?php


get_footer();

?>
