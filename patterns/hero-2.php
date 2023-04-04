<?php
/**
 * Hero 2 Section
 * 
 * slug: hero2
 * title: Hero 2 Section
 * categories: alter
 */

return array(
    'title'      =>__( 'Hero 2 Section', 'alter' ),
    'categories' => array( 'alter' ),
    'content'    => '<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull"><!-- wp:cover {"url":"'. esc_url( get_template_directory_uri() ).'/assets/images/hero.jpg","id":18,"dimRatio":40,"minHeight":100,"minHeightUnit":"vh","align":"full","style":{"color":{"duotone":"unset"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
    <div class="wp-block-cover alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-18" alt="" src="'. esc_url( get_template_directory_uri() ).'/assets/images/hero.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"0.8"}},"fontSize":"content-heading"} -->
    <p class="has-text-align-center has-content-heading-font-size" style="line-height:0.8">Transform the World Energy.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"0.8","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|60"}}},"fontSize":"extra-huge"} -->
    <h2 class="wp-block-heading has-text-align-center has-extra-huge-font-size" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--60);font-style:normal;font-weight:300;line-height:0.8">Join Our Mission !!</h2>
    <!-- /wp:heading -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"aligncenter"} -->
    <div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button">Let Us Join</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->',
);