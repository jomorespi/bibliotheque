<?php get_header(); ?>

<main id="primary" class="site-main container bg-content" role="main">
    <div class="container-inner">
        <?php
    		while ( have_posts() ) :
    			the_post();
    
    			get_template_part( 'template-parts/content', 'post' );
    
    			// If comments are open or we have at least one comment, load up the comment template.
    			if ( comments_open() || get_comments_number() ) :
    				comments_template();
    			endif;
    
    		endwhile; // End of the loop.
        ?>
    </div><!-- Container -->
</main>



</div> <!-- .content-layer -->
<div class="sticky-bottom">
    <?php 
    get_sidebar();
    get_footer(); ?>
</div>
</div><!-- #page -->




