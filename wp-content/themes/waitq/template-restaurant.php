<?php
/**
 * Template Name: restaurant
 */
get_header();

$args = array(
    'post_type' => 'hotels',
);
 ?>
 <div class="m-5 row row-cols-3 row-cols-md-2 g-4 ">
 <?php
    // The Query
$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <div style="width: 32%;" class="mx-auto">
            <div class="card m-1">
                <a class="next-page" href="<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/s2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title text-center">
                            <?php echo the_title(); ?>
                        </h3>
                        <p class="card-text">
                            <?php echo "food" ?>
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <?php
        // the_content();
        // the_title();
    }
} else {
    echo "no posts found";
}
?>
</div>
<?php
/* Restore original Post Data */
wp_reset_postdata();

get_footer();
