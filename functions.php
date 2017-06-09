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

//excerpt post support
add_post_type_support('page', 'excerpt');

function get_mikes_title_tag() {
	
	global $post;//important---shit will not work without this
	
	if (is_front_page() || is_home()){//front page or blog feed
	
	 bloginfo('description');
	
	
	}elseif (is_page() || is_single()) {//page/posting
		
		echo get_the_title($post->ID);
		
	} else {//error or search
		
		 bloginfo('description');
		 
		
	}
	
	if($post->post_parent){
		
	echo ' | ';
	echo get_the_title($post->post_parent);
	
	}
	echo ' | ';
	echo 'Business Name';
	echo ' | ';
	echo 'Location';
	
	
}


?>
