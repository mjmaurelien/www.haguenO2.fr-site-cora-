<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );
require_once( 'library/custom-post-bandeau.php' );
require_once( 'library/custom-post-portfolio.php' );
require_once( 'library/custom-post-magasins.php' );
require_once( 'library/custom-post-horaire.php' );
/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );
function admin_css() {

$admin_handle = 'admin_css';
$admin_stylesheet = get_template_directory_uri() . '/css/admin.css';

wp_enqueue_style( $admin_handle, $admin_stylesheet );
}
add_action('admin_print_styles', 'admin_css', 11 );


/*
Objectif : Permettre à toutes les personnes du role "Editeur" de pouvoir manipuler le menu de son site Internet
            - Etape 1 : Ajouter au role Editeur l'accès à l'Apparence du site
            - Etape 2 : Retirer tous les sous menu du menu "Apparence" saus le sous menu "Menus"
*/
$roleObject = get_role( 'editor' );
if (!$roleObject->has_cap( 'edit_theme_options' ) ) {
    $roleObject->add_cap( 'edit_theme_options' );
}

function hide_menu() {
    // Si le role de l'utilisatieur ne lui permet pas d'ajouter des comptes (autrement dit si il n'est pas admin)
    if(!current_user_can('add_users')) {
      remove_submenu_page( 'themes.php', 'themes.php' ); // hide the theme selection submenu
      remove_submenu_page( 'themes.php', 'widgets.php' ); // hide the widgets submenu
      remove_submenu_page( 'themes.php', 'theme-editor.php' ); // hide the editor menu

      // Le code suisant c'est juste poure retirer le sous menu "Personnaliser"
      $customize_url_arr = array();
      $customize_url_arr[] = 'customize.php'; // 3.x
      $customize_url = add_query_arg( 'return', urlencode( wp_unslash( $_SERVER['REQUEST_URI'] ) ), 'customize.php' );
      $customize_url_arr[] = $customize_url; // 4.0 & 4.1
      if ( current_theme_supports( 'custom-header' ) && current_user_can( 'customize') ) {
          $customize_url_arr[] = add_query_arg( 'autofocus[control]', 'header_image', $customize_url ); // 4.1
          $customize_url_arr[] = 'custom-header'; // 4.0
      }
      if ( current_theme_supports( 'custom-background' ) && current_user_can( 'customize') ) {
          $customize_url_arr[] = add_query_arg( 'autofocus[control]', 'background_image', $customize_url ); // 4.1
          $customize_url_arr[] = 'custom-background'; // 4.0
      }
      foreach ( $customize_url_arr as $customize_url ) {
          remove_submenu_page( 'themes.php', $customize_url );
      }

    }

}
add_action('admin_head', 'hide_menu');
