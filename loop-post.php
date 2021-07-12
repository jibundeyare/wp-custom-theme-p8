<article>
    <h2><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div><?php the_time( get_option( 'date_format' ) ); ?></div>
    <a href="<?= get_permalink(); ?>">
        <?php
        if ( has_post_thumbnail() ):
            the_post_thumbnail( 'medium' );
        endif;
        ?>
    </a>
</article>
