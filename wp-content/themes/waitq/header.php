<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WaitQ
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'waitq' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<!-- navbar -->
			<nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
        <div class="container-fluid">
            <div class="logo ">
                <h1><img class="w-100 mt-2 d-inline " src="<?php echo get_template_directory_uri(); ?>/photos/logo.png" alt=""></h1>
            </div>
            <form class="d-flex w-50 mx-auto">
                <input class="form-control mx-3 rounded-pill w-75 " type="search" placeholder="Search for Restaurant ..."
                    aria-label="Search">
                <button class="btn1" type="submit">Search</button>
            </form>
            <a href="#signup-box" id="pop" class="fancybox  mx-2 hide" rel="group">
                <button class="btn1 ">SignUp</button>
            </a>
            <a href="#login-box" id="pop" class="fancybox mx-2 hide" rel="group">
                <button class="btn1 ">LogIn</button>
            </a>
            <div class="show">
                <p class="user_name"></p>
            </div>
        </div>
    </nav>

    <!-- login -->
    <div style="display: none;" id="login-box">
        <form id="login_form" name="login_form" method="POST">
            <div>
                <h2 class="text-center">Login</h2>
            </div>
            <hr>
            <div class="mt-2">
                <input type="text" id="email_l" name="email_l" placeholder="Email">
            </div>
            <div class="mt-3">
                <input type="password" id="password_l" name="password_l" placeholder="Password">
            </div>
            <p id="pass_error"></p>
            <div class="mt-3 w-25 mx-auto">
                <button type="submit" class="btn1  w-100">Login</button>
            </div>
            <hr>
            <div class="text-center">
                <p>New User? <a href="#signup-box" id="pop" class="fancybox next-text me-3" rel="group">SignUp</a></p>
            </div>
        </form>
    </div>

    <!-- signup -->
    <div style="display: none;" id="signup-box">
        <form action="index.html" id="signup_form" name="signup_form" method="POST">
            <div>
                <h2 class="text-center ">SignUp</h2>
            </div>
            <hr>
            <div class="mt-2 ">
                <input type="text" id="name" name="name" placeholder="Name">
            </div>
            <div class="mt-3">
                <input type="text" id="email_s" name="email_s" placeholder="Email">
            </div>
            <div class="mt-3">
                <input type="text" id="phone" name="phone" placeholder="Phone">
            </div>
            <div class="mt-3">
                <input type="password" id="password_s" name="password_s" placeholder="Password">
            </div>
            <div class="mt-3">
                <input type="password" id="passwordc_s" name="passwordc_s" placeholder="Confirm Password">
            </div>
            <div class="mt-3 w-25 mx-auto">
                <button type="submit" class="btn1 w-100 ">SignUp</button>
            </div>
            <hr>
            <div class="text-center">
                <p>Already have an account? <a href="#login-box" id="pop" class="fancybox next-text me-3" rel="group">
                        LogIn</a></p>
            </div>
        </form>
    </div>
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$waitq_description = get_bloginfo( 'description', 'display' );
			if ( $waitq_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $waitq_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
