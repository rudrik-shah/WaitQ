<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WaitQ
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
			global $post;
			$page_slug = $post->post_name;
			
		?>

	<div class="col w-100 mx-auto ">
            <div class="card ">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/s2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-title text-center"> <?php echo $page_slug; ?></h1>
                    <h4 class="card-text"><?php echo "Address:-" ?></h4>
                    <h4 class="card-text"><?php echo "Food:-" ?></h4>
                    <div class="text-center">
                        <a href="#time" id="pop" class="fancybox  m-2 r_card" rel="group">
                            <button class="btn2 ">Check Waitimg Time</button>
                        </a>
                        <a href="#menu" id="pop" class="fancybox m-3 r_card" rel="group">
                            <button class="btn2 ">See Menu</button>
                        </a>
                        <a href="#menu" id="pop" class="fancybox m-3 r_card" rel="group">
                            <button class="btn2 ">Order Food</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

		<div style="display: none;" id="menu">
			<?php 
				echo do_shortcode('[smartslider3 slider="2"]');
			?>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

		<div style="display: none;" id="time">
        	<h1>Time</h1>
    	</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
