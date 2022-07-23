<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WaitQ
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="mt-5">
        <?php
            echo do_shortcode('[smartslider3 slider="2"]');
        ?>
    </div>


    <!-- cards -->
    <div class="container d-flex w-100 mx-auto my-5">
        <div class="card  mx-auto rounded-3" style="width: 20rem;">
            <div class="card1">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/c1.jpg" class="card-img-top h" alt="WaitQ">
                <div class="card-body">
                    <p class="card-text"> See all the restaurants near you, check the waiting time in it,
                        add your name to the waiting list or reserve a table!</p>
                    <button class="btn1 w-100 mx-auto "><a class="next" href="restaurant">
                            <h3>Reserve Table </h3>
                        </a></button>
                </div>
            </div>
        </div>
        <div class="card mx-auto rounded-3" style="width: 20rem;">
            <div class="card1">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/c2.jpg" class="card-img-top h" alt="WaitQ">
                <div class="card-body">
                    <p class="card-text">Order food online , see the special dish of the day, have a look at the
                        menu or
                        book your order for easy take away!</p>
                    <button class="btn1 w-100 mx-auto "> <a class="next" href="restaurant">
                            <h3>Order Food</h3>
                        </a></button>
                </div>
            </div>
        </div>
    </div>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->