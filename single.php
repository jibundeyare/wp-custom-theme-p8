<?php

get_header();

if ( have_posts() ):
    the_post();
    ?>
    <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_time( get_option( 'date_format' ) ); ?></div>
        <?php
        if ( has_post_thumbnail() ):
            the_post_thumbnail( 'medium' );
        endif;
        ?>
        <div><?php the_content(); ?></div>
        <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
        <div>
            <?php the_category( ', ' ); ?>
        </div>
    </article>
    <?php
endif;

get_footer();
