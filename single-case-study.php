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

<?php get_header('', array( 'body-classes' => 'casestudy-post') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<div>
<h1><?php the_title(); ?></h1>
</div>

<figure>
    <?php $image = get_field('header_graphic'); ?>
    <img src="<?php echo $image['url'] ?>" alt="" />

    <figcaption>
        <p><?php echo $image['caption'] ?></p>

    </figcaption>
</figure>
</header>

<div class="content">

    <?php if (get_field('lead_in_copy')): ?>
    <aside class="opening">
        <?php the_field('lead_in_copy'); ?>
    </aside>
    <?php endif; ?>

    <?php the_content(); ?>

     <?php if (get_field('key_insights_content')): ?>
    <aside class="insights">
        <h2><?php the_field('key_insights_title'); ?></h2>
        <?php the_field('key_insights_content'); ?>
    </aside>
    <?php endif; ?>

    <?php if (get_field('closing_copy')): ?>
    <div class="closing">
        <?php the_field('closing_copy'); ?>
    </div>
    <?php endif; ?>

</div>

<?php endwhile; // end of the loop. ?>

<?php get_template_part( 'content-partials/bottom', 'newsletter_promo', '' ); ?>



</main>

<?php get_footer(); ?>
