<?php
/*
Theme Name: pyramid
Theme URI:https://github.com/dwilso30/web170
Author: Danielle Wilson
Author URI:www.wairatawilson.com
Description:This is the theme for my web170 class project. Spring 2017
Version:1
*/

//Register menu locations
register_nav_menus(array('main-menu' =>('Main Menu'), 'footer-menu' => __ ('Footer Menu'),));

//support for featured images 
add_theme_support('post-thumbnails');

//register sidebars
register_sidebar(array('before_widget'=> '<div>' , 'after_widget' => '</div>'));

?>
