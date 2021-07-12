<?php

get_header();

the_archive_title( '<h1 class="page-title">', '</h1>' );

if ( have_posts() ):
    while (have_posts()):
        the_post();

        // La boucle
        get_template_part('loop', 'post');
    endwhile;
endif;

get_footer();
