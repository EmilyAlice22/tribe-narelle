<?php

if ( ! function_exists( 'at_post_nav' ) ) :
/**
 * Display navigation to next/previous post
 */
function at_post_nav() {
  // Don't print empty markup if there's nowhere to navigate.
  $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
  $next     = get_adjacent_post( false, '', false );

  if ( ! $next && ! $previous ) {
    return;
  }

  ?>
  <nav class="at-postnav" role="navigation">
    <h1 class="screen-reader-text" style="display: none;"><?php esc_html_e( 'Post navigation', 'tribe' ); ?></h1>
    <div class="at-postnav__links">
      <?php
        previous_post_link( '%link', esc_html__( 'Previous Post', 'tribe' ) );
        next_post_link( '%link', esc_html__( 'Next Post', 'tribe' ) );
      ?>
    </div><!-- .nav-links -->
  </nav><!-- .navigation -->
  <?php
}
endif;