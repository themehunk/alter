<?php
/**
 * Blog Section
 * 
 * slug: blog
 * title: Blog Section
 * categories: alter
 */

return array(
    'title'      =>__( 'Blog Section', 'alter' ),
    'categories' => array( 'alter' ),
    'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:query {"queryId":15,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":4},"align":"wide","className":"thunk-blog-pattern","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide thunk-blog-pattern"><!-- wp:post-template -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.8","letterSpacing":"1px"}},"fontSize":"upper-heading","fontFamily":"roboto"} /-->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"0.8"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);line-height:0.8"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"tiny"} -->
    <p class="has-text-align-center has-tiny-font-size" style="font-style:italic;font-weight:400">by</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:post-author {"textAlign":"center","showAvatar":false,"showBio":false,"byline":"","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"tiny"} /-->
    
    <!-- wp:post-date {"textAlign":"center","style":{"spacing":{"margin":{"left":"var:preset|spacing|30"}}},"fontSize":"tiny"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"12px"} -->
    <div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:post-excerpt {"textAlign":"center","moreText":"Read More","style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    <!-- /wp:post-template --></div>
    <!-- /wp:query --></div>
    <!-- /wp:group -->',
);