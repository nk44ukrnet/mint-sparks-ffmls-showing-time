<?php

function theme_front_end_css() {

    wp_enqueue_style(
      'theme_bootstrap',
      get_stylesheet_directory_uri() . '/assets/css/bootstrap.css',
      [],
      APP_VERSION,
      'all'
    );

    wp_enqueue_style(
      'theme_stylesheet',
      get_stylesheet_directory_uri() . '/assets/css/default-theme.min.css',
      [],
      APP_VERSION,
      'all'
    );
}
add_action( 'wp_enqueue_scripts', 'theme_front_end_css' );

function theme_front_end_scripts() {

    $dashboard_script_data = array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce("ffmls_ajax_nonce_xCzwHrrV9fxtej9mnrnqQweBQ4ZgmL"),
        'theme_url' => get_stylesheet_directory_uri()
    );

    wp_enqueue_script(
      'theme_scripts',
      get_stylesheet_directory_uri() . '/assets/js/default-theme.min.js',
      [
          'jquery'
      ],
      APP_VERSION,
      true
    );

    wp_localize_script( 'theme_scripts', 'custom_data', $dashboard_script_data );
}
add_action( 'wp_enqueue_scripts', 'theme_front_end_scripts' );

/*
function theme_header_preload_fonts(){
  ?>
  <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/baskervville-v5-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/poppins-v15-latin-300.woff2" as="font" type="font/woff2" crossorigin>
  <?php
}
add_action('wp_head', 'theme_header_preload_fonts');*/
