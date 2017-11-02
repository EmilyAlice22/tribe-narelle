<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
if ( ! is_active_sidebar( 'sidebar-post' ) ) {
  return;
} ?>

<aside class="at-sidebar">
  <?php dynamic_sidebar( 'sidebar-post' ); ?>
</aside>