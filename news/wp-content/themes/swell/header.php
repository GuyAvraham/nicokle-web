<?php
// @package swell
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	
<div>
	<div class="site-header">	

		<div class="top _transition">
			
				<div class="inside clearfix">
					<?php $logo_head_tag = ( is_front_page() ) ? "h1" : "h3";	?>
					<?php $ttrust_logo = get_theme_mod( 'swell_logo' ); ?>
					<div id="logo">
					<!--
					<?php if( $ttrust_logo ) { ?>

						<<?php echo $logo_head_tag; ?> class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $ttrust_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></<?php echo $logo_head_tag; ?>>

					<?php } else { ?>

						<<?php echo $logo_head_tag; ?>><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></<?php echo $logo_head_tag; ?>>

					<?php } ?>
          -->
          
            <h1 class="logo">
              <a href="<?php bloginfo('url'); ?>">
              	<img class="dark-logo" src="<?php bloginfo('template_url'); ?>/images/prifender-logo.png" alt="">
                <img class="light-logo" src="<?php bloginfo('template_url'); ?>/images/prifender-logo-white.png" alt="">
              </a>
            </h1>
            
					</div>
					
					<div id="main-nav" class="">

						<?php wp_nav_menu( array(
							'container'			=> 'nav',
							'container_id'		=> 'main-menu',
							'menu_class' 		=> 'sf-menu clear',
							'theme_location'	=> 'primary',
							'fallback_cb' 		=> 'main_nav'
						) ); ?>

					</div>
					<a href="#main-menu" id="menu-toggle"></a>
				</div>
			
		</div>
		
		<?php if( is_front_page() ) {

			// If we have a video or an image, show the top section
			if( get_theme_mod( 'swell_home_video' ) || get_theme_mod( 'swell_home_image' ) ) {  ?>

				<?php get_template_part( 'content-video-home' ); ?>

		<?php } // if()
		} // if() ?>

		
			
	</div>
	<div class="middle clearfix">