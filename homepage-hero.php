<?php
// Get block variables
$at_herotype = get_theme_mod('at_setting__herotype');

if (isset($_GET['slider'])) {
  $at_herotype = 'slider';
}

if ($at_herotype == 'slider') {

	$at_heroslider = get_theme_mod('at_setting__heroslider');
	?>
	<div id="at-hero-block" class="at-hero at-slider">
	<?php echo do_shortcode( $at_heroslider );?>
	</div>
	
<?php }
else {
	$at_heroimg = get_theme_mod('at_setting__heroimg', get_template_directory_uri().'/img/default/hero.jpg' );
	$at_herotitle = get_theme_mod('at_setting__herotitle', esc_html__('Default Content', 'tribe'));
	$at_herotitle2 = get_theme_mod('at_setting__herotitle2', esc_html__('Default Content', 'tribe'));
	$at_btntxt = get_theme_mod('at_setting__herobtntxt', esc_html__('Default Content', 'tribe'));
	$at_btnlink = get_theme_mod('at_setting__herobtnlink', esc_html__('#', 'tribe'));
	$at_position = 'at-hero-content-' . get_theme_mod('at_setting__herocontent', esc_html__('right', 'tribe'));
	?>
	<div id="at-hero-block" class="at-hero" style="background-image: url('<?php echo esc_url( $at_heroimg ); ?>');">
	  <div class="at-container">
	    <div class="at-hero__content  <?php echo esc_html( $at_position); ?>">
	      <h1 class="at-hero__title"><?php echo wp_kses_post( $at_herotitle ); ?></h1>
	      <p class="at-hero__text"><?php echo wp_kses_post( $at_herotitle2 ); ?></p>
	      <a class="at-hero__btn" href="<?php echo esc_url( $at_btnlink ); ?>"><span><?php echo wp_kses_post( $at_btntxt ); ?></span></a>
	    </div>
	  </div>
	</div>
<?php }