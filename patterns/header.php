<?php
/**
 * Header Section
 * 
 * slug: header
 * title: Header Section
 * categories: alter
 */

return array(
    'title'      =>__( 'Header Section', 'alter' ),
    'categories' => array( 'alter','header' ),
    'content'    => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"dark-text"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
    <div class="wp-block-group"><!-- wp:navigation {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","fontFamily":"roboto"} -->
    <!-- wp:page-list /-->
    <!-- /wp:navigation --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);