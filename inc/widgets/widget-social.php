<?php

if(!class_exists('at_social_widget')){
	class at_social_widget extends WP_Widget {

		/**
		* Constructor
		*/
	  public function __construct() {

		  parent::__construct(
		    'at_social_widget',
		    esc_html__( 'Tribe: Social Widget', 'tribe' ),
		    array(
		      'classname' =>  'at_social_widget',
		      'description' =>  esc_html__( 'A widget for displaying social links.', 'tribe' )
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
			$facebook = $instance['facebook'];
			$twitter = $instance['twitter'];
			$googleplus = $instance['googleplus'];
			$instagram = $instance['instagram'];
			$flickr = $instance['flickr'];
			$youtube = $instance['youtube'];
			$vimeo = $instance['vimeo'];			
			$pinterest = $instance['pinterest'];
			$dribbble = $instance['dribbble'];
			$soundcloud = $instance['soundcloud'];
			$linkedin = $instance['linkedin'];
			$tumblr = $instance['tumblr'];
			$rss = $instance['rss'];
			
			/* Before widget */
			echo wp_kses_post( $before_widget );

			// Get social customizer options
			$at_socialfacebook = get_theme_mod( 'at_setting__socialfacebook' );
			$at_socialtwitter = get_theme_mod( 'at_setting__socialtwitter' );
			$at_socialgoogleplus = get_theme_mod( 'at_setting__socialgoogleplus' );
			$at_socialinstagram = get_theme_mod( 'at_setting__socialinstagram' );
			$at_socialflickr = get_theme_mod( 'at_setting__socialflickr' ); 
			$at_socialyoutube = get_theme_mod( 'at_setting__socialyoutube' );
			$at_socialvimeo = get_theme_mod( 'at_setting__socialvimeo' );
			$at_socialpinterest = get_theme_mod( 'at_setting__socialpinterest' );
			$at_socialdribbble = get_theme_mod( 'at_setting__socialdribbble' );
			$at_socialsoundcloud = get_theme_mod( 'at_setting__socialsoundcloud' );
			$at_sociallinkedin = get_theme_mod( 'at_setting__sociallinkedin' );
			$at_socialtumblr = get_theme_mod( 'at_setting__socialtumblr' );

			/* Display the widget title if one was input */
			if ( $title )
				echo wp_kses_post( $before_title . $title . $after_title );	?>
			
				<div class="at-socialwidget">
					<?php if($facebook) : ?>
						<a href="<?php echo esc_url($at_socialfacebook); ?>" target="_blank"><?php get_template_part( '/svg/16px-facebook' ); ?></a>
					<?php endif; ?>
					<?php if($twitter) : ?>
						<a href="<?php echo esc_url($at_socialtwitter); ?>" target="_blank"><?php get_template_part( '/svg/16px-twitter' ); ?></a>
					<?php endif; ?>
					<?php if($googleplus) : ?>
						<a href="<?php echo esc_url($at_socialgoogleplus); ?>" target="_blank"><?php get_template_part( '/svg/16px-googleplus' ); ?></a>
					<?php endif; ?>
					<?php if($instagram) : ?>
						<a href="<?php echo esc_url($at_socialinstagram); ?>" target="_blank"><?php get_template_part( '/svg/16px-instagram' ); ?></a>
					<?php endif; ?>
					<?php if($flickr) : ?>
						<a href="<?php echo esc_url($at_socialflickr); ?>" target="_blank"><?php get_template_part( '/svg/16px-flickr' ); ?></a>
					<?php endif; ?>
					<?php if($youtube) : ?>
						<a href="<?php echo esc_url($at_socialyoutube); ?>" target="_blank"><?php get_template_part( '/svg/16px-youtube' ); ?></a>
					<?php endif; ?>
					<?php if($vimeo) : ?>
						<a href="<?php echo esc_url($at_socialvimeo); ?>" target="_blank"><?php get_template_part( '/svg/16px-vimeo' ); ?></a>
					<?php endif; ?>
					<?php if($pinterest) : ?>
						<a href="<?php echo esc_url($at_socialpinterest); ?>" target="_blank"><?php get_template_part( '/svg/16px-pinterest' ); ?></a>
					<?php endif; ?>
					<?php if($dribbble) : ?>
						<a href="<?php echo esc_url($at_socialdribbble); ?>" target="_blank"><?php get_template_part( '/svg/16px-dribbble' ); ?></a>
					<?php endif; ?>
					<?php if($soundcloud) : ?>
						<a href="<?php echo esc_url($at_socialsoundcloud); ?>" target="_blank"><?php get_template_part( '/svg/16px-soundcloud' ); ?></a>
					<?php endif; ?>					
					<?php if($linkedin) : ?>
						<a href="<?php echo esc_url($at_sociallinkedin); ?>" target="_blank"><?php get_template_part( '/svg/16px-linkedin' ); ?></a>
					<?php endif; ?>
					<?php if($tumblr) : ?>
						<a href="<?php echo esc_url($at_socialtumblr); ?>" target="_blank"><?php get_template_part( '/svg/16px-tumblr' ); ?></a>
					<?php endif; ?>					
					<?php if($rss) : ?>
						<a href="<?php echo bloginfo('rss2_url'); ?>" target="_blank"><?php get_template_part( '/svg/16px-rss' ); ?></a>
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

			/* Strip tags */
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['facebook'] = $new_instance['facebook'];
			$instance['twitter'] = $new_instance['twitter'];
			$instance['googleplus'] = $new_instance['googleplus'];
			$instance['instagram'] = $new_instance['instagram'];
			$instance['flickr'] = $new_instance['flickr'];
			$instance['youtube'] = $new_instance['youtube'];
			$instance['vimeo'] = $new_instance['vimeo'];
			$instance['pinterest'] = $new_instance['pinterest'];
			$instance['dribbble'] = $new_instance['dribbble'];
			$instance['soundcloud'] = $new_instance['soundcloud'];
			$instance['linkedin'] = $new_instance['linkedin'];
			$instance['tumblr'] = $new_instance['tumblr'];
			$instance['rss'] = $new_instance['rss'];

			return $instance;
		}


		public function form( $instance ) {

			/* Set up some default widget settings. */
			$defaults = array( 
				'title' => esc_html__( 'Subscribe & Follow', 'tribe' ), 
				'facebook' => 0, 
				'twitter' => 0, 
				'googleplus' => 0,
				'instagram' => 0,
				'flickr' => 0,
				'vimeo' => 0,
				'youtube' => 0,
				'pinterest' => 0,
				'dribbble' => 0,
				'soundcloud' => 0,
				'linkedin' => 0,
				'tumblr' => 0,
				'rss' => 0,
				);
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>

			<!-- Widget Title: Text Input -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:','tribe'); ?></label>
				<input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
			</p>
			
			<p><?php esc_html_e('Note: Set your social links in the Customizer', 'tribe'); ?></p>
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e('Show Facebook:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" <?php checked( (bool) $instance['facebook'], true ); ?> />
			</p>
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e('Show Twitter:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" <?php checked( (bool) $instance['twitter'], true ); ?> />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'googleplus' ) ); ?>"><?php esc_html_e('Show Google Plus:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'googleplus' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'googleplus' ) ); ?>" <?php checked( (bool) $instance['googleplus'], true ); ?> />
			</p>
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_html_e('Show Instagram:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" <?php checked( (bool) $instance['instagram'], true ); ?> />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>"><?php esc_html_e('Show Flickr:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'flickr' ) ); ?>" <?php checked( (bool) $instance['flickr'], true ); ?> />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e('Show Youtube:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" <?php checked( (bool) $instance['youtube'], true ); ?> />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>"><?php esc_html_e('Show Vimeo:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vimeo' ) ); ?>" <?php checked( (bool) $instance['vimeo'], true ); ?> />
			</p>
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e('Show Pinterest:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" <?php checked( (bool) $instance['pinterest'], true ); ?> />
			</p>
						
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"><?php esc_html_e('Show Dribbble:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dribbble' ) ); ?>" <?php checked( (bool) $instance['dribbble'], true ); ?> />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'soundcloud' ) ); ?>"><?php esc_html_e('Show Soundcloud:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'soundcloud' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'soundcloud' ) ); ?>" <?php checked( (bool) $instance['soundcloud'], true ); ?> />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php esc_html_e('Show Linkedin:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" <?php checked( (bool) $instance['linkedin'], true ); ?> />
			</p>
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>"><?php esc_html_e('Show Tumblr:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tumblr' ) ); ?>" <?php checked( (bool) $instance['tumblr'], true ); ?> />
			</p>			
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'rss' ) ); ?>"><?php esc_html_e('Show RSS:', 'tribe'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'rss' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'rss' ) ); ?>" <?php checked( (bool) $instance['rss'], true ); ?> />
			</p>


		<?php
		}
	}

	add_action( 'widgets_init', create_function( '', 'register_widget("at_social_widget");' ) );

}