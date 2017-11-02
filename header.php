<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
<div class="at-sitecontainer at-sitecontainer--<?php echo get_theme_mod( 'at_setting__sitelayout', 'wide' );?>">
<?php 
  $at_header = get_theme_mod('at_setting__header', '1');
  if ($at_header) : ?>
    <header class="site-header">
      <div class="at-container">

        <?php if ( has_custom_logo() ) : ?>
          <div class="site-header__logowrap">
          <div class="at-container">
              <?php echo get_custom_logo(); ?>
          </div>
          </div>
        <?php else: ?>
          <!-- Default Logo -->
          <div class="site-header__logowrap">
          <div class="at-container">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
              <img src="<?php echo get_template_directory_uri() . '/img/default/logo.png' ?>" alt="" />
            </a>
          </div>
          </div>
        <?php endif; ?>

      </div>
    </header>
  <?php endif; ?>

<?php if ( has_nav_menu( 'nav-site-header' ) ) : ?>
  <nav class="site-header__nav">
   <button id="at-navtoggle" class="nav-header__mtoggle"><span><?php esc_html_e('Menu','tribe') ?></span></button>
    <?php wp_nav_menu( array(
      'theme_location' => 'nav-site-header',
      'menu_class' => 'nav-header__menuwrapper', 
      'container' => false,
      'container_id' => false, 
      'container_class' => false,
      'depth' => 2,
      )
    ); ?>  
  </nav>
<?php endif; ?>