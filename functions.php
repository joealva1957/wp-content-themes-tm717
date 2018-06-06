<?php

// REGISTRA NAVEGADOR PERSONALIZADO
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


/* ////////////////////////////////////////////////
 *  Cargar scripts y estilos.
 * //////////////////////////////////////////////// */
if ( ! function_exists( 'load_assets' ) ) :
    function load_assets() {
		// Tipografía desde SCSS (Google Fonts)
		wp_enqueue_style('https://fonts.googleapis.com/css?family=Nova+Mono');
        // Estilos
        // Permite cargar CSS
		wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
		//bxSlider
		wp_enqueue_style('bx_slider_css', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css');
       
		// Scripts
		//Permite cargar JS
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
		wp_enqueue_script('cloudfire', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
		wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
		//bxSlider
		wp_enqueue_script('bx_slider_js', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js');
		//assets/js
		wp_enqueue_script('app_js', get_template_directory_uri().'/assets/js/scripts.js');
		
	}
endif;
add_action( 'wp_enqueue_scripts', 'load_assets' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu' )
) );

//IMÁGENES DESTACADAS CON WORDPRESS
add_theme_support( 'post-thumbnails' );

//PARA DESPLEGAR IMÁGENES DESTACADAS EN TEMAS
the_post_thumbnail();

//PARA MANEJAR EL CONTENIDO DEL SLIDER DESDE EL CMS
function create_main_slider() {
        $args = array(
            'labels' => array(
                'name' => __( 'Main Slider' ),
                'singular_name' => __( 'Main Slider' ),
                'menu_name' => __( 'Main Slider' ),
                'name_admin_bar' => __( 'Main Slider' ),
                'add_new' => __('Add new'),
                'add_new_item' => __('Add New Slider'),
                'new_item' => __('New Slider'),
                'edit_item' => __('Edit Slider'),
                'view_item' => __('View Sliders'),
                'all_items' => __('All Sliders'),
                'search_items' => __('Search Slider'),
                'parent_item_color' => __('Parent Sliders:'),
                'not_found' => __('No sliders found.'),
                'not_found_in_trash' => __('No sliders found in Trash')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "main slider")
        );

        register_post_type('main-slider', $args);
    }
    
    add_action( 'init', 'create_main_slider' );

  //fin  
?>