<?php
/**
 * WaitQ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WaitQ
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'waitq_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function waitq_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WaitQ, use a find and replace
		 * to change 'waitq' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'waitq', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'waitq' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'waitq_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'waitq_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function waitq_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'waitq_content_width', 640 );
}
add_action( 'after_setup_theme', 'waitq_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function waitq_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'waitq' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'waitq' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'waitq_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function waitq_scripts() {
	wp_enqueue_style( 'waitq-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'waitq-style1', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), _S_VERSION,);
	wp_enqueue_style( 'waitq-style2', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css', array(), _S_VERSION, );
	wp_enqueue_style( 'waitq-style4', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), _S_VERSION, );
	wp_enqueue_style( 'waitq-style5', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), _S_VERSION, );
	wp_style_add_data( 'waitq-style', 'rtl', 'replace' );

	wp_enqueue_script( 'waitq-navigation4', get_template_directory_uri() . '/assets/jquery/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'waitq-navigation1', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation2', get_template_directory_uri() . '/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation3', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation5', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation6', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation7', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation10', get_template_directory_uri() . '/js/join_us.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation8', get_template_directory_uri() . '/js/jquery.validate.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waitq-navigation9', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'waitq-navigation1', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );

	$params = array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce("my_nonce")
	);
	wp_localize_script( 'waitq-navigation7', 'myAjax', $params );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'waitq_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'wp_ajax_my_action', 'user_signup' );
add_action( 'wp_ajax_nopriv_my_action', 'user_signup' );

function user_signup() {
	if ( !wp_verify_nonce( $_REQUEST['nonce'], "my_nonce")) {
		exit("No naughty business please");
	}  
	$name = $_POST['name'];
	$email = $_POST['email_s'];
	$phone = $_POST['phone'];
	$password = $_POST['password_s'];

	echo $name;
	global $wpdb;

$table_name = $wpdb->prefix."waitq_users";

$sql = $wpdb->insert( $table_name,
	array( 	'name' => $name, 
			'email' => $email,
			'phone' => $phone,
			'password' => $password,
		),
	array( '%s', '%s', '%s', '%s' ) );
$wpdb->query($sql);
// get the inserted record id.
$id = $wpdb->insert_id;
echo $id;
}

add_action( 'wp_ajax_my_action_login', 'user_login' );
add_action( 'wp_ajax_nopriv_my_action-login', 'user_login' );
function user_login() {
	if ( !wp_verify_nonce( $_REQUEST['nonce'], "my_nonce")) {
		exit("No naughty business please");
	}  
	// $data = array();
    // $data['success'] = false;
    // $data['message'] = 'Password incorrct';
	$email = $_POST['email_l'];
	$password = $_POST['password_l'];

	global $wpdb;
	$table_name = $wpdb->prefix."waitq_users";
	$sql = $wpdb->get_var("SELECT password FROM $table_name WHERE email = '$email'");
	$row = $wpdb->query($sql);
	echo $sql;
	if($sql==$password) {
        $data['success'] = true;
        $data['message'] = 'Password corrct';
		wp_send_json($data);
	}
}

