<?php
/**
 * Kontaktformular am Ende der Seite
 */
return array(
	'title'      => __( 'Kontakt Sektion', 'leores' ),
	'categories' => array( 'leorestheme' ),
    'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}}},"className":"lr-contact-section","layout":{"contentSize":"1000px"}} -->
    <div class="wp-block-group lr-contact-section" style="padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"2px","lineHeight":"1.4"}},"className":"lr-contact-section-title","fontSize":"x-large","fontFamily":"jost"} -->
    <h2 class="has-text-align-center lr-contact-section-title has-jost-font-family has-x-large-font-size" style="letter-spacing:2px;line-height:1.4">Sie haben Fragen?<br>Kontaktieren Sie uns!</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"className":"lr-content-section-desc"} -->
    <p class="has-text-align-center lr-content-section-desc" style="font-style:normal;font-weight:300">Wir stehen Ihnen gerne für alle Fragen zu unseren Angeboten <br>und Dienstleistungen zur Verfügung.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"3rem"} -->
    <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:wpforms/form-selector {"formId":"496","className":"lr-contact-section-form-wrapper"} /--></div>
    <!-- /wp:group -->',
);