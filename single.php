<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header(); ?>
<?php $at_blogsidebar = get_theme_mod( 'at_setting__blogsidebar', 'right' ); ?>

<?php get_template_part( 'homepage', 'optin' ); ?>

<div class="at-container">

  <div class="at-pagewrapper at-pagewrapper--sb<?php echo esc_attr( $at_blogsidebar ); ?>">
    <main class="at-page" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('at-post at-post--single'); ?>>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="at-post__thumb">
          <?php the_post_thumbnail('tribe-post'); ?>
        </div>
      <?php endif; ?>
      
      <div class="at-post__contentwrap">
      <h2 class="at-post__title"><?php the_title(); ?></h2>

        <div class="at-post__meta">
          <?php the_category( ' / ' ); ?>
        </div>

        <div class="at-post__content">

          <?php the_content(); ?>
          <?php wp_link_pages( array( 'before' => '<div class="at-post__pagelinks">' . esc_html__( 'Pages:', 'tribe' ), 'after' => '</div>' ) ); ?>

          <div class="at-post__tags">
            <?php the_tags( esc_html__('Tagged: ', 'tribe'), '', '' ); ?>
         </div>
         
        </div>

      </div>

      <?php if ( true == get_theme_mod( 'at_setting__postsshare', true ) ) : ?>
        <div class="at-post__metaf">
          <?php get_template_part( 'single', 'socialshare' ); ?>
        </div>
      <?php endif; ?>

      </article>

      <?php // Previous/next post navigation.
      if ( true == get_theme_mod( 'at_setting__postnav', true ) ) :
        at_post_nav();
      endif; ?>

      <?php 
      if ( true == get_theme_mod( 'at_setting__postrelated', true ) ) :
        get_template_part( 'single', 'related' );
      endif; ?>      

        <?php // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      endwhile; // End of the loop. ?>
 
    </main>

    <?php 
    if ( $at_blogsidebar != "off" ) :
      get_sidebar('post');
    endif; ?>

  </div>
</div>

<?php get_footer();