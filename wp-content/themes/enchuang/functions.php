<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Enchuang 
 * @since 1.0
 */

/**
 * Load Framework to support configuration of enchuang.
 *
 * @since enchuang 1.0
 */
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/framework/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/framework/framework.php' );
 }

if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/enchuang-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/enchuang-config.php' );
}

/**
 * Enqueues scripts and styles.
 *
 * @since Enchuang 1.0
 */
function enchuang_scripts() {
    

	    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '' );
       // Theme stylesheet.
	    wp_enqueue_style( 'general-style', get_stylesheet_uri() );

	    // Load other stylesheet.
      if( get_locale() == 'zh_CN'){
	    wp_enqueue_style( 'enchuang-cn-style', get_template_directory_uri() . '/css/style-cn.css', array(), '' );
      }else{
	    wp_enqueue_style( 'enchuang-style', get_template_directory_uri() . '/css/style.css', array(), '' );
      }
    
	    // Load the javascripts
      wp_deregister_script('jquery');
	    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true );


	    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
	    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '', true );

	    wp_enqueue_script( 'fakeloader', get_template_directory_uri() . '/js/fakeLoader.min.js', array(), '', true );
	    wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array(), '', true );
	    wp_enqueue_script( 'demo1', get_template_directory_uri() . '/js/demo1.js', array(), '', true );


	    wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/js/jquery.mmenu.min.js', array( 'jquery' ), '', true );
	    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', true );


	    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array( 'jquery' ), '', true );
	    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '', true );


	    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '', true );
	    wp_enqueue_script( 'toucheffects', get_template_directory_uri() . '/js/toucheffects.js', array(), '', true );


	    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '', true );
	    wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), '', true );


	    //wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact_me.js', array( 'jquery' ), '', true );
	    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

	    // Load the html5 shiv.
	    wp_enqueue_script( 'html5shive', get_theme_file_uri( '/js/html5shiv.min.js' ), array(), '3.7.2' );
    	wp_script_add_data( 'html5shive', 'conditional', 'lt IE 9' );

      wp_enqueue_script( 'respond', get_theme_file_uri( '/js/respond.min.js' ), array(), '1.4.2' );
	    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );


}
add_action( 'wp_enqueue_scripts', 'enchuang_scripts' );

/*
 * create  new image styles for  enchuang theme
 */
function enchuang_new_image_sizes(){

  //add featured image
  add_theme_support( 'post-thumbnails' );

	add_image_size( 'header_background_image', 1600,  988, array( 'center', 'center' ) );
  //product image
	add_image_size( 'product_cover', 533,  533, array( 'center', 'center' ) );
	add_image_size( 'product_header_background', 1920,  894, array( 'center', 'center' ) );
	add_image_size( 'product_album', 1024,  657, array( 'center', 'center' ) );

	add_image_size( 'home_news_image', 827,  453, array( 'center', 'center' ) );

  //about-us repeater image
	add_image_size( 'about_us_content_image', 1000, 500, array( 'center', 'center' ) );

 }

 add_action('after_setup_theme', 'enchuang_new_image_sizes');
 

/*
*
* remove dns prefetch
*
*/

function enchuang_remove_dns_prefetch( $hints, $relation_type ) {

    if ( 'dns-prefetch' === $relation_type ) {
    
    return array_diff( wp_dependencies_unique_hosts(), $hints );
    
    }

return $hints;
}

add_filter( 'wp_resource_hints', 'enchuang_remove_dns_prefetch', 10, 2 );

//remove some unnecessary tags in header generated by wordpress
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rest_output_link_wp_head');

 /*
 * register header menu and footer menu
 */
 function enchuang_register_menus() {
       register_nav_menus(
	       array(
	         'header-menu' => __( 'Header Menu' ),
		       'footer-menu' => __( 'Footer Menu' ),
	            )
          );
        }
 add_action( 'init', 'enchuang_register_menus' );


// header menu on pc

class Enchuang_Header_Menu extends Walker_Nav_Menu {

		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
   
      global $wp_query;
      $has_children = get_posts(array('post_type' => 'nav_menu_item', 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID)); /* Does the current item have any children? */

		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

