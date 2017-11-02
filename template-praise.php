<?php 
/*
Template Name: Praise
*/
get_header(); 

$at_blog_pagetitle = get_theme_mod( 'at_setting__pagetitle', '1' ); 


  if ($at_blog_pagetitle == "1" && !is_front_page()) { ?>
<div class="at-pageheader">
<div class="at-container">
  <h1 class="at-pageheader__title"><?php wp_title($sep = ''); ?></h1>
</div>
</div>
<?php } ?>

<div class="at-container">

  <div class="at-pagewrapper at-pagewrapper--sboff">
    <main class="at-page" role="main">

      <?php while ( have_posts() ) : the_post();?>
        
      <article id="post-<?php the_ID(); ?>" <?php post_class('at-page'); ?>>

        <div class="at-page__content">
        
          <?php the_content(); ?>
          <?php wp_link_pages( array( 'before' => '<div class="at-post__pagelinks">' . esc_html__( 'Pages:', 'tribe' ), 'after' => '</div>' ) ); ?>

        </div><!-- .at-page__content -->

        <?php $at_testimonials = get_theme_mod( 'at_setting__testimonials' );
        if ( $at_testimonials ) : ?>
          <div class="at-testimonals2">

            <ul class="at-testimonals2__list">

            <?php foreach($at_testimonials as $item) : ?>
            
            <?php $item_imgsrc = wp_get_attachment_image_src( $item['testimonial_image'], 'tribe-500'); ?>
            <li>

              <div class="at-testimonial2 <?php if( !empty($item_imgsrc) ) : echo 'at-testimonial2--hasimage'; endif; ?>">

                <?php if ( !empty($item_imgsrc) ) : ?>
                <div class="at-testimonial2__image" style="background-image: url('<?php echo esc_url( $item_imgsrc[0] ); ?>');"></div>
                <?php endif; ?>
                <div class="at-testimonial2__contentwrap">
                  <?php if ( !empty($item['testimonial_text']) ) : ?>
                  <div class="at-testimonial2__content">
                    <p><?php echo wp_kses_post($item['testimonial_text'] ); ?></p>
                    <?php if ( !empty($item['testimonial_name']) ) : ?>
                    <span class="at-testimonial2__author"><?php echo wp_kses_post( $item['testimonial_name'] ); ?></span>
                    <?php endif; ?>
                    <?php if ( !empty($item['testimonial_bio']) ) : ?>
                    <span class="at-testimonial2__authordetails"><?php echo wp_kses_post( $item['testimonial_bio'] ); ?></span>
                    <?php endif; ?>
                  </div>
                  <?php endif; ?>
                </div>

              </div>

            </li>

            <?php endforeach; ?>

            </ul>
        </div>
        <?php endif; ?>

        <?php
        $at_optintitle = get_theme_mod('at_setting__hpoptintitle');
        $at_optinsubtitle = get_theme_mod('at_setting__hpoptinsubtitle');
        $at_optinform = get_theme_mod('at_setting__hpoptinform');
        ?>
        <?php if ( !empty($at_optintitle) && !empty($at_optinform) ) : ?>
          <div class="at-optin">
            <?php if ( !empty($at_optintitle) ) : ?>
              <h3 class="at-optin__title"><?php echo esc_html( $at_optintitle ); ?></h3>
            <?php endif; ?>
            <?php if ( !empty($at_optinsubtitle) ) : ?>
              <p class="at-optin__subtitle"><?php echo esc_html( $at_optinsubtitle ); ?></p>
            <?php endif; ?>  
            <?php echo do_shortcode($at_optinform); ?>
          </div>
        <?php endif; ?>

      </article><!-- #post-## -->

      <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      endwhile; // End of the loop.
      ?>

    </main>

  </div>
</div>

<?php get_footer();