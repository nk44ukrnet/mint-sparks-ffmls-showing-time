<?php

//require __DIR__."/vendor/autoload.php";

// Global config
include_once("framework/config.php");

// AJAX
include_once("framework/ajax/auth.php");

// ACF
include_once("framework/theme/acf.php");

// Setup Theme (Menus, Widgets etc.)
include_once("framework/theme/setup.php");

// Styles & Scripts
include_once("framework/theme/assets.php");

// Helpers
include_once("framework/theme/helpers.php");

?>
