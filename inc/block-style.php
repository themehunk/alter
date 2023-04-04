<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Alter
 * @since Alter 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Alter 1.0
	 *
	 * @return void
	 */
	function alter_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'alter-border',
				'label' => esc_html__( 'Borders', 'alter' ),
			)
		);

		
	}
	add_action( 'init', 'alter_register_block_styles' );
}