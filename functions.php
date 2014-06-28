<?php
// Navigation
register_nav_menu( 'primary', 'Primary Menu' );

// Widgets
register_sidebar( array(
    'name'         => __( 'Right Hand Sidebar' ),
    'id'           => 'sidebar-1',
    'description'  => __( 'Widgets in this area will be shown on the right-hand side.' ),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title'  => '</h2>',
) );
?>