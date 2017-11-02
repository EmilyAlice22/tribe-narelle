<?php

// Load library
require_once ( get_parent_theme_file_path() . '/inc/kirki/kirki.php' );

// Update paths
if ( ! function_exists( 'at_theme_kirki_update_url' ) ) {
    function at_theme_kirki_update_url( $config ) {
        $config['url_path'] = get_template_directory_uri() . '/inc/kirki/';
        return $config;
    }
}
add_filter( 'kirki/config', 'at_theme_kirki_update_url', 999 );

// Translating Kirki strings
add_filter( 'kirki/my_config/l10n', function( $l10n ) {

  $l10n['background-color']      = esc_attr__( 'Background Color', 'tribe' );
  $l10n['background-image']      = esc_attr__( 'Background Image', 'tribe' );
  $l10n['no-repeat']             = esc_attr__( 'No Repeat', 'tribe' );
  $l10n['repeat-all']            = esc_attr__( 'Repeat All', 'tribe' );
  $l10n['repeat-x']              = esc_attr__( 'Repeat Horizontally', 'tribe' );
  $l10n['repeat-y']              = esc_attr__( 'Repeat Vertically', 'tribe' );
  $l10n['inherit']               = esc_attr__( 'Inherit', 'tribe' );
  $l10n['background-repeat']     = esc_attr__( 'Background Repeat', 'tribe' );
  $l10n['cover']                 = esc_attr__( 'Cover', 'tribe' );
  $l10n['contain']               = esc_attr__( 'Contain', 'tribe' );
  $l10n['background-size']       = esc_attr__( 'Background Size', 'tribe' );
  $l10n['fixed']                 = esc_attr__( 'Fixed', 'tribe' );
  $l10n['scroll']                = esc_attr__( 'Scroll', 'tribe' );
  $l10n['background-attachment'] = esc_attr__( 'Background Attachment', 'tribe' );
  $l10n['left-top']              = esc_attr__( 'Left Top', 'tribe' );
  $l10n['left-center']           = esc_attr__( 'Left Center', 'tribe' );
  $l10n['left-bottom']           = esc_attr__( 'Left Bottom', 'tribe' );
  $l10n['right-top']             = esc_attr__( 'Right Top', 'tribe' );
  $l10n['right-center']          = esc_attr__( 'Right Center', 'tribe' );
  $l10n['right-bottom']          = esc_attr__( 'Right Bottom', 'tribe' );
  $l10n['center-top']            = esc_attr__( 'Center Top', 'tribe' );
  $l10n['center-center']         = esc_attr__( 'Center Center', 'tribe' );
  $l10n['center-bottom']         = esc_attr__( 'Center Bottom', 'tribe' );
  $l10n['background-position']   = esc_attr__( 'Background Position', 'tribe' );
  $l10n['background-opacity']    = esc_attr__( 'Background Opacity', 'tribe' );
  $l10n['on']                    = esc_attr__( 'ON', 'tribe' );
  $l10n['off']                   = esc_attr__( 'OFF', 'tribe' );
  $l10n['all']                   = esc_attr__( 'All', 'tribe' );
  $l10n['cyrillic']              = esc_attr__( 'Cyrillic', 'tribe' );
  $l10n['cyrillic-ext']          = esc_attr__( 'Cyrillic Extended', 'tribe' );
  $l10n['devanagari']            = esc_attr__( 'Devanagari', 'tribe' );
  $l10n['greek']                 = esc_attr__( 'Greek', 'tribe' );
  $l10n['greek-ext']             = esc_attr__( 'Greek Extended', 'tribe' );
  $l10n['khmer']                 = esc_attr__( 'Khmer', 'tribe' );
  $l10n['latin']                 = esc_attr__( 'Latin', 'tribe' );
  $l10n['latin-ext']             = esc_attr__( 'Latin Extended', 'tribe' );
  $l10n['vietnamese']            = esc_attr__( 'Vietnamese', 'tribe' );
  $l10n['hebrew']                = esc_attr__( 'Hebrew', 'tribe' );
  $l10n['arabic']                = esc_attr__( 'Arabic', 'tribe' );
  $l10n['bengali']               = esc_attr__( 'Bengali', 'tribe' );
  $l10n['gujarati']              = esc_attr__( 'Gujarati', 'tribe' );
  $l10n['tamil']                 = esc_attr__( 'Tamil', 'tribe' );
  $l10n['telugu']                = esc_attr__( 'Telugu', 'tribe' );
  $l10n['thai']                  = esc_attr__( 'Thai', 'tribe' );
  $l10n['serif']                 = _x( 'Serif', 'font style', 'tribe' );
  $l10n['sans-serif']            = _x( 'Sans Serif', 'font style', 'tribe' );
  $l10n['monospace']             = _x( 'Monospace', 'font style', 'tribe' );
  $l10n['font-family']           = esc_attr__( 'Font Family', 'tribe' );
  $l10n['font-size']             = esc_attr__( 'Font Size', 'tribe' );
  $l10n['font-weight']           = esc_attr__( 'Font Weight', 'tribe' );
  $l10n['line-height']           = esc_attr__( 'Line Height', 'tribe' );
  $l10n['font-style']            = esc_attr__( 'Font Style', 'tribe' );
  $l10n['letter-spacing']        = esc_attr__( 'Letter Spacing', 'tribe' );
  $l10n['top']                   = esc_attr__( 'Top', 'tribe' );
  $l10n['bottom']                = esc_attr__( 'Bottom', 'tribe' );
  $l10n['left']                  = esc_attr__( 'Left', 'tribe' );
  $l10n['right']                 = esc_attr__( 'Right', 'tribe' );
  $l10n['color']                 = esc_attr__( 'Color', 'tribe' );
  $l10n['add-image']             = esc_attr__( 'Add Image', 'tribe' );
  $l10n['change-image']          = esc_attr__( 'Change Image', 'tribe' );
  $l10n['remove']                = esc_attr__( 'Remove', 'tribe' );
  $l10n['no-image-selected']     = esc_attr__( 'No Image Selected', 'tribe' );
  $l10n['select-font-family']    = esc_attr__( 'Select a font-family', 'tribe' );
  $l10n['variant']               = esc_attr__( 'Variant', 'tribe' );
  $l10n['subsets']               = esc_attr__( 'Subset', 'tribe' );
  $l10n['size']                  = esc_attr__( 'Size', 'tribe' );
  $l10n['height']                = esc_attr__( 'Height', 'tribe' );
  $l10n['spacing']               = esc_attr__( 'Spacing', 'tribe' );
  $l10n['ultra-light']           = esc_attr__( 'Ultra-Light 100', 'tribe' );
  $l10n['ultra-light-italic']    = esc_attr__( 'Ultra-Light 100 Italic', 'tribe' );
  $l10n['light']                 = esc_attr__( 'Light 200', 'tribe' );
  $l10n['light-italic']          = esc_attr__( 'Light 200 Italic', 'tribe' );
  $l10n['book']                  = esc_attr__( 'Book 300', 'tribe' );
  $l10n['book-italic']           = esc_attr__( 'Book 300 Italic', 'tribe' );
  $l10n['regular']               = esc_attr__( 'Normal 400', 'tribe' );
  $l10n['italic']                = esc_attr__( 'Normal 400 Italic', 'tribe' );
  $l10n['medium']                = esc_attr__( 'Medium 500', 'tribe' );
  $l10n['medium-italic']         = esc_attr__( 'Medium 500 Italic', 'tribe' );
  $l10n['semi-bold']             = esc_attr__( 'Semi-Bold 600', 'tribe' );
  $l10n['semi-bold-italic']      = esc_attr__( 'Semi-Bold 600 Italic', 'tribe' );
  $l10n['bold']                  = esc_attr__( 'Bold 700', 'tribe' );
  $l10n['bold-italic']           = esc_attr__( 'Bold 700 Italic', 'tribe' );
  $l10n['extra-bold']            = esc_attr__( 'Extra-Bold 800', 'tribe' );
  $l10n['extra-bold-italic']     = esc_attr__( 'Extra-Bold 800 Italic', 'tribe' );
  $l10n['ultra-bold']            = esc_attr__( 'Ultra-Bold 900', 'tribe' );
  $l10n['ultra-bold-italic']     = esc_attr__( 'Ultra-Bold 900 Italic', 'tribe' );
  $l10n['invalid-value']         = esc_attr__( 'Invalid Value', 'tribe' );

  return $l10n;

} );

// Load of font variants
if ( class_exists( 'Kirki_Fonts_Google' ) ) {
    Kirki_Fonts_Google::$force_load_all_variants = true;
}

// Style library
function at_theme_kirki_styling( $config ) {
  return wp_parse_args( array(
    'disable_loader'   => true,
  ), $config );
}
add_filter( 'kirki/config', 'at_theme_kirki_styling' );

