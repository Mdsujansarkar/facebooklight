<?php

/*
Plugin Name:facebook light box
Plugin URL:facebook.com
Author:sujan
Author URL:sujansarkar.com
Description:first 
*/

// action hook start 
add_action('widgets_init','newFacebookLightbox');
function newFacebookLightbox(){

	register_widget('FbClassName');
}

// Main class start
class FbClassName extends WP_Widget{

	public function __construct(){
		parent::__construct('our-facebook-like','FaceBook Like', array(

         'Description' =>'Facebook like box'
			));
	}

	public function widget( $args, $instance){ //widget function

     
	}

	public function form( $instance ){

	}
}
