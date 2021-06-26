<?php 
    if ( false == get_theme_mod( 'disable_comments', false ) ) :
?>

<p class="post-meta comments"><?php 
    if ( true == get_theme_mod( 'display_icon_comments', true ) ) :
        $icon_comments = get_theme_mod( 'icon_comments', 'admin-comments' ); ?>
        <span class="dashicons dashicons-<?php echo esc_attr( $icon_comments ); ?>"></span>
    <?php endif; 
    comments_number();
?></p>

<?php endif; ?>