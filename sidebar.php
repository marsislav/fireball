<div id="sidebar-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">



    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
        <div class="sidebar common-widget section" id="sidebar1"></div>
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