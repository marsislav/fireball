<!-- Footer Wrapper -->
<?php 
$footer_layout=sanitize_text_field(get_theme_mod('fireball_footer_layout', '3,3,3,3'));
$footer_layout=preg_replace('/\s+/','', $footer_layout);

$columns=explode(',', $footer_layout);
$footer_bg='dark';
$widgets_active=false;
foreach ($columns as $i=>$column){
    if(is_active_sidebar( 'fireball_footer_sidebar-'.($i+1))){
        $widgets_active=true;
    }
}
?>
<footer id="footer-wrapper" class="footer-widgets-<?php $footer_bg; ?>">
    <?php if($widgets_active){?>
    <div class="container">

        <div class="row">
            <?php foreach($columns as $i =>$column) {?>
            <div class="col-md-<?php echo $column; ?> themkhked-grid-col">
                <?php if(is_active_sidebar('fireball_footer_sidebar-'.($i+1))){
            dynamic_sidebar( 'fireball_footer_sidebar-'.($i+1));
        }?>
            </div>
            <?php }?>
        </div>

    </div>
    <?php } ?>
    <div class="clearfix"></div>
    <div id="sub-footer-wrapper">
        <div class="container row">
            <div class="copyright-area copuright-bgr-<?php echo $footer_bg; ?>">
                //bgr here
                <?php 
                $allowed=array ('a'=>array(
                    'href'=>array(),
                    'title'=>array(),
                    'target'=>array()
                ));
                
                if(get_theme_mod('fireball_site_info')) {
                    echo wp_kses(get_theme_mod('fireball_site_info'), $allowed);} 
                     else {echo "Theme developer: Marsislav";}
                     ?>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- Overlay and Back To Top -->
<div class="back-top" title="Back to Top" style="display: none;"></div>

<?php wp_footer(); ?>
</body>

</html>