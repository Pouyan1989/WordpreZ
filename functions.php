<?php

function pouyan(){

	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','pouyan');

//navigiation menus - we have to register the names here and decide in footer and header which of them we want to use 

register_nav_menus(array('primary'=>__('Primary Menu'),'footer'=>__('Footer Menu'),));

// get top ancestor 

function get_top_ancestor_id(){

	global $post ;


	if ($post->post_parent){

		$ancestors=array_reverse(get_post_ancestors($post->ID));

			return $ancestors[0];
		}

		return $post->ID;

	}


//does page have children 


	function has_children() {

		global $post;

		$pages=get_pages('child of='.$post->ID);
		
		return count($pages);

	}


	//customize excerpt word count link 

	function custom_excerpt_lenght() {


		return 25;
	}


	add_filter('excerpt_lenght','custom_excerpt_lenght');




//add featured image


	function learningwordpress_setup(){

		add_theme_support('post-thumbnails');
		add_image_size('small-thumbnail',180,120,true);
		add_image_size('banner-image',920,210,array('left','top'));

	}

	add_action('after_setup_theme','learningwordpress_setup');



