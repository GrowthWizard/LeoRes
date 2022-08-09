<?php
/**
 * Statistic Template two Column
 */
return array(
	'title'      => __( 'Statistik', 'leores' ),
	'categories' => array( 'leorestheme' ),
    'content' => '<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}},"className":"lr-statistic"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center lr-statistic" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:column {"verticalAlignment":"center","width":"","className":"lr-statistic-col-one"} -->
    <div class="wp-block-column is-vertically-aligned-center lr-statistic-col-one"><!-- wp:group {"className":"lr-statistic-content","layout":{"inherit":false,"contentSize":"360px"}} -->
    <div class="wp-block-group lr-statistic-content"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"lr-statistic-title","fontSize":"large"} -->
    <h2 class="lr-statistic-title has-large-font-size" style="font-style:normal;font-weight:700"><strong>So können Sie aus der Situation profitieren</strong></h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"className":"lr-statistic-desc"} -->
    <p class="lr-statistic-desc" style="font-style:normal;font-weight:300">Wir übernehmen die Arbeit für Sie und erstellen eine Übersicht mit allen für Sie individuell nötigen Anpassungen</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"2vw"} -->
    <div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"darkgrey","style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-outline","fontFamily":"jost"} -->
    <div class="wp-block-button is-style-outline has-jost-font-family" style="text-transform:uppercase"><a class="wp-block-button__link has-darkgrey-color has-transparent-background-color has-text-color has-background wp-element-button">Jetzt informieren</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"lr-statistic-col-two"} -->
    <div class="wp-block-column is-vertically-aligned-center lr-statistic-col-two"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"lr-statistic-img"} -->
    <figure class="wp-block-image size-large lr-statistic-img"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/images/Statistic-1024x652.png" alt=""/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->'
);