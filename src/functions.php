<?php

// SECURITY
// remove output of wordpress version in source
remove_action('wp_head', 'wp_generator');

// remove Customize menu
add_action('admin_menu', function () {
  global $submenu;

  foreach ($submenu as $name => $items) {
      if ($name === 'themes.php') {
          foreach ($items as $i => $data) {
              if (in_array('customize', $data, true)) {
                  unset($submenu[$name][$i]);

                  return;
              }
          }
      }
  }
});

// remove GUI file editor
define('DISALLOW_FILE_EDIT', TRUE);

// GENERAL WP
// add menu locations
function register_vocabulary_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Navigation' ),
     )
   );
 }
 add_action( 'init', 'register_vocabulary_menus' );

//  add support for featured image on posts
 add_theme_support( 'post-thumbnails' );

 // add custom image sizes
// add_image_size( 'square', 300, 300, true ); // Hard crop

update_option( 'thumbnail_size_w', 300 );
update_option( 'thumbnail_size_h', 300 );


//  Thanks to Chris Coyier & Caspar Hübinger
//  https://css-tricks.com/snippets/wordpress/insert-images-within-figure-element-from-media-uploader/
//  modify html wrapping img to be figure when inserted into WYSIWYG editor
 function insert_image_as_figure( $html, $id, $caption, $title, $align, $url, $size, $alt, $rel ) {
  $src  = wp_get_attachment_image_src( $id, $size, false );
  $figure = "<figure id='post-$id media-$id' class='align-$align'>";
  $figure .= '<img src="'.$src[0].'" alt="'.$alt.'" />';
  if ($caption) {
    $figure .= '<figcaption class="attribution">'.$caption.'</figcaption>';
  }
  $figure .= "</figure>";
  return $figure;
}
add_filter( 'image_send_to_editor', 'insert_image_as_figure', 10, 9 );

//add custom styles to editor
function wpdocs_theme_add_editor_styles() {
  add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

//remove gutenberg styles
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}

// customize readmore ellipsis on excerpt
function vocab_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'vocab_excerpt_more' );



// exclude current post/page from relationship field results
add_filter('acf/fields/relationship/query/name=nested_programs', 'exclude_nested_id', 10, 3);

function exclude_nested_id ( $args, $field, $post ) {

  $args['post__not_in'] = array( $post );

  return $args;
}

add_filter('acf/fields/relationship/query/name=highlights', 'exclude_highlights_id', 10, 3);

function exclude_highlights_id ( $args, $field, $post ) {

  $args['post__not_in'] = array( $post );

  return $args;
}

function custom_sidebar_menu_fallback_full() {
  $homepage = get_page_by_path( 'homepage' );
  $homepageID = $homepage->ID;

  $output = wp_list_pages( array(
    'echo'     => 0,
    'exclude'  => $homepageID,
    'depth'    => 1,
     'title_li' => ''
  ) );

  if ( is_page() ) {
    $page = $post->ID;
    if ( $post->post_parent ) {
      $page = $post->post_parent;
    }

    $children = wp_list_pages( array(
      'echo'     => 0,
      'exclude'  => $homepageID,
      'child_of' => $page,
      'title_li' => ''
    ) );

    if ( $children ) {
      $output = wp_list_pages( array(
        'echo' => 0,
        'exclude'  => $homepageID,
        'child_of' => $page,
        'title_li' => ''
      ) );
    }
  }
  echo '<ul class="default">';
  echo $output;
  echo '</ul>';
}


function custom_sidebar_menu_fallback() {

global $post;

if ( $post->post_parent ) {
  $ancestors = get_post_ancestors( $post->ID );
  $root      = count( $ancestors ) - 1;
  $parent = $ancestors[ $root ];
} else {
  $parent = $post->ID;
}

echo '<ul class="default">';
    wp_list_pages(
        array(
            'child_of'  => $post->ID,
            'show_date' => '',
            'depth'     => -1,
            'title_li'  => '',
        )
    );
echo '</ul>';
}





function find_sidebar_menu($post_id) {


  if( get_field('set_menu', $post_id) ) {
    $menu_type = get_field('set_menu', $post_id);
  }

  // if menu set to default, fallback
  if ($menu_type == 'default') {

      $menu['title'] = 'Related';
      $menu['output'] = 'trigger_fallback';

      //return 'trigger_fallback';

      return $menu;

  } else if ($menu_type == 'from parent') {

    if ( has_post_parent($post_id) ) {
      $parent = get_post_parent($post_id);

      return find_sidebar_menu($parent->ID);

    }

  } else if ($menu_type == 'custom') {

    if( get_field('display_menu', $post_id) ) {

      $menu['title'] = get_field('menu_title', $post_id);
      $menu['output'] = get_field('display_menu', $post_id);

      //return get_field('display_menu', $post_id);

      return $menu;

    }

  }


}



// Customize where ACF stores JSON files
function vocab_acf_json_save_point( $path ) {
  return get_stylesheet_directory() . '/inc/acf-json';
}
add_filter( 'acf/settings/save_json', 'vocab_acf_json_save_point' );

// Customize where ACF loads JSON files
function vocab_acf_json_load_point( $paths ) {
    // Remove the original path (optional).
    unset($paths[0]);

    // Append the new path and return it.
    $paths[] = get_stylesheet_directory() . '/inc/acf-json';

    return $paths;
}
add_filter( 'acf/settings/load_json', 'vocab_acf_json_load_point' );



// add RSS feeds that support Person(s) authorship

// feed-atom.php
function custom_feed_atom() {

  get_template_part( 'feed-templates/feed', 'atom' );

}
remove_all_actions( 'do_feed_atom' );
add_action( 'do_feed_atom', 'custom_feed_atom', 10, 1 );

// feed-rdf.php
function custom_feed_rdf() {

  get_template_part( 'feed-templates/feed', 'rdf' );

}
remove_all_actions( 'do_feed_rdf' );
add_action( 'do_feed_rdf', 'custom_feed_rdf', 10, 1 );

// feed-rss.php
function custom_feed_rss() {

  get_template_part( 'feed-templates/feed', 'rss' );

}
remove_all_actions( 'do_feed_rss' );
add_action( 'do_feed_rss', 'custom_feed_rss', 10, 1 );

// feed-rss2.php
function custom_feed_rss2() {

  get_template_part( 'feed-templates/feed', 'rss2' );

}
remove_all_actions( 'do_feed_rss2' );
add_action( 'do_feed_rss2', 'custom_feed_rss2', 10, 1 );

// correct pagination on Custom Post Type (Person)
add_filter('redirect_canonical','person_disable_redirect_canonical');
function person_disable_redirect_canonical($redirect_url) {
    if (is_paged() && is_singular()) $redirect_url = false;
    return $redirect_url;
}

// register custom embedded URL parameter for course-page template

add_action('init','add_embedded');
function add_embedded() {
    global $wp;
    $wp->add_query_var('embedded');
}

// remove edit_post_link from non-editors
function remove_get_edit_post_link( $link ) {
  if ( current_user_can( 'edit_posts' ) ) {
      return $link;
  }
  return null;
}

add_filter( 'get_edit_post_link', 'remove_get_edit_post_link' );

// add custom shortcode to do dynamic loop lists, with templated display
function shortcode_loop($atts = '') {

  // dynamic looping would go here 
  // run some logic to grab a default template
  // construct the Obj dynamicalyl from $atts
  echo 'the loop works!';
  echo '<br>';
  echo 'category: ' . $atts['category'];
  echo '<br>';
  echo 'tags: ' . $atts['tags'];
  echo '<br>';
  echo 'limit: ' . $atts['limit'];
  echo '<br>';
  echo 'sort: ' . $atts['sort'];
  echo '<br>';
  echo 'sortby: ' . $atts['sortby'];
  echo '<br>';
  echo 'type: ' . $atts['type'];
  echo '<br>';
  echo 'template: ' . $atts['template'];
  echo '<br>';


  $query = new WP_Query(array(
      'category_name' => 'item,item',
      'tag' => 'item,item',
      'post_type' => 'page',
      'posts_per_page' => 4,
      'order' => 'ASC',
      'orderby' => 'date'
  ));


  echo 'pull in a template file, load up with query obj';
  echo '<br>';
  echo var_dump($query);

  $template = $atts['template'];

  // this isn't returning, but instead rendering.
  if (false === get_template_part('shortcode-templates/list', $template)) {
    // get_template_part( 'shortcode-templates/list', $template);
    echo 'load default';
  } else {
    //get_template_part( 'shortcode-templates/list', 'default');
    echo 'load template';
  }


}

function list_shortcode($atts) {
  ob_start(); 
  shortcode_loop($atts);
  return ob_get_clean(); 
}         

add_shortcode('list', 'list_shortcode');
