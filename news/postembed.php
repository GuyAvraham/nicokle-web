<!-- ins posts from blog -->
<section id="news">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>Latest news</h3>
            </div>
        </div>
        <div data-wow-duration="2s" data-wow-delay=".2s" class="row wow fadeInUp"> 
<?php 
define('WP_USE_THEMES', false);
require('/wp-blog-header.php');
?>
<?php
	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
	echo '
    <div class="col-lg-4"><a href="'.get_permalink($recent["ID"]).'">' 
        .get_the_post_thumbnail($recent["ID"], "large")
        .'<p>'.$recent["post_title"].'</p></a></div>';
	}
	wp_reset_query();
?>
        </div>
    </div>
</section>