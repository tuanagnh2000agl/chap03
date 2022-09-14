<?php
/* Custom Post Type Start */
// Product Custom Post Type
function product_init() {
    // set up product labels
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'add_new' => 'Add New Product',
        'add_new_item' => 'Add New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'New Product',
        'all_items' => 'All Products',
        'view_item' => 'View Product',
        'search_items' => 'Search Products',
        'not_found' =>  'No Products Found',
        'not_found_in_trash' => 'No Products found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Products',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'product'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'product', $args );
    
    // register taxonomy
    register_taxonomy('product_category', 'product', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'product-category' )));
}
add_action( 'init', 'product_init' );

/* Custom Post Type services */
function create_posttype() {
    register_post_type(
        'services',
        array(
            'label' => 'services',
            'labels' => array(
                'all_items' => 'services all',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new service',
                'edit_item' => 'Edit',
                'new_item' => 'new item',
                'view_item' => 'view',
                'search_items' => 'search',
                'not_found' => 'not found',
                'not_found_in_trash' => 'not found in trash',
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => [ 'title', 'thumbnail', 'editor' ],
        ));
    }
add_action( 'init', 'create_posttype' );
/* Custom Post Type publish */
function create_posttype_publish() {
    register_post_type(
        'publish',
        array(
            'label' => 'publish',
            'labels' => array(
                'all_items' => 'publish all',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new service',
                'edit_item' => 'Edit',
                'new_item' => 'new item',
                'view_item' => 'view',
                'search_items' => 'search',
                'not_found' => 'not found',
                'not_found_in_trash' => 'not found in trash',
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => [ 'title', 'thumbnail', 'editor' ],
        ));
    }
add_action( 'init', 'create_posttype_publish' );
// create breadcrumbs
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_archive() || is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#62;&nbsp;&nbsp;";
        $ar_title = get_the_archive_title();
        $ar_title = explode(":",$ar_title);
        $ar_title = strip_tags($ar_title[1]);
        echo $ar_title;
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#62;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#62;&nbsp;&nbsp;";
        echo the_title();
    }
    elseif (is_404()) {
        echo "&nbsp;&nbsp;&#62;&nbsp;&nbsp;";
        echo '404';
    } 
}
// add image
add_theme_support( 'post-thumbnails' );

// get first image
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
   
    if(empty($first_img)){ //Defines a default image
      $first_img = "/images/default.jpg"; //Duong dan anh mac dinh khi khong tim duoc anh dai dien
    }
    return $first_img;
}
// Edit size image
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
     add_image_size( 'home-thumb', 1050, 400); 
}
// pagination
function pagination_bar($custom_query = null, $paged = null) {
    global $wp_query;
    if($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $big = 999999999;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'prev_text'    => ' ',
        'next_text'    => ' ',
        'current' => max( 1, $paged),
        'prev_next'    => True,
        'total' => $total
    ) );
}
// create menu
function createMenu(){
    register_nav_menu('header-menu',__( 'Menu main' ));
}
add_action('init', 'createMenu');

?>