if ( class_exists( 'Kirki' ) ) {

  /**
  * inheritable configuration
  */
  Kirki::add_config( 'at_theme', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
  ) );

  /** 
  * Panel: Theme
  */
  Kirki::add_panel( 'at_panel__main', array(
      'priority'    => 10,
      'title'       => esc_attr__( 'Theme - Customize it', 'tribe' ),
      'description' => esc_attr__( 'Customize your theme here', 'tribe' ),
  ) );


  /** 
  * Section: Styling
  */
  Kirki::add_section( 'at_sec__styling', array(
    'title'         => esc_attr__( 'Styling', 'tribe' ),
    'panel'       => 'at_panel__main',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__colormain',
    'label'       => esc_attr__( 'Main Color', 'tribe' ),
    'section'     => 'at_sec__styling',
    'default'     => '#ec766a',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
      'alpha' => false,
    ),
    'output'      => array(
      array(
        'element'  => '.site-header__nav, .at-hero .at-hero__btn, .at-post .at-post__readmore:hover, .at-ctalist .at-ctalist__blockbutton, .at-about  .at-about__blockbutton, .at-lead .mc4wp-form input[type="submit"], .boxzilla-container .boxzilla .mc4wp-form input[type="submit"], .at-post.sticky .at-blog__post, .woocommerce button.button.alt, .woocommerce button.button.alt:hover, .woocommerce ul.products li.product .button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce input.button.alt, .woocommerce input.button.alt:hover',
        'property' => 'background',
      ),
      array(
        'element'  => '.at-testimonial .at-testimonial__content::before, .at-post .at-post__readmore, .at-top-footer .site-footer-widgets a:hover, .site-footer-widgets .at-socialwidget svg:hover, .woocommerce-info::before, .woocommerce-message::before',
        'property' => 'color',
      ),
      array(
        'element'  => '.at-post .at-post__readmore, .at-lead .mc4wp-form input[type="submit"], .boxzilla-container .boxzilla .mc4wp-form input[type="submit"], .woocommerce-info, .woocommerce-account .woocommerce-MyAccount-navigation ul, .woocommerce-account .woocommerce-MyAccount-navigation ul li, .woocommerce-message',
        'property' => 'border-color',
      ),
      array(
        'element'  => '.site-footer-widgets .at-socialwidget svg:hover path',
        'property' => 'fill',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.site-header__nav, .at-hero .at-hero__btn, .at-post .at-post__readmore:hover, .at-ctalist .at-ctalist__blockbutton, .at-about  .at-about__blockbutton, .at-lead .mc4wp-form input[type="submit"], .boxzilla-container .boxzilla .mc4wp-form input[type="submit"], .at-post.sticky .at-blog__post, .woocommerce button.button.alt, .woocommerce button.button.alt:hover, .woocommerce ul.products li.product .button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce input.button.alt, .woocommerce input.button.alt:hover',
        'function' => 'style',
        'property' => 'background',
      ),
      array(
        'element'  => '.at-testimonial .at-testimonial__content::before, .at-post .at-post__readmore, .at-top-footer .site-footer-widgets a:hover, .site-footer-widgets .at-socialwidget svg:hover, .woocommerce-info::before, .woocommerce-message::before',
        'function' => 'style',
        'property' => 'color',
      ),
      array(
        'element'  => '.at-post .at-post__readmore, .at-lead .mc4wp-form input[type="submit"], .boxzilla-container .boxzilla .mc4wp-form input[type="submit"], .woocommerce-info, .woocommerce-account .woocommerce-MyAccount-navigation ul, .woocommerce-account .woocommerce-MyAccount-navigation ul li, .woocommerce-message',
        'function' => 'style',
        'property' => 'border-color',
      ),
      array(
        'element'  => '.site-footer-widgets .at-socialwidget svg:hover path',
        'function' => 'style',
        'property' => 'fill',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__colorsecondary',
    'label'       => esc_attr__( 'Secondary Color', 'tribe' ),
    'section'     => 'at_sec__styling',
    'default'     => '#f5f7f8',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
      'alpha' => false,
    ),
    'output'      => array(
      array(
        'element'  => '.at-content-style1 .at-post.at-post--mini, .at-post.at-post--mini.at-post--highlight, .at-post.at-post--mini .at-blog__post, .at-post.at-post--square, .at-socialfooter, .at-about, .at-ctalist, .at-testimonial .at-testimonial__content, .at-testimonial2, .at-bloglist .at-bloglist__post, .at-pageheader, .widget_calendar td, .at-lead, .at-leadpage, .quantity input[type="button"], .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button',
        'property' => 'background',
      ),
      array(
        'element'  => '.at-testimonial .at-testimonial__content::after',
        'property' => 'border-top-color',
      ),
      array(
        'element'  => '.quantity input[type="button"]',
        'property' => 'border-color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-content-style1 .at-post.at-post--mini, .at-post.at-post--mini.at-post--highlight, .at-post.at-post--mini .at-blog__post, .at-socialfooter, .at-about, .at-ctalist, .at-testimonial .at-testimonial__content, .at-testimonial2, .at-bloglist .at-bloglist__post, .at-pageheader, .widget_calendar td, .quantity input[type="button"], .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button',
        'function' => 'style',
        'property' => 'background',
      ),
      array(
        'element'  => '.at-testimonial .at-testimonial__content::after',
        'function' => 'style',
        'property' => 'border-top-color',
      ),
      array(
        'element'  => '.quantity input[type="button"]',
        'function' => 'style',
        'property' => 'border-color',
      ),
    ),
  ) );



  // Setting: Link Color
  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__linkcolor',
    'label'       => esc_attr__( 'Link Color', 'tribe' ),
    'description' => esc_attr__( 'Set the link color.', 'tribe' ),
    'section'     => 'at_sec__styling',
    'default'     => '#ec766a',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => 'a',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => 'a',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
  ) );

  // Setting: Link Color:Hover
  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__linkcolorhover',
    'label'       => esc_attr__( 'Link Color:hover', 'tribe' ),
    'description' => esc_attr__( 'Set the link on hover color', 'tribe' ),
    'section'     => 'at_sec__styling',
    'default'     => '#d46b5f',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => 'a:hover',
        'property' => 'color',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => 'a:hover',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
  ) );


  // Setting: Site Width
  Kirki::add_field( 'at_theme', array(
      'type'        => 'slider',
      'settings'    => 'at_setting__sitewidth',
      'label'       => esc_attr__( 'Site Width', 'tribe' ),
      'description' => esc_attr__( 'Modify the width of your site', 'tribe' ),
      'section'     => 'at_sec__styling',
      'default'     => '1100',
      'priority'    => 10,
      'choices'     => array(
          'min'  => 980,
          'max'  => 1400,
          'step' => 10
      ),
      'transport'   => 'postMessage',
      'js_vars'     => array(
        array(
        'element'  => '.at-container, .nav-header__menuwrapper',
        'function' => 'css',
        'property' => 'max-width',
        'units' => 'px',
      ),
      array(
        'element'  => '.at-sitecontainer--boxed',
        'function' => 'css',
        'property' => 'max-width',
        'units' => 'px',
      ),
    ),
    'output'      => array(
      array(
        'element'  => '.at-container, .nav-header__menuwrapper',
        'property' => 'max-width',
        'units' => 'px',
      ),
      array(
        'element'  => '.at-sitecontainer--boxed',
        'property' => 'max-width',
        'units' => 'px',
      ),
    ),
  ) );

  // Setting: Site Layout
  Kirki::add_field( 'at_theme', array(
    'type'        => 'radio-image',
    'settings'    => 'at_setting__sitelayout',
    'label'       => esc_attr__( 'Theme Layout', 'tribe' ),
    'description' => esc_attr__( 'Select the layout for the theme. Boxed or Wide.', 'tribe' ),
    'section'     => 'at_sec__styling',
    'default'     => 'wide',
    'priority'    => 10,
    'choices'     => array(
      'boxed'   => get_template_directory_uri() . '/img/admin/layout-boxed.png',
      'wide' => get_template_directory_uri() . '/img/admin/layout-wide.png',
    ),
  ) );

  // Setting: Boxed Box Shadow
  Kirki::add_field( 'at_theme', array(
      'type'        => 'slider',
      'settings'    => 'at_setting__siteboxshadow',
      'label'       => esc_attr__( 'Website Shadow', 'tribe' ),
      'section'     => 'at_sec__styling',
      'default'     => '1',
      'priority'    => 10,
      'choices'     => array(
          'min'  => 0,
          'max'  => 5,
          'step' => 1
      ),
      'active_callback'  => array(
        array(
            'setting'  => 'at_setting__sitelayout',
            'operator' => '==',
            'value'    => 'boxed',
        ),
      ),
      'output'    => array (
        'element' => '.at-sitecontainer--boxed',
        'property' => 'box-shadow',
        'units' => '',
        'value_pattern' => '0 0 80px rgba(0,0,0,0.$)'
      )
  ) );

  // Setting Background Type Switcher
  Kirki::add_field( 'at_theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'at_setting__sitebg',
    'label'       => esc_attr__( 'Background Type', 'tribe' ),
    'description' => esc_attr__( 'Select the background type', 'tribe' ),
    'section'     => 'at_sec__styling',
    'default'     => 'color',
    'priority'    => 10,
    'choices'     => array(
      'color'   => esc_attr__( 'Solid Color', 'tribe' ),
      'image' => esc_attr__( 'Image', 'tribe' ),
    ),
    'active_callback'  => array(
          array(
              'setting'  => 'at_setting__sitelayout',
              'operator' => '==',
              'value'    => 'boxed',
          ),
        ),
  ) );

  // Setting: BG color
  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__sitebgcolor',
    'label'       => esc_attr__( 'Background Color', 'tribe' ),
    'description' => esc_attr__( 'Set background color', 'tribe' ),
    'section'     => 'at_sec__styling',
    'default'     => '#e8eaeb',
    'priority'    => 10,
    'active_callback'  => array(
            array(
                    'setting'  => 'at_setting__sitelayout',
                    'operator' => '==',
                    'value'    => 'boxed',
                ),
                array(
                    'setting'  => 'at_setting__sitebg',
                    'operator' => '==',
                    'value'    => 'color',
                ),
        ),
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => 'body',
        'property' => 'background-color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => 'body',
        'function' => 'css',
        'property' => 'background-color',
      ),
    ),
  ) );


  // Setting: BG Image
  Kirki::add_field( 'at_theme', array(
    'type'        => 'background',
      'settings'    => 'at_setting__sitebgimg',
      'label'     => esc_attr__( 'Background Image', 'tribe' ),
      'description'   => esc_attr__( 'Upload a background image', 'tribe' ),
      'section'     => 'at_sec__styling',
      'default'     => array(

            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
      'priority'    => 10,
      'active_callback'  => array(
        array(
              'setting'  => 'at_setting__sitelayout',
              'operator' => '==',
              'value'    => 'boxed',
          ),
        array(
              'setting'  => 'at_setting__sitebg',
              'operator' => '==',
              'value'    => 'image',
        ),
      ),
      'output'    => array(
        array(
        'element'  => 'body',
        )
      ),
      
  ) );

   // Display Page Title
    Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__pagetitle',
    'label'       => esc_html__( 'Display Page Title', 'tribe' ),
    'section'     => 'at_sec__styling',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );



  /** 
  * Section: Blog Post Options
  */
  Kirki::add_section( 'at_sec__post', array(
    'title'         => esc_attr__( 'Blog Options', 'tribe' ),
    'panel'       => 'at_panel__main',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
    'settings'    => 'at_setting__blogsidebar',
    'section'     => 'at_sec__post',
    'type'        => 'radio-image',
    'label'       => esc_attr__( 'Blog Sidebar Position', 'tribe' ),
    'description' => esc_attr__( 'Select the sidebar position for the blog', 'tribe' ),
    'default'     => 'right',
    'priority'    => 10,
    'choices'     => array(
      'off'   => get_template_directory_uri() . '/img/admin/sidebar-off.png',
      'left' => get_template_directory_uri() . '/img/admin/sidebar-left.png',
      'right'  => get_template_directory_uri() . '/img/admin/sidebar-right.png',
    ),
  ) );

   Kirki::add_field( 'at_theme', array(
    'settings'    => 'at_setting__bloglayout',
    'section'     => 'at_sec__post',
    'type'        => 'radio-buttonset',
    'label'       => esc_attr__( 'Blog Layout', 'tribe' ),
    'description' => esc_attr__( 'Select how you want your posts to look in the blog', 'tribe' ),
    'default'     => 'style2',
    'priority'    => 10,
    'choices'     => array(
      'style1'   => 'Style 1',
      'style2' => 'Style 2',
      'style3'  => 'Style 3',
      'style4'  => 'Style 4',
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__postsshare',
    'label'       => esc_attr__( 'Social Share', 'tribe' ),
    'section'     => 'at_sec__post',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__postnav',
    'label'       => esc_attr__( 'Posts Nav', 'tribe' ),
    'section'     => 'at_sec__post',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__postrelated',
    'label'       => esc_attr__( 'Related Posts', 'tribe' ),
    'section'     => 'at_sec__post',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__postdate',
    'label'       => esc_attr__( 'Display Date', 'tribe' ),
    'section'     => 'at_sec__post',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );

   // Blog Colours

  Kirki::add_field( 'at_theme', array(
        'type'        => 'select',
        'setting'     => 'at_blogtitle_font_family',
        'label'       => esc_attr__( 'Blog Title Font Family', 'tribe' ),
        'description' => esc_attr__( 'Please choose a font for your blog titles.', 'tribe'),
        'section'     => 'at_sec__post',
        'default'     => 'Montserrat',
        'priority'    => 10,
        'transport'   => 'refresh',
        'choices'     => Kirki_Fonts::get_font_choices(),
        'output'      => array(
            array(
                'element'  => '.at-post .at-post__title, .at-post .at-post__title a, .at-bloglist .at-bloglist__post .at-bloglist__posttitle, .at-bloglist .at-bloglist__post .at-bloglist__posttitle a, .at-relatedposts .at-relatedposts__post .at-relatedposts__posttitle, .at-relatedposts .at-relatedposts__post .at-relatedposts__posttitle a',
                'property' => 'font-family',
            ),
        ),
        
        'js_vars'     => array(
            array(
                'element'  => '.at-post .at-post__title, .at-post .at-post__title a, .at-bloglist .at-bloglist__post .at-bloglist__posttitle, .at-bloglist .at-bloglist__post .at-bloglist__posttitle a, .at-relatedposts .at-relatedposts__post .at-relatedposts__posttitle, .at-relatedposts .at-relatedposts__post .at-relatedposts__posttitle a',
                'function' => 'css',
                'property' => 'font-family',
            ),
            
        ),
   ) );


  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_blogtitlecolor',
    'label'       => esc_attr__( 'Blog Title Color', 'tribe' ),
    'section'     => 'at_sec__post',
    'default'     => '#1a1a1a',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.at-post .at-post__title, .at-post .at-post__title a, .at-bloglist .at-bloglist__post .at-bloglist__posttitle, .at-bloglist .at-bloglist__post .at-bloglist__posttitle a, .at-relatedposts .at-relatedposts__post .at-relatedposts__posttitle, .at-relatedposts .at-relatedposts__post .at-relatedposts__posttitle a, .at-postnav .at-postnav__links a, .posts-navigation .nav-previous a, .posts-navigation .nav-next a, .quantity input[type="button"]',
        'property' => 'color',
      ),
      array(
        'element'  => '.at-postnav .at-postnav__links a, .posts-navigation .nav-previous a, .posts-navigation .nav-next a',
        'property' => 'border-color',
      ),
      array(
        'element'  => '.at-socialshare a svg path',
        'property' => 'fill',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.at-post .at-post__title, .at-post .at-post__title a, .at-bloglist .at-bloglist__post .at-bloglist__posttitle, .at-bloglist .at-bloglist__post .at-bloglist__posttitle a, .at-relatedposts .at-relatedposts__post .at-relatedposts__posttitle, .at-relatedposts .at-relatedposts__post .at-relatedposts__posttitle a, .at-postnav .at-postnav__links a, .posts-navigation .nav-previous a, .posts-navigation .nav-next a, .quantity input[type="button"]',
        'function' => 'style',
        'property' => 'color',
      ),
      array(
        'element'  => '.at-postnav .at-postnav__links a, .posts-navigation .nav-previous a, .posts-navigation .nav-next a',
        'function' => 'style',
        'property' => 'border-color',
      ),
      array(
                'element'  => '.at-socialshare a svg path',
                'function' => 'css',
                'property' => 'fill',
      ),
    ),
  ) );


  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_blogmetacolor',
    'label'       => esc_attr__( 'Blog Meta Color', 'tribe' ),
    'section'     => 'at_sec__post',
    'default'     => '#999',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.at-post .at-post__meta, .at-post .at-post__meta a, .tagcloud a, .at-post__tags a',
        'property' => 'color',
      ),
      array(
        'element'  => '.tagcloud a, .at-post__tags a',
        'property' => 'border-color',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.at-post .at-post__meta, .at-post .at-post__meta a, .tagcloud a, .at-post__tags a',
        'function' => 'style',
        'property' => 'color',
      ),
      array(
        'element'  => '.tagcloud a, .at-post__tags a',
        'function' => 'style',
        'property' => 'border-color',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_blogwidgettitlecolor',
    'label'       => esc_attr__( 'Blog Widget Title Color', 'tribe' ),
    'section'     => 'at_sec__post',
    'default'     => '#272727',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.widget .widget__title',
        'property' => 'color',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.widget .widget__title',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
  ) );



  /** 
  * Panel: Homepage
  */
  Kirki::add_panel( 'at_panel__homepage', array(
      'priority'    => 10,
      'title'       => esc_attr__( 'Homepage', 'tribe' ),
      'description' => esc_attr__( 'Customize your homepage here', 'tribe' ),
  ) );

  

   /** 
  * Section: Homepage - HP Order
  */
  Kirki::add_section( 'at_sec__hporder', array(
    'title'         => esc_attr__( 'Homepage Order', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'sortable',
  'settings'    => 'at_setting__hporder',
  'label'       => esc_attr__( 'This is the label', 'tribe' ),
  'section'     => 'at_sec__hporder',
  'default'     => array(
    'content',
    'ctablocks',
    'ctablocks2',
    'featuredin',
    'optin',
    'about',
    'textblock',
    'praise',
    'blog'
  ),
  'choices'     => array(
    'content' => esc_attr__( ' Main Content Block', 'tribe' ),
    'ctablocks' => esc_attr__( 'CTA Block', 'tribe' ),
    'ctablocks2' => esc_attr__( 'CTA Block 2', 'tribe' ),
    'featuredin' => esc_attr__( 'Featured In', 'tribe' ),
    'optin' => esc_attr__( 'Opt-In', 'tribe' ),
    'about' => esc_attr__( 'About', 'tribe' ),
    'textblock' => esc_attr__( 'Text Block', 'tribe' ),
    'praise' => esc_attr__( 'Praise', 'tribe' ),
    'blog' => esc_attr__( 'Blog Posts', 'tribe' ),
  ),
  'priority'    => 10,
  ) );

  /** 
  * Section: Homepage - Hero Section
  */
  Kirki::add_section( 'at_sec__hero', array(
    'title'         => esc_attr__( 'Homepage Hero', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  // Hero or Shortcode
  Kirki::add_field( 'at_theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'at_setting__herotype',
    'label'       => esc_attr__( 'Hero Type', 'tribe' ),
    'description' => esc_attr__( 'Image or Slider', 'tribe' ),
    'section'     => 'at_sec__hero',
    'default'     => 'image',
    'priority'    => 10,
    'choices'     => array(
      'image'   => esc_attr__( 'Image', 'tribe' ),
      'slider' => esc_attr__( 'Slider', 'tribe' ),
    ),
    
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__heroslider',
  'label'    => esc_attr__( 'Hero Slider', 'tribe' ),
  'description' => esc_attr__( 'Insert Slider Shortcode', 'tribe' ),
  'section'  => 'at_sec__hero',
  'default'  => esc_attr__( 'This is a default value', 'tribe' ),
  'priority' => 10,
  'sanitize_callback' => 'wp_kses_post',
  'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'slider',
          ),
        ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'image',
  'settings'    => 'at_setting__heroimg',
  'label'       => esc_attr__( 'Hero Image', 'tribe' ),
  'description' => esc_attr__( 'This is the control description', 'tribe' ),
  'section'     => 'at_sec__hero',
  'default'     => get_template_directory_uri().'/img/default/hero.jpg',
  'priority'    => 10,
  'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
  ) );

  Kirki::add_field( 'at_theme', array(
      'type'        => 'slider',
      'settings'    => 'at_setting__heropaddingsize',
      'label'       => esc_attr__( 'Padding Size', 'academyvate' ),
      'section'     => 'at_sec__hero',
      'default'     => '120',
      'priority'    => 10,
      'choices'     => array(
          'min'  => 0,
          'max'  => 200,
          'step' => 10,
      ),
      'output'    => array (
        'element' => '.at-hero',
        'property' => 'padding',
        'value_pattern' => '$px 0'
      ),
      'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__herobgcolor',
    'label'       => esc_attr__( 'Hero Background Color', 'tribe' ),
    'section'     => 'at_sec__hero',
    'default'     => '#ffffff',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
      'alpha' => false,
    ),
    'output'      => array(
      array(
        'element'  => '.at-hero .at-hero__content',
        'property' => 'background',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-hero .at-hero__content',
        'function' => 'style',
        'property' => 'background',
      ),
    ),
    'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
    ) );


  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__herotitle',
  'label'    => esc_attr__( 'Hero Title', 'tribe' ),
  'section'  => 'at_sec__hero',
  'default'  => esc_attr__( 'This is a default value', 'tribe' ),
  'priority' => 10,
  'sanitize_callback' => 'wp_kses_post',
  'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
  ) );

   Kirki::add_field( 'at_theme', array(
    'settings'    => 'at_setting__herocontent',
    'section'     => 'at_sec__hero',
    'type'        => 'radio-buttonset',
    'label'       => esc_attr__( 'Hero Content Position', 'tribe' ),
    'description' => esc_attr__( 'Select where you want the text', 'tribe' ),
    'default'     => 'right',
    'priority'    => 10,
    'choices'     => array(
      'left'   => 'Left',
      'center' => 'Center',
      'right'  => 'Right',
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_setting__herotitletypography',
    'label'       => esc_attr__( 'Hero Title Typography', 'tribe' ),
    'section'     => 'at_sec__hero',
    'default'     => array(
      'font-family'    => 'Montserrat',
      'variant'        => '700',
      'letter-spacing' => '0',
      'color'          => '#1a1a1a',
      'text-transform' => 'none',
      'font-size'      => '30px',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.at-hero .at-hero__title',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-hero .at-hero__title',
      ),
    ),
    'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'textarea',
  'sanitize_callback' => 'wp_kses_post',
  'settings' => 'at_setting__herotitle2',
  'label'    => esc_attr__( 'Hero Text', 'tribe' ),
  'section'  => 'at_sec__hero',
  'default'  => esc_attr__( 'This is a default value', 'tribe' ),
  'priority' => 10,
  
  'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__herotitle2color',
    'label'       => esc_attr__( 'Hero Text Color', 'tribe' ),
    'section'     => 'at_sec__hero',
    'default'     => '#424242',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
      'alpha' => false,
    ),
    'output'      => array(
      array(
        'element'  => '.at-hero .at-hero__content .at-hero__text',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-hero .at-hero__content .at-hero__text',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
    'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
    ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__herobtntxt',
  'label'    => esc_attr__( 'Hero Button Text', 'tribe' ),
  'section'  => 'at_sec__hero',
  'default'  => esc_attr__( 'This is a default value', 'tribe' ),
  'priority' => 10,
  'sanitize_callback' => 'wp_kses_post',
  'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__herobtnlink',
  'label'    => esc_attr__( 'Hero Button Link', 'tribe' ),
  'section'  => 'at_sec__hero',
  'default'  => esc_attr__( '#', 'tribe' ),
  'priority' => 10,
  'active_callback'  => array(
          array(
              'setting'  => 'at_setting__herotype',
              'operator' => '==',
              'value'    => 'image',
          ),
        ),
  ) );


  /** 
  * Section: Homepage - HP Blocks
  */
  Kirki::add_section( 'at_sec__hpblocks', array(
    'title'         => esc_attr__( 'Homepage Blocks', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings'    => 'at_setting__hpblockstitle',
  'label'    => esc_attr__( 'Block Title', 'tribe' ),
  'section'     => 'at_sec__hpblocks',
  'default'  => esc_attr__( 'YOUR NEW LIFE STARTS HERE!', 'tribe' ),
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'number',
  'settings'    => 'at_sec__hpblocks_nb',
  'label'       => esc_attr__( 'Number of blocks per row', 'tribe' ),
  'section'     => 'at_sec__hpblocks',
  'default'     => 3,
  'choices'     => array(
    'min'  => 1,
    'max'  => 4,
    'step' => 1,
  ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'repeater',
  'label'       => esc_attr__( 'Homepage Block Control', 'tribe' ),
  'section'     => 'at_sec__hpblocks',
  'priority'    => 10,
  'row_label' => array(               
          'type' => 'text',
          'value' => esc_attr__('Block', 'tribe' ),
  ),
  'settings'    => 'at_setting__hpblocks',
  'default'     => array(
    array(
      'link_image'  => '',
      'link_text' => esc_attr__( 'Block One', 'tribe' ),
      'link_url'  => '#',
      'link_description'=> '',
      'link_button' => '',
    ),
    array(
      'link_image'  => '',
      'link_text' => esc_attr__( 'Block Two', 'tribe' ),
      'link_url'  => '#',
      'link_description'=> '',
      'link_button' => '',
    ),
    array(
      'link_image'  => '',
      'link_text' => esc_attr__( 'Block Three', 'tribe' ),
      'link_url'  => '#',
      'link_description'=> '',
      'link_button' => '',
    ),
  ),
  'fields' => array(
    'link_image' => array(
      'type'        => 'image',
      'label'       => esc_attr__( 'Block Image', 'tribe' ),
      'description' => esc_attr__( 'Block Image', 'tribe' ),
      'default'     => '',
    ),
    'link_text' => array(
      'type'        => 'text',
      'sanitize_callback' => 'wp_kses_post',
      'label'       => esc_attr__( 'Block Heading', 'tribe' ),
      'description' => esc_attr__( 'Block Heading', 'tribe' ),
      'default'     => '',
    ),
    'link_url' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Block URL', 'tribe' ),
      'description' => esc_attr__( 'Block URL', 'tribe' ),
      'default'     => '',
    ),
    'link_description' => array(
      'sanitize_callback' => 'wp_kses_post',
      'type'        => 'textarea',
      'label'       => esc_attr__( 'Block Text', 'tribe' ),
      'description' => esc_attr__( 'Block Text', 'tribe' ),
      'default'     => '',
    ),

    'link_button' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Block Button Text', 'tribe' ),
      'description' => esc_attr__( 'Block Button Text', 'tribe' ),
      'default'     => '',
    ),
  )
  ) );

/** 
  * Section: Homepage - HP Blocks
  */
  Kirki::add_section( 'at_sec__hpblocks2', array(
    'title'         => esc_attr__( 'Homepage Blocks 2', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings'    => 'at_setting__hpblockstitle2',
  'label'    => esc_attr__( 'Block Title', 'tribe' ),
  'section'     => 'at_sec__hpblocks2',
  'default'  => esc_attr__( 'YOUR NEW LIFE STARTS HERE!', 'tribe' ),
  'priority' => 10,
  ) );

   Kirki::add_field( 'at_theme', array(
  'type'        => 'number',
  'settings'    => 'at_sec__hpblocks_nb2',
  'label'       => esc_attr__( 'Number of blocks per row', 'tribe' ),
  'section'     => 'at_sec__hpblocks2',
  'default'     => 3,
  'choices'     => array(
    'min'  => 1,
    'max'  => 4,
    'step' => 1,
  ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'repeater',
  'label'       => esc_attr__( 'Homepage Block Control', 'tribe' ),
  'section'     => 'at_sec__hpblocks2',
  'priority'    => 10,
  'row_label' => array(               
          'type' => 'text',
          'value' => esc_attr__('Block', 'tribe' ),
  ),
  'settings'    => 'at_setting__hpblocks2',
  'default'     => array(
    array(
      'link_image'  => '',
      'link_text' => esc_attr__( 'Block One', 'tribe' ),
      'link_url'  => '#',
      'link_description'=> '',
      'link_button' => '',
    ),
    array(
      'link_image'  => '',
      'link_text' => esc_attr__( 'Block Two', 'tribe' ),
      'link_url'  => '#',
      'link_description'=> '',
      'link_button' => '',
    ),
    array(
      'link_image'  => '',
      'link_text' => esc_attr__( 'Block Three', 'tribe' ),
      'link_url'  => '#',
      'link_description'=> '',
      'link_button' => '',
    ),
  ),
  'fields' => array(
    'link_image' => array(
      'type'        => 'image',
      'label'       => esc_attr__( 'Block Image', 'tribe' ),
      'description' => esc_attr__( 'Block Image', 'tribe' ),
      'default'     => '',
    ),
    'link_text' => array(
      'type'        => 'text',
      'sanitize_callback' => 'wp_kses_post',
      'label'       => esc_attr__( 'Block Heading', 'tribe' ),
      'description' => esc_attr__( 'Block Heading', 'tribe' ),
      'default'     => '',
    ),
    'link_url' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Block URL', 'tribe' ),
      'description' => esc_attr__( 'Block URL', 'tribe' ),
      'default'     => '',
    ),
    'link_description' => array(
      'sanitize_callback' => 'wp_kses_post',
      'type'        => 'textarea',
      'label'       => esc_attr__( 'Block Text', 'tribe' ),
      'description' => esc_attr__( 'Block Text', 'tribe' ),
      'default'     => '',
    ),

    'link_button' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Block Button Text', 'tribe' ),
      'description' => esc_attr__( 'Block Button Text', 'tribe' ),
      'default'     => '',
    ),
  )
  ) );




  /** 
  * Section: Homepage - HP Featured
  */
  Kirki::add_section( 'at_sec__hpfeatured', array(
    'title'         => esc_attr__( 'Homepage Featured', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'     => 'text',
    'settings' => 'at_setting__hpfeaturedtitle',
    'label'    => esc_attr__( 'Featured Title', 'tribe' ),
    'section'  => 'at_sec__hpfeatured',
    'default'  => esc_attr__( 'As Featured In', 'tribe' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'repeater',
  'label'       => esc_attr__( 'Homepage Featured Images', 'tribe' ),
  'section'     => 'at_sec__hpfeatured',
  'priority'    => 10,
  'row_label' => array(               
          'type' => 'text',
          'value' => esc_attr__('Block', 'tribe' ),
  ),
  'settings'    => 'at_setting__hpfeatured',
  'default'     => array(
    array(
      'image'  => '',
    ),
  ),
  'fields' => array(
    'image' => array(
      'type'        => 'image',
      'label'       => esc_attr__( 'Block Image', 'tribe' ),
      'description' => esc_attr__( 'Block Image', 'tribe' ),
      'default'     => '',
    ),
  )
  ) );


  

  /** 
  * Section: Homepage - About
  */
  Kirki::add_section( 'at_sec__hpabout', array(
    'title'         => esc_attr__( 'Homepage About Section', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'image',
  'settings'    => 'at_setting__aboutimg',
  'label'       => esc_attr__( 'About Image', 'tribe' ),
  'description' => esc_attr__( 'This is the control description', 'tribe' ),
  'section'     => 'at_sec__hpabout',
  'default'     => '',
  'priority'    => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__abouttitle',
  'sanitize_callback' => 'wp_kses_post',
  'label'    => esc_attr__( 'About Title', 'tribe' ),
  'section'  => 'at_sec__hpabout',
  'default'  => esc_attr__( 'This is a default value', 'tribe' ),
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_setting__abouttitletypography',
    'label'       => esc_attr__( 'About Title Typography', 'tribe' ),
    'section'     => 'at_sec__hpabout',
    'default'     => array(
      'font-family'    => 'Montserrat',
      'variant'        => '700',
      'letter-spacing' => '0',
      'color'          => '#1a1a1a',
      'text-transform' => 'uppercase',
      'font-size'      => '24px',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.at-about .at-about__title',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-about .at-about__title',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'textarea',
  'sanitize_callback' => 'wp_kses_post',
  'settings' => 'at_setting__aboutcontent',
  'label'    => esc_attr__( 'About Content', 'tribe' ),
  'section'  => 'at_sec__hpabout',
  'default'  => esc_attr__( 'This is a default value', 'tribe' ),
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__aboutbutton',
  'label'    => esc_attr__( 'Button Title', 'tribe' ),
  'section'  => 'at_sec__hpabout',
  'default'  => esc_attr__( 'More About Me', 'tribe' ),
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__abouturl',
  'label'    => esc_attr__( 'Button URL', 'tribe' ),
  'section'  => 'at_sec__hpabout',
  'default'  => esc_attr__( '#', 'tribe' ),
  'priority' => 10,
  ) );


  /** 
  * Section: Homepage - Additional Text and Media
  */
  Kirki::add_section( 'at_sec__hptextblock', array(
    'title'         => esc_attr__( 'Homepage Text & Media Block', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );


  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__textblocktitle',
  'label'    => esc_attr__( 'Block Title', 'tribe' ),
  'section'  => 'at_sec__hptextblock',
  'default'  => esc_attr__( 'This is a default value', 'tribe' ),
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_setting__textblocktitletypography',
    'label'       => esc_attr__( 'Block Title Typography', 'tribe' ),
    'section'     => 'at_sec__hptextblock',
    'default'     => array(
      'font-family'    => 'Montserrat',
      'variant'        => '700',
      'letter-spacing' => '0',
      'color'          => '#1a1a1a',
      'text-transform' => 'uppercase',
      'font-size'      => '24px',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.at-textblock .at-textblock__title',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-textblock .at-textblock__title',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'textarea',
  'sanitize_callback' => 'wp_kses_post',
  'settings' => 'at_setting__textblockcontent',
  'label'    => esc_attr__( 'Content', 'tribe' ),
  'section'  => 'at_sec__hptextblock',
  'default'  => esc_attr__( 'This is a default value', 'tribe' ),
  'priority' => 10,
  ) );

 



  /** 
  * Section: Homepage - HP Testimonials
  */
  Kirki::add_section( 'at_sec__hptestimonials', array(
    'title'         => esc_attr__( 'Homepage Testimonials', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'     => 'text',
    'settings' => 'at_setting__hptestimonialstitle',
    'label'    => esc_attr__( 'Testimonial Block Title', 'tribe' ),
    'section'  => 'at_sec__hptestimonials',
    'default'  => esc_attr__( 'What My Wonderful Clients Say', 'tribe' ),
    'priority' => 10,
    ) );

   Kirki::add_field( 'at_theme', array(
  'type'        => 'number',
  'settings'    => 'at_sec__hptestimonial_nb',
  'label'       => esc_attr__( 'Number of testimonials per row', 'tribe' ),
  'section'     => 'at_sec__hptestimonials',
  'default'     => 2,
  'choices'     => array(
    'min'  => 1,
    'max'  => 4,
    'step' => 1,
  ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'repeater',
  'label'       => esc_attr__( 'Testimonials', 'tribe' ),
  'section'     => 'at_sec__hptestimonials',
  'priority'    => 10,
  'row_label' => array(               
          'type' => 'text',
          'value' => esc_attr__('Testimonial', 'tribe' ),
  ),
  'settings'    => 'at_setting__hptestimonials',
  'default'     => array(
    array(
      'testimonial_image'  => '',
      'testimonial_text' => '',
      'testimonial_name'  => '',
      'testimonial_bio'  => '',
    ),
  ),
  'fields' => array(
    'testimonial_image' => array(
      'type'        => 'image',
      'label'       => esc_attr__( 'Testimonial Image', 'tribe' ),
      'description' => esc_attr__( '60px by 60px Image', 'tribe' ),
      'default'     => '',
    ),
    'testimonial_text' => array(
      'sanitize_callback' => 'wp_kses_post',
      'type'        => 'textarea',
      'label'       => esc_attr__( 'Testimonial Text', 'tribe' ),
      'description' => esc_attr__( 'Enter the testimonial content here', 'tribe' ),
      'default'     => '',
    ),
    'testimonial_name' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Testimonial Name', 'tribe' ),
      'description' => esc_attr__( 'Enter the customer/client name here', 'tribe' ),
      'default'     => '',
    ),
    'testimonial_bio' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Testimonial Bio', 'tribe' ),
      'description' => esc_attr__( 'Enter any extra information about the customer/client here', 'tribe' ),
      'default'     => '',
    ),
  )
  ) );

  /** 
  * Section: Homepage - HP Blog
  */
  Kirki::add_section( 'at_sec__hpblog', array(
    'title'         => esc_attr__( 'Homepage Blog Section', 'tribe' ),
    'panel'       => 'at_panel__homepage',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'     => 'text',
    'settings' => 'at_setting__hpblogtitle',
    'label'    => esc_attr__( 'Blog Block Title', 'tribe' ),
    'section'  => 'at_sec__hpblog',
    'default'  => esc_attr__( 'From The Blog', 'tribe' ),
    'priority' => 10,
    ) );

  /** 
  * Section: Social Links
  */
  Kirki::add_section( 'at_sec__social', array(
    'title'         => esc_attr__( 'Social Links', 'tribe' ),
    'panel'       => 'at_panel__main',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'     => 'text',
    'settings' => 'at_setting__socialtitle',
    'label'    => esc_attr__( 'Title', 'tribe' ),
    'section'  => 'at_sec__social',
    'default'  => esc_attr__( "Let's connect", 'tribe' ),
    'priority' => 10,
    ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__socialcolor',
    'label'       => esc_attr__( 'Social Link Color', 'tribe' ),
    'section'     => 'at_sec__social',
    'default'     => '#999',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.at-socialfooter ul a',
        'property' => 'color',
      ),
      array(
        'element'  => '.at-socialfooter ul a svg path, .at-socialfooter ul a svg circle',
        'property' => 'fill',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.at-socialfooter ul a',
        'function' => 'style',
        'property' => 'color',
      ),
      array(
        'element'  => '.at-socialfooter ul a svg path, .at-socialfooter ul a svg circle',
        'function' => 'style',
        'property' => 'fill',
      ),
    ),

  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialfacebook',
  'label'    => esc_attr__( 'Facebook Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialtwitter',
  'label'    => esc_attr__( 'Twitter Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialgoogleplus',
  'label'    => esc_attr__( 'Google+ Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialinstagram',
  'label'    => esc_attr__( 'Instagram Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialflickr',
  'label'    => esc_attr__( 'Flickr Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialyoutube',
  'label'    => esc_attr__( 'YouTube Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialvimeo',
  'label'    => esc_attr__( 'Vimeo Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialpinterest',
  'label'    => esc_attr__( 'Pinterest Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialdribbble',
  'label'    => esc_attr__( 'Dribbble Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialsoundcloud',
  'label'    => esc_attr__( 'Soundcloud Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__sociallinkedin',
  'label'    => esc_attr__( 'LinkedIn Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__socialtumblr',
  'label'    => esc_attr__( 'Tumblr Link', 'tribe' ),
  'section'  => 'at_sec__social',
  'default'  => '',
  'priority' => 10,
  ) );

  /**
  * Theme Typography
  */
  Kirki::add_section( 'typography_sec', array(
    'title'          => esc_attr__( 'Typography', 'tribe' ),
    'panel'       => 'at_panel__main',
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
  ) );


  Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_typography_headings',
    'label'       => esc_attr__( 'Block Headings Font', 'tribe' ),
    'description' => esc_attr__( 'Set the heading typography here', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => array(
      'font-family'    => 'Montserrat',
      'variant'        => '600',
      'letter-spacing' => '0',
      'text-transform' => 'uppercase',
      'font-size'      => '18px',
      'line-height'    => '23px',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.at-ctalist .at-ctalist__title, .at-testimonals .at-testimonals__title, .at-bloglist .at-bloglist__title, .at-featured .at-featured__title, .at-socialfooter .at-socialfooter__title, .at-relatedposts .at-relatedposts__title, .at-commentform .at-commentform__title, .at-commentslist .at-commentslist__title',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-ctalist .at-ctalist__title, .at-testimonals .at-testimonals__title, .at-bloglist .at-bloglist__title, .at-featured .at-featured__title, .at-socialfooter .at-socialfooter__title, .at-relatedposts .at-relatedposts__title, .at-commentform .at-commentform__title, .at-commentslist .at-commentslist__title',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_typography_headings_color-white',
    'label'       => esc_attr__( 'White Block Headings Color', 'tribe' ),
    'description' => esc_attr__( 'Set the heading color in the blocks that have a white background here', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => '#1a1a1a',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.at-testimonals .at-testimonals__title, .at-bloglist .at-bloglist__title, .at-featured .at-featured__title',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-testimonals .at-testimonals__title, .at-bloglist .at-bloglist__title, .at-featured .at-featured__title',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_typography_headings_color-secondary',
    'label'       => esc_attr__( 'Secondary Block Headings Color', 'tribe' ),
    'description' => esc_attr__( 'Set the heading color in the blocks that have the secondary color as background color here', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => '#1a1a1a',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.at-ctalist .at-ctalist__title, .at-socialfooter .at-socialfooter__title, .at-relatedposts .at-relatedposts__title, .at-commentform .at-commentform__title, .at-commentslist .at-commentslist__title',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-ctalist .at-ctalist__title, .at-socialfooter .at-socialfooter__title, .at-relatedposts .at-relatedposts__title, .at-commentform .at-commentform__title, .at-commentslist .at-commentslist__title',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_typography_otherheadings',
    'label'       => esc_attr__( 'Other Headings Font', 'tribe' ),
    'description' => esc_attr__( 'Set the heading typography here', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => array(
      'font-family'    => 'Montserrat',
      'variant'        => '600',
      'letter-spacing' => '0',
      'color'          => '#1a1a1a',
      'text-transform' => 'none',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => 'h1, h2, h3, h4, h5, h6',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => 'h1, h2, h3, h4, h5, h6',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_typography_body',
    'label'       => esc_attr__( 'Body Font', 'tribe' ),
    'description' => esc_attr__( 'Set the body typography here', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => array(
      'font-family'    => 'Open Sans',
      'variant'        => 'regular',
      'font-size'      => '15px',
      'line-height'    => '23px',
      'letter-spacing' => '0',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => 'body, .woocommerce ul.products li.product a p',
      ),
    ),
    'js_vars'     => array(
    array(
      'element'  => 'body, .woocommerce ul.products li.product a p',
    ),
  ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_typography_body_color-white',
    'label'       => esc_attr__( 'Body Color on White', 'tribe' ),
    'description' => esc_attr__( 'Set the color of the text on white background here', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => '#424242',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => 'body, .woocommerce ul.products li.product a p',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => 'body, .woocommerce ul.products li.product a p',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_typography_body_color-secondary',
    'label'       => esc_attr__( 'Body color on secondary color', 'tribe' ),
    'description' => esc_attr__( 'Set the color of the text on secondary color background here', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => '#424242',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.at-testimonial .at-testimonial__content p',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-testimonial .at-testimonial__content p',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
  ) );

   Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_typography_nav',
    'label'       => esc_attr__( 'Main Navigation Typography', 'tribe' ),
    'description' => esc_attr__( 'Set the main navigation typography here', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => array(
      'font-family'    => 'Montserrat',
      'variant'        => '400',
      'font-size'      => '15px',
      'line-height'    => '1',
      'letter-spacing' => '0',
      'color'          => '#fff',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.site-header__nav ul li a',
      ),
    ),
    'js_vars'     => array(
    array(
      'element'  => '.site-header__nav ul li a',
    ),
  ),
  ) );

   // Setting: Link Color:Hover
  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_lightercolor',
    'label'       => esc_attr__( 'Lighter Text Color', 'tribe' ),
    'description' => esc_attr__( 'Lighter Text Color on Buttons', 'tribe' ),
    'section'     => 'typography_sec',
    'default'     => '#fff',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.at-hero .at-hero__btn, .at-about .at-about__blockbutton, .at-ctalist .at-ctalist__blockbutton, .at-post .at-post__readmore:hover, .woocommerce button.button.alt, .woocommerce ul.products li.product .button, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce input.button.alt, .woocommerce input.button.alt:hover',
        'property' => 'color',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.at-hero .at-hero__btn, .at-about .at-about__blockbutton, .at-ctalist .at-ctalist__blockbutton, .at-post .at-post__readmore:hover, .woocommerce button.button.alt, .woocommerce ul.products li.product .button, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce input.button.alt, .woocommerce input.button.alt:hover',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
  ) );

  /** 
  * Section: Header
  */
  Kirki::add_section( 'at_sec__header', array(
    'title'         => esc_attr__( 'Header', 'tribe' ),
    'panel'       => 'at_panel__main',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

   Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__header',
    'label'       => esc_html__( 'Display Header', 'tribe' ),
    'section'     => 'at_sec__header',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );
Kirki::add_field( 'at_theme', array(
      'type'        => 'slider',
      'settings'    => 'at_setting__logosize',
      'label'       => esc_attr__( 'Logo Size', 'tribe' ),
      'section'     => 'at_sec__header',
      'default'     => '300',
      'priority'    => 10,
      'choices'     => array(
          'min'  => 50,
          'max'  => 600,
          'step' => 10,
      ),
      'output'    => array (
        'element' => '.site-header .site-header__logowrap img',
        'property' => 'width',
        'units' => 'px',
        'value_pattern' => '$'
      )
  ) );

Kirki::add_field( 'at_theme', array(
      'type'        => 'slider',
      'settings'    => 'at_setting__logopaddingsize',
      'label'       => esc_attr__( 'Padding Size', 'tribe' ),
      'section'     => 'at_sec__header',
      'default'     => '50',
      'priority'    => 10,
      'choices'     => array(
          'min'  => 0,
          'max'  => 100,
          'step' => 10,
      ),
      'output'    => array (
        'element' => '.site-header .site-header__logowrap',
        'property' => 'padding',
        'value_pattern' => '$px 0'
      )
  ) );

  /** 
  * Section: Footer
  */
  Kirki::add_section( 'at_sec__footer', array(
    'title'         => esc_attr__( 'Footer', 'tribe' ),
    'panel'       => 'at_panel__main',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  

    Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_topfootercolor',
    'label'       => esc_attr__( 'Top Footer Color', 'tribe' ),
    'section'     => 'at_sec__footer',
    'default'     => '#262626',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.site-footer .at-top-footer',
        'property' => 'background',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.site-footer .at-top-footer',
        'function' => 'style',
        'property' => 'background',
      ),
    ),

  ) );


  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_topfootertextcolor',
    'label'       => esc_attr__( 'Top Footer Text Color', 'tribe' ),
    'section'     => 'at_sec__footer',
    'default'     => '#fff',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.at-top-footer h1, .at-top-footer h2, .at-top-footer h3, .at-top-footer h4, .at-top-footer h5, .at-top-footer h6, .at-top-footer p, .at-top-footer .site-footer-widgets a',
        'property' => 'color',
      ),
      array(
        'element'  => '.site-footer-widgets .at-socialwidget svg path, .site-footer-widgets .at_social_widget .at-socialwidget svg path',
        'property' => 'fill',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.at-top-footer h1, .at-top-footer h2, .at-top-footer h3, .at-top-footer h4, .at-top-footer h5, .at-top-footer h6, .at-top-footer p, .at-top-footer .site-footer-widgets a',
        'function' => 'style',
        'property' => 'color',
      ),
      array(
        'element'  => '.site-footer-widgets .at-socialwidget svg path, .site-footer-widgets .at_social_widget .at-socialwidget svg path',
        'function' => 'style',
        'property' => 'fill',
      ),
    ),

  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_bottomfootercolor',
    'label'       => esc_attr__( 'Bottom Footer Color', 'tribe' ),
    'section'     => 'at_sec__footer',
    'default'     => '#1a1a1a',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.site-footer .at-bottom-footer',
        'property' => 'background',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.site-footer .at-bottom-footer',
        'function' => 'style',
        'property' => 'background',
      ),
    ),

  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_bottomfootertextcolor',
    'label'       => esc_attr__( 'Bottom Footer Text Color', 'tribe' ),
    'section'     => 'at_sec__footer',
    'default'     => '#777',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output'      => array(
      array(
        'element'  => '.site-footer .site-footer__copyright',
        'property' => 'color',
      ),
    ),
    
    'js_vars'     => array(
      array(
        'element'  => '.site-footer .site-footer__copyright',
        'function' => 'style',
        'property' => 'color',
      ),
    ),

  ) );

  Kirki::add_field( 'at_theme', array(
      'type'     => 'textarea',
      'settings' => 'at_setting__copyright',
      'label'    => esc_attr__( 'Copyright Message', 'tribe' ),
      'section'  => 'at_sec__footer',
      'sanitize_callback' => 'wp_kses_post',
      'default'  => esc_html__('&copy; Copyright 2017 All Rights Reserved.', 'tribe' ),
      'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
      'type'     => 'text',
      'settings' => 'at_setting__poweredby',
      'label'    => esc_attr__( 'Your Affilate Link', 'tribe' ),
      'description' => esc_attr__('Register to become an affiliate (free) and earn commissions', 'tribe' ),
      'section'  => 'at_sec__footer',
      'sanitize_callback' => 'wp_kses_post',
      'default'  => esc_url('https://launchandsell.com/?poweredby', 'tribe' ),
      'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_typography_footernav',
    'label'       => esc_attr__( 'Bottom Footer Navigation Typography', 'tribe' ),
    'description' => esc_attr__( 'Set the footer navigation typography here', 'tribe' ),
    'section'     => 'at_sec__footer',
    'default'     => array(
      'font-family'    => 'Montserrat',
      'variant'        => '400',
      'font-size'      => '15px',
      'line-height'    => '1',
      'letter-spacing' => '0',
      'color'          => '#f5f7f8',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.nav-footer ul a',
      ),
    ),
    'js_vars'     => array(
    array(
      'element'  => '.nav-footer ul a',
    ),
  ),
  ) );

}

  /** 
  * Panel: OptIn
  */
  //Kirki::add_panel( 'at_panel__optin', array(
  //    'priority'    => 10,
  //    'title'       => esc_attr__( 'Opt-in', 'tribe' ),
  //    'description' => esc_attr__( 'Opt-in Options', 'tribe' ),
  //) );

  /** 
  * Section: Homepage - HP Optin
  */
  Kirki::add_section( 'at_sec__hpoptin', array(
    'title'         => esc_attr__( 'Opt-In Options', 'tribe' ),
    'panel'       => 'at_panel__main',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'     => 'text',
    'settings' => 'at_setting__hpoptintitle',
    'label'    => esc_attr__( 'Optin Title', 'tribe' ),
    'section'  => 'at_sec__hpoptin',
    'default'  => esc_attr__( 'Unlock Your Inner Greatness!', 'tribe' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_setting__hpoptintitlecolor',
    'label'       => esc_attr__( 'Optin Title Typography', 'tribe' ),
    'section'     => 'at_sec__hpoptin',
    'default'     => array(
      'font-family'    => 'Montserrat',
      'variant'        => '700',
      'letter-spacing' => '0',
      'color'          => '#1a1a1a',
      'text-transform' => 'none',
      'font-size'      => '18px',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.at-optin .at-optin__title',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-optin .at-optin__title',
      ),
    ),
  ) );


  Kirki::add_field( 'at_theme', array(
    'type'     => 'textarea',
    'settings' => 'at_setting__hpoptinsubtitle',
    'label'    => esc_attr__( 'Optin Subtitle', 'tribe' ),
    'section'  => 'at_sec__hpoptin',
    'default'  => esc_attr__( '', 'tribe' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__hpoptinsubtitlecolor',
    'label'       => esc_attr__( 'Optin Subtitle Color', 'tribe' ),
    'section'     => 'at_sec__hpoptin',
    'default'     => '#424242',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
      'alpha' => false,
    ),
    'output'      => array(
      array(
        'element'  => '.at-optin .at-optin__subtitle',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-optin .at-optin__subtitle',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
    ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__hpoptinbuttontextcolor',
    'label'       => esc_attr__( 'Optin Button Text Color', 'tribe' ),
    'section'     => 'at_sec__hpoptin',
    'default'     => '#fff',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
      'alpha' => false,
    ),
    'output'      => array(
      array(
        'element'  => '.at-optin .mc4wp-form input[type="submit"]',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-optin .mc4wp-form input[type="submit"]',
        'function' => 'style',
        'property' => 'color',
      ),
    ),
    ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__hpoptinbuttoncolor',
    'label'       => esc_attr__( 'Optin Button Color', 'tribe' ),
    'section'     => 'at_sec__hpoptin',
    'default'     => '#1a1a1a',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
      'alpha' => false,
    ),
    'output'      => array(
      array(
        'element'  => '.at-optin .mc4wp-form input[type="submit"]',
        'property' => 'background',
      ),
      array(
        'element'  => '.at-optin .mc4wp-form input[type="submit"]',
        'property' => 'border-color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-optin .mc4wp-form input[type="submit"]',
        'function' => 'style',
        'property' => 'background',
      ),
      array(
        'element'  => '.at-optin .mc4wp-form input[type="submit"]',
        'function' => 'style',
        'property' => 'border-color',
      ),
    ),
    ) );

  Kirki::add_field( 'at_theme', array(
    'sanitize_callback' => 'wp_kses_post',
    'type'     => 'text',
    'settings' => 'at_setting__hpoptinform',
    'label'    => esc_attr__( 'Optin Form', 'tribe' ),
    'section'  => 'at_sec__hpoptin',
    'default'  => '',
    'priority' => 10,
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__hpoptincolor',
    'label'       => esc_attr__( 'Optin Background Color', 'tribe' ),
    'section'     => 'at_sec__hpoptin',
    'default'     => '#f5f7f8',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
      'alpha' => false,
    ),
    'output'      => array(
      array(
        'element'  => '.at-optin',
        'property' => 'background',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.at-optin',
        'function' => 'style',
        'property' => 'background',
      ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'image',
  'settings'    => 'at_setting__hpoptinimg',
  'label'       => esc_attr__( 'Optin Image', 'tribe' ),
  'description' => esc_attr__( 'If you want to place an image on the left', 'tribe' ),
  'section'     => 'at_sec__hpoptin',
  'priority'    => 10,
  ) );

  /** 
  * Section: Testimonials
  */
  Kirki::add_section( 'at_sec__testimonials', array(
    'title'         => esc_attr__( 'Testimonials', 'tribe' ),
    'panel'       => 'at_panel__main',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  /** 
  * Setting: Testimonials
  */
  Kirki::add_field( 'at_theme', array(
  'type'        => 'repeater',
  'label'       => esc_attr__( 'Testimonials', 'tribe' ),
  'section'     => 'at_sec__testimonials',
  'priority'    => 10,
  'row_label' => array(               
          'type' => 'text',
          'value' => esc_attr__('Testimonial', 'tribe' ),
  ),
  'settings'    => 'at_setting__testimonials',
  'default'     => array(
    array(
      'testimonial_image'  => '',
      'testimonial_text' => '',
      'testimonial_name'  => '',
      'testimonial_bio'  => '',
    ),
  ),
  'fields' => array(
    'testimonial_image' => array(
      'type'        => 'image',
      'label'       => esc_attr__( 'Testimonial Image', 'tribe' ),
      'description' => esc_attr__( '', 'tribe' ),
      'default'     => '',
    ),
    'testimonial_text' => array(
      'type'        => 'textarea',
      'label'       => esc_attr__( 'Testimonial Text', 'tribe' ),
      'description' => esc_attr__( 'Enter the testimonial content here', 'tribe' ),
      'default'     => '',
    ),
    'testimonial_name' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Testimonial Name', 'tribe' ),
      'description' => esc_attr__( 'Enter the customer/client name here', 'tribe' ),
      'default'     => '',
    ),
    'testimonial_bio' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Testimonial Bio', 'tribe' ),
      'description' => esc_attr__( 'Enter any extra information about the customer/client here', 'tribe' ),
      'default'     => '',
    ),
  )
  ) );





  /** 
  * Panel: WooCommerce
  */
  Kirki::add_panel( 'at_panel__wc', array(
      'priority'    => 10,
      'title'       => esc_attr__( 'WooCommerce', 'tribe' ),
      'description' => esc_attr__( 'Customize WooCommerce', 'tribe' ),
  ) );


  /** 
  * Section: General
  */
  Kirki::add_section( 'at_sec__wcmain', array(
    'title'         => esc_attr__( 'General', 'tribe' ),
    'panel'       => 'at_panel__wc',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  /** 
  * Setting: Woocommerce Options
  */
  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__woo_prod_buybutton',
  'label'    => esc_attr__( 'Text on Purchase Button', 'tribe' ),
  'description' => esc_attr__( 'Insert Text you want to appear on the purchase button', 'tribe' ),
  'section'  => 'at_sec__wcmain',
  'default'  => esc_attr__( 'Reserve Your Seat Now!', 'tribe' ),
  'priority' => 10,
  'sanitize_callback' => 'wp_kses_post',
  ) );


  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__woo_checkout',
    'label'       => esc_attr__( 'Direct checkout', 'tribe' ),
    'description' => esc_attr__( 'Go to direct checkout after clicking the purchase button, please activate the option "re" cart', 'tribe' ),
    'section'     => 'at_sec__wcmain',
    'default'     => '0',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );


  /** 
  * Section: Product Page
  */
  Kirki::add_section( 'at_sec__wcproduct', array(
    'title'         => esc_attr__( 'Product Page', 'tribe' ),
    'panel'       => 'at_panel__wc',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  /** 
  * Setting: Woocommerce Options
  */
  Kirki::add_field( 'at_theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'at_setting__woo_prod_style',
    'label'       => esc_attr__( 'Product Page Style', 'tribe' ),
    'section'     => 'at_sec__wcproduct',
    'default'     => 'style2',
    'priority'    => 10,
    'choices'     => array(
      'style1'   => esc_attr__( 'Style 1', 'tribe' ),
      'style2' => esc_attr__( 'Style 2', 'tribe' ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'color',
    'settings'    => 'at_setting__woo_headings',
    'label'       => esc_attr__( 'Product Title Color', 'tribe' ),
    'description' => esc_attr__( 'Set the heading typography here', 'tribe' ),
    'section'     => 'at_sec__wcproduct',
    'default'     => '#1a1a1a',
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.woocommerce .product .product_title, .woocommerce div.product .woocommerce-tabs ul.tabs li a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce .product .woocommerce-tabs woocommerce-Tabs-panel, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button',
        'property' => 'color',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.woocommerce .product .product_title, .woocommerce div.product .woocommerce-tabs ul.tabs li a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce .product .woocommerce-tabs woocommerce-Tabs-panel, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button',
        'property' => 'color',
      ),
    ),
  ) );

Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_setting__woo_prod_pricetypo',
    'label'       => esc_attr__( 'Price Typography', 'tribe' ),
    'section'     => 'at_sec__wcproduct',
    'default'     => array(
      'variant'        => '700',
      'letter-spacing' => '0',
      'color'          => '#1a1a1a',
      'text-transform' => 'none',
      'font-size'      => '24px',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.woocommerce div.product p.price, .woocommerce div.product span.price',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.woocommerce div.product p.price, .woocommerce div.product span.price',
      ),
    ),
  ) );


  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__woo_prod_beforeprice',
  'label'    => esc_attr__( 'Before Price', 'tribe' ),
  'description' => esc_attr__( 'Insert Text you want to appear before the price', 'tribe' ),
  'section'  => 'at_sec__wcproduct',
  'default'  => esc_attr__( 'Only', 'tribe' ),
  'priority' => 10,
  'sanitize_callback' => 'wp_kses_post',
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__woo_prod_desctab',
  'label'    => esc_attr__( 'Description Tab Title ', 'tribe' ),
  'section'  => 'at_sec__wcproduct',
  'default'  => esc_attr__( 'Why You Need It', 'tribe' ),
  'priority' => 10,
  'sanitize_callback' => 'wp_kses_post',
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__woo_prod_attrtab',
  'label'    => esc_attr__( 'Attribute Tab Title ', 'tribe' ),
  'section'  => 'at_sec__wcproduct',
  'default'  => esc_attr__( 'Where and When', 'tribe' ),
  'priority' => 10,
  'sanitize_callback' => 'wp_kses_post',
  ) );


  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__woo_prod_reviews',
    'label'       => esc_attr__( 'Enable Reviews', 'tribe' ),
    'section'     => 'at_sec__wcproduct',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'     => 'text',
  'settings' => 'at_setting__woo_prod_reviewtab',
  'label'    => esc_attr__( 'Review Tab Title ', 'tribe' ),
  'section'  => 'at_sec__wcproduct',
  'default'  => esc_attr__( 'What My Customers Say', 'tribe' ),
  'priority' => 10,
  'sanitize_callback' => 'wp_kses_post',
  'active_callback'  => array(
        array(
            'setting'  => 'at_setting__woo_prod_reviews',
            'operator' => '==',
            'value'    => '1',
        ),
      ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__woo_prod_tabbuttons',
    'label'       => esc_attr__( 'Hide Tabs Buttons', 'tribe' ),
    'section'     => 'at_sec__wcproduct',
    'default'     => '0',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'at_setting__woo_prod_reviews',
            'operator' => '==',
            'value'    => '0',
        ),
      ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__woo_prod_breadcrumb',
    'label'       => esc_attr__( 'Display Breadcrumb', 'tribe' ),
    'section'     => 'at_sec__wcproduct',
    'default'     => '0',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );

/*  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__woo_prod_sidebar',
    'label'       => esc_attr__( 'Display Sidebar', 'tribe' ),
    'description' => esc_attr__( 'Display the sidebar in the product page.', 'tribe' ),
    'section'     => 'at_sec__wcproduct',
    'default'     => '0',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );
  */

/** 
  * Section: Shop Page
  */
  Kirki::add_section( 'at_sec__wcshop', array(
    'title'         => esc_attr__( 'Shop Page', 'tribe' ),
    'panel'       => 'at_panel__wc',
    'priority'      => 1,
    'capability'    => 'edit_theme_options',
  ) );

  /** 
  * Setting: Woocommerce Options
  */
  Kirki::add_field( 'at_theme', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'at_setting__woo_shop_style',
    'label'       => esc_attr__( 'Shop Page Style', 'tribe' ),
    'section'     => 'at_sec__wcshop',
    'default'     => 'style2',
    'priority'    => 10,
    'choices'     => array(
      'style1'   => esc_attr__( 'Style 1', 'tribe' ),
      'style2' => esc_attr__( 'Style 2', 'tribe' ),
    ),
  ) );

    Kirki::add_field( 'at_theme', array(
  'type'        => 'number',
  'settings'    => 'at_setting__woo_shop_nbprod',
  'label'       => esc_attr__( 'Number of products per page', 'tribe' ),
  'section'     => 'at_sec__wcshop',
  'default'     => 6,
  'choices'     => array(
    'min'  => 1,
    'max'  => 5,
    'step' => 1,
  ),
  ) );

  Kirki::add_field( 'at_theme', array(
  'type'        => 'number',
  'settings'    => 'at_setting__woo_shop_row',
  'label'       => esc_attr__( 'Number of products per row', 'tribe' ),
  'section'     => 'at_sec__wcshop',
  'default'     => 3,
  'choices'     => array(
    'min'  => 1,
    'max'  => 5,
    'step' => 1,
  ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__woo_shop_price',
    'label'       => esc_attr__( 'Display Price', 'tribe' ),
    'section'     => 'at_sec__wcshop',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );

  Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__woo_shop_excerpt',
    'label'       => esc_attr__( 'Display Short Description', 'tribe' ),
    'section'     => 'at_sec__wcshop',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );


Kirki::add_field( 'at_theme', array(
    'type'        => 'toggle',
    'settings'    => 'at_setting__woo_shop_button',
    'label'       => esc_attr__( 'Display Buy Button', 'tribe' ),
    'section'     => 'at_sec__wcshop',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
      'on'  => esc_attr__( 'Enable', 'tribe' ),
      'off' => esc_attr__( 'Disable', 'tribe' ),
    ),
  ) );

Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_setting__woo_shop_titletypo',
    'label'       => esc_attr__( 'Product Title Typography', 'tribe' ),
    'section'     => 'at_sec__wcshop',
    'default'     => array(
      'variant'        => '700',
      'letter-spacing' => '0',
      'color'          => '#1a1a1a',
      'text-transform' => 'none',
      'font-size'      => '20px',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => '.woocommerce ul.products li.product h3, .woocommerce ul.products li.product .woocommerce-loop-product__title',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => '.woocommerce ul.products li.product h3, .woocommerce ul.products li.product .woocommerce-loop-product__title',
      ),
    ),
  ) );

Kirki::add_field( 'at_theme', array(
    'type'        => 'typography',
    'settings'    => 'at_setting__woo_shop_pricetypo',
    'label'       => esc_attr__( 'Price Typography', 'tribe' ),
    'section'     => 'at_sec__wcshop',
    'default'     => array(
      'variant'        => '400',
      'letter-spacing' => '0',
      'color'          => '#1a1a1a',
      'text-transform' => 'none',
      'font-size'      => '16px',
    ),
    'priority'    => 10,
    'transport'   => 'postMessage',
    'output' => array(
      array(
        'element' => ' .woocommerce ul.products li.product .price',
      ),
    ),
    'js_vars'     => array(
      array(
        'element'  => ' .woocommerce ul.products li.product .price',
      ),
    ),
  ) );

