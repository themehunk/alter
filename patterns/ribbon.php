<?php
/**
 * Ribbon Section
 * 
 * slug: ribbon
 * title: Ribbon Section
 * categories: alter
 */

return array(
    'title'      =>__( 'Ribbon Section', 'alter' ),
    'categories' => array( 'alter' ),
    'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"20px","left":"0","right":"0"}}},"textColor":"background","fontSize":"large","fontFamily":"roboto"} -->
    <h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-roboto-font-family has-large-font-size" style="margin-right:0;margin-bottom:20px;margin-left:0">Pleasure in the job puts perfection in the work</h2>
    <!-- /wp:heading -->
    
    <!-- wp:buttons {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
    <div class="wp-block-buttons alignwide"><!-- wp:button {"backgroundColor":"light-background","textColor":"accent"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-light-background-background-color has-text-color has-background wp-element-button">Get Now</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);