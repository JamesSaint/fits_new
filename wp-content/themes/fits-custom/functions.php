<?php

// =======================================================================// 
// !                        Register Menus                                //
// =======================================================================// 

function mytheme_setup() {
register_nav_menus( array(
	'primary_nav' => 'primary',  	// Primary Nav Registration
	'footer_nav' => 'secondary'  	// Secondary Nav Registration
	) );
}
 
add_action( 'after_setup_theme', 'mytheme_setup' );

// =======================================================================// 
// !                Require Walker Nav Menu Script                        //
// =======================================================================// 

require_once('assets/plugins/bootstrap-nav-walker/wp_bootstrap_navwalker.php');

// =======================================================================// 
// !                Bootsrtap Nav Walker Output Mods                      //
// !           Dynamically adds child categories to menu                  //
// =======================================================================// 

add_action('wp_loaded','webendev_register_nav_menu_class');

function webendev_register_nav_menu_class(){

	class Submenu_Walker_Nav_Menu extends Walker_Nav_Menu  {

	    function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
		extract($args);
			global $wp_query;
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
			$class_names = ' class="' . esc_attr( $class_names ) . '"';

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '<li' . $id . $value . $class_names .'>';

			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';

			if($item->object == 'category'){
				$child_cats = wp_list_categories('title_li=&echo=0&hide_empty=0&child_of='.$item->object_id);
				if( $child_cats ){
					$item_output .= '<ul class="sub-menu">' .$child_cats. '</ul>';
				}

			}

			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	    }

	}

}

// =======================================================================// 
// !   Custom Excerpt [$length] Function using tag - echo excerpt(10)     //
// =======================================================================// 

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

// =======================================================================// 
// !              Adjust from Default [...] more tag                      //
// =======================================================================// 

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// =======================================================================// 
// !                     Blog Page Roll Pagination                        //
// =======================================================================//

function bootblog_pagination() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '←', 'bootstrap-blog' ),
		'next_text' => __( '→', 'bootstrap-blog' ),
		'type'		=> 'list'
	) );

	if ( $links ) :

	?>
	<nav class="pagination-nav mt-60 mt-xs-30 pagination" role="navigation">
		
			<?php echo $links; ?>
			
	</nav><!-- .navigation -->
	<?php
	endif;
}

// =======================================================================// 
// !                    Register Siderbar widgets 	                      //
// =======================================================================// 

// Register sidebars by running footer_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'sidebar_widgets_init' );


