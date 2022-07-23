<?php
/**
 * Template Name: services
 */
get_header();
?>
<div class="container w-100 mx-auto m-5">
    <div class="d-flex m-5 mx-auto">
        <div class="flip-card ">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/s1.jpg"  style="width:300px;height:200px;">
                </div>
                <div class="flip-card-back">
                    <br>
                    <br>
                    <h1>Check Waiting Time</h1>
                </div>
            </div>
        </div>
        <div class="flip-card mx-auto">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/s2.jpg" alt="Avatar" style="width:300px;height:200px;">
                </div>
                <div class="flip-card-back">
                    <br>
                    <br>
                    <br>
                    <h1>Order Food</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex mx-5">
        <div class="flip-card mx-auto">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/s3.jpg" alt="Avatar" style="width:300px;height:200px;">
                </div>
                <div class="flip-card-back">
                    <br>
                    <br>
                    <br>
                    <h1 class=>Reserve Table</h1>
                </div>
            </div>
        </div>
        <div class="flip-card mx-auto">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/s4.jpg" alt="Avatar" style="width:300px;height:200px;">
                </div>
                <div class="flip-card-back">
                    <br>
                    <br>
                    <br>
                    <h1>Take Away</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();