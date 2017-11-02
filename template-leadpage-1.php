<?php 
/*
Template Name: LeadPage Template without header & footer
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

<div class="at-container at-leadpage">

    <main class="at-page" role="main" >
  
      <?php while ( have_posts() ) : the_post();?>
        
      <article id="post-<?php the_ID(); ?>" <?php post_class('at-page');?>>


      <?php $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
      $thumb_url = $thumb_url_array[0] ; ?>

        <div class="at-lead <?php if( !empty($thumb_id) ) : echo 'at-lead--hasimage'; endif; ?>">

          <?php if ($thumb_id) : ?>
          <div class="at-lead__image" style="background-image: url('<?php echo esc_url( $thumb_url );  ?>');"></div>
          <?php endif; ?>
          
          <div class="at-lead__contentwrap">

            <div class="at-lead__content">
              <?php the_content(); ?>
              <?php wp_link_pages( array( 'before' => '<div class="at-post__pagelinks">' . esc_html__( 'Pages:', 'tribe' ), 'after' => '</div>' ) ); ?>
            </div>

          </div>

        </div>
       
      </article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>

    </main>

</div>

</body>