<?php
/**
 * Alter: Block Patterns
 *
 * @since Alter 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since alter Pro 1.0
 *
 * @return void
 */
  function alter_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'alter' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'alter' ) ),
		'header'   => array( 'label' => __( 'Headers', 'alter' ) ),
		'query'    => array( 'label' => __( 'Query', 'alter' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'alter' ) ),
		'alter'    => array( 'label' => __( 'Alter', 'alter' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since alter Pro 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'alter_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'hero-2',
		'header',
		'service',
		'blog',
		'footer-default',
		'testimonial',
		'team',
		'ribbon',
		'about',
		'404'
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Alter 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'alter_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'alter/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'alter_register_block_patterns', 9 );