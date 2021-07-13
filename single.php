<?php

get_header();

if ( have_posts() ):
    the_post();
    ?>
    <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_time( get_option( 'date_format' ) ); ?></div>
        <?php
        // Affichage de la vignette
        if ( has_post_thumbnail() ):
            the_post_thumbnail( 'medium' );
        endif;
        ?>
        <div><?php the_content(); ?></div>
        <?php
        // Affichage des tags dans une liste
        the_terms( $post->ID, 'post_tag', '<ul><li>', '</li><li>', '</li></ul>' );

        // Affichage des catégories dans une liste
        the_terms( $post->ID, 'category', '<ul><li>', '</li><li>', '</li></ul>' );
        ?>
    </article>
    <?php
endif;

get_footer();
