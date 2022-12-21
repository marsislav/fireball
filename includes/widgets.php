<?php
function fireball_widgets(){
register_sidebar([
'name'=>__('Main sidebar', 'fireball'),
'id'=>'fireball_sidebar',
'description'=>__('Main sidebar', 'fireball'),
'before_widget'=>'<div id=""%1$s" class="widget clearfix 2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<div class="widget-title"><h3 class="title">',
        'after_title'=>'</h3></div>',
]);
}