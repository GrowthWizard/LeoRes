<?php
/**
 * Colorful 2 Column Layout wwith Image on the Left
 */
return array(
	'title'      => __( '2 Spalten mit Bild', 'leores' ),
	'categories' => array( 'leorestheme' ),
    'content' => '<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}},"className":"lr-solutions"} -->
    <div class="wp-block-columns alignwide lr-solutions" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:column {"className":"lr-solutions-col-one"} -->
    <div class="wp-block-column lr-solutions-col-one"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"lr-solutions-image"} -->
    <figure class="wp-block-image size-full lr-solutions-image"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Rectangle-primary.png" alt=""/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"lr-solutions-col-two"} -->
    <div class="wp-block-column is-vertically-aligned-center lr-solutions-col-two"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}},"className":"lr-solutions-content"} -->
    <div class="wp-block-group lr-solutions-content" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"lr-solutions-title","fontSize":"large","fontFamily":"jost"} -->
    <h2 class="lr-solutions-title has-jost-font-family has-large-font-size" style="font-style:normal;font-weight:700"><strong>Lösungen aufzeigen</strong></h2>
    <!-- /wp:heading -->
    
    <!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.6"}},"className":"lr-solutions-list"} -->
    <ul class="lr-solutions-list" style="font-style:normal;font-weight:300;line-height:1.6"><li>Mitarbeiter schätzen und Anreize setzen</li><li>Benefits wie betriebliche Altersvorsorge oder Schutz vor Burnout als Berufsunfähigkeitsversicherung setzen. Und damit Top-Fachkräfte langfristig an das Unternehmen binden und bei Bewerbung/Stellenausschreibung Vorteile gegenüber der Konkurrenz aufzeigen.</li></ul>
    <!-- /wp:list -->
    
    <!-- wp:spacer {"height":"1vw"} -->
    <div style="height:1vw" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase"}},"className":"lr-solutions-button","fontSize":"normal"} -->
    <div class="wp-block-button has-custom-font-size lr-solutions-button has-normal-font-size" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button">Jetzt informieren</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->',
);