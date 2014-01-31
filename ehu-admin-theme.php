<?php

/*
Plugin Name: EHU Admin Theme
Plugin URI: http://www.edgehill.ac.uk
Description: Admin Theme to layout sidebars on widget page as for homepage template.
Author: Chris Lomas
Version: 1.0
Author URI: http://www.edgehill.ac.uk
*/

function ehu_admin_theme_style() {
    wp_enqueue_style('ehu-admin-theme-css', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'ehu_admin_theme_style');
add_action('login_enqueue_scripts', 'ehu_admin_theme_style');

?>