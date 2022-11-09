<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

      <section class="header-dashboard">

        <div class="container">

          <div class="row">

            <div class="logo">

              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ffmls-logo.svg">

            </div>

            <div class="sponsors">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sponsors/logo-google.png">

              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sponsors/logo-bbb.png">
            </div>

            <div class="buttons">

              <div class="mobile-toggler">
                <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 283.426 283.426" style="enable-background:new 0 0 283.426 283.426;" xml:space="preserve">
                <g>
                    <rect x="0" y="40.84" width="283.426" height="47.735"/>
                    <rect x="0" y="117.282" width="283.426" height="47.735"/>
                    <rect x="0" y="194.851" width="283.426" height="47.735"/>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                </svg>

              </div>

              <a href="<?php echo wp_logout_url(); ?>" class="btn-transparent btn-logout save-on-exit">
                <span>
                  <svg class="icon icon-logout">
                    <use xlink:href="#icon-logout"></use>
                  </svg> Logout
                </span>
              </a>

            </div>

          </div>

        </div>

      </section>
