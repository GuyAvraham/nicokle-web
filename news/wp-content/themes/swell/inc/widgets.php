<?php

global $ttrust_config;

$ttrust_config['name'] = "Swell";


/* /////////////////////////////////////////////////////////////////////
//  Define Widgetized Areas
/////////////////////////////////////////////////////////////////////*/


register_sidebar(array(
	'name' => 'Sidebar',
	'id' => 'sidebar_default',
	'description' => __('This is the default widget area for the sidebar. This will be displayed if the other sidebars have not been populated with widgets.', 'themetrust'),
	'before_widget' => '<div id="%1$s" class="%2$s sidebar-box widget-box small"><div class="inside">',
	'after_widget' => '</div></div>',
	'before_title' => '<span class="widget-title">',
	'after_title' => '</span>'
));

register_sidebar(array(
	'name' => 'Page Sidebar',
	'id' => 'sidebar_pages',
	'description' => __('Widget area for the sidebar on pages.', 'themetrust'),
	'before_widget' => '<div id="%1$s" class="%2$s sidebar-box widget-box small"><div class="inside">',
	'after_widget' => '</div></div>',
	'before_title' => '<span class="widget-title">',
	'after_title' => '</span>'
));

register_sidebar(array(
	'name' => 'Post Sidebar',
	'id' => 'sidebar_posts',
	'description' => __('Widget area for the sidebar on posts.', 'themetrust'),
	'before_widget' => '<div id="%1$s" class="%2$s sidebar-box widget-box small"><div class="inside">',
	'after_widget' => '</div></div>',
	'before_title' => '<span class="widget-title">',
	'after_title' => '</span>'
));

register_sidebar(array(
	'name' => 'Footer',
	'id' => 'footer_default',
	'description' => __('This is the default widget area for the footer. This will be displayed if the other footers have not been populated with widgets.', 'themetrust'),
	'before_widget' => '<div id="%1$s" class="small one-third %2$s footer-box widget-box small"><div class="inside">',
	'after_widget' => '</div></div>',
	'before_title' => '<span class="widget-title">',
	'after_title' => '</span>'
));

register_sidebar(array(
	'name' => 'Home Page Footer',
	'id' => 'footer_home',
	'description' => __('Widget area for the footer on the home page.', 'themetrust'),
	'before_widget' => '<div id="%1$s" class="one-third %2$s footer-box widget-box small"><div class="inside">',
	'after_widget' => '</div></div>',
	'before_title' => '<span class="widget-title">',
	'after_title' => '</span>'
));

register_sidebar(array(
	'name' => 'Page Footer',
	'id' => 'footer_pages',
	'description' => __('Widget area for the footer on pages.', 'swell'),
	'before_widget' => '<div id="%1$s" class="one-third %2$s footer-box widget-box small"><div class="inside">',
	'after_widget' => '</div></div>',
	'before_title' => '<span class="widget-title">',
	'after_title' => '</span>'
));

register_sidebar(array(
	'name' => 'Post Footer',
	'id' => 'footer_posts',
	'description' => __('Widget area for the footer on posts.', 'swell'),
	'before_widget' => '<div id="%1$s" class="one-third %2$s footer-box widget-box small"><div class="inside">',
	'after_widget' => '</div></div>',
	'before_title' => '<span class="widget-title">',
	'after_title' => '</span>'
));

register_sidebar(array(
	'name' => 'Portfolio Footer',
	'id' => 'footer_portfolio',
	'description' => __('Widget area for the footer on portfolio pages.', 'themetrust'),
	'before_widget' => '<div id="%1$s" class="%2$s footer-box widget-box small"><div class="inside">',
	'after_widget' => '</div></div>',
	'before_title' => '<span class="widget-title">',
	'after_title' => '</span>'
));


/* Allow widgets to use shortcodes */
add_filter('widget_text', 'do_shortcode');



/*/////////////////////////////////////////////////////////////////////
//  Recent Posts
/////////////////////////////////////////////////////////////////////*/

class TTrust_Recent_Posts extends WP_Widget {

	function TTrust_Recent_Posts() {
		global $ttrust_config, $options;
		$widget_ops = array('classname' => 'ttrust_recent_posts', 'description' => __('Display recent posts from any category.', 'swell'));

		parent::__construct(
			'ttrust_recent_posts', // Base ID
			$ttrust_config['name'] . ' ' . __( 'Recent Posts', 'themetrust' ), // Name
			$widget_ops // Args
		);
	}

	function widget($args, $instance) {

		global $ttrust_theme_name, $options;

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? 'Recent Posts' : $instance['title']);
		if ( !$number = (int) $instance['number'] )
			$number = 10;
		else if ( $number < 1 )
			$number = 1;
		else if ( $number > 10 )
			$number = 10;

