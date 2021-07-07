<?php

get_header();

the_archive_title( '<h1 class="page-title">', '</h1>' );

if ( have_posts() ):
    while (have_posts()):
        the_post();
        ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_time( get_option( 'date_format' ) ); ?></div>
            <?php
            if ( has_post_thumbnail() ):
                the_post_thumbnail( 'medium' );
            endif;
            ?>
            <div><?php the_content(); ?></div>
        </article>
        <?php
    endwhile;
endif;

get_footer();
