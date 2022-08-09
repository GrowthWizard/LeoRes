<?php
/**
 * About Us Section with a light transition background
 */
return array(
	'title'      => __( 'Über uns Grau', 'leores' ),
	'categories' => array( 'leorestheme' ),
    'content' => '<!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"lr-about-one"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center lr-about-one"><!-- wp:column {"verticalAlignment":"center","width":"49%","style":{"spacing":{"padding":{"top":"6%","right":"5%","bottom":"6%","left":"5%"}},"color":{"gradient":"linear-gradient(60deg,rgb(255,255,255) 2%,rgba(237,237,237,0.42) 100%)"}},"className":"lr-about-one-description"} -->
    <div class="wp-block-column is-vertically-aligned-center lr-about-one-description has-background" style="background:linear-gradient(60deg,rgb(255,255,255) 2%,rgba(237,237,237,0.42) 100%);padding-top:6%;padding-right:5%;padding-bottom:6%;padding-left:5%;flex-basis:49%"><!-- wp:group {"className":"lr-about-one-description-content"} -->
    <div class="wp-block-group lr-about-one-description-content"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"className":"lr-about-one-title","fontSize":"medium-large","fontFamily":"jost"} -->
    <h2 class="lr-about-one-title has-jost-font-family has-medium-large-font-size" style="font-style:normal;font-weight:300">Für Ihre Lebenssituation<br>die richtige Beratung.</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"fontSize":"normal"} -->
    <p class="has-normal-font-size"><strong>Deutschlandweit - persönlich &amp; digital</strong></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"className":"lr-about-one-description","fontSize":"normal"} -->
    <p class="lr-about-one-description has-normal-font-size" style="font-style:normal;font-weight:300">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt volunta un trato domeda</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"1rem"} -->
    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"textColor":"darkgrey","width":50,"style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-outline","fontSize":"medium"} -->
    <div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-outline has-medium-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-darkgrey-color has-text-color wp-element-button">Termin vereinbaren</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":299,"sizeSlug":"full","linkDestination":"none","className":"lr-about-one-image"} -->
    <figure class="wp-block-image size-full lr-about-one-image"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/about-one.png" alt="" class="wp-image-299"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p></p>
    <!-- /wp:paragraph -->'
);