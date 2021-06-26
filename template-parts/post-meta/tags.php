<?php ?>

<p class="post-meta tags">
<?php 
    if ( true == get_theme_mod( 'display_icon_tags', true ) ) :
        $icon_tags = get_theme_mod( 'icon_tags', 'tag' ); ?>
        <span class="dashicons dashicons-<?php echo esc_attr( $icon_tags ); ?>">
            <span class="sr-only"><?php echo __('Tags: ', 'bibliotheque'); ?></span>
        </span>
    <?php else: ?>
        <b><?php echo __('Tags: ', 'bibliotheque'); ?> </b>
    <?php endif; ?>
    <?php the_tags( '', ', ' ); ?> 
</p>