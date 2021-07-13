<?php

// Page affichée si aucun autre template n'a été trouvé.
// Dans notre thème, cette page est affichée si l'utilisateur demander
// l'affichage de posts par catégorie ou par tags.

get_header();

// Le titre de la page
the_archive_title( '<h1 class="page-title">', '</h1>' );

if ( have_posts() ):
    while (have_posts()):
        the_post();

        // Template de la partie commune de la boucle des posts
        get_template_part('loop', 'post');
    endwhile;
endif;

get_footer();
