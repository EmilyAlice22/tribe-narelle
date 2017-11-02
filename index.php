<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>


<?php 

if (isset($_GET['sidebar'])) {
  $at_blogsidebar = 'off';
} else {
  $at_blogsidebar = get_theme_mod( 'at_setting__blogsidebar', 'right' );  
}



$at_blog_latestpost = get_theme_mod( 'at_setting__latestpost', '1' );

$at_blog_pagetitle = get_theme_mod( 'at_setting__pagetitle', '1' ); 

if (isset($_GET['blogstyle'])) {
  $at_bloglayout = 'content-style' . $_GET['blogstyle'];
} else {
  $at_bloglayout = 'content-'.get_theme_mod( 'at_setting__bloglayout', 'style2' ); 
}


 if ( ($at_blog_pagetitle == "1") && !(is_front_page()) ) { ?>
<div class="at-pageheader">
<div class="at-container">
  <h1 class="at-pageheader__title"><?php wp_title($sep = ''); ?></h1>
</div>
</div>
<?php } ?>

<?php get_template_part( 'homepage', 'optin' ); ?>

<div class="at-container">


  <div class="at-pagewrapper at-pagewrapper--archive at-pagewrapper--sb<?php echo esc_attr( $at_blogsidebar ); ?>">
    <main class="at-page" role="main">

    <?php
    if ( have_posts() ) :


      /* first Post Highlighted */
      $at_postcount = 1;
      while ( have_posts() ) : the_post();

          if ( ($at_bloglayout == "content-style4") && (1 > get_query_var( 'paged' )) && ($at_postcount == '1') ) {

              get_template_part( 'content-first' );

              break;
            } 

        endwhile;



      /* Start the Loop */
      if ($at_bloglayout == "content-style4")
           $at_bloglayout = "content-style3";
  ?>
      

      <div class="at-<?php echo esc_attr( $at_bloglayout ); ?>">
        <?php

        while ( have_posts() ) : the_post();
 
              get_template_part( $at_bloglayout );

        endwhile; ?>
        </div>
      <?php

      the_posts_navigation( array(
            'prev_text'          => esc_html__( 'Next Page', 'tribe' ),
            'next_text'          => esc_html__( 'Previous Page', 'tribe' ),
        ));

    else :
      get_template_part( 'content', 'none' );
    endif; ?>

    </main>

    <?php 
    if ( $at_blogsidebar != "off" ) :
      get_sidebar('post');
    endif; ?>



  </div>
    
</div>




<?php get_footer();