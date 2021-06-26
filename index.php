<?php get_header(); ?>


<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ($paged == 1) {
    $perpage = 9;
} else {
    $perpage = 10;
}
$args = array(
    'posts_per_page' => $perpage, 
    'paged' => $paged 
);
query_posts($args);

if ( have_posts() ) :
    $postcount = 0; ?>

    <main id="primary" class="site-main container-inner" role="main">

            <?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
            <?php endif; ?>

            <div class="posts-grid">
                <?php

                while ( have_posts() ) :
                    the_post();
                    $postcount++;

                    if ($postcount == 1 && $paged == 1) :

                    get_template_part( 'template-parts/list', 'firstpost' );

                    else:

                    get_template_part( 'template-parts/list', 'posts' );

                    endif;

                endwhile;
                
                ?>
            </div> <!-- Posts Grid -->
        </main>

        <div class="container">
            <?php the_posts_navigation();?>
        </div>

<?php else :

    get_template_part( 'template-parts/content', 'none' );

endif; ?>


</div><!-- .content-layer -->
<div class="sticky-bottom">
    <?php 
    get_sidebar();
    get_footer(); ?>
</div>
</div><!-- #page -->