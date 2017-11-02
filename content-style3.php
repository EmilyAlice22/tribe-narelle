<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('at-post at-post--square'); ?>>

  <?php if ( has_post_thumbnail() ) : ?>
    <?php
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'tribe-post-square', true);
    $thumb_url = $thumb_url_array[0];
    ?>
    <div class="at-post__thumb" style="background-image: url('<?php echo esc_url( $thumb_url ); ?>');">
      <a href="<?php the_permalink(); ?>"></a>
    </div>
  <?php endif; ?>

  <div class="at-post__contentwrap <?php if ( has_post_thumbnail() ) echo "at-post__with-thumbnail" ?>">
    <h2 class="at-post__title">
      <a href="<?php the_permalink(); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h2>

    <div class="at-post__excerpt">
      <?php
        the_excerpt();
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tribe' ),
          'after'  => '</div>',
        ) );
      ?>

      <a class="at-post__readmore" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More','tribe' ); ?></a>

    </div><!-- .at-post__content -->
  

  </div>

</article><!-- #post-## -->