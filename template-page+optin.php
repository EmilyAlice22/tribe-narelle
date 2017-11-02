<?php 
/*
Template Name: Default Template with Optin
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