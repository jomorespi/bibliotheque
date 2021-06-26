<?php 
/** Global header **/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    
    <?php wp_head(); ?>
    <?php require get_template_directory() . '/inc/customizer/styles.php'; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div class="content-layer">
    <header id="masthead" class="site-header container">
        <?php require get_template_directory() . '/inc/header-img.php'; ?>
        <div class="container-inner">
            <div class="site-branding">

                <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title">
                        <?php if ( get_theme_mod( 'bibliotheque_logo' ) ) : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'bibliotheque_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="site-logo"></a>
                        <?php else: ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        <?php endif; ?>
                    </h1>
                <?php else: ?>
                    <p class="site-title">
                        <?php if ( get_theme_mod( 'bibliotheque_logo' ) ) : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'bibliotheque_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="site-logo"></a>
                        <?php else: ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>
               
                <?php
                if ( false == get_theme_mod( 'hide_description', false ) ) :
                    $bibliotheque_description = get_bloginfo( 'description', 'display' );
                    if ( $bibliotheque_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $bibliotheque_description; ?></p>
                <?php 
                    endif; 
                endif; 
                ?>
            </div>
        </div>

        <!-- Primary menu -->
        <button class="menu-toggle"><span class="sr-only"><?php esc_html_e( 'Primary Menu', 'bibliotheque' ); ?></span></button>
        <div class="menu-wrapper">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-menu',
                        'menu_id'        => 'primary-menu',
                        'container' => 'nav',
                        'container_id' => 'site-navigation',
                        'container_class' => 'main-navigation',
                    )
                );
            ?>

            <?php 
                if ( true == get_theme_mod( 'header_search', true ) ) {
                    get_search_form(); 
                } 
            ?>
        </div>
        <!-- End: Primary menu -->


    </header>
