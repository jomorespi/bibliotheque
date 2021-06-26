<?php 
/** Global footer **/
wp_footer(); ?>

<footer id="footer">
    <div class="container">
        <div class="footer-wrapper">
            
            <div>
                <?php
                if( get_theme_mod( 'footer_one' ) != '' ) {
                    echo get_theme_mod( 'footer_one' );
                } else {
                    esc_html_e( 'Bibliothèque Theme', 'bibliotheque' );
                } ?>
            </div>

            <div>
                <?php
                if( get_theme_mod( 'footer_two' ) != '' ) {
                    echo get_theme_mod( 'footer_two' );
                } else {
                    esc_html_e( 'Powered by Wordpress', 'bibliotheque' );
                } ?>
            </div>
            
        </div> <!-- Footer wrapper -->
    </div> <!-- Container -->
</footer>

</body>
</html>