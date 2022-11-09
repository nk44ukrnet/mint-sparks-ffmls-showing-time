<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    add_filter('acf/settings/save_json', function() {
        return get_stylesheet_directory() . '/acf-json';
    });

    add_filter('acf/settings/load_json', function($paths) {
        return get_template_directory() . '/acf-json';
    });

}

?>
