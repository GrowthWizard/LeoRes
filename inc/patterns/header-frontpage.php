<?php
/**
 * Header Template for Frontpage with Brand Images
 */
return array(
	'title'      => __( 'Header Frontpage', 'leores' ),
	'categories' => array( 'leorestheme' ),
    'content' => '<!-- wp:group {"align":"full","className":"lr-header"} -->
	<div class="wp-block-group alignfull lr-header"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/inc/images/header.png","dimRatio":60,"focalPoint":{"x":"0.51","y":"0.14"},"minHeight":70,"minHeightUnit":"vh","customGradient":"linear-gradient(0deg,rgb(0,0,0) 0%,rgb(122,122,122) 100%)","contentPosition":"center left","align":"center","className":"lr-header","style":{"spacing":{"padding":{"top":"10vw","right":"3vw","bottom":"2vw","left":"3vw"}}}} -->
	<div class="wp-block-cover aligncenter has-custom-content-position is-position-center-left lr-header" style="padding-top:10vw;padding-right:3vw;padding-bottom:2vw;padding-left:3vw;min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgb(0,0,0) 0%,rgb(122,122,122) 100%)"></span><img class="wp-block-cover__image-background" alt="Berlin" src="' . esc_url( get_template_directory_uri() ) . '/inc/images/header.png" style="object-position:51% 14%" data-object-fit="cover" data-object-position="51% 14%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0%","right":"5%","bottom":"0%","left":"5%"},"margin":{"top":"25px"}}},"className":"lr-header-content"} -->
	<div class="wp-block-columns lr-header-content" style="margin-top:25px;padding-top:0%;padding-right:5%;padding-bottom:0%;padding-left:5%"><!-- wp:column {"layout":{"contentSize":""}} -->
	<div class="wp-block-column"><!-- wp:group {"textColor":"white","layout":{"contentSize":"450px"}} -->
	<div class="wp-block-group has-white-color has-text-color"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"lr-title","fontSize":"x-large","fontFamily":"jost"} -->
	<h1 class="lr-title has-jost-font-family has-x-large-font-size" style="font-style:normal;font-weight:700">Wie schützen Sie sich vor Negativzinsen<br>und Inflation?</h1>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"className":"lr-header-intro","fontSize":"medium"} -->
	<p class="lr-header-intro has-medium-font-size"><strong>Lassen sie sich diskret, kostenfrei und individuell beraten oder verwenden Sie unsere kostenlosen Online Rechner. </strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link wp-element-button">Rechner</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:spacer {"height":"2vw"} -->
	<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:group {"layout":{"contentSize":"950px"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","bottom":"20px","left":"0px","top":"20px"},"blockGap":"5%"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/ergo.png" alt="ergo" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/HDI.png" alt=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Axa.png" alt=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Barmenia.png" alt=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Hiscox.png" alt=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Markel.png" alt=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Allianz.png" alt=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/rhion-digital.png" alt=""/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
);