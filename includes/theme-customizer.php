<?php
function fireball_customize_register ($wp_customize){
    fireball_social_customizer_section($wp_customize);
    fireball_misc_customizer_section($wp_customize);
}