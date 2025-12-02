<?php
/**
 * Plugin Name: Spoiled Paws — Mom-dashboard
 * Description: Dog coat try-on viewer with silhouettes & coat overlays.
 * Version: 1.0.0
 * Author: Spoiled Paws
 *
 * GitHub Plugin URI: https://github.com/Frdrew/spoiled-paws
 * GitHub Branch: main
 * Primary Branch: main
 */


if (!defined('ABSPATH')) exit;

define('SP_MD_DIR', plugin_dir_path(__FILE__));
define('SP_MD_URL', plugin_dir_url(__FILE__));

require_once SP_MD_DIR . 'inc/admin-page.php';
require_once SP_MD_DIR . 'inc/rest.php';
require_once SP_MD_DIR . 'inc/stats.php';
require_once SP_MD_DIR . 'inc/simplify-admin.php';

// Enqueue assets
add_action('admin_enqueue_scripts', function() {
    wp_enqueue_style('spmd-css', SP_MD_URL . 'assets/css/dashboard.css', [], '1.0');
    wp_enqueue_script('spmd-js', SP_MD_URL . 'assets/js/dashboard.js', ['wp-element'], '1.0', true);
});
