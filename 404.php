<?php 
/** 404 Error Page **/
get_header(); ?>

	<main id="primary" class="site-main container-inner">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">
					<?php
						if( get_theme_mod( '404_title' ) != '' ) {
							echo get_theme_mod( '404_title' );
						} else {
							esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bibliotheque' );
						} ?>
				</h1>
			</header>

			<div class="page-content">
				<p>
				<?php
					if( get_theme_mod( '404_text' ) != '' ) {
						echo get_theme_mod( '404_text' );
					} else {
						esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'bibliotheque' );
					} ?>
				</p>

				<?php if ( true == get_theme_mod( '404_search', true ) ) : ?>
					<div class="search-inner">
						<?php
							get_search_form();
						?>
					</div>
				<?php else : ?>
					<div class="search-inner-spacing"></div>
				<?php endif; ?>
			</div>
		</section>
	</main>

	</div><!-- .content-layer -->
		<div class="sticky-bottom">
			<?php 
			get_sidebar();
			get_footer(); ?>
		</div>
	</div><!-- #page -->

