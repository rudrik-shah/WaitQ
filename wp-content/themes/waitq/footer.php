<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WaitQ
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <!-- Footer -->
        <footer class="bg-dark text-center text-white">

            <div class="container p-4">
                <!-- Section: Social media -->
                <div class="m-4 p-4">
                    <!-- Facebook -->
                    <a class=" m-2 link" target="_blank" href="https://www.facebook.com/" role="button">
                        <img class="logo1" src="<?php echo get_template_directory_uri(); ?>/photos/fb.png" alt="">
                    </a>

                    <!-- Twitter -->
                    <a class=" m-2 link" target="_blank" href="https://www.twitter.com/" role="button">
                        <img class="logo2" src="<?php echo get_template_directory_uri(); ?>/photos/tw.png" alt="">
                    </a>

                    <!-- Instagram -->
                    <a class=" m-2 link" target="_blank" href="https://www.instagram.com/" role="button">
                        <img class="logo4" src="<?php echo get_template_directory_uri(); ?>/photos/insta.png" alt="">
                    </a>
                </div>

                <section class="">

                    <div class="row text-center">

                        <div class="col-lg-2 col-md-2 ">
                            <h5 class="text-uppercase"><a class="foot" href="home">Home</a></h5>
                        </div>

                        <div class="col-lg-3 col-md-2 ">
                            <h5 class="text-uppercase"><a class="foot" href="services">Services</a></h5>

                        </div>
                        <div class="col-lg-2 col-md-2 ">
                            <h5 class="text-uppercase"><a class="foot" href="join-us">Join Us</a></h5>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <h5 class="text-uppercase"><a class="foot" href="about-us">About US</a></h5>

                        </div>

                        <div class="col-lg-3 col-md-2">
                            <h5 class="text-uppercase"><a class="foot" href="contact-us">Contact Us</a></h5>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <p>
                    © 2021 Copyright WaitQ
                </p>
            </div>
            <div class="lower_footer">
                <div class="footer_text text-center">
                    <h4 class="d-block">Wait Kyu??? <span class="f_small">Why wait for your turn in the
                            restaurant...</span>
                    </h4>
                    <h4>Wait Queue!!! <span class="f_small">New normal in the concept of waiting room...</span> </h4>
                </div>
            </div>
        </footer>
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'waitq' ) ); ?>">
            <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'waitq' ), 'WordPress' );
				?>
        </a>
        <span class="sep"> | </span>
        <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'waitq' ), 'waitq', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>