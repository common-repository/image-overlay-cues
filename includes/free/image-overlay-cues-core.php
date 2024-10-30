<?php
/**
 * Core (Free).
 *
 * @package ImageOverlayCues
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct access' );
}

/**
 * This class handles core implementation of overlay cues using BlockStyles API.
 */
class SPIOC_Image_Overlay_Cues_Core {

	/**
	 * Constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register' ) );
	}

	/**
	 * Registers the block style.
	 *
	 * @return void
	 */
	public function register() {

		$name       = 'ioc--image--count';
		$stylesheet = SPIOC_PLUGIN_URL . 'dist/app.css';
		$version    = filemtime( SPIOC_DIR_PATH . 'dist/app.css' );
		$block_type = 'core/image';

		// Register style.
		register_block_style(
			'core/image',
			array(
				'name'  => $name,
				'label' => __( 'Count', 'image-overlay-cues' ),
			)
		);

		// Enqueuing in the editor.
		add_action(
			'enqueue_block_editor_assets',
			function () use ( $name, $stylesheet, $version ) {
				wp_enqueue_style(
					$name,
					$stylesheet,
					array(),
					$version
				);
			}
		);

		// Enqueuing conditionally for frontend.
		add_filter(
			'render_block',
			function ( $block_content, $block ) use ( $name, $stylesheet, $version, $block_type ) {

				if ( is_admin() ) {
					return $block_content;
				}

				// Checking if the block used the style.
				$is_style_used = false !== stripos( $block_content, $name );

				if ( $is_style_used && $block['blockName'] === $block_type ) {
					wp_enqueue_style(
						$name,
						$stylesheet,
						array(),
						$version
					);
				}

				return $block_content;
			},
			10,
			2
		);
	}
}

new SPIOC_Image_Overlay_Cues_Core();
