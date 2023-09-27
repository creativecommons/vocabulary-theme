<?php get_header('', array( 'body-classes' => 'default-page') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<!-- <span class="byline">by <a href="#">Marie Langley</a>, <a href="#">Marvau Laraugne</a></span> -->

<?php if (!class_exists('ACF')): ?>

<!-- display raw post_meta, if ACF not installed & activated -->
<?php if ( get_post_meta( get_the_ID(), 'lead_in_copy', true ) ) : ?>
<p><?php echo get_post_meta( get_the_ID(), 'lead_in_copy', true ); ?></p>
<?php endif; ?>

<?php else : ?>

<!-- display ACF field, if ACF installed & activated -->
<?php if ( get_field('lead_in_copy') ) : ?>
<p><?php the_field('lead_in_copy'); ?></p>
<?php endif; ?>

<?php endif; ?>

</header>


<?php if (get_field('display_sidebar')) : ?>

<?php get_sidebar(); ?>

<?php endif; ?>


<div class="content">

    <?php the_content(); ?>


    <?php
        // introduce hack to output legacy custom_field_data here until moved into main content
        // TODO: remove once content is migrated
        $cc_program_left =  htmlspecialchars_decode(get_post_meta($post->ID, 'cc_program_left', TRUE));
        $cc_program_right =  htmlspecialchars_decode(get_post_meta($post->ID, 'cc_program_right', TRUE));
        $cc_program_get_involved =  htmlspecialchars_decode(get_post_meta($post->ID, 'cc_program_get_involved', TRUE));

        echo $cc_program_left;
        echo $cc_program_right;
        echo $cc_program_get_involved;
    ?>


</div>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
