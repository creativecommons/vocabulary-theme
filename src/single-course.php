<?php 

global $wp;
if (array_key_exists('embedded', $wp->query_vars) && isset($wp->query_vars['embedded'])){
    if ($wp->query_vars['embedded'] == 'true') {
        $embedded = true;
    } else {
        $embedded = false;
    }
}

if ($embedded == true) {
    $embedded_template = 'course_embed';
} else {
    $embedded_template = '';
}

?>

<?php get_header($embedded_template, array( 'body-classes' => 'course-page') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<!-- <p>lead in paragraph</p> -->


<!-- <img src="#" /> -->

</header>

<div class="content">


<?php the_content(); ?>


</div>


<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer($embedded_template); ?>
