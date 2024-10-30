<?php

/**
 * Assets.
 *
 * @package ImageOverlayCues
 */
if ( !defined( 'ABSPATH' ) ) {
    die( 'No direct access' );
}
/**
 * This class handles all assets related functionality.
 */
class SPIOC_Image_Overlay_Cues_Assets {
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct() {
        add_action( 'enqueue_block_editor_assets', array($this, 'load_editor_assets') );
    }

    /**
     * Loads necesary block editor assets.
     *
     * @return void
     */
    public function load_editor_assets() {
        wp_enqueue_style(
            'image-overlay-cues-app',
            SPIOC_PLUGIN_URL . 'dist/app.css',
            array(),
            filemtime( SPIOC_DIR_PATH . 'dist/app.css' )
        );
    }

}

new SPIOC_Image_Overlay_Cues_Assets();