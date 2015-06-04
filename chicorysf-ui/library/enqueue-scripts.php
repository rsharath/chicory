<?php

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue Main Stylesheet
    wp_enqueue_style( 'GFonts Collection', '//fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Dosis:200,300,400|Sacramento:400|Wire+One|Montserrat:400,700|Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Merriweather:400italic,400,300italic,300|Raleway:400,300|RobotoDraft:100,300' );
        

    wp_enqueue_style( 'Flaticon', get_stylesheet_directory_uri() . '/css/flaticon.css' );
	wp_enqueue_style( 'Main Stylesheet', get_stylesheet_directory_uri() . '/css/foundation.css' );
    wp_enqueue_style( 'Override Stylesheet', get_stylesheet_directory_uri() . '/css/app.min.css' );
	// Deregister the jquery version bundled with wordpress
	wp_deregister_script( 'jquery' );

	// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false );
        
    wp_register_script( 'smoothscroll', get_template_directory_uri() . '/js/jquery.smooth-scroll.js', array('jquery'), '0.9.9', true );

	// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
	wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.0', false );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	// Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
	//wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );

	// If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
    
	wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '5.5.1', true );
        
    wp_register_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '5.5.1', true );

	// Enqueue all registered scripts
	wp_enqueue_script( 'modernizr' );
    
	wp_enqueue_script( 'fastclick' );
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'smoothscroll' );
	wp_enqueue_script( 'foundation' );
    wp_enqueue_script( 'masonry' );
	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;

?>
