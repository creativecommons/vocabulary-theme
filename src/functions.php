<?php

function register_vocabulary_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Navigation' ),
     )
   );
 }
 add_action( 'init', 'register_vocabulary_menus' );

 add_theme_support( 'post-thumbnails' );

//  Thanks to Chris Coyier & Caspar Hübinger
//  https://css-tricks.com/snippets/wordpress/insert-images-within-figure-element-from-media-uploader/
//
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
