<?php
$at_hpblocks2 = get_theme_mod( 'at_setting__hpblocks2' );
$at_hpblockstitle2 = get_theme_mod('at_setting__hpblockstitle2','YOUR NEW LIFE STARTS HERE!');
$at_hpblocks_nb2 = get_theme_mod('at_sec__hpblocks_nb2','3');
if ( $at_hpblocks2 ) : ?>
<div id="at-cta2-block" class="at-ctalist">
  <div class="at-container">

    
    <?php if ( !empty($at_hpblockstitle2) ) : ?>
      <h3 class="at-ctalist__title"><?php echo esc_html( $at_hpblockstitle2 ); ?></h3>
    <?php endif; ?> 

    <ul>
  <?php $i = 1;
  foreach($at_hpblocks2 as $item) : 
    
    
    $item_imgsrc = wp_get_attachment_image_src( $item['link_image'], 'tribe-500'); ?>
    <li class="at-ctalist__block-<?php echo esc_html($at_hpblocks_nb2); ?>" >
    <div class="at-ctalist__blockoverflow">
    <a href="<?php echo esc_url( $item['link_url'] ); ?>"></a>
        <div class="at-ctalist__block" style="background-image: url(<?php echo esc_url( $item_imgsrc[0] ); ?>);">
            <?php if ( !empty($item['link_text']) ) : ?>
              <div class="at-ctalist__content">
                <a href="<?php echo esc_url( $item['link_url'] ); ?>"> <h4><?php echo wp_kses_post( $item['link_text'] ); ?></h4></a> 
              </div> 
            <?php endif; ?>

        </div>
      </div>
      <?php if ( !empty($item['link_description']) ) : ?>
        <div class="at-ctalist__blocktext">
            <p><?php echo wp_kses_post( $item['link_description'] ); ?></p>
            <?php if ( !empty($item['link_button']) ) : ?>
                <a id="cta2-<?php echo esc_attr( $i ); ?>" class="at-ctalist__blockbutton" href="<?php echo esc_url( $item['link_url'] ); ?>"><span><?php echo esc_html( $item['link_button'] ); ?></span></a>
            <?php endif; ?>
        </div>
        
      <?php endif; ?>

    </li>
  <?php ++$i;
  endforeach; ?>
    </ul>
  </div>
</div>
<?php endif; ?>