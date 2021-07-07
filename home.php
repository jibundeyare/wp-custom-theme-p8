<?php

// liste des posts

get_header();

// Les paramètres de la requête WP_QUery
$args = array(
    // Sélection de pages (au lieu de posts)
    'post_type' => 'page',
    // Sélection d'une page par son slug
    'pagename' => 'actus',
);

// Exécution de la requête WP_Query
$query = new WP_Query( $args );

// Affichage du résultat de la requête WP_Query avec la boucle
if ( $query->have_posts() ):
    $query->the_post();
    ?>
    <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    </article>
    <?php
endif;

// Restauration des paramètres originaux de la requête de l'utilisateur
wp_reset_postdata();

// La boucle normale
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
        </article>
        <?php
    endwhile;
endif;

get_footer();
