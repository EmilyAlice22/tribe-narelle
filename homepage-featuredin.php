<?php
$at_hpfeatured = get_theme_mod( 'at_setting__hpfeatured' );
$at_hpfeaturedtitle = get_theme_mod('at_setting__hpfeaturedtitle', esc_html__( 'As Featured In', 'tribe' ) );
if ( $at_hpfeatured ) : ?>
<div id="at-feature-block" class="at-featured">
  <div class="at-container">
    <?php if ( !empty($at_hpfeaturedtitle) ) : ?>
      <h3 class="at-featured__title"><?php echo esc_html( $at_hpfeaturedtitle ); ?></h3>
    <?php endif; ?> 
    <ul>
    <?php foreach($at_hpfeatured as $item) : ?>
    
      <li>
        <?php echo wp_get_attachment_image( $item['image'], 'full' ); ?>
      </li>

    <?php endforeach; ?>
    </ul>
  </div>
</div>
<?php endif; ?>