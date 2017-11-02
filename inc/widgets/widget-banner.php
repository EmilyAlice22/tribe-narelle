<?php

if(!class_exists('at_banner_widget')){
  class at_banner_widget extends WP_Widget {

    /**
    * Constructor
    */
    public function __construct() {

      parent::__construct(
        'at_banner_widget',
        esc_html__( 'Tribe: Banner Widget', 'tribe' ),
        array(
          'classname' =>  'at_banner_widget',
          'description' =>  esc_html__( 'A widget for displaying banners & ads.', 'tribe' )
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
      $link = $instance['link'];
      $new_tab = $instance[ 'new_tab' ] ? 'true' : 'false';
      
      /* Display the widget title if one was input (before and after defined by themes). */
      if ( $title):

        echo wp_kses_post( $before_widget . $before_title . $title . $after_title );
      else :
        echo str_replace('class="widget ', 'class="', $before_widget);
      endif; ?>
        
        <div class="banner-widget">
        
        <?php if (($image) && ($link)) : ?>
        <a href="<?php echo esc_url($link); ?>" target="<?php if ($new_tab=='true') : echo '_blank'; else : echo '_self'; endif;?>"><img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($title); ?>"/></a>
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
      $instance['link'] = $new_instance['link'];


      return $instance;
    }


    public function form( $instance ) {

      /* Set up some default widget settings. */
      $defaults = array( 'title' => '', 'image' => '', 'link' => '');
      $instance = wp_parse_args( (array) $instance, $defaults ); ?>

      <!-- Widget Title: Text Input -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'tribe' ); ?></label>
        <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
      </p>
      
      <!-- image url -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>"><?php esc_html_e( 'Image URL:', 'tribe' ); ?></label>
        <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>" value="<?php echo esc_attr( $instance['image'] ); ?>" />
      </p>
      
      <!-- link -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_html_e( 'Banner link:', 'tribe' ); ?></label>
        <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" value="<?php echo esc_attr( $instance['link'] ); ?>" />
      </p>

      <!-- margin -->
      <p>
        <input class="checkbox" type="checkbox" <?php checked( $instance[ 'new_tab' ], 'on' ); ?> id="<?php echo esc_attr( $this->get_field_id( 'new_tab' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'new_tab' ) ); ?>" /> 
        <label for="<?php echo esc_attr( $this->get_field_id( 'new_tab' ) ); ?>"><?php esc_html_e( 'Open in a new tab', 'tribe' ); ?></label>
      </p>



    <?php
    }
  }

  add_action( 'widgets_init', create_function( '', 'register_widget("at_banner_widget");' ) );

}