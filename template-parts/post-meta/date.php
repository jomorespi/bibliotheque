<?php ?>
<p class="post-meta date">
    <?php 
    if ( true == get_theme_mod( 'display_icon_date', true ) ) :
        $icon_date = get_theme_mod( 'icon_date', 'calendar' ); ?>
        <span class="dashicons dashicons-<?php echo esc_attr( $icon_date ); ?>"></span>
    <?php endif; ?>
    <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time>
</p>