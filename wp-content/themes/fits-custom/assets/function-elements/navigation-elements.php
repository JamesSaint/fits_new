<?php  
// =======================================================================// 
// !                Require Walker Nav Menu Script                        //
// =======================================================================// 

require_once('../plugins/bootstrap-nav-walker/wp_bootstrap_navwalker.php');

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