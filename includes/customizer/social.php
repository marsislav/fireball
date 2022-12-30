<?php
function fireball_social_customizer_section($wp_customize) {
    $wp_customize->add_setting('fireball_facebook_handle', [
        'default'=>'',
        'sanitize_callback'=>'sanitize_text_field',// SANITIZE!
        
    ]);
    
    $wp_customize->add_section('fireball_social_section', [
        'title'=>esc_html__('Social Settings','fireball'),
        'priority'=>30
        
    ]);



    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'fireball_social_facebook_input',
        array (
            'type'=>'text',
        'label'=>esc_html__('Facebook','fireball'),
        'section'=>'fireball_social_section',
        'settings'=>'fireball_facebook_handle'
        ))
        );
    
        $wp_customize->add_setting('fireball_instagram_handle', [
            'default'=>'',
            'sanitize_callback'=>'sanitize_text_field',
        ]);
     
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'fireball_social_instagram_input',
            array (
                'type'=>'text',
            'label'=>esc_html__('Instagram','fireball'),
            'section'=>'fireball_social_section',
            'settings'=>'fireball_instagram_handle'
            ))
            );
            
            $wp_customize->add_setting('fireball_twitter_handle', [
                'default'=>'',
                'sanitize_callback'=>'sanitize_text_field',
            ]);
         
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'fireball_social_twitter_input',
                array (
                    'type'=>'text',
                'label'=>esc_html__('Twitter','fireball'),
                'section'=>'fireball_social_section',
                'settings'=>'fireball_twitter_handle'
                ))
                );

                $wp_customize->add_setting('fireball_pinterest_handle', [
                    'default'=>'',
                    'sanitize_callback'=>'sanitize_text_field',
                ]);
             
                $wp_customize->add_control(new WP_Customize_Control(
                    $wp_customize,
                    'fireball_social_pintereset_input',
                    array (
                        'type'=>'text',
                    'label'=>esc_html__('Pinterest','fireball'),
                    'section'=>'fireball_social_section',
                    'settings'=>'fireball_pinterest_handle'
                    ))
                    );
    
                $wp_customize->add_setting('fireball_youtube_handle', [
                    'default'=>'',
                    'sanitize_callback'=>'sanitize_text_field',
                ]);
             
                $wp_customize->add_control(new WP_Customize_Control(
                    $wp_customize,
                    'fireball_social_youtube_input',
                    array (
                        'type'=>'text',
                    'label'=>esc_html__('Youtube','fireball'),
                    'section'=>'fireball_social_section',
                    'settings'=>'fireball_youtube_handle'
                    ))
                    );
            
                    $wp_customize->add_setting('fireball_viber_handle', [
                        'default'=>'',
                        'sanitize_callback'=>'sanitize_text_field',
                    ]);
                 
                    $wp_customize->add_control(new WP_Customize_Control(
                        $wp_customize,
                        'fireball_social_viber_input',
                        array (
                            'type'=>'text',
                        'label'=>esc_html__('Viber','fireball'),
                        'section'=>'fireball_social_section',
                        'settings'=>'fireball_viber_handle'
                        ))
                        );
    
                        $wp_customize->add_setting('fireball_whatsapp_handle', [
                            'default'=>'',
                            'sanitize_callback'=>'sanitize_text_field',
                        ]);
                     
                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize,
                            'fireball_social_whatsapp_input',
                            array (
                                'type'=>'text',
                            'label'=>esc_html__('WhatAspp','fireball'),
                            'section'=>'fireball_social_section',
                            'settings'=>'fireball_whatsapp_handle'
                            ))
                            );
    
                            $wp_customize->add_setting('fireball_github_handle', [
                                'default'=>'',
                                'sanitize_callback'=>'sanitize_text_field',
                            ]);
                         
                            $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize,
                                'fireball_social_github_input',
                                array (
                                    'type'=>'text',
                                'label'=>esc_html__('GitHub','fireball'),
                                'section'=>'fireball_social_section',
                                'settings'=>'fireball_github_handle'
                                ))
                                );
    
                            
                        
                        $wp_customize->add_setting('fireball_skype_handle', [
                            'default'=>'',
                            'sanitize_callback'=>'sanitize_text_field',
                        ]);
                     
                     
                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize,
                            'fireball_skype_input',
                            array (
                                'type'=>'text',
                            'label'=>esc_html__('Skype','fireball'),
                            'section'=>'fireball_social_section',
                            'settings'=>'fireball_skype_handle'
                            ))
                            );
    
                            $wp_customize->add_setting('fireball_email_handle', [
                                'default'=>'',
                                'sanitize_callback'=>'sanitize_text_field',
                            ]);
    
                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize,
                            'fireball_social_email_input',
                            array (
                                'type'=>'text',
                            'label'=>esc_html__('Email','fireball'),
                            'section'=>'fireball_social_section',
                            'settings'=>'fireball_email_handle'
                            ))
                            );
    
                            $wp_customize->add_setting('fireball_phone_handle', [
                                'default'=>'',
                                'sanitize_callback'=>'sanitize_text_field',
                            ]);
                         
                            $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize,
                                'fireball_social_phone_input',
                                array (
                                    'type'=>'text',
                                'label'=>esc_html__('Phone','fireball'),
                                'section'=>'fireball_social_section',
                                'settings'=>'fireball_phone_handle'
                                ))
                                );
}