<?php


function fireball_misc_customizer_section($wp_customize) {

$wp_customize->add_section('fireball_footer_options', array(
    'title'=>esc_html__('Footer Options','fireball'),
    'description'=>esc_html__('You can change footer options from here.','fireball')
));


    $wp_customize->add_setting('fireball_site_info', array(
        'default'=>'',
        'sanitize_callback'=>'fireball_sanitize_siteinfo'
    ));
    
    $wp_customize->add_control('fireball_site_info', array (
        'type'=>'text',
        'label'=>esc_html__('Site Info','fireball'),
        'section'=>'fireball_footer_options'
    ));

    //footer Columns

    $wp_customize->add_setting('fireball_footer_layout', array (
        'default'=>'3,3,3,3',
        'sanitize_callback'=>'sanitize_text_field',
        'validate_vallback'=>'fireball_validate_footer_layout'
    ));

    $wp_customize->add_control('fireball_footer_layout', array (
        'type'=>'text',
        'label'=>esc_html__('Footer layout','hs21'),
        'section'=>'fireball_footer_options'

    ));

    
    



    /*Footer Background
$wp_customize->add_setting('fireball_footer_bg', array (
    'default'=>'dark',
    'sanitize_callback'=>'fireball_sanitize_footer_bgr'
    ));
    
    $wp_customize->add_control('fireball_footer_bg', array (
        'type'=>'select',
        'label'=>esc_html__('Footer Background', 'fireball'),
        'choices'=>array(
            'light'=>esc_html__('Light', 'fireball'),
            'dark'=>esc_html__('Dark', 'fireball'),
            'section'=>'fireball_footer_options'
        )
    ));*/


}
 
function fireball_sanitize_siteinfo ($input) {
$allowed=array ('a'=>array(
    'href'=>array(),
    'title'=>array(),
    'target'=>array()
));
return wp_kses($input, $allowed);
}



function fireball_sanitize_footer_bgr ($input) {
    $valid=array('light', 'dark');
    if (in_array($input, $valid, true)){
        return $input;
    }
    return 'dark';
}