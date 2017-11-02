<?php

function ocdi_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import 1',
            'categories'                 => array( 'Category 1', 'Category 2' ),
            'import_file_url'            => 'http://demo.launchandsell.com/demo-files/tribe/tribe-demo-content.xml',
            'import_widget_file_url'     => 'http://demo.launchandsell.com/demo-files/tribe/tribe-widgets.wie',
            'import_customizer_file_url' => 'http://demo.launchandsell.com/demo-files/tribe/tribe-customizer.dat',

            'import_preview_image_url'   => 'http://demo.launchandsell.com/demo-files/tribe/tribe-pic.jpg',
            //'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
        ),
        
    );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );


function ocdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'nav-site-header' => $main_menu->term_id,
            'nav-site-footer' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

    //update post at most
    update_option( 'posts_per_page', 5 );

}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );