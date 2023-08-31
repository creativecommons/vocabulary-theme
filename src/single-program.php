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
    $status = 'parent';
    $class = 'program-index';
} else {
    $status = 'child';
    $class = 'program-page';
}
?>

<!-- this class will need to be dynamic program-index, program-page -->
<?php get_header('', array( 'body-classes' => $class) ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<?php if ($status == 'parent') : ?>
<h2>Supporting the Open Movement</h2>
<?php endif;  ?>


<p>Developing and stewarding the CC licenses and open tools are not enough. To have a meaningful impact, we need a community of people who use and actively support our licenses and tools to create, steward, and support that community.</p>

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

<?php if ($status == 'parent') : ?>
<article class="projects">
    <h2>On-going Initiatives</h2>
    <p>placeholder content here...</p>
    <ul>
        <li>
            <article class="project">
                <h3><a href="#">Copyright</a></h3>
                <p>Some kinda of lead-in description here.</p>
            </article>
        </li>
        <li>
            <article class="project"e>
                <h3><a href="#">Better Internet</a></h3>
                <p>Find out more about this thing, read more today.</p>
            </article>
        </li>
    </ul>
</article>
<?php endif; ?>

<?php endwhile; // end of the loop. ?>



</main>

<?php get_footer(); ?>

