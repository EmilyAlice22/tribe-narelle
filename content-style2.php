<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
$at_blog_date = get_theme_mod( 'at_setting__postdate', '1' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('at-post at-post--mini at-post-small'); ?>>

    <div class="at-blog__post">
      <a class="at-blog__link" href="<?php the_permalink()?>" rel="bookmark" style="display: block"></a>
      <?php if ( has_post_thumbnail() ) : ?>
         <div class="at-blog__postthumb">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('tribe-hpblog'); ?>
          </a>
        </div>
      <?php endif; ?>
      <div class="at-blog__contentwrap" <?php if ( !has_post_thumbnail() ) : ?>style="margin-top: 20px;"<?php endif; ?>>
        <a class="at-blog__link" href="<?php the_permalink()?>" rel="bookmark" style="display: block"></a>
        <h4 class="at-blog__posttitle">
          <a href="<?php the_permalink()?>" rel="bookmark"><?php the_title(); ?></a>
        </h4>
        <div class="at-blog__excerpt">
          <?php the_excerpt(); ?>
        </div>
        <?php if ( $at_blog_date == '1' ) : ?> 
          <ul class="at-post__meta">
            <li><?php the_date(); ?></li>  
          </ul>
        <?php endif; ?>
      </div>
    </div>


</article><!-- #post-## -->