    if( $has_children ){

     $classes[] = 'active';
     $classes[] = 'sub';

    }
		$classes[] = 'menu-item-' . $item->ID;

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filters the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title The menu item's title.
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $item        Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}

// header menu on pc

class Enchuang_Header_Menu_Mobile extends Walker_Nav_Menu {

		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

  	$classes[] = 'menu-item-' . $item->ID;

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filters the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title The menu item's title.
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $item        Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
 function enchuang_search_form( $form ) {

   /*  $form = '
      <form role="search" method="get" id="searchform"  action="' . home_url( '/' ) . '" >
     <input type="text" value="' . get_search_query() . '" name="s" id="s" class="search__form-field" autocomplete="off" placeholder="Search...">
     <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
     </form>';
    */

    $form = '<form role="search" id="header-search-form" class="center-block" method="get" action="' . home_url( '/' ) . '">
            <input id="header-search" type="text" placeholder="'. pll__('搜索...') . '" autocomplete="off" style="height:150px;" value="' . get_search_query() . '" name="s">
             <input type="submit" id="searchsubmit"  style="visibility: hidden" value="'. esc_attr__( 'Search' ) .'" />
          </form>';

    return $form;

 }
 add_filter( 'get_search_form', 'enchuang_search_form' );



  // limit search results on specific post types
  function enchuang_search_limit_post_type($query) {
 
          if ($query->is_search && !is_admin() ) {
                $query->set('post_type',array('product', 'post'));
              }
 
    return $query;
  }
 
add_filter('pre_get_posts','enchuang_search_limit_post_type');


// customize search results number on search result page

function enchuang_set_search_number_per_page($queryVars) {
  if ( !empty($_REQUEST['s']) ){
  $queryVars['posts_per_page'] = 5;

  }
  return $queryVars;
 }

add_filter('request', 'enchuang_set_search_number_per_page');


//get product category
function enchuang_get_product_categories( $tag = 'product_category') {
   
     $categories = get_terms([
	    'taxonomy' => $tag,
	    'hide_empty' => false,
      'parent'     => 0
	    ]);
      
       if( $tag == 'product_category'){
        $c_name = '产品类别';
        }else{
        $c_name = '新闻类别';  
       }

     $lists = '<div id="categories" class="widget posts_holder">'."\n";
     $lists .= '<h5>' . pll__($c_name). '</h5>'."\n";
     $lists .= '<ul>'. "\n";

  foreach( $categories  as $category) {

    $lists .= '<li class="cat-item">'."\n";
    $lists .= '<a href="' . esc_url( get_category_link( $category->term_id ) ).'">' . pll__( esc_attr( $category->name )) .'</a>' ."\n";
    $lists .= '</li>' . "\n";

   }	

  $lists .= '</ul>'."\n";
  $lists .= '</div>'."\n";

  return $lists;
}


//get product category
function enchuang_product_center_categories() {
   
     $categories = get_terms([
	    'taxonomy' => 'product_category',
	     'hide_empty' => false,
       'parent' => 0
	    ]);

     $lists = '<div class="text-center">'. "\n";
     $lists .= '<ul class="portfolio-filter">'."\n";
     $lists .= '<li><a class="active margin-5" href="#" data-filter="*">'.pll__('全部') . '</a></li>'."\n";

  foreach( $categories  as $category) {

    $lists .= '<li><a class="" href="#" data-filter=".' . esc_attr($category->slug) . '">' . pll__( esc_attr( $category->name )) . '</a></li>' ."\n";

   }	

  $lists .= '</ul></div>'."\n";

  return $lists;
}


//mission's loop on homepage

function enchuang_home_mission( $h_services ){
  
    $new_services = array();

    foreach( $h_services as $new_ser ){
      
      $new_services[] = '<div class="col-lg-4 col-md-4 col-sm-4 services"><i class="fa ' . $new_ser['home_mission_content_icon'] .'"></i><h3>' . $new_ser['home_mission_content_title'] .'</h3>' . $new_ser['home_mission_content_desc'] .'</div>';
      }
  
  return $new_services;
  
  }

//mission's loop on homepage

function enchuang_service_mission( $h_services ){
  
    $new_services = array();

    foreach( $h_services as $new_ser ){
      
      $new_services[] = '<div class="col-lg-4 col-md-4 col-sm-4 services"><i class="fa ' . $new_ser['service_sec_desc_icon'] .'"></i><h3>' . $new_ser['service_sec_desc_title'] .'</h3>' . $new_ser['service_sec_desc_content'] .'</div>';
      }
  
  return $new_services;
  
  }

// service center 

function enchuang_service_center( $arr ){
 
  $center = array();
  
  foreach( $arr as $a ){
  
   $title = empty($a['service_third_process_link']) ? $a['service_third_process_title'] : '<a href="' . $a['service_third_process_link'] .'" target="_blank">' . $a['service_third_process_title'] . '</a>';

   $center[] = '<div class="col-lg-6 col-md-6 col-sm-6"><i class="fa ' . $a['service_third_process_icon'] . '"></i><h4>' . $title . '</h4><p class="desc">' . strip_tags($a['service_third_process_content']) . '</div>'; 

    }

   return $center;
  }
  

//get product category
function enchuang_get_product_sub_categories( $tax = 'product_category', $term_id, $tax_parent ) {
   
     $id = $tax_parent == 0 ? $term_id : $tax_parent;
     $term_obj = get_term_by('id', $id, $tax);

     $categories = get_terms([
	    'taxonomy' => $tax,
	    'hide_empty' => false,
      'child_of' => $id,
	    ]);
      
     $lists = '<div id="categories" class="widget posts_holder">'."\n";
     $lists .= '<h5><a href="' . esc_url(get_category_link($id)) . '">' . pll__($term_obj->name). '</a></h5>'."\n";
     $lists .= '<ul>'. "\n";

  foreach( $categories  as $category) {

    $lists .= '<li class="cat-item">'."\n";
    $lists .= '<a href="' . esc_url( get_category_link( $category->term_id ) ).'">' . pll__( esc_attr( $category->name )) .'</a>' ."\n";
    $lists .= '</li>' . "\n";

   }	

  $lists .= '</ul>'."\n";
  $lists .= '</div>'."\n";

  return $lists;
}

//disable special plugin update

add_filter('site_transient_update_plugins', 'enchuang_remove_update_notification');
function enchuang_remove_update_notification($value) {
      unset($value->response["wonderplugin-lightbox/wonderpluginlightbox.php"]);
            return $value;
} 