		$rp_cat = $instance['rp_cat'];

		$r = new WP_Query(array('cat' => $rp_cat, 'showposts' => $number, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1));
		if ($r->have_posts()) :
?>
			<?php echo $before_widget; ?>
			<?php echo $before_title . $title . $after_title; ?>

			<ul class="widgetList">
				<?php  while ($r->have_posts()) : $r->the_post(); ?>
				<li class="clearfix">
					<p class="title"><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?> </a></p>
					<span class="meta"><?php the_time(get_option('date_format')); ?> </span>
				</li>
				<?php endwhile; ?>
			</ul>

			<?php echo $after_widget; ?>


<?php
			wp_reset_query();
		endif;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
		$instance['rp_cat'] = $new_instance['rp_cat'];

		return $instance;
	}

	function form( $instance ) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : 'Recent Posts';
		if ( !isset($instance['number']) || !$number = (int) $instance['number'] )
			$number = 5;

		if (isset($instance['rp_cat'])) :
			$rp_cat = $instance['rp_cat'];
		endif;


		if (isset($instance['show_post'])) :
			$show_post = $instance['show_post'];
		endif;


		$pn_categories_obj = get_categories('hide_empty=0');
		$pn_categories = array(); ?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'swell'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('rp_cat'); ?>"><?php _e('Category', 'swell'); ?></label>
		<select class="widefat" id="<?php echo $this->get_field_id('rp_cat'); ?>" name="<?php echo $this->get_field_name('rp_cat'); ?>">
			<option value=""><?php _e('All', 'swell'); ?></option>
			<?php foreach ($pn_categories_obj as $pn_cat) {
				echo '<option value="'.$pn_cat->cat_ID.'" '.selected($pn_cat->cat_ID, $rp_cat).'>'.$pn_cat->cat_name.'</option>';
			} ?>
		</select></p>

		<p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts:', 'swell'); ?></label>
		<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /><br />
		<small><?php _e('10 max', 'swell'); ?></small></p>
<?php
	}
}

register_widget('TTrust_Recent_Posts');

/*/////////////////////////////////////////////////////////////////////
//  Testimonials
/////////////////////////////////////////////////////////////////////*/

class TTrust_Testimonials extends WP_Widget {

	function TTrust_Testimonials() {
		global $ttrust_config, $options;
		$widget_ops = array('classname' => 'swell-testimonials', 'description' => __('Display a random testimonial.', 'themetrust'));

		parent::__construct(
			'ttrust_testimonials', // Base ID
			$ttrust_config['name'] . ' ' . __( 'Testimonials', 'themetrust' ), // Name
			$widget_ops // Args
		);
	}

	function widget($args, $instance) {

		global $ttrust_theme_name, $options;

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? 'Testimonials' : $instance['title']);


		$r = new WP_Query(array('post_type' => "testimonial", 'showposts' => 1, 'nopaging' => 0, 'post_status' => 'publish', 'orderby' => 'rand'));
		if ($r->have_posts()) :
?>
			<?php echo $before_widget; ?>
			<?php echo $before_title . $title . $after_title; ?>


				<?php  while ($r->have_posts()) : $r->the_post(); ?>
					<div class="clearfix">
						<?php the_post_thumbnail("swell_post_thumb_small", array('class' => '', 'alt' => ''.the_title_attribute( 'echo=0' ).'', 'title' => ''.the_title_attribute( 'echo=0' ).'')); ?>
						<?php the_content(); ?>
						<span class="title"><span><?php the_title(); ?></span></span>
					</div>
				<?php endwhile; ?>

			<?php echo $after_widget; ?>

<?php
			wp_reset_query();
		endif;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}

	function form( $instance ) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : 'Testimonials';
		?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'themetrust'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

<?php
	}
}

register_widget('TTrust_Testimonials');



function swell_get_widgets_count( $sidebar_id )
{
  $sidebars_widgets = wp_get_sidebars_widgets();
  return (int) count( (array) $sidebars_widgets[ $sidebar_id ] );
}

function swell_has_active_sidebar()
{
  	if(is_archive() && is_active_sidebar('sidebar_posts')) : return true;
	elseif(is_home() && is_active_sidebar('sidebar_posts')) : return true;
    elseif(is_single() && is_active_sidebar('sidebar_posts')) : return true;
    elseif(is_page() && is_active_sidebar('sidebar_pages') ) : return true;
	elseif(is_search() && is_active_sidebar('sidebar_posts')) : return true;
	elseif(is_front_page() && is_active_sidebar('sidebar_home')) : return true;
	elseif(dynamic_sidebar('sidebar')) : return true;
	else :
		return false;
	endif;
}
?>