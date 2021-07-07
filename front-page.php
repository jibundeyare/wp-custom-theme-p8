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
    // Sélection de tous les posts
    'post_type' => 'post',
);

// Exécution de la requête WP_Query
$query = new WP_Query( $args );

// Affichage du résultat de la requête WP_Query avec la boucle
if ( $query->have_posts() ):
    while ( $query->have_posts() ):
        $query->the_post();
        ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        </article>
        <?php
    endwhile;
endif;

// Restauration des paramètres originaux de la requête de l'utilisateur
wp_reset_postdata();

get_footer();
