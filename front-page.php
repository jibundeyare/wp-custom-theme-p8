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
        ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_time( get_option( 'date_format' ) ); ?></div>
            <?php
            if ( has_post_thumbnail() ):
                the_post_thumbnail( 'medium' );
            endif;
            ?>
        </article>
        <?php
    endwhile;
endif;

// Restauration des paramètres originaux de la requête de l'utilisateur
wp_reset_postdata();

get_footer();
