<?php

// page d'accueil

get_header();

// La boucle normale
if ( have_posts() ):
    the_post();
    ?>
    <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    </article>
    <?php
endif;

// affichez la liste des posts
$args = array(
    'post_type' => 'post',
);

get_footer();
