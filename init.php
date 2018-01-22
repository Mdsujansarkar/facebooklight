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

		?> <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> <?php

     
	}

	public function form( $instance ){

	}
}
