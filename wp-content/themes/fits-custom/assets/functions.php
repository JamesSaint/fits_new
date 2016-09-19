<?php
// =======================================================================//
// !                        enqueue_scripts                               //
// =======================================================================//

function load_js_and_css_scripts() {

// CSS

    // Register the script
    wp_register_style( 'reset-css', get_template_directory_uri() . '/assets/css/reset.css', false, false, 'all');
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', false, false, 'all');
    wp_register_style( 'flexSlider-css', get_template_directory_uri() . '/assets/css/flexslider.css', false, false, 'all');
    wp_register_style( 'font-awesome-css', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', false, false, 'all');
    wp_register_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', false, false, 'all');
    wp_register_style( 'main-css-styles', get_template_directory_uri() . '/style.css', false, false, 'all');
    wp_register_style( 'print-css-styles', get_template_directory_uri() . '/assets/css/print.css', false, false, 'print');

    // call the scripts
    wp_enqueue_style( 'reset-css' );
    wp_enqueue_style( 'bootstrap-css' );
    wp_enqueue_style( 'flexSlider-css' );
    wp_enqueue_style( 'animate-css' );
    wp_enqueue_style( 'font-awesome-css' );
    wp_enqueue_style( 'main-css-styles' );
    wp_enqueue_style( 'print-css-styles' );

// Javascripts

   // Register the script
    wp_register_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.js' , array( 'jquery' ), false, true );
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' , array( 'jquery' ), false, true );
    wp_register_script( 'flex-slider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js' , array( 'jquery' ), false, true );
    //wp_register_script( 'backstretch-js', get_template_directory_uri() . '/assets/js/jquery.backstretch.min.js' , array( 'jquery' ), false, true );
    //wp_register_script( 'NiceScroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js' , array( 'jquery' ), false, true );
    wp_register_script( 'customJs', get_template_directory_uri() . '/assets/js/custom.js' , array( 'jquery' ), false, true );

    // call the scripts
    wp_enqueue_script( 'jQuery' );
    wp_enqueue_script( 'flex-slider-js' );
    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_script( 'backstretch-js' );
    //wp_enqueue_script( 'NiceScroll' );
    wp_enqueue_script( 'customJs' );

}

add_action( 'wp_enqueue_scripts', 'load_js_and_css_scripts' );

// =======================================================================//
// !                      Theme Options                                   //
// =======================================================================//

// [Source] http://youtu.be/AjC2cP3WcEo

//require_once 'settings/load-theme.php';
//require_once 'settings/options/theme_options_tabbed.php';

// =======================================================================//
// !                        Register Menus                                //
// =======================================================================//

function mytheme_setup() {
register_nav_menus( array(
  'primary_nav' => 'Primary Nav',   // Primary Nav Registration
  'sidbar_nav' => 'Sidebar Nav',
    'destinations_nav' => 'Destinations Nav'
  ) );
}

add_action( 'after_setup_theme', 'mytheme_setup' );

// =======================================================================//
// !                Require Walker Nav Menu Script                        //
// =======================================================================//

require 'assets/css/bootstrap-wp-navwalker.php';


// =======================================================================//
// !                Add Thumbnail Support & Image sizes                   //
// =======================================================================//

if ( function_exists( 'add_theme_support' ) ) {

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
add_image_size( 'featured', 830, 467 );

}

// =======================================================================//
// !                       Register Widgets                               //
// =======================================================================//

function right_sidebar_widgets_init() {
    register_sidebar( array(
        'name'          => __('Right Sidebar Widgets'),
        'id'            => 'js_right_sidebar',
        'before_widget' => '<aside id="%1$s" class="sidebar-widget widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="sidebar-widget-title">',
        'after_title'   => '</h3>'
    ) );
}
add_action( 'widgets_init', 'right_sidebar_widgets_init' );

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
// !              Adjust from Default [...] more tag to ...               //
// =======================================================================//

function new_excerpt_more( $more ) {
    return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
