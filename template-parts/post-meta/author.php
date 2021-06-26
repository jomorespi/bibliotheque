<?php ?>

<p class="post-meta author">
    <?php 
    if ( true == get_theme_mod( 'display_icon_author', true ) ) :
        $icon_author = get_theme_mod( 'icon_author', 'admin-users' ); ?>
        <span class="dashicons dashicons-<?php echo esc_attr( $icon_author ); ?>"></span>
    <?php endif; 
        the_author(); ?>
</p>