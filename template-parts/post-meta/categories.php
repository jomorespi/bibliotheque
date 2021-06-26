<?php ?>

<p class="post-meta categories">
    <?php 
    if ( true == get_theme_mod( 'display_icon_categories', true ) ) :
        $icon_categories = get_theme_mod( 'icon_categories', 'category' ); ?>
        <span class="dashicons dashicons-<?php echo esc_attr( $icon_categories ); ?>">
            <span class="sr-only"><?php echo __('Categories: ', 'bibliotheque'); ?></span>
        </span>
    <?php else: ?>
        <b><?php echo __('Categories: ', 'bibliotheque'); ?></b>
    <?php endif; ?>
        <?php the_category( ', '); ?> 
</p>