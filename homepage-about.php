<?php
// Get block variables
$at_aboutimg = get_theme_mod('at_setting__aboutimg');
$at_abouttitle = get_theme_mod('at_setting__abouttitle', esc_html__("Hi, I'm Anna!", "tribe"));
$at_aboutcontent = get_theme_mod('at_setting__aboutcontent', esc_html__("Default Content", "tribe"));
$at_aboutbutton = get_theme_mod('at_setting__aboutbutton', esc_html__("More About Me", "tribe"));
$at_abouturl = get_theme_mod('at_setting__abouturl', esc_html__("#", "tribe")); ?>

<div id="at-about-block" class="at-about-block at-container">
  <div class="at-about <?php if( !empty($at_aboutimg) ) : echo 'at-about--hasimage'; endif; ?>">

    <?php if ($at_aboutimg) : ?>
    <div class="at-about__image" style="background-image: url('<?php echo esc_url( $at_aboutimg ); ?>');"></div>
    <?php endif; ?>
    <div class="at-about__contentwrap">
      <?php if ($at_abouttitle) : ?>
      <h3 class="at-about__title"><?php echo esc_html( $at_abouttitle ); ?></h3>
      <?php endif; ?>
      <?php if ($at_aboutcontent) : ?>
      <div class="at-about__content">
        <?php echo wp_kses_post($at_aboutcontent) ; ?>
      </div>
      <?php endif; ?>
      <?php if ( ($at_aboutbutton) && ($at_abouturl)  ) : ?>
        <a class="at-about__blockbutton" href="<?php echo esc_url( $at_abouturl ); ?>"><span><?php echo esc_html( $at_aboutbutton ); ?></span></a>
      <?php endif; ?>
    </div>

  </div>
</div>
