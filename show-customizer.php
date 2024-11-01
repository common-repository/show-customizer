<?php
/*
Plugin Name: Show Customizer
Plugin URI: https://wordpress.org/plugins/show-customizer
Description: Shows the theme customizer after it was removed in WordPress 5.9.
Version: 1.0.0
Author: Affordance
Author URI: https://affordance.au/
License: GPLv3
*/

add_action( 'customize_register', '__return_true' );
