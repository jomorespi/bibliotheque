<?php

if ( is_active_sidebar( 'widgets-left' ) || is_active_sidebar( 'widgets-right' ) ):
?>

<aside id="secondary" class="widget-area">
	<div class="container">
        <div class="widgets-wrapper">
            <div id="widgets-left" class="widgets-container">
                <?php 
                    if ( is_active_sidebar( 'widgets-left' ) ) {
                        dynamic_sidebar('widgets-left'); 
                    }
                ?>
            </div>
            <div id="widgets-right" class="widgets-container">
                <?php 
                    if ( is_active_sidebar( 'widgets-right' ) ) {
                        dynamic_sidebar('widgets-right'); 
                    }
                ?>
            </div>
        </div>
    </div>
</aside>

<?php endif; ?>