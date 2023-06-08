<?php get_header('', array( 'body-classes' => 'blog-post') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<span class="byline">by 
    <?php
    $authors = get_field('authorship');
        if( $authors ): ?>
            <?php foreach( $authors as $author ): 
                $permalink = get_permalink( $author->ID );
                $title = get_the_title( $author->ID );
                $custom_field = get_field( 'field_name', $author->ID );
            ?>

    <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>,

            <?php endforeach; ?>
        <?php endif; ?>
</span>

<!-- <p>lead in paragraph</p> -->

<?php


?>	

<span class="categories">
    <?php the_category(', ') ?>
</span>


<!-- <img src="#" /> -->

</header>

<?php if (!class_exists('ACF')): ?> 

<!-- display raw post_meta, if ACF not installed & activated -->
<?php if (get_post_meta( get_the_ID(), 'lead_in_copy', true )): ?> 
<div class="series">
    <?php echo get_post_meta( get_the_ID(), 'lead_in_copy', true ); ?>
</div>
<?php endif; ?>
<?php else : ?>

<!-- display ACF field, if ACF installed & activated -->
<?php if (get_field('lead_in_copy')): ?> 
<div class="series">
    <?php the_field('lead_in_copy'); ?>
</div>
<?php endif; ?>
<?php endif; ?>

<?php the_content(); ?>

<span class="pub-date"><?php the_date('d F Y'); ?></span>

<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>