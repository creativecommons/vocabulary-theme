<?php /* Template Name: Index - FAQs */ ?>

<?php get_header('', array( 'body-classes' => 'faqs-index') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<!-- <span class="byline">by <a href="#">Marie Langley</a>, <a href="#">Marvau Laraugne</a></span> -->

<?php if (!class_exists('ACF')): ?>

<!-- display raw post_meta, if ACF not installed & activated -->
<p><?php echo get_post_meta( get_the_ID(), 'lead_in_copy', true ); ?></p>

<?php else : ?>

<!-- display ACF field, if ACF installed & activated -->
<p><?php the_field('lead_in_copy'); ?></p>

<?php endif; ?>

</header>

<!-- <aside>
    <nav class="contextual-menu">
        <h2>Registration</h2>
        <ul>
            <li><a href="#">How many hours of work does the Certificate course require?</a></li>
            <li><a href="#">What do I get with the Certificate?</a></li>
        </ul>
    </nav>

    <nav>
        <h2>Course</h2>
        <ul>
            <li><a href="#">Does everyone participating in the course get a certificate?</a></li>
            <li><a href="#">Can I represent Creative Commons once I am CC Certified?</a></li>
            <li><a href="#">How Scholarships work?</a></li>

        </ul>
    </nav>
</aside> -->

<?php the_field('introduction'); ?>


<div class="content">

    <?php the_content(); ?>

    <?php
    $faqQuery = new WP_Query(array(
        'post_type' => 'faq_item',
        'post_parent' => 0,
        'posts_per_page' => 0,
        'meta_key' => 'type',
        'meta_value' => 'group',
        'orderby' =>'menu_order', 
        'order' => 'ASC'
        //'paged' => $paged,
    ));
    ?>

    <?php if ( $faqQuery->have_posts() ) : while ( $faqQuery->have_posts() ) : $faqQuery->the_post(); ?>

    <h2><?php the_title(); ?></h2>

    <?php 
    $child_args = array(
        'post_parent' => $post->ID, // The parent id.
        'post_type'   => 'faq_item',
        'post_status' => 'publish',
        'orderby' =>'menu_order', 
        'order' => 'ASC'
    );
    ?>

    <?php $children = get_children( $child_args ); ?>

    <?php foreach($children as $child) : ?>
    
    <h3><?php echo $child->post_title; ?></h3>

    <?php $custom_field = get_field( 'content_english', $child->ID ); ?>

    <?php echo $custom_field; ?>

    <?php endforeach; ?>


    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

</div>

<div class="closing">
<?php the_field('closing'); ?>
</div>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
