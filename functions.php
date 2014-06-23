<?php
// Navigation
register_nav_menu( 'primary', 'Primary Menu' );

// Widgets
if ( function_exists('register_sidebar') )
register_sidebar();
?>