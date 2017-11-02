<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
$at_blog_date = get_theme_mod( 'at_setting__postdate', '1' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('at-post at-post--mini at-post--highlight'); ?>>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="at-post__thumb">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('tribe-post'); ?>
      </a>
    </div>
  <?php endif; ?>

  <div class="at-post__contentwrap">
    <h2 class="at-post__title">
      <a href="<?php the_permalink(); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h2>

    <ul class="at-post__meta">
      <?php if ( $at_blog_date == '1' ) : ?><li><?php the_date(); ?></li> <?php endif; ?>
      <li><?php the_category( ' / ' ); ?></li>
    </ul>

    <div class="at-post__excerpt">
      <?php
        the_excerpt();
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tribe' ),
          'after'  => '</div>',
        ) );
      ?>
      
      <a class="at-post__readmore" href="<?php the_permalink(); ?>"><?php _e( 'Read More','tribe' ); ?></a>

    </div><!-- .at-post__content -->

  </div>

</article><!-- #post-## -->