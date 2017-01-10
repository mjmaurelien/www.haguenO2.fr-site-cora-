<?php
function slider_posts_type(){
  $labels_slider_post_type_array = array(
            'name'                  =>  __('slider page principale (minmum 1280px x 150px)', 'haguen02'),
            'singular_name'         =>  __('slider page principale', 'haguen02'),
            'add_new'               =>  __('Ajouter un slider', 'haguen02'),
            'add_new_item'          =>  __('Ajouter un slider', 'haguen02'),
            'edit_item'             =>  __('Editer le slider', 'haguen02'),
            'new_item'              =>  __('Nouvelle astuce', 'haguen02'),
            'view_item'             =>  __('Visualiser le slider', 'haguen02'),
            'search_items'          =>  __('Rechercher un slider', 'haguen02'),
            'not_found'             =>  __('Aucun slider', 'haguen02'),
            'not_found_in_trash'    =>  __('Aucun slider dans la corbeille', 'haguen02'),
            'parent_item_colon'     =>  __('--', 'haguen02'),
            'menu_name'             =>  __('slider page principale', 'haguen02')
        );
        $supports_slider_post_type_array = array(
            'title',
            'thumbnail'
        );
        $rewrite_slider_post_type_array = array(
            'slug'          =>  _x('slider', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_slider_post_type_array = array(
            'labels'                =>  $labels_slider_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'haguen02'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  'dashicons-slides',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_slider_post_type_array,
            'rewrite'               =>  $rewrite_slider_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('slider', $args_slider_post_type_array);
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
    	register_taxonomy( 'slider', 'slider', array(
    		'hierarchical' => true,
    		'labels' => $labels_serie,
    		'query_var' => true,
    		'show_admin_column' => true,
        'rewrite' => 'slug'
    	) );
      }
      add_action('init','slider_posts_type', 1);
