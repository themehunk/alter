<?php
/**
 * 404  Section
 * 
 * slug: 404
 * title: 404 Section
 * categories: alter
 */

return array(
    'title'      =>__( '404', 'alter' ),
    'categories' => array( 'alter' ),
    'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"0","bottom":"var:preset|spacing|60","left":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:site-logo {"align":"center","className":"is-style-default","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} /-->
    
    <!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"largest"} -->
    <h2 class="wp-block-heading alignwide has-text-align-center has-largest-font-size">404</h2>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|80","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"border":{"top":{"color":"var:preset|color|accent","width":"2px"}}},"textColor":"dark-background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group has-dark-background-color has-text-color" style="border-top-color:var(--wp--preset--color--accent);border-top-width:2px;margin-top:var(--wp--preset--spacing--80);margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"heading","fontSize":"medium"} -->
    <p class="has-text-align-center has-heading-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">It looks like nothing was found at this location. Maybe try a search?</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"button-border"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-button-border-background-color has-background wp-element-button" href="#">&lt;- Go to Home</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);