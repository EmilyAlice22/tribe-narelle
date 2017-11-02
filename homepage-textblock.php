<?php
// Get block variables
$at_textblocktitle = get_theme_mod('at_setting__textblocktitle', __("Default Title!", "tribe"));
$at_textblockcontent = get_theme_mod('at_setting__textblockcontent', __("Default Content", "tribe"));
 ?>


<div id="at-text-block" class="at-container">
  <div class="at-textblock">
    <div class="at-textblock__contentwrap">
      <?php if ($at_textblocktitle) : ?>
      <h3 class="at-textblock__title"><?php echo esc_html( $at_textblocktitle ); ?></h3>
      <?php endif; ?>
      <?php if ($at_textblockcontent) : ?>
      <div class="at-textblock__content">
        <?php echo wp_kses_post( $at_textblockcontent ); ?>
      </div>
      <?php endif; ?>
    </div>

  </div>
</div>