<?php
  $primary_color = get_theme_mod('primary_color');
  $secondary_color = get_theme_mod('secondary_color');
?>

<style>
  
  /*** Primary Color ***/

  <?php if( $primary_color != '' ): ?>
  .content-layer, 
  #footer,
  #masthead .menu-wrapper .searchform { 
    background-color: <?php echo $primary_color; ?>; 
  }

  .site-main.bg-content a,
  .sticky-bottom a {
    box-shadow: inset 0 -10px <?php echo $primary_color; ?>;
  }

  .site-main.bg-content a:hover,
  .sticky-bottom a:hover {
    box-shadow: inset 0 -15px <?php echo $primary_color; ?>;
  }

  <?php endif; ?>

  /*** Secondary Color ***/

  <?php if( $secondary_color != '' ): ?>

  #masthead #header-bg span,
  #masthead #primary-menu,
  .site-main.bg-content,
  .sticky-bottom,
  #masthead #primary-menu > ul > li > .children,
  .site-main .posts-grid article.sticky,
  input[type="text"],
  input[type="tel"],
  input[type="email"],
  input[type="number"],
  input[type="datetime-local"],
  input[type="date"],
  input[type="file"],
  input[type="image"],
  input[type="month"],
  input[type="number"],
  input[type="password"],
  input[type="search"],
  input[type="time"],
  input[type="url"],
  input[type="week"],
  select,
  button:hover,
  input[type="submit"]:hover {
    background-color: <?php echo $secondary_color; ?>;
  }

  button,
  input[type="submit"],
  .sticky-bottom .widget-area .widgets-container .widget.widget_categories ul li a:hover, 
  .sticky-bottom .widget-area .widgets-container .widget.widget_nav_menu ul li a:hover,
  .sticky-bottom .widget-area .widgets-container .widget.widget_calendar .calendar_wrap .wp-calendar-table caption {
    color: <?php echo $secondary_color; ?>;
  }

  <?php endif; ?>

  /***** Title font size ************/

  <?php if( get_theme_mod( 'title-font-size' ) ): ?>
  #masthead .site-branding .site-title {
    font-size: <?php echo get_theme_mod( 'title-font-size' ) ?>rem;
  }
  <?php endif; ?>

  <?php if ( true == get_theme_mod( 'title_break', true ) ) : ?>
    #masthead .site-branding .site-title a {
      word-wrap: break-word;
    }
  <?php else : ?>
    #masthead .site-branding .site-title a {
      word-wrap: initial;
    }
  <?php endif; ?>

  <?php if( get_theme_mod( 'tagline-font-size' ) ): ?>
    #masthead .site-branding .site-description {
      font-size: <?php echo get_theme_mod( 'tagline-font-size' ); ?>rem;
    }
  <?php endif; ?>

  <?php if( get_theme_mod( 'heading-font-size' ) ): ?>
  .site-main .entry-title, 
  .site-main .page-title {
    font-size: <?php echo get_theme_mod( 'heading-font-size' ) ?>rem;
  }
  <?php endif; ?>

  <?php if ( true == get_theme_mod( 'heading-uppercase', true ) ) : ?>
    .site-main .entry-title, 
    .site-main .page-title,
    .site-main h1,
    .site-main h2,
    .site-main h3,
    .site-main h4,
    .site-main h5,
    .site-main h6 {
      text-transform: uppercase;
    }
  <?php else : ?>
    .site-main .entry-title, 
    .site-main .page-title {
      text-transform: none;
    }
  <?php endif; ?>

</style>