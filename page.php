<!-- ///////////////////////////////////////////////////////////// -->

<?php $devQuery = new WP_Query( array( 
    'post_type' => 'page',
    'pagename' => 'dev-settings' 
    ) );
    
    $themeVersion = '';
?>

<?php if ( $devQuery->have_posts() ) : ?>
<?php  while ( $devQuery->have_posts() ) : $devQuery->the_post(); ?>

    <?php if( get_field('brand_version')) : ?>

            <?php $themeVersion = get_field('brand_version') ?>

    <?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<!-- //////////////////////////////////////////////////////////// -->


<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_header('pidgin', array( 'body-classes' => '') ); ?>

<?php else : ?>

<?php get_header('', array( 'body-classes' => '') ); ?>

<?php endif; ?>

<main>

<?php if ($themeVersion == 'vocabulary2') : ?>

    <?php get_template_part( 'pidgin/content-partials/pidgin', 'page', '' ); ?>

<?php else : ?>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

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

</div>

<?php endwhile; // end of the loop. ?>

<?php endif; ?>

</main>

<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_footer('pidgin'); ?>

<?php else : ?>

<?php get_footer(); ?>

<?php endif; ?>


