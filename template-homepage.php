<?php 
/*
Template Name: Homepage
*/
get_header(); ?>

<?php get_template_part( 'homepage', 'hero' ); ?>

<?php $at_hporder = get_theme_mod('at_setting__hporder', array('content','ctablocks','ctablocks2','featuredin','optin','about','praise','blog')); 

if ( $at_hporder ) :
 foreach($at_hporder as $item) : ?>

    <?php get_template_part( 'homepage', $item ); ?>

  <?php endforeach;
endif; ?>

<?php get_footer();