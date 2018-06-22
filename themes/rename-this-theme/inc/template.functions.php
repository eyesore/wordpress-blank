<?php

	function eye_get_theme_logo(){
		$yourlogo = get_theme_mod( 'your_theme_logo' );
		$logoalt = get_bloginfo( 'name', 'display' ); 
		if ( $yourlogo ){
			return '<img src="'.$yourlogo.'" alt="'.esc_attr($logoalt).'" >';
		}
		else{
			return '<img src="'.get_template_directory_uri().'/images/default_logo.png" alt="Default Logo Alt Text">';
		}
	}

	function eye_get_phone_link(){
		$yourPhone = get_theme_mod( 'phone_number' );
		return '<a href="tel:'.$yourPhone. '">'.$yourPhone.'</a>';
	}