<?php get_header('', array( 'body-classes' => 'blog-post') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<?php if ( get_field('authorship') ) : ?>
<span class="byline">by
    <?php
    $authors = get_field('authorship');
        if( $authors ):
        $i = 1;
        $count = count($authors);

        foreach( $authors as $author ):
            $permalink = get_permalink( $author->ID );
            $title = get_the_title( $author->ID );
            $custom_field = get_field( 'field_name', $author->ID );
            if ($i < $count) {
                $separator = ',';
            }
            else {
                $separator = '';
            }
    ?>

    <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a><?php echo $separator; ?>

            <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
</span>
<?php endif; ?>

<!-- <p>lead in paragraph</p> -->

<?php


?>

<span class="categories">
    <?php the_category(', ') ?>
</span>


<!-- <img src="#" /> -->

</header>

<div class="content"

<?php if (!class_exists('ACF')): ?>

<!-- display raw post_meta, if ACF not installed & activated -->
<?php if (get_post_meta( get_the_ID(), 'lead_in_copy', true )): ?>
<aside class="opening">
    <?php echo get_post_meta( get_the_ID(), 'lead_in_copy', true ); ?>
</aside>
<?php endif; ?>
<?php else : ?>

<!-- display ACF field, if ACF installed & activated -->
<?php if (get_field('lead_in_copy')): ?>
<aside class="opening">
    <?php the_field('lead_in_copy'); ?>
</aside>
<?php endif; ?>
<?php endif; ?>

<?php the_content(); ?>

<!-- display ACF field, if ACF installed & activated -->
<?php if (get_field('closing_copy')): ?>
<div class="closing">
    <?php the_field('closing_copy'); ?>
</div>
<?php endif; ?>

<span class="pub-date">Posted <?php the_date('d F Y'); ?></span>

<?php
    $posttags = get_the_tags();
    if ($posttags) :
?>
<article class="tags">
    <h2>Tags</h2>

    <ul>
       <?php foreach($posttags as $tag) : ?>
        <li><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li>

        <?php endforeach; ?>
    </ul>
</article>

<?php endif; ?>


<?php

$queried_object = get_queried_object();
$categories = get_the_category( $post->ID );
$catIDs = '';
foreach( $categories as $category) {
    $catIDs .= $category->cat_ID . ",";
}

$query = new WP_Query(array(
    'cat' => $catIDs,
    'post__not_in' => array($queried_object->ID),
    'post_type' => 'post',
    'posts_per_page' => 4,
    //'paged' => $paged,
));
?>

</div>

<?php if ( $query->have_posts() ) : ?>

<article class="posts related">
    <h2>Related posts</h2>

    <ul>

<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <li>
        <article class="post">
            <header>
            <h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php if ( get_field('authorship') ) : ?>
            <span class="byline">by
                <?php
                $authors = get_field('authorship');
                    if( $authors ):
                    $i = 1;
                    $count = count($authors);

                    foreach( $authors as $author ):
                        $permalink = get_permalink( $author->ID );
                        $title = get_the_title( $author->ID );
                        $custom_field = get_field( 'field_name', $author->ID );
                        if ($i < $count) {
                            $separator = ',';
                        }
                        else {
                            $separator = '';
                        }
                ?>

                <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a><?php echo $separator; ?>

                        <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
            </span>
            <?php endif; ?>
            <span class="categories">
                <?php the_category(', ') ?>
            </span>

        </header>

        </article>
        </li>

<?php endwhile; ?>

    </ul>
</article>

<?php endif; ?>

<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>
