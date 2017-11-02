<?php  
// Get social customizer options
$at_socialfacebook = get_theme_mod( 'at_setting__socialfacebook' );
$at_socialtwitter = get_theme_mod( 'at_setting__socialtwitter' );
$at_socialgoogleplus = get_theme_mod( 'at_setting__socialgoogleplus' );
$at_socialinstagram = get_theme_mod( 'at_setting__socialinstagram' );
$at_socialflickr = get_theme_mod( 'at_setting__socialflickr' );
$at_socialyoutube = get_theme_mod( 'at_setting__socialyoutube' );
$at_socialvimeo = get_theme_mod( 'at_setting__socialvimeo' );
$at_socialpinterest = get_theme_mod( 'at_setting__socialpinterest' );
$at_socialdribbble = get_theme_mod( 'at_setting__socialdribbble' );
$at_socialsoundcloud = get_theme_mod( 'at_setting__socialsoundcloud' );
$at_sociallinkedin = get_theme_mod( 'at_setting__sociallinkedin' );
$at_socialtumblr = get_theme_mod( 'at_setting__socialtumblr' );
// Get social links title
$at_socialtitle = get_theme_mod( 'at_setting__socialtitle', esc_html__('Let\'s Connect', 'tribe') );


// Get the copyrights
$at_copyright = get_theme_mod( 'at_setting__copyright', wp_kses_post('&copy; Copyright 2017 All Rights Reserved.') );
$at_poweredby = get_theme_mod( 'at_setting__poweredby', wp_kses_post('https://launchandsell.com') );


 if ( !empty($at_socialfacebook) || !empty($at_socialtwitter) || !empty($at_socialgoogleplus) || !empty($at_socialinstagram) || !empty($at_socialflickr) || !empty($at_socialyoutube) || !empty($at_socialvimeo) || !empty($at_socialpinterest) || !empty($at_socialdribbble) || !empty($at_socialsoundcloud) || !empty($at_sociallinkedin) || !empty($at_socialtumblr) ) : ?>
