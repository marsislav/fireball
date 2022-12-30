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
        'validate_callback'=>'fireball_validate_footer_layout'
    ));

    $wp_customize->add_control('fireball_footer_layout', array (
        'type'=>'text',
        'label'=>esc_html__('Footer layout','fireball'),
        'section'=>'fireball_footer_options'

    ));


    $wp_customize->add_setting( 'fireball_footer_tos_page', array(
        'default'       =>  0,
        'sanitize_callback'=>'sanitize_text_field',
    ));

    $wp_customize->add_setting( 'fireball_footer_privacy_page', array(
        'default'       =>  0,
        'sanitize_callback'=>'sanitize_text_field',
    ));


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'fireball_footer_tos_page_input',
        array(
            'label'                 =>  __( 'Footer TOS Page', 'fireball' ),
            'section'               => 'fireball_footer_options',
            'settings'              => 'fireball_footer_tos_page',
            'type'                  =>  'dropdown-pages'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'fireball_footer_privacy_page_input',
        array(
            'label'                 =>  __( 'Footer Privacy Policy Page', 'fireball' ),
            'section'               => 'fireball_footer_options',
            'settings'              => 'fireball_footer_privacy_page',
            'type'                  =>  'dropdown-pages'
        )
    ));
//

$wp_customize->add_setting( 'fireball_main_color', [
    'default'       =>  '#025746',
    'sanitize_callback'=>'sanitize_hex_color',
]); 

    $wp_customize->add_control(
        new WP_Customize_Color_Control( 
            $wp_customize, 
            'fireball_main_color_input', 
            array(
                'label'      => __( 'Main color', 'fireball' ),
                'section'    => 'fireball_footer_options',
                'settings'   => 'fireball_main_color',
            )
        ) 
    );
/*
    $wp_customize->add_control(
        new WP_Customize_Upload_Control( 
            $wp_customize, 
            'fireball_report_file_input', 
            array(
                'label'      => __( 'File Report', 'fireball' ),
                'section'    => 'fireball_misc_section',
                'settings'   => 'fireball_report_file',
            ) 
        ) 
    );*/
    /*END FOR TEST */



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

//Validate footer layout

function fireball_validate_footer_layout ($validity, $value) {
    if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
        $validity->add('invalid_footer_layout', esc_html__( 'Footer layout is invalid', 'fireball' ));
    }
       return $validity;
   }