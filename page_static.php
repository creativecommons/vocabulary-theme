<?php /* Template Name: Static */ ?>

<?php
    if( get_field('static_template') ) {

        $template = get_field('static_template');

        get_template_part( 'static-templates/static', $template, 'default' );

    }
?>
