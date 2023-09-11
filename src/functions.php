<?php

// SECURITY
// remove output of wordpress version in source
//remove_action('wp_head', 'wp_generator');

// remove Customize menu
// add_action('admin_menu', function () {
//   global $submenu;

//   foreach ($submenu as $name => $items) {
//       if ($name === 'themes.php') {
//           foreach ($items as $i => $data) {
//               if (in_array('customize', $data, true)) {
//                   unset($submenu[$name][$i]);

//                   return;
//               }
//           }
//       }
//   }
// });

// remove GUI file editor
//define('DISALLOW_FILE_EDIT', TRUE);

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

add_filter('acf/fields/relationship/query/name=nested_programs', 'exclude_id', 10, 3);

function exclude_id ( $args, $field, $post ) {

  $args['post__not_in'] = array( $post );

  return $args;
}



// unfinished, and doesn't go high enough
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

