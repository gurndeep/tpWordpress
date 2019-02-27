<?php
    /*
Plugin Name: Raymond Voyage
Description: Modifications de WordPress (ex: ajout de forfaits) pour le site de Raymond Voyage.
Version: 1.0
Author: Jean-François Pépin
*/

    function ajout_post_forfaits(){
        $labelsForfaits = array(
            'name' => "Forfaits",
            'singular_name' => "Forfait",
            'add_new' => "Ajouter un forfait",
            'add_new_item' => "Ajouter un forfait",
            'edit_item' => "Modifier un forfait",
            'new_item' => "Nouveau forfait",
            'all_items' => "Tous les forfaits",
            'view_item' => "Voir le forfait",
            'search_items' => "Chercher un forfait",
            'not_found' =>  "Aucun forfait trouvé",
            'menu_name' => "Mes forfaits"
        );
    
        $argForfait = array(
            'labels' => $labelsForfaits,
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-palmtree',
            'supports' => array('title', 'thumbnail', 'editor', 'revisions', 'page-attributes')
        );
        register_post_type('forfaits', $argForfait);
    }
    add_action( 'init', 'ajout_post_forfaits');
    
?>
