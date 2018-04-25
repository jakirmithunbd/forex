<?php 
	require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
	require get_template_directory() . '/inc/options.php';

	// Hide the admin bar
	show_admin_bar(false);

	function duxforex_default_functions (){
		add_theme_support( 'title-tag' );

		load_theme_textdomain( 'dux', get_template_directory() . '/languages' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main_menu' => esc_html__( 'Main Menu', 'rad' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'rad' ),
		) );
	}

	add_action('after_setup_theme', 'duxforex_default_functions');

function duxforex_scripts_styles() {

	wp_enqueue_script('jquery');

	// Loads JavaScript file for modernizr.
	wp_enqueue_script( 'bootstrap_scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script( 'slick_scripts', get_template_directory_uri() . '/js/slick.min.js', array(), false, true);

	wp_enqueue_script( 'main_scripts', get_template_directory_uri() . '/js/scripts.js', array(), false, true);

	// Add font stylesheet.
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet', array(), '1.0' );

	// Add slicknav stylesheet.
	wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0' );
	wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/main_style.css', array(), false, 'all');
	wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), false, 'all');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), false, 'all');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), false, 'all');
}
add_action( 'wp_enqueue_scripts', 'duxforex_scripts_styles' );

/* customize login screen */
// function duxforex_images_custom_login_page() {
//     echo '<style type="text/css">
//         .login h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 100px !important; width: 100% !important; margin: 0 auto !important; background-size: contain !important; }
// 		h1 a:focus { outline: 0 !important; box-shadow: none; }
//         body.login { background-image:url("'.get_field('log_in_page_image', 'options').'") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
//   		body.login:before {background-color: #42b1e67a; position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
//   		.login form {
//   			background: rgba(255,255,255, 0.2) !important;
//   		}
// 		.login form .input, .login form input[type=checkbox], .login input[type=text] {
// 			background: transparent !important;
// 			color: #ddd;
// 		}
// 		.login label {
// 			color: #DDD !important;
// 		}
// 		.login #login_error, .login .message {
// 			color: #ddd;
// 			margin-top: 20px;
// 			background: rgba(255,255,255, 0.2) !important;
// 		}
// 		#login {
// 		    padding: 7% 0 0;
// 		}
		
// 		.login #nav a, .login #backtoblog a, .login label, .login .message{
// 			color:#000 !important;
// 		}
//     </style>';
// }
// add_action('login_head', 'duxforex_images_custom_login_page', 99);

