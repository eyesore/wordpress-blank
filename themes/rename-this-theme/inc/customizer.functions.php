<?php 
/** Create Logo Setting and Upload Control */
function eye_theme_new_customizer_settings($wp_customize) {
	//site logo
	$wp_customize->add_setting('your_theme_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
		array(
			'label' => 'Upload Logo',
			'section' => 'title_tagline',
			'settings' => 'your_theme_logo',
		) ) );
	
	// header phone number
	$wp_customize->add_setting( 'phone_number');
	$wp_customize->add_control( 'phone_number', array(
	  'type' => 'text',
	  'section' => 'title_tagline',
	  'label' => __( 'Phone Number' ),
	) );
}
add_action('customize_register', 'eye_theme_new_customizer_settings');
?>