<?php

function register_vocabulary_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Navigation' ),
     )
   );
 }
 add_action( 'init', 'register_vocabulary_menus' );