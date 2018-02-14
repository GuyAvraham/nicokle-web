<?php
/**
 * Template Name: Home
 * @package swell
 */

//disable WP automatic HTML formatting
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
remove_filter('the_title', 'wptexturize');
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
remove_filter('comment_text', 'wpautop');
remove_filter('the_title', 'wpautop');

get_header(); ?>

<?php while (have_posts()) : the_post(); //home content section ?>
	<?php if($post->post_content):?>
	<div id="main-content" class="content-area">
				<?php // $home_content_bkg = get_theme_mod('swell_home_content_bkg'); ?>

				<div id="home-content" class="full home-section clearfix <?php // if($home_content_bkg) echo "has-background"; ?>">
					<div class="inside">

					<?php the_content(); ?>

					</div>
				</div>
	</div><!-- #main-content -->
	<?php endif; ?>
<?php endwhile; ?>

	<!-- Portfolio Home -->
	<?php get_template_part( 'content-projects-home' ); ?>
	
	<!-- Secondary Video -->
	<?php get_template_part( 'content-secondary-video-home' ); ?>

	<!-- Blog Home -->
	<?php get_template_part( 'content-posts-home' ); ?>
	
	<!-- Testimonials Home -->
	<?php get_template_part( 'content-testimonials-home' ); ?>

<?php get_footer(); ?>
