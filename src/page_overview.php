<?php /* Template Name: Overview */ ?>

<?php get_header('', array( 'body-classes' => 'default-page overview-page') ); ?>

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


<?php if (get_field('display_sidebar')) : ?>

<?php get_sidebar(); ?>

<?php endif; ?>

<div class="content">

    <?php the_field('highlights_lead_in'); ?>

    <?php
        if ( get_field('highlights') ) :
        $highlights = get_field('highlights');
    ?>
    <article class="links highlight">
        <ul>
            <?php
                foreach ($highlights as $highlight) :

                $permalink = get_permalink( $highlight->ID );
                $title = get_the_title( $highlight->ID );
                $excerpt = get_the_excerpt( $highlight->ID );
            ?>
            <li>
                <article class="link">
                    <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                    <p><?php echo wp_trim_words($excerpt, 8); ?></p>
                </article>
            </li>
            <?php endforeach; ?>
        </ul>
    </article>
    <?php endif; ?>

    <?php the_content(); ?>

</div>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
