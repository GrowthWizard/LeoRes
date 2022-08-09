<?php
/**
 * About Us Two Column layout with light primary background
 */
return array(
	'title'      => __( 'Über Uns 2', 'leores' ),
	'categories' => array( 'leorestheme' ),
    'content' => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}}} -->
    <div class="wp-block-group alignwide" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"lr-about-two"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center lr-about-two"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":480,"sizeSlug":"full","linkDestination":"none","className":"lr-about-two-image"} -->
    <figure class="wp-block-image size-full lr-about-two-image"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/about-two.jpeg" alt=""/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"56%","style":{"color":{"gradient":"linear-gradient(60deg,rgba(245,242,234,0) 4%,rgb(245,242,234) 100%)"},"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}},"className":"lr-about-two-description"} -->
    <div class="wp-block-column is-vertically-aligned-center lr-about-two-description has-background" style="background:linear-gradient(60deg,rgba(245,242,234,0) 4%,rgb(245,242,234) 100%);padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%;flex-basis:56%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"8%","top":"8%"}}},"className":"lr-about-two-description-content","layout":{"contentSize":"450px"}} -->
    <div class="wp-block-group lr-about-two-description-content" style="padding-top:8%;padding-bottom:8%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"lr-about-two-title","fontSize":"large","fontFamily":"jost"} -->
    <h2 class="lr-about-two-title has-jost-font-family has-large-font-size" style="font-style:normal;font-weight:700"><strong>Zahlreiche Versicherungen sind mittlerweile ein wenig überholt.</strong></h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"className":".lr-about-two-desc"} -->
    <p class=".lr-about-two-desc" style="font-style:normal;font-weight:300">Werden diese nicht angepasst, ist das Hotel<br>schnell überversichert. Es kann aber auch<br>sein, dass die alte Versicherung nicht mehr<br>den gegenwärtigen Versicherungszustand<br>deckt, sodass bei Schaden kein Schutz<br>greift.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);