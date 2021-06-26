<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-post="first">
    <p class="date"><time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time></p>
    <h2><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
</article>