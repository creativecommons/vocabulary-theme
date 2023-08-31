<?php

// if parent
// display the program-index context
// likely to be only 4:
// 
// Open Policy, 
// Open Culture, 
// Open Knowledge,
// Community


// if child
// display the program-page context
// likely to be many, and may include:
// 
// [Open Policy]
// Copyright
// Better Internet
//
// [Open Culture]
// Open Heritage
// Open Creativity
//
// [Open Knowledge]
// Open Education
// Open Climate
// Open Science
// Open Research (OA)
// Open Journalism
// 
// [Community]
// Global Network
// Learning & Training
// Licenses & Tools Stewardship
// Open Source Community

?>
<?php
// body class will need to be dynamic .program-index, .program-page
$args = array(
    'post_parent' => get_the_ID(), 
);

$children = get_children( $args );

if ( ! empty($children) ) {
    $class = 'program-index';
} else {
    $class = 'program-page';
}
?>

<!-- this class will need to be dynamic program-index, program-page -->
<?php get_header('', array( 'body-classes' => $class) ); ?>

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


<div class="content">

    <?php the_content(); ?>

<?php
    $args = array(
  'post_type'   => 'program',
  'post_parent' => 0,
);

$article_posts = new WP_Query($args);

echo "</ul>";
if($article_posts->have_posts()) : 
  while($article_posts->have_posts()) : 
    $article_posts->the_post(); 
    $post_id = get_the_ID();
    $post_link = get_permalink($post_id);
    $post_title = get_the_title();
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID());
  ?>
  <p><?php echo $post_title; ?></p>
  <?php 
  endwhile; 
  ?>
<?php 
else:  
?>
Oops, there are no posts.
<?php  
endif;
?>    
<?php echo "</ul>"; ?>

</div>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>

