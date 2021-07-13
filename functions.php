<?php

/**
 * composer
 */

// chargement de l'autoloading de composer
require get_template_directory().'/vendor/autoload.php';

/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define( 'DISALLOW_FILE_EDIT', true );

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set( 'Europe/Paris' );
// choix du réglage régional
setlocale( LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1' );

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles() {
    // chargement de la feuille de style de bootstrap
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', [] );

    // chargement de la feuille de style du thème
    wp_enqueue_style( 'my-theme-main', get_stylesheet_directory_uri().'/css/main.css', ['bootstrap'] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script() {
    // chargement du script JS de bootstrap
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [] );

    // chargement du script JS du thème
    wp_enqueue_script( 'my-theme-main', get_stylesheet_directory_uri().'/js/main.js', ['bootstrap'] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_script' );

/**
 * fonctionnalités du thème
 */

// activation de la fonctionnalité des balises HTML5
add_theme_support( 'html5' );
// activation de la fonctionnalité du titre du site
add_theme_support( 'title-tag' );
// activation de la fonctionnalité des vignettes
add_theme_support( 'post-thumbnails' );

/**
 * médias
 */

// fixe la largeur maximum des images utilisées par le site
if ( !isset( $content_width ) ) {
    $content_width = 800;
}
