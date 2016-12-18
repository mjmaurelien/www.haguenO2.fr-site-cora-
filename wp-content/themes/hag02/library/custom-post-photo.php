<?php
function photo_posts_type(){
  $labels_photo_post_type_array = array(
            'name'                  =>  __('photos', 'haguen02'),
            'singular_name'         =>  __('photos', 'haguen02'),
            'add_new'               =>  __('Ajouter une photo', 'haguen02'),
            'add_new_item'          =>  __('Ajouter une photo', 'haguen02'),
            'edit_item'             =>  __('Editer la photo', 'haguen02'),
            'new_item'              =>  __('Nouvelle astuce', 'haguen02'),
            'view_item'             =>  __('Visualiser la photo', 'haguen02'),
            'search_items'          =>  __('Rechercher une photo', 'haguen02'),
            'not_found'             =>  __('Aucun photo', 'haguen02'),
            'not_found_in_trash'    =>  __('Aucun photo dans la corbeille', 'haguen02'),
            'parent_item_colon'     =>  __('--', 'haguen02'),
            'menu_name'             =>  __('photos', 'haguen02')
        );
        $supports_photo_post_type_array = array(
            'title',
            'editor',
            'thumbnail',

        );
        $rewrite_photo_post_type_array = array(
            'slug'          =>  _x('photo', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_photo_post_type_array = array(
            'labels'                =>  $labels_photo_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'haguen02'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  'dashicons-clock',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_photo_post_type_array,
            'rewrite'               =>  $rewrite_photo_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('photo', $args_photo_post_type_array);
        $labels_serie = array(
		'name'              => _x('Catégorie', 'taxonomy general name'),
		'singular_name'     => _x('Catégorie', 'taxonomy singular name'),
		'search_items'      => __('Rechercher une catégorie'),
		'all_items'         => __('Toutes les catégories'),
		'edit_item'         => __('Éditer une catégories'),
		'update_item'       => __('Mettre à jour une catégorie'),
		'add_new_item'      => __('Ajouter une catégorie'),
		'new_item_name'     => __('Nouvelle catégorie'),
		'menu_name'         => __('Catégories'),
    	);
    	// register taxonomy
    	register_taxonomy( 'photo', 'photo', array(
    		'hierarchical' => true,
    		'labels' => $labels_serie,
    		'query_var' => true,
    		'show_admin_column' => true,
        'rewrite' => 'slug'
    	) );
      }
      add_action('init','photo_posts_type', 1);
