<?php
/**
 * Functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * Enqueue the style.css file.
 * @since 1.0.0
 */

if ( ! function_exists( 'leorestheme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function leorestheme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

    /*add_editor_style(
      array(
      'https://use.typekit.net/ntf6khl.css'
      )
    );*/

	}

endif;

add_action( 'after_setup_theme', 'leorestheme_support' );

if ( ! function_exists( 'lr_theme_files' ) ) :

//Enqueue styles.
function lr_theme_files() {

    // The following Style Files was needed in the old php theme < Wordpress 5.8
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    //wp_enqueue_style('adobe-webfonts', 'https://use.typekit.net/ntf6khl.css');
    //wp_enqueue_style('local-google-fonts', get_theme_file_uri('/assets/css/font.css'));
	wp_enqueue_script('jquery');
	
    // Register theme stylesheet.
    $theme_version = wp_get_theme()->get( 'Version' );
		
	$version_string = is_string( $theme_version ) ? $theme_version : false;
    wp_register_style(
			'leorestheme-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);


		// Add styles inline.
		wp_add_inline_style( 'leorestheme-style', leorestheme_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'leorestheme-style' );
}

endif;

/* Add CSS to the header.php <head></head> */
add_action('wp_enqueue_scripts', 'lr_theme_files');


if ( ! function_exists( 'leorestheme_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 * @since Twenty Twenty-Two 1.0
	 */
	function leorestheme_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', leorestheme_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'leorestheme_editor_styles' );


if ( ! function_exists( 'leorestheme_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions leorestheme_files() and leorestheme_editor_styles() above.
	 * For the future it would be nice to add the twentytwentytwo_preload_webfonts() function 
	 * from the TwentyTwentyTwo Theme
	 */
	function leorestheme_get_font_face_styles() {

		return "
		@font-face {
			font-family: 'brandon-grotesque';
			font-weight: 400 700;
			font-display: auto;
			font-style: normal;
			font-stretch: normal;
			src: url('https://use.typekit.net/af/1da05b/0000000000000000000132df/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff2') ,url('https://use.typekit.net/af/1da05b/0000000000000000000132df/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff'),url('https://use.typekit.net/af/1da05b/0000000000000000000132df/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('opentype');
		}
		@font-face {
			font-family: 'brandon-grotesque';
			font-weight: 700;
			font-display: auto;
			font-style: normal;
			font-stretch: normal;
			src: url('https://use.typekit.net/af/8f4e31/0000000000000000000132e3/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff2'),url('https://use.typekit.net/af/8f4e31/0000000000000000000132e3/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff'),url('https://use.typekit.net/af/8f4e31/0000000000000000000132e3/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('opentype');
		}
		@font-face {
			font-family: 'brandon-grotesque';
			font-weight: 400;
			font-display: auto;
			font-style: italic;
			font-stretch: normal;
			src: url('https://use.typekit.net/af/32d3ee/0000000000000000000132e0/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('woff2'),url('https://use.typekit.net/af/32d3ee/0000000000000000000132e0/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('woff'),url('https://use.typekit.net/af/32d3ee/0000000000000000000132e0/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('opentype');
		}
		@font-face {
			font-family: 'brandon-grotesque';
			font-weight: 700;
			font-display: auto;
			font-style: italic;
			font-stretch: normal;
			src: url('https://use.typekit.net/af/383ab4/0000000000000000000132e4/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3') format('woff2'),url('https://use.typekit.net/af/383ab4/0000000000000000000132e4/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3') format('woff'),url('https://use.typekit.net/af/383ab4/0000000000000000000132e4/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3') format('opentype');
		}
		";

	}

endif;


// Add block patterns which can be used inside of Gutenberg Editor
require get_template_directory() . '/inc/block-patterns.php';

 // This enables debugging (Disabled)
 // define( 'WP_DEBUG', true );

// Disables Caching inside Gutenberg Editor for Testing (Disabled)
 // define( 'SCRIPT_DEBUG', true );

/**
 * Convert Rank Math FAQ Block Into Accordion
 */
function turn_rm_faq_to_accordion() {
	?>
<script>
(function ($) {

	var rankMath = {
		accordion: function () {
			$('.rank-math-block').find('.rank-math-answer').hide();
			$('.rank-math-block').find('.rank-math-question').click(function () {  
				//Expand or collapse this panel
				$(this).nextAll('.rank-math-answer').eq(0).slideToggle('fast', function () {
					if ($(this).hasClass('collapse')) {
						$(this).removeClass('collapse');
					}
					else {
						$(this).addClass('collapse');
					}
				});
				//Hide the other panels
				$(".rank-math-answer").not($(this).nextAll('.rank-math-answer').eq(0)).slideUp('fast');
			});

			$('.rank-math-block .rank-math-question').click(function () {
				$('.rank-math-block .rank-math-question').not($(this)).removeClass('collapse');
				if ($(this).hasClass('collapse')) {
					$(this).removeClass('collapse');
				}
				else {
					$(this).addClass('collapse');
				}
			});
		}
	};

	rankMath.accordion();

})(jQuery);
</script>
	<?php
}
add_action( 'wp_footer', 'turn_rm_faq_to_accordion' );