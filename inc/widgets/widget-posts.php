<?php


if(!class_exists('at_posts_widget')){
	class at_posts_widget extends WP_Widget {

		/**
		* Constructor
		*/
	  public function __construct() {

		  parent::__construct(
		    'at_posts_widget',
		    esc_html__( 'Tribe: Posts Widget', 'tribe' ),
		    array(
		      'classname' =>  'at_posts_widget',
		      'description' =>  esc_html__( 'A widget for displaying latest posts.', 'tribe' )
		    )
		  );

	  } // end constructor


		/**
		 * How to display the widget on the screen.
		 */
		public function widget( $args, $instance ) {

			extract( $args, EXTR_SKIP );

			/* Our variables from the widget settings. */
			$title = apply_filters('widget_title', $instance['title'] );
			$categories = $instance['categories'];
			$number = $instance['number'];
			//Get theme date option
			$at_blog_date = get_theme_mod( 'at_setting__postdate', '1' );

			
			$query = array('showposts' => $number, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1, 'cat' => $categories);
			
			$loop = new WP_Query($query);
			if ($loop->have_posts()) :
			
			/* Before widget (defined by themes). */
			echo wp_kses_post( $before_widget );

			/* Display the widget title if one was input (before and after defined by themes). */
			if ( $title )
				echo wp_kses_post( $before_title . $title . $after_title );

			?>
				<ul>
				
				<?php  while ($loop->have_posts()) : $loop->the_post(); ?>
				
					<li>
						<div class="at-widgetpost">
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : ?>
							<div class="at-widgetpost__thumb">
								<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('tribe-post-mini'); ?></a>
							</div>
							<?php endif; ?>

							<p class="at-widgetpost__title"><a href="<?php echo get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
							<?php if ( $at_blog_date == '1' ) : ?> <span class="at-widgetpost__meta"><?php the_time( get_option('date_format') ); ?></span> <?php endif; ?>
						</div>
					</li>
				
				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

				<?php endif; ?>
				
				</ul>
				
			<?php

			/* After widget (defined by themes). */
			echo wp_kses_post( $after_widget );
		}

		/**
		 * Update the widget settings.
		 */
		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

			/* Strip tags for title and name to remove HTML (important for text inputs). */
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['categories'] = $new_instance['categories'];
			$instance['number'] = strip_tags( $new_instance['number'] );

			return $instance;
		}


		public function form( $instance ) {

			/* Set up some default widget settings. */
			$defaults = array( 'title' => esc_html__('Latest Posts', 'tribe'), 'number' => 5, 'categories' => '');
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>

			<!-- Widget Title: Text Input -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:', 'tribe'); ?></label>
				<input  type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>"  />
			</p>
			
			<!-- Category -->
			<p>
			<label for="<?php echo esc_attr( $this->get_field_id('categories') ); ?>"><?php esc_html_e('Filter by Category:', 'tribe'); ?></label> 
			<select id="<?php echo esc_attr( $this->get_field_id('categories') ); ?>" name="<?php echo esc_attr( $this->get_field_name('categories') ); ?>" class="widefat categories" style="width:100%;">
				<option value='all' <?php if ('all' == $instance['categories']) echo 'selected="selected"'; ?>><?php esc_html_e('All categories', 'tribe'); ?></option>
				<?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
				<?php foreach($categories as $category) { ?>
				<option value='<?php echo esc_attr( $category->term_id ); ?>' <?php if ($category->term_id == $instance['categories']) echo 'selected="selected"'; ?>><?php echo esc_html($category->cat_name ); ?></option>
				<?php } ?>
			</select>
			</p>
			
			<!-- Number of posts -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e('Number of posts to show:', 'tribe'); ?></label>
				<input  type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" value="<?php echo esc_attr( $instance['number'] ); ?>" size="3" />
			</p>


		<?php
		}
	}

	add_action( 'widgets_init', create_function( '', 'register_widget("at_posts_widget");' ) );

}