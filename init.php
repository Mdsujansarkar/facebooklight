<?php

/*
Plugin Name:facebook light box
Plugin URL:facebook.com
Author:sujan
Author URL:sujansarkar.com
Description:first 
*/

add_action('widgets_init','newFacebookLightbox');
function newFacebookLightbox(){

	register_widget('FbClassName');
}

class FbClassName extends WP_Widget{

	public function __construct(){
		parent::__construct();
	}
}