  // add class to prev and next post link                                             
add_filter('next_post_link', 'next_post_link_attributes');                          
add_filter('previous_post_link', 'prev_post_link_attributes');                      

function prev_post_link_attributes($output) {                                       
  $code = 'class="prev"';                                                     
  return str_replace('<a href=', '<a '.$code.' href=', $output);                    
}                                                                                   

function next_post_link_attributes($output) {                                       
  $code = 'class="next"';                                                     
  return str_replace('<a href=', '<a '.$code.' href=', $output);                    
}                                                                                   

 
 //function to output one taxtonomy 
 function enchuang_output_product_lists( $term_id, $term_name ){                           
            $args = array(
                'post_type' => 'product',
                'post_status' => 'publish',                                                             
                'posts_per_page'  => -1,                                                               
                'tax_query' =>array( 
                     array(
                    'taxonomy' => 'product_category',    
                    'field'    => 'term_id',
                    'terms'    => array($term_id )
                      )
                  )
            );                                                                         
            $query = new WP_Query( $args );                                                  
              if( $query->have_posts() ){                                                      
                $p_item = '<div class="post">
			            <div id="tag_cloud" class="widget posts_holder post-text">
                  <h5><a href="' . get_term_link($term_id) . '">' . $term_name . '</a></h5>
                  <div class="tagcloud">'."\n";                                                                    
                    while( $query->have_posts()){                                                      
                             $query->the_post();                                                            
                            $p_item .= '<a href="' . get_permalink() . '">' . trim(get_the_title())  . '</a>';

                 }
               
                $p_item .= '</div></div></div>';

                  wp_reset_postdata();
                }

            return $p_item;

 }
