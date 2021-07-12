<?php

// page d'accueil

get_header();

// La boucle normale
if ( have_posts() ):
    the_post();

    // Le contenu du bloc entête
    get_template_part('header', 'page');
endif;

// Les paramètres de la requête WP_QUery
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

        // La boucle
        get_template_part('loop', 'post');
    endwhile;
endif;

// Restauration des paramètres originaux de la requête de l'utilisateur
wp_reset_postdata();

get_footer();
