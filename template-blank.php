<?php 
/*
Template Name: Blank Template
*/
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

<div class="at-container">

    <main class="at-page" role="main" >
      
      <?php while ( have_posts() ) : the_post();?>
        
      <article id="post-<?php the_ID(); ?>" <?php post_class('at-page');?>>

        <?php the_content(); ?>
       
        <?php wp_link_pages( array( 'before' => '<div class="at-post__pagelinks">' . esc_html__( 'Pages:', 'tribe' ), 'after' => '</div>' ) ); ?>

      </article><!-- #post-## -->

      <?php

      endwhile; // End of the loop.
      ?>

    </main>

</div>

</body>