<?php 
$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);

if ($categories) :
  $category_ids = array();

  foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args=array(
      'category__in' => $category_ids,
      'post__not_in' => array($post->ID),
      'posts_per_page'=> 3, // Number of related posts that will be shown.
      'ignore_sticky_posts'=> 1
    );

    $my_query = new wp_query( $args );
    
    if( $my_query->have_posts() ) : ?>
     
    <section class="at-relatedposts">

      <h3 class="at-relatedposts__title"><span><?php esc_html_e('You Might Also Like', 'tribe') ?></span></h3>
    
    <ul>

    <?php while( $my_query->have_posts() ) {
      $my_query->the_post();?>
        
    <li>
      <div class="at-relatedposts__post">
      <?php if ( has_post_thumbnail() ) : ?>
         <div class="at-relatedposts__postthumb">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('tribe-500'); ?>
          </a>
        </div>
      <?php else : ?>
        <div class="at-relatedposts__postthumbholder">
          <a href="<?php the_permalink(); ?>">
          </a>
        </div>
      <?php endif; ?>
      <h4 class="at-relatedposts__posttitle">
        <a href="<?php the_permalink()?>" rel="bookmark"><?php the_title(); ?></a>
      </h4>
      </div>
    </li>

    <?php } ?>
    </ul>
  </section>

<?php endif;
endif;
$post = $orig_post;
wp_reset_postdata(); ?>