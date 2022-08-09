<?php
/**
 * Header Template for Frontpage with Brand Images
 */
return array(
	'title'      => __( 'Kunden-Teiler', 'leores' ),
	'categories' => array( 'leorestheme' ),
    'content' => '<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0%","right":"5%","bottom":"0%","left":"5%"},"blockGap":"2rem"}},"className":"lr-section-clients"} -->
    <div class="wp-block-columns alignwide lr-section-clients" style="padding-top:0%;padding-right:5%;padding-bottom:0%;padding-left:5%"><!-- wp:column {"className":"lr-card-50"} -->
    <div class="wp-block-column lr-card-50"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Rectangle.png" alt=""/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"}}},"className":"lr-card-content"} -->
    <div class="wp-block-group lr-card-content" style="margin-top:3rem"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"lr-card-title","fontSize":"large"} -->
    <h2 class="lr-card-title has-large-font-size" style="font-style:normal;font-weight:700">Privatkunden</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"lr-card-text"} -->
    <p class="lr-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur sagittis, uloe..</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.5px"}},"className":"lr-readmore-black","fontSize":"medium"} -->
    <p class="lr-readmore-black has-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.5px">Jetzt versichern<a href="http://127.0.0.1:5500/"></a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"lr-card-50"} -->
    <div class="wp-block-column lr-card-50"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Rectangle.png" alt=""/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"}}},"className":"lr-card-content"} -->
    <div class="wp-block-group lr-card-content" style="margin-top:3rem"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"lr-card-title","fontSize":"large"} -->
    <h2 class="lr-card-title has-large-font-size" style="font-style:normal;font-weight:700">Geschäftskunden</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"lr-card-text"} -->
    <p class="lr-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur sagittis, uloe...</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.5px"}},"className":"lr-readmore-black","fontSize":"medium"} -->
    <p class="lr-readmore-black has-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.5px">Jetzt versichern<a href="http://127.0.0.1:5500/"></a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->'
);