<?php 
/* Bibliothèque:
Template part for posts and pages content 
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
        <?php if(is_single()) : ?>
        <div class="entry-meta">
            <?php 
                $template_parts = get_theme_mod( 'posts_meta', array( 'date' ) ); 

                foreach ( $template_parts as $template_part ) {
                    get_template_part( 'template-parts/post-meta/' . $template_part );
                }
            
            ?>
            
        </div>
        <?php endif; ?>


        <div class="entry-content">
		<?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bibliotheque' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

        <?php if ( get_edit_post_link() ) : ?>
            <footer class="entry-footer">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Edit <span class="screen-reader-text">%s</span>', 'bibliotheque' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </footer><!-- .entry-footer -->
        <?php endif; ?>
</article>
<div class="clear"></div>