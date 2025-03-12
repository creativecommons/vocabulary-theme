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

<?php 

$args = array(
    'post_parent' => get_the_ID(), // Current post's ID
);
$children = get_children( $args );

if ( ! empty($children) ) {

    $isParent = true;

} else {
    $isParent = false;
}
    
if ($isParent && !has_post_parent() ) {
    $contextType = 'course-index';
} elseif (has_post_parent()) {
    $contextType = 'course-page';
}

?>

<?php get_header($embedded_template, array( 'body-classes' => $contextType) ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<nav class="breadcrumbs">
    <ul>
        <?php if ($contextType == 'course-index' && $embedded == true ) : ?>
        <li>Creative Commons</li>
        <?php endif; ?>
        <?php if($contextType == 'course-index' && $embedded == '') : ?>
        <li><a href="https://creativecommons.org">Creative Commons</a></li>
        <?php endif; ?>
        <?php if($contextType == 'course-page' && $embedded == '') : ?>
        <li><a href="https://creativecommons.org">Creative Commons</a></li>
        <?php endif; ?>
    
        <?php if ($contextType != 'course-index' ) : ?>
        <li><a href="#">top title of course</a></li>
        <?php endif; ?>
        
    </ul>
</nav>

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
