<?php

if(!class_exists('at_about_widget')){
	class at_about_widget extends WP_Widget {

	  /**
		* Constructor
		*/
	  public function __construct() {

		  parent::__construct(
		    'at_about_widget',
		    esc_html__( 'Tribe: About Widget', 'tribe' ),
		    array(
		      'classname' =>  'at_about_widget',
		      'description' =>  esc_html__( 'A widget for displaying an about widget.', 'tribe' )
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
			$image = $instance['image'];
			$description = $instance['description'];
			
			/* Before widget (defined by themes). */
			echo wp_kses_post( $before_widget );

			/* Display the widget title if one was input (before and after defined by themes). */
			if ( $title )
				echo wp_kses_post( $before_title . $title . $after_title );

			?>
				
				<div class="about-widget">
				
				<?php if($image) : ?>
				<div class="widget_aboutme__image">
					<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($title); ?>"/>
				</div>
				<?php endif; ?>
				
				<?php if($description) : ?>
					<p><?php echo wp_kses_post($description); ?></p>
				<?php endif; ?>	
				
				</div>
				
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
			$instance['image'] = strip_tags( $new_instance['image'] );
			$instance['description'] = $new_instance['description'];

			return $instance;
		}


		public function form( $instance ) {

			/* Set up some default widget settings. */
			$defaults = array( 'title' => esc_html__( 'About Me', 'tribe' ), 'image' => '', 'description' => '');
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>

			<!-- Widget Title: Text Input -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'tribe' ); ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr ( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
			</p>
			
			<!-- image url -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>"><?php esc_html_e( 'Image URL:', 'tribe' ); ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>" value="<?php echo esc_attr( $instance['image'] ); ?>" />
			</p>
			
			<!-- description -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_html_e( 'About Me Text:', 'tribe' ); ?></label>
				<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" rows="6"><?php echo esc_html($instance['description']); ?></textarea>
			</p>


		<?php
		}
	}

	add_action( 'widgets_init', create_function( '', 'register_widget("at_about_widget");' ) );

}