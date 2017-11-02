<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
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

			<?php	while ( have_posts() ) : the_post();?>
				
			<article id="post-<?php the_ID(); ?>" <?php post_class('at-page'); ?>>

				<div class="at-page__content">
					<?php	the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="at-post__pagelinks">' . esc_html__( 'Pages:', 'tribe' ), 'after' => '</div>' ) ); ?>
				</div><!-- .at-page__content -->


			</article><!-- #post-## -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>

    </main>

    <?php //get_sidebar('page'); ?>

  </div>
</div>

<?php get_footer();