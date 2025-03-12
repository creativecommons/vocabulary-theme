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

<?php 
$parent = get_post($post->post_parent);
$grandparent = get_post($parent->post_parent);
$aunts = get_children($grandparent->ID);
?>

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
        <li><a href="<?php the_permalink($grandparent->ID); ?>"><?php echo $grandparent->post_title; ?></a></li>

        
        <?php endif; ?>
        
    </ul>
</nav>

<h1><?php the_title(); ?></h1>

<!-- <p>lead in paragraph</p> -->


<!-- <img src="#" /> -->

</header>


<div class="content">


<?php the_content(); ?>

<?php 

// find previous & next siblings, if present
if (has_post_parent()) {
    $siblings = get_children($post->post_parent);

    foreach ($siblings as $sibling ){
        if ($sibling->menu_order == $post->menu_order - 1) {
            $previousLink = get_permalink($sibling->ID);
        }

        if ($sibling->menu_order == $post->menu_order + 1) {
            $nextLink = get_permalink($sibling->ID);
        }
    }
}

if ($previousLink == '') {

    foreach ($aunts as $aunt) {

        if ($aunt->menu_order == $parent->menu_order - 1) {

            $cousins = get_children($aunt->ID);

            foreach ($cousins as $cousin) {
                if ($cousin->menu_order == count($cousins)) {
                    $previousLink = get_permalink($cousin->ID);
                }

            }
        }  
    }
}

if ($nextLink == '' && $contextType == 'course-page') {

    foreach ($aunts as $aunt) {

        if ($aunt->menu_order == $parent->menu_order + 1) {

            $cousins = get_children($aunt->ID);

            foreach ($cousins as $cousin) {
                if ($cousin->menu_order == 1) {
                    $nextLink = get_permalink($cousin->ID);
                }

            }
        }  
    }
}

?>

</div>

<?php if ($previousLink != '' || $nextLink != '') : ?>
<nav class="pagination" aria-label="Pagination">
    <ul>
        <?php if ($previousLink != '') : ?>
        <li><a href="<?php echo $previousLink; ?>">Previous</a></li>
        <?php endif; ?>

        <?php if ($nextLink != '') : ?>
        <li><a href="<?php echo $nextLink; ?>">Next</a></li>
        <?php endif; ?>
    </ul>
</nav>
<?php endif; ?>



<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer($embedded_template); ?>