function sidebar_widgets_init() {

	    // Address sidebar Widget Area, located in the sidebar. Empty by default.
    register_sidebar( array(
        'name' => __( 'Blog Post Siderbar Widgets', 'sidebar' ),
        'id' => 'sidebar-widget-area',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
         
};
// =======================================================================// 
// !                    Register Footer widgets 	                      //
// =======================================================================// 

// Register sidebars by running footer_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'footer_widgets_init' );


function footer_widgets_init() {

	    // Address Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Address Footer Widget Area', 'footer' ),
        'id' => 'address-footer-widget-area',
        'before_widget' => '<div class="col-md-3 widget widget-two">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
 
 
    // Useful Links Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Useful Links Footer Widget Area', 'footer' ),
        'id' => 'useful-links-footer-widget-area',
        'before_widget' => '<div class="col-md-3 widget widget-two">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
 
    // Recent Posts Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Recent Posts Footer Widget Area', 'footer' ),
        'id' => 'recent-posts-footer-widget-area',
        'before_widget' => '<div class="col-md-3 widget widget-three">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
         
};
 
// =======================================================================// 
// !                Add Thumbnail Support & Image sizes                   //
// =======================================================================// 
 
if ( function_exists( 'add_theme_support' ) ) { 
 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200,200,true); // default Post Thumbnail dimensions (cropped)
add_image_size( 'featured',1920,1080);
add_image_size( 'blog_post',848,524);
add_image_size( 'blog_roll',600,371);
add_image_size( 'team_member',540,458 );
add_image_size( 'page_image',1140,704);
add_image_size( 'partner_page_image',600,371);
add_image_size( 'partner-slide', 255,150);
 
};

// =======================================================================// 
// !responsive images [1) add img-responsive class [2] remove dimensions  //
// =======================================================================// 

function bootstrap_responsive_images( $html ){
  $classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'

  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );

// =======================================================================// 
// !              		  Register Custom Posts for Team                  //
// =======================================================================// 

function fits_team_post_type() {

	$labels = array(
		'name'                => _x( 'FITS Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'FITS Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'FITS Team', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Team:', 'text_domain' ),
		'all_items'           => __( 'All FITS Team Members', 'text_domain' ),
		'view_item'           => __( 'View FITS Team Member', 'text_domain' ),
		'add_new_item'        => __( 'Add New FITS Team Member', 'text_domain' ),
		'add_new'             => __( 'New FITS Team Member', 'text_domain' ),
		'edit_item'           => __( 'Edit FITS Team Member', 'text_domain' ),
		'update_item'         => __( 'Update FITS Team Member', 'text_domain' ),
		'search_items'        => __( 'Search FITS Team Members', 'text_domain' ),
		'not_found'           => __( 'No FITS Team Member found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No FITS Team Member found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'FITS Team', 'text_domain' ),
		'description'         => __( 'FITS Team', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => false,
		'menu_position'       => 20,
		'can_export'          => false,
		'has_archive'         => false,
		//'rewrite'             => array( 'slug' => 'team' ),
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'fits_team_members', $args );
}
add_action( 'init', 'fits_team_post_type', 0 );

// =======================================================================// 
// !                Register Custom Posts for Parnters             //
// =======================================================================// 

function partners_post_type() {

	$labels = array(
		'name'                => _x( 'Partners', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Partners', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Partners:', 'text_domain' ),
		'all_items'           => __( 'All Partners', 'text_domain' ),
		'view_item'           => __( 'View Partner', 'text_domain' ),
		'add_new_item'        => __( 'Add New Partner', 'text_domain' ),
		'add_new'             => __( 'New Partner', 'text_domain' ),
		'edit_item'           => __( 'Edit Partner', 'text_domain' ),
		'update_item'         => __( 'Update Partner', 'text_domain' ),
		'search_items'        => __( 'Search Partner', 'text_domain' ),
		'not_found'           => __( 'No Partner found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Partner found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Partners', 'text_domain' ),
		'description'         => __( 'Partners', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'partners', $args );
}
add_action( 'init', 'partners_post_type', 0 );

// =======================================================================// 
// !              		  Register Custom Posts for Downloads             //
// =======================================================================// 

function fits_downloads_post_type() {

	$labels = array(
		'name'                => _x( 'Downloads', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Download', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Downloads', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Team:', 'text_domain' ),
		'all_items'           => __( 'All Downloads', 'text_domain' ),
		'view_item'           => __( 'View Downloads', 'text_domain' ),
		'add_new_item'        => __( 'Add New Download', 'text_domain' ),
		'add_new'             => __( 'New Download', 'text_domain' ),
		'edit_item'           => __( 'Edit Download', 'text_domain' ),
		'update_item'         => __( 'Update Download', 'text_domain' ),
		'search_items'        => __( 'Search Downloads', 'text_domain' ),
		'not_found'           => __( 'No Downloads found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Downloads found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'FITS Team', 'text_domain' ),
		'description'         => __( 'FITS Team', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title','thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'downloads', $args );
}
add_action( 'init', 'fits_downloads_post_type', 0 );

// =======================================================================// 
// ! Custom wp-admin Login Page Logo
// =======================================================================//

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
          background-image: url(<?php bloginfo('template_url'); ?>/assets/img/fits-header-logo.svg);
		  background-size: 300px 100px;
		  background-color: #222222;
		  background-position: center center;
		  background-repeat: no-repeat;
		  margin-bottom: 20px;
		  text-indent: -9999px;
		  outline: 0;
		  overflow: hidden;
		  display: block;
		  height: 100px;
		  width: 100%;
}
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// =======================================================================// 
// ! Custom wp-admin logo links
// =======================================================================//

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// =======================================================================// 
// !              		  Remove Wordpress Version                        //
// =======================================================================// 

remove_action('wp_head', 'wp_generator');

// =======================================================================// 
// !              de-register Contact form 7 Jquery                       //
// =======================================================================// 

add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
function my_deregister_javascript() {
    wp_deregister_script( 'contact-form-7' );
}

// =======================================================================// 
// !               Custom Admin Footer Branding & Copyright               // 
// =======================================================================//

function modify_footer_admin () {
  echo 'Created by <a href="http://www.jamessaint.com" target="_blank">James Saint</a>. Powered by <a href="http://www.wordpress.org">WordPress</a>';
}

add_filter('admin_footer_text', 'modify_footer_admin');

?>