<?php

define("APP_VERSION", "1.0.0" . (defined('WP_DEBUG') && WP_DEBUG === true) ? rand(1, 10000000) : "");

define("APP_THEME_DIRECTORY_PATH", __DIR__ . "/../");

?>
