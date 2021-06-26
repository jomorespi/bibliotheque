<?php
/** Archive Page **/
get_header(); ?>

	<main id="primary" class="site-main container-inner" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>

			<div class="posts-grid">
				<?php
				while ( have_posts() ) :
					the_post();
				
					get_template_part( 'template-parts/list', 'posts' );
				endwhile;
				the_posts_navigation(); ?>
			</div>
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main>

</div><!-- .content-layer -->
<div class="sticky-bottom">
    <?php 
    get_sidebar();
    get_footer(); ?>
</div>
</div><!-- #page -->