<div class="at-socialfooter">
  <div class="at-container">
  <?php if ( !empty($at_socialtitle) ) : ?>
      <h3 class="at-socialfooter__title"><?php echo esc_html( $at_socialtitle ); ?></h3>
    <?php endif; ?>
    <ul>
      <?php if ( !empty($at_socialfacebook) ) : ?>
        <li class="at-socialfooter_facebook">
          <a target="_blank" href="<?php echo esc_url( $at_socialfacebook ); ?>"><?php get_template_part( '/svg/16px-facebook' ); ?><span><?php esc_html_e( 'Facebook', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialtwitter) ) : ?>
        <li class="at-socialfooter_twitter">
          <a target="_blank" href="<?php echo esc_url( $at_socialtwitter ); ?>"><?php get_template_part( '/svg/16px-twitter' ); ?><span><?php esc_html_e( 'Twitter', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialgoogleplus) ) : ?>
        <li class="at-socialfooter_googleplus">
          <a target="_blank" href="<?php echo esc_url( $at_socialgoogleplus ); ?>"><?php get_template_part( '/svg/16px-googleplus' ); ?><span><?php esc_html_e( 'Google+', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialinstagram) ) : ?>
        <li class="at-socialfooter_instagram">
          <a target="_blank" href="<?php echo esc_url( $at_socialinstagram ); ?>"><?php get_template_part( '/svg/16px-instagram' ); ?><span><?php esc_html_e( 'Instagram', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialflickr) ) : ?>
        <li class="at-socialfooter_flickr">
          <a target="_blank" href="<?php echo esc_url( $at_socialflickr ); ?>"><?php get_template_part( '/svg/16px-flickr' ); ?><span><?php esc_html_e( 'Flickr', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialyoutube) ) : ?>
        <li class="at-socialfooter_youtube">
          <a target="_blank" href="<?php echo esc_url( $at_socialyoutube ); ?>"><?php get_template_part( '/svg/16px-youtube' ); ?><span><?php esc_html_e( 'YouTube', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialvimeo) ) : ?>
        <li class="at-socialfooter_vimeo">
          <a target="_blank" href="<?php echo esc_url( $at_socialvimeo ); ?>"><?php get_template_part( '/svg/16px-vimeo' ); ?><span><?php esc_html_e( 'Vimeo', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialpinterest) ) : ?>
        <li class="at-socialfooter_pinterest">
          <a target="_blank" href="<?php echo esc_url( $at_socialpinterest ); ?>"><?php get_template_part( '/svg/16px-pinterest' ); ?><span><?php esc_html_e( 'Pinterest', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialdribbble) ) : ?>
        <li class="at-socialfooter_dribbble">
          <a target="_blank" href="<?php echo esc_url( $at_socialdribbble ); ?>"><?php get_template_part( '/svg/16px-dribbble' ); ?><span><?php esc_html_e( 'Dribbble', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialsoundcloud) ) : ?>
        <li class="at-socialfooter_soundcloud">
          <a target="_blank" href="<?php echo esc_url( $at_socialsoundcloud ); ?>"><?php get_template_part( '/svg/16px-soundcloud' ); ?><span><?php esc_html_e( 'Soundcloud', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_sociallinkedin) ) : ?>
        <li class="at-socialfooter_linkedin">
          <a target="_blank" href="<?php echo esc_url( $at_sociallinkedin ); ?>"><?php get_template_part( '/svg/16px-linkedin' ); ?><span><?php esc_html_e( 'LinkedIn', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
      <?php if ( !empty($at_socialtumblr) ) : ?>
        <li class="at-socialfooter_tumblr">
          <a target="_blank" href="<?php echo esc_url( $at_socialtumblr ); ?>"><?php get_template_part( '/svg/16px-tumblr' ); ?><span><?php esc_html_e( 'Tumblr', 'tribe') ?></span></a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</div>
<?php endif; ?>

<!-- .site-footer -->
<footer class="site-footer" itemtype="http://schema.org/WPFooter" itemscope="itemscope">

  <?php if (   is_active_sidebar( 'first-footer-widget-area'  )
            || is_active_sidebar( 'second-footer-widget-area' )
            || is_active_sidebar( 'third-footer-widget-area'  )
            || is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
  <div class="at-top-footer">
    <div class="at-container">

    <?php
                /* The footer widget area is triggered if any of the areas
                 * have widgets. So let's check that first.
                 *
                 * If none of the sidebars have widgets, then let's bail early.
                 */
                   
                  ?> <aside class="site-footer-widgets" role="complementary">
                    <ul class="at-footer-widget-list">
                      <?php if ( is_active_sidebar( 'first-footer-widget-area'  ) ) : ?>
                        <li class="footer_areas">
                          <div class="widget-area footer_widget">
                            <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                          </div><!-- .first .widget-area -->
                        </li>
                      <?php endif; ?>
                      <?php if ( is_active_sidebar( 'second-footer-widget-area'  ) ) : ?>
                        <li class="footer_areas">
                          <div class="widget-area footer_widget">
                            <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                          </div><!-- .second .widget-area -->
                        </li>
                      <?php endif; ?>
                      <?php if ( is_active_sidebar( 'third-footer-widget-area'  ) ) : ?>
                        <li class="footer_areas">
                          <div class="widget-area footer_widget">
                            <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                          </div><!-- .third .widget-area -->
                        </li>
                      <?php endif; ?>
                     
                      <?php if ( is_active_sidebar( 'fourth-footer-widget-area'  ) ) : ?>
                        <li class="footer_areas">
                          <div class="widget-area footer_widget">
                            <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
                          </div><!-- .fourth .widget-area -->
                        </li>
                      <?php endif; ?>
                    </ul>
                  </aside><!-- #fatfooter -->

                
    </div>
  </div>
<?php //end of all sidebar checks.
      endif; ?>

  <div class="at-bottom-footer">
    <div class="at-container">
  	<?php if ( has_nav_menu( 'nav-site-footer' ) ) { ?>
  		<nav class="nav-footer" role="navigation">
  			<?php wp_nav_menu( array(
          'theme_location' => 'nav-site-footer', 
          'container' => false, 
          'depth' => 1 )); ?>
  		</nav>
  	<?php } ?>

    <?php if( ($at_copyright) || ($at_poweredby)) : ?>
      <div class="site-footer__copyright" role="contentinfo"><?php echo wp_kses_post( $at_copyright ); ?>  <?php if ($at_poweredby) : ?> Powered by <a target="_blank" href="<?php echo wp_kses_post( $at_poweredby ); ?>">Launch &amp; Sell</a>.<?php endif; ?></div>
    <?php endif; ?>

  </div>
  </div>
</footer> 
<!-- /.site-footer -->

</div>
<!-- /.at-site-container -->

<?php wp_footer(); ?>
</body>
</html>