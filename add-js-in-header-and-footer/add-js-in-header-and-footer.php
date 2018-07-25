<?php 
/*
Plugin Name: add-js-in-header-and-footer
Plugin URI: https://add-js-in-header-and-footer.com/
Description: You can add javascript code in header and footer
Version: 1.0.0
Author: Prathmesh Patil
Author URI: https://demoplugin.com
*/

// =================== Display Javascript code in Header and Footer Location(start) ===============//
  add_action('wp_head','display_script_in_header');
  add_action('wp_footer','display_script_in_footer');
  
  function display_script_in_header() 
  {
      echo get_theme_mod('mytheme_javascript_setting_for_header');
  }

  function display_script_in_footer()
  {
      echo get_theme_mod('mytheme_javascript_setting_for_footer');
      
  }
// =================== Display Javascript code in Header and Footer Location(End) ================//


// ================================= Plugin Setting page(start) =================================//

  
function mytheme_additional_javascript( $wp_customize ) 
{
  
     //======================= Section area start =======================//

     $wp_customize->add_section( 'mytheme_javascript_section_area' , array(
    'title'      => 'Additional Javascript'
     ) ); 

     //======================= Section area End =======================//

     //=============== Setting and control area start for header  ===============//
     
     $wp_customize->add_setting( 'mytheme_javascript_setting_for_header' , array(
    'default'   => '<!-- Add Javascript code for header section -->'
     ) );

     $wp_customize->add_control( 'mytheme_javascript_control_for_header', array(
	'label'      => 'Add Javascript Code in Header',
	'type'       => 'textarea',
	'section'    => 'mytheme_javascript_section_area',
	'settings'   => 'mytheme_javascript_setting_for_header'
    ) );
     //=============== Setting and control area End for header  ===============//


     //=============== Setting and control area start for Footer  ===============//

    
    $wp_customize->add_setting( 'mytheme_javascript_setting_for_footer' , array(
    'default'   => '<!-- Add Javascript code for footer section -->'
     ) );

     $wp_customize->add_control( 'mytheme_javascript_control_for_footer', array(
	'label'      => 'Add Javascript Code in Footer',
	'type'       => 'textarea',
	'section'    => 'mytheme_javascript_section_area',
	'settings'   => 'mytheme_javascript_setting_for_footer'
    ) ); 
     //=============== Setting and control area End for Footer  ===============//

}

add_action( 'customize_register', 'mytheme_additional_javascript' );


// ================================= Plugin Setting page(End) ===================================//



?>