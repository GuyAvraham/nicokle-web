<?php
/**
 * @package swell
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<?php
				$featured_image = "";
				$c = "";

					$blog_page_id = get_option( 'page_for_posts' );
					$blog_page = get_post( $blog_page_id );
					if( has_post_thumbnail( $blog_page_id ) ) {
						$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $blog_page_id ), 'swell_full_width' );
						$c = "has-background";
					}?>
					<header class="main entry-header <?php echo $c; ?>" style="<?php echo $featured_image ? 'background-image: url(' . esc_url( $featured_image[0] ) . ');' : '' ?>">
						<h1 class="entry-title"><h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'swell' ); ?></h1>
						<span class="overlay"></span>
					</header><!-- .entry-header -->
			
			<div class="body-wrap">
			<div class="entry-content">
				<p><?php _e( 'The page you are looking for could not be found. Try a different address, or search using the form below.', 'swell' ); ?></p>
				<?php get_search_form(); ?>				
			</div>
			</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
