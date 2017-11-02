<?php
// Get block variables
 ?>


<div id="at-content-block" class="at-textblock">
  <div class="at-container">
    <div class="at-textblock__contentwrap">
      
      <?php while ( have_posts() ) : the_post();?>
        
      <article id="post-<?php the_ID(); ?>" <?php post_class('at-page');?>>

        <?php the_content(); ?>
       
        <?php wp_link_pages( array( 'before' => '<div class="at-post__pagelinks">' . __( 'Pages:', 'tribe' ), 'after' => '</div>' ) ); ?>

      </article><!-- #post-## -->

      <?php

      endwhile; // End of the loop.
      ?>

    </div>

  </div>
</div>