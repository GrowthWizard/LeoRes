<?php
/**
 * About Us Two Column layout with Cover Image of the CEO
 */
return array(
	'title'      => __( 'Über Uns 3', 'leores' ),
	'categories' => array( 'leorestheme' ),
    'content' => '<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"padding":{"top":"0%","right":"5%","bottom":"0%","left":"5%"},"blockGap":"0px"}},"className":"lr-about-three"} -->
    <div class="wp-block-columns alignwide lr-about-three" style="padding-top:0%;padding-right:5%;padding-bottom:0%;padding-left:5%"><!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/inc/images/thorsten-takz.jpeg","id":317,"dimRatio":0,"overlayColor":"transparent","focalPoint":{"x":"0.50","y":"0.38"},"minHeight":430,"contentPosition":"bottom left","className":"lr-about-three-img"} -->
    <div class="wp-block-cover has-custom-content-position is-position-bottom-left lr-about-three-img" style="min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-317" alt="" src="' . esc_url( get_template_directory_uri() ) . '/inc/images/thorsten-takz.jpeg" style="object-position:50% 38%" data-object-fit="cover" data-object-position="50% 38%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"0.5rem"}}}} -->
    <div class="wp-block-group" style="margin-bottom:0.5rem"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"x-large","fontFamily":"jost"} -->
    <h3 class="has-text-align-left has-jost-font-family has-x-large-font-size">Thorsten Taksz</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"fontSize":"medium"} -->
    <p class="has-medium-font-size">Gründer von LeoRes</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"66.6%","backgroundColor":"lightgrey","className":"lr-about-three-col-two"} -->
    <div class="wp-block-column is-vertically-aligned-center lr-about-three-col-two has-lightgrey-background-color has-background" style="flex-basis:66.6%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"7vw","bottom":"7vw","right":"6vw","left":"6vw"}}},"backgroundColor":"lightgrey","className":"lr-about-three-content","layout":{"contentSize":"770px"}} -->
    <div class="wp-block-group lr-about-three-content has-lightgrey-background-color has-background" style="padding-top:7vw;padding-right:6vw;padding-bottom:7vw;padding-left:6vw"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"className":"lr-about-three-title","fontSize":"medium-large"} -->
    <h2 class="lr-about-three-title has-medium-large-font-size" style="font-style:normal;font-weight:300">Wir sind deutschlandweit für Sie da!</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"lr-about-three-desc"} -->
    <p class="lr-about-three-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt volunta un trato domeda</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->',
);