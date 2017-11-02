<?php $at_hpblogtitle = get_theme_mod( 'at_setting__hpblogtitle', esc_html__( 'From The Blog', 'tribe' ) ); ?>
<div id="at-blog-block" class="at-bloglist">
  <div class="at-container">

    <?php if ( !empty($at_hpblogtitle) ) : ?>
      <h3 class="at-bloglist__title"><?php echo esc_html( $at_hpblogtitle ); ?></h3>
    <?php endif; ?> 

    <?php $args=array(
    'posts_per_page'=> 4,
    'ignore_sticky_posts'=>1
    );

    $my_query = new wp_query( $args );
    
    if( $my_query->have_posts() ) : ?>
    
    <ul>

    <?php while( $my_query->have_posts() ) {
      $my_query->the_post();?>
        
    <li>
      <div class="at-bloglist__post">
      <a class="at-bloglist__link" href="<?php the_permalink()?>" rel="bookmark" style="display: block"></a>
      <?php if ( has_post_thumbnail() ) : ?>
         <div class="at-bloglist__postthumb">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('tribe-500'); ?>
          </a>
        </div>
      <?php endif; ?>
      <div class="at-bloglist__contentwrap" <?php if ( !has_post_thumbnail() ) : ?>style="margin-top: 20px;"<?php endif; ?>>
        <a class="at-bloglist__link" href="<?php the_permalink()?>" rel="bookmark" style="display: block"></a>
        <h4 class="at-bloglist__posttitle">
          <a href="<?php the_permalink()?>" rel="bookmark"><?php the_title(); ?></a>
        </h4>
        <div class="at-bloglist__excerpt">
          <?php the_excerpt(); ?>
        </div>
      </div>
      </div>
    </li>

    <?php } ?>
    </ul>

<?php endif; ?>
  </div>
</div>