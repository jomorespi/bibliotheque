<?php get_header(); ?>

<main id="primary" class="site-main container-inner" role="main">
    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php
                printf( esc_html__( 'Search Results for: %s', 'bibliotheque' ), '<u>' . get_search_query() . '</u>' );
                ?>
            </h1>
        </header><!-- .page-header -->

        <?php
        echo "<div class=\"posts-grid\">";
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/list', 'posts' );
            
        endwhile;

        echo "</div>";
        echo "</main>";
        echo "<div class=\"container\">";
        
        the_posts_navigation();

        echo "</div>";

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

</div> <!-- .content-layer -->
<div class="sticky-bottom">
    <?php 
    get_sidebar();
    get_footer(); ?>
</div>
</div><!-- #page -->