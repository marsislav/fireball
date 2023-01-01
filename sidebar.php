<div id="sidebar-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">



    <div>
        <div class="sidebar common-widget section"></div>
        <div class="sidebar section">
            <?php
            if(is_active_sidebar('fireball_sidebar')) {
                
                dynamic_sidebar('fireball_sidebar' );
            }
            ?>

        </div>
    </div>
</div>
</div>