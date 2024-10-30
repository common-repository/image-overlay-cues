<?php

/**
 * Plugin Name: Image Overlay Cues
 * Description: Allows users to diplay content cues on top of images.
 * Author: Small Plugins
 * Author URI: https://www.smallplugins.com/
 * Version: 1.0.1
 * Requires at least: 5.8.3
 * Requires PHP: 5.7
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: image-overlay-cues
 * Domain Path: /languages
 * Tested up to: 6.6
 *
 * @package ImageOverlayCues
 */
if ( !defined( 'ABSPATH' ) ) {
    die( 'No direct access' );
}
if ( !defined( 'SPIOC_DIR_PATH' ) ) {
    define( 'SPIOC_DIR_PATH', \plugin_dir_path( __FILE__ ) );
}
if ( !defined( 'SPIOC_PLUGIN_URL' ) ) {
    define( 'SPIOC_PLUGIN_URL', \plugins_url( '/', __FILE__ ) );
}
if ( !defined( 'SPIOC_PLUGIN_BASE_NAME' ) ) {
    define( 'SPIOC_PLUGIN_BASE_NAME', \plugin_basename( __FILE__ ) );
}
if ( !class_exists( 'Image_Overlay_Cues' ) ) {
    /**
     * Main plugin class
     */
    final class Image_Overlay_Cues {
        /**
         * Var to make sure we only load once
         *
         * @var boolean $loaded
         */
        public static $loaded = false;

        /**
         * Constructor
         *
         * @return void
         */
        public function __construct() {
            if ( !self::$loaded ) {
                self::$loaded = true;
                if ( !function_exists( 'ioc_fs' ) ) {
                    // Create a helper function for easy SDK access.
                    function ioc_fs() {
                        global $ioc_fs;
                        if ( !isset( $ioc_fs ) ) {
                            // Include Freemius SDK.
                            require_once __DIR__ . '/freemius/start.php';
                            $ioc_fs = fs_dynamic_init( array(
                                'id'             => '15277',
                                'slug'           => 'image-overlay-cues',
                                'type'           => 'plugin',
                                'public_key'     => 'pk_b007c8f22318513b18e7eeac6d251',
                                'is_premium'     => false,
                                'premium_suffix' => 'Pro',
                                'has_addons'     => false,
                                'has_paid_plans' => true,
                                'menu'           => array(
                                    'first-path' => 'plugins.php',
                                    'support'    => false,
                                ),
                                'is_live'        => true,
                            ) );
                        }
                        return $ioc_fs;
                    }

                    // Init Freemius.
                    ioc_fs();
                    // Signal that SDK was initiated.
                    do_action( 'ioc_fs_loaded' );
                }
                require_once SPIOC_DIR_PATH . 'includes/image-overlay-cues-assets.php';
                require_once SPIOC_DIR_PATH . 'includes/free/image-overlay-cues-core.php';
            }
        }

    }

    new Image_Overlay_Cues();
}
