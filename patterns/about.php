<?php
/**
 * About  Section
 * 
 * slug: about
 * title: About Section
 * categories: alter
 */

return array(
    'title'      =>__( 'About 2 Section', 'alter' ),
    'categories' => array( 'alter' ),
    'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"20px","left":"0","right":"0"}}},"textColor":"dark-text","fontSize":"large","fontFamily":"roboto"} -->
    <h2 class="wp-block-heading has-text-align-left has-dark-text-color has-text-color has-roboto-font-family has-large-font-size" style="margin-right:0;margin-bottom:20px;margin-left:0">Just look our insight how we Works <br>the work is what we are today</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.8"}}} -->
    <p class="has-text-align-left" style="line-height:1.8">Mauris tempus leo orci, sagittis aliquam ligula euismod ut. Vivamus laoreet eu felis ut dignissim. Nam elementum sem sed eros dapibus auctor. Etiam vulputate convallis sem eu maximus. Donec et molestie dui, vitae consequat libero.  Aenean vitae massa ut augue pretium pharetra. Cras ornare pretium nisl, vel gravida mauris auctor quis. </p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.8"}}} -->
    <p class="has-text-align-left" style="line-height:1.8">Aenean vitae massa ut augue pretium pharetra. Cras ornare pretium nisl, vel gravida mauris auctor quis. Maecenas ornare erat non pharetra malesuada. Quisque leo tortor, pretium non felis quis, lacinia vehicula </p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Explore</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="'. esc_url( get_template_directory_uri() ).'/assets/images/about.jpg" alt=""/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);