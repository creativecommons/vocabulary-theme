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

// register custom filter URL parameter for events-archive template

add_action('init','add_filtered');
function add_filtered() {
    global $wp;
    $wp->add_query_var('filtered');
}


// alter query params for loop on events-archive
function customize_event_archive_display ( $query ) {

        $today = date('Ymd', strtotime("now"));

        global $wp;
        if (array_key_exists('filtered', $wp->query_vars) && isset($wp->query_vars['filtered'])) {
            if ($wp->query_vars['filtered'] == 'past') {
                if ($query->is_main_query()) {
                  // $query->set( 'post_type', 'event' );                 
                  $query->set( 'meta_key', 'event_date' );  
                  $query->set( 'meta_compare', '<' );
                  $query->set( 'meta_type', 'numberic' );
                  $query->set( 'meta_value', $today );         
                  $query->set( 'orderby', 'meta_value_num' );
                  $query->set( 'order', 'ASC' ); 
                }
            } elseif ($wp->query_vars['filtered'] == 'future') {
                if ($query->is_main_query()) {
                  // $query->set( 'post_type', 'event' );                 
                  $query->set( 'meta_key', 'event_date' );  
                  $query->set( 'meta_compare', '>=' );
                  $query->set( 'meta_type', 'numberic' );
                  $query->set( 'meta_value', $today );         
                  $query->set( 'orderby', 'meta_value_num' );
                  $query->set( 'order', 'ASC' ); 
                }
            } else {
                // do nothing
            }
        }
    }

add_action( 'pre_get_posts', 'customize_event_archive_display' );

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

  $cat = sanitize_text_field($atts['category']);
  $tag = sanitize_text_field($atts['tags']);

  $limit = sanitize_text_field($atts['limit']);
  if ($atts['limit'] == '') {
    $limit = 5;
  }

  $sort = sanitize_text_field($atts['sort']);
  if ($atts['sort'] == '') {
    $sort = 'ASC';
  }

  $sortby = sanitize_text_field($atts['sortby']);
  if ($atts['sortby'] == '') {
    $sortby = 'date';
  }

  $type = sanitize_text_field($atts['type']);
  if ($atts['type'] == '') {
    $type = 'post';
  }

  $query = new WP_Query(array(
      'category_name' => $cat,
      'tag' => $tag,
      'post_type' => $type,
      'posts_per_page' => $limit,
      'order' => $sort,
      'orderby' => $sortby
  ));

  $template = sanitize_text_field($atts['template']);

  if (false === get_template_part('shortcode-templates/list', $template, array('query' => $query))) {
    get_template_part('shortcode-templates/list', 'default', array('query' => $query));
  }

}

function list_shortcode($atts) {
  ob_start();
  shortcode_loop($atts);
  return ob_get_clean();
}

add_shortcode('list', 'list_shortcode');



function highlighter($atts, $content = "" ) {

  $output = '<div class="highlight">'.$content.'</div>';

  return $output;
}

add_shortcode('highlight', 'highlighter');


function stats($atts, $content = "" ) {

  $output = '<article class="datapoints"><ul class="stats">'.do_shortcode($content).'</ul></article>';

  return $output;
}

add_shortcode('stats', 'stats');


function stat_item($atts) {

  // $output = '<li class="stat">'.sanitize_text_field($atts['num']).'</li>';

  $output = '<li><article class="datapoint"><p><span class="stat">'.sanitize_text_field($atts['num']).'</span>'.sanitize_text_field($atts['description']).'</p></article></li>';


  return $output;
}

add_shortcode('stat', 'stat_item');


function appearAsButton( $atts, $content = null ) {
	return '<span class="appear-as-button">' . $content . '</span>';
}

add_shortcode('button', 'appearAsButton');


function topicSummary( $atts, $content = null ) {
	return '<article class="topic-summary focus-area"><div><h2>' . sanitize_text_field($atts['heading']) . '</h2><p>'. $atts['description'] .'</p></div>' . $content . '</article>';
}

add_shortcode('topic-summary', 'topicSummary');



function columns($atts, $content = null ) {

  $output = '<div class="appear-as-columns"><ul>'.do_shortcode($content).'</ul></div>';

  return $output;
}

add_shortcode('columns', 'columns');


function column($atts, $content = null) {

  $output = '<li>'. do_shortcode($content) .'</li>';

  return $output;
}

add_shortcode('column', 'column');


function events_pre_get_posts($query) {   

    if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'event'  && is_archive()) {
        $query->set('orderby', 'meta_value_num');
        $query->set('meta_key', 'event_date');
        $query->set('order', 'ASC');
        return $query;
    }
}

add_action('pre_get_posts', 'events_pre_get_posts');
