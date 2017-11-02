<?php
$at_optintitle = get_theme_mod('at_setting__hpoptintitle');
$at_optinsubtitle = get_theme_mod('at_setting__hpoptinsubtitle');
$at_optinform = get_theme_mod('at_setting__hpoptinform');
$at_optinimg= get_theme_mod('at_setting__hpoptinimg');
?>
<?php if ( !empty($at_optintitle) && !empty($at_optinform) ) : ?>
<div id="at-optin-block" class="at-optin-block at-container">
  <div class="at-optin">
    <?php if ( !empty($at_optintitle) ) : ?>
      <h3 class="at-optin__title"><?php echo esc_html( $at_optintitle ); ?></h3>
    <?php endif; ?>
    <?php if ( !empty($at_optinsubtitle) ) : ?>
	      <p class="at-optin__subtitle"><?php echo esc_html( $at_optinsubtitle ); ?></p>
	    <?php endif; ?> 
    
	    <?php if ( !empty($at_optinimg) ) : ?>
      		<div class="at-optin__img"><img src="<?php echo esc_url( $at_optinimg ); ?>"/></div>
      	<?php endif; ?>

	    <div class="at-optin__form <?php if ( !empty($at_optinimg) ) echo 'at-optin__withimg'; else echo 'at-optin__noimg'; ?>" ><?php echo do_shortcode($at_optinform); ?></div>
	</div>
</div>
<?php endif; ?>