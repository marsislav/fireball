<?php
function fireball_widgets(){
register_sidebar([
'name'=>esc_html__('Main sidebar', 'fireball'),
'id'=>'fireball_sidebar',
'description'=>esc_html__('Main sidebar', 'fireball'),
'before_widget'=>'<div id=""%1$s" class="widget clearfix 2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<div class="widget-title"><h3 class="title">',
        'after_title'=>'</h3></div>',
]);
}
//Footer widgets
$footer_layout=sanitize_text_field(get_theme_mod('fireball_footer_layout', '3,3,3,3'));
$footer_layout=preg_replace('/\s+/', '', $footer_layout);
$columns=explode(',', $footer_layout);
/*$footer_bg='dark';
$widget_theme='';
if ($footer_bg=='light'){
        $widget_theme='footer-widgets-dark';
}
else {
        $widget_theme='footer-widgets-light';
}
*/

foreach ($columns as $i =>$column) {


register_sidebar([
        'name'=>sprintf(esc_html__('Footer widgets column %s', 'fireball'),$i+1),
        'id'=>'fireball_footer_sidebar-'.($i+1),
        'description'=>esc_html__('Footer widgets', 'fireball'),
        'before_widget'=>'<div id=""%1$s" class="footer-widget 2$s'. /*$widget_theme .*/ '">',
                'after_widget'=>'</div>',
                'before_title'=>'<div class="widget-title"><h3 class="title">',
                'after_title'=>'</h3></div>',
        ]);
}