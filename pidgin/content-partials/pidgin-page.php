<?php while ( have_posts() ) : the_post(); ?>

<header>

<div>
<h1><?php the_title(); ?></h1>
</div>

<figure>
    <?php if(get_field('header_graphic')) : ?>
    <?php $image = get_field('header_graphic'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <figcaption>
        <p><?php echo $image['caption']; ?></p>
        
    </figcaption>

    <?php else : ?>

    <div class="default-image">
    <img src="https://creativecommons.org/wp-content/uploads/2025/05/moon-3.jpg" class="photo" />
    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/blob4.svg" class="shape1" />
    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/blob3.svg" class="shape2" />
    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/repeat_c.svg" class="shape3" />
    </div>
    
    <figcaption>
        <p>Melies color Voyage dans la lune, by <a href="https://en.wikipedia.org/wiki/Georges_M%C3%A9li%C3%A8s" target="_blank" rel="noopener">Georges Méliès</a>, Public Domain.</p>
    </figcaption>
    <?php endif; ?>
</figure>
</header>


<?php if (get_field('display_sidebar')) : ?>

<?php get_sidebar(); ?>

<?php endif; ?>


<div class="content">

    <?php if (get_field('lead_in_copy')): ?>
    <aside class="opening">
        <?php the_field('lead_in_copy'); ?>
    </aside>
    <?php endif; ?>

    <?php the_content(); ?>

    <?php if (get_field('closing_copy')): ?>
    <div class="closing">
        <?php the_field('closing_copy'); ?>
    </div>
    <?php endif; ?>

</div>

<?php endwhile; // end of the loop. ?>

<?php if (get_field('more_links_display')) : ?>
<aside class="more-links">
    <nav>
        <h2>More Links</h2>
        <?php the_field('more_links_content'); ?>
    </nav>
</aside>
<?php endif; ?>

<?php get_template_part( 'pidgin/content-partials/pidgin', 'newsletter_promo', '' ); ?>

