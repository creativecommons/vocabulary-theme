<?php /* Template Name: Index - Case Studies */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'casestudies-index') ); ?>

<main>

<header>

<div>
<h1><?php the_title(); ?></h1>
</div>

<figure>
    <?php $image = get_field('header_graphic'); ?>
    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />

    <figcaption>
        <p><?php echo $image['caption'] ?></p>
        
    </figcaption>
</figure>
</header>

<article class="topic-summary about"> <!-- TODO: merge with prior article? -->
    <div class="description">
        <!-- <h2>The commons belongs to us all</h2> -->
         <?php the_field('subhead_title'); ?>
        <?php the_field('subhead_intro'); ?>
    </div>

    <figure>
        <?php $image = get_field('subhead_graphic'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <figcaption>
            <p><?php echo $image['caption']; ?></p>
            
        </figcaption>
    </figure>
</article>

<article class="casestudies">
    <h2>See CC's work in action</h2>
    <ul>

    <?php
    $query = new WP_Query(array(
        'post_type' => 'case-study',
        'posts_per_page' => 6,
        //'paged' => $paged,
    ));
    ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <li>
        <article class="case-study">

            <div class="description">
            <h3><?php the_title(); ?></h3>

            <?php the_excerpt(); ?>

            <a href="<?php echo the_permalink(); ?>">Learn More</a>
            </div>

            <figure>

                <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />


                <!-- <svg class="shape1">
                    <use href="../../../../pidgin/svg/blob3.svg"></use>
                </svg> -->

                <figcaption>
                    <!-- <p>attribution details here</p> -->
                    
                </figcaption>
            </figure>

        </article>
    </li>

    <?php endwhile; ?>
    <?php endif; ?>

    </ul>

    <footer>
        <a class="more" href="#">more case studies</a>
    </footer>


</article>



<article class="topic-summary newsletter">
    <div class="description">
        <h2>Get the latest CC news, and join the community to empower individuals and communities around the world.</h2>
        <a href="#">Sign up for CC's Community Newsletter</a>
    </div>
    <figure>
        <!-- <img src="https://creativecommons.org/wp-content/uploads/2023/01/Open-Palms-Not-Clutching-Fists.png"> -->
    </figure>
    
</article>


<?php get_template_part( 'pidgin/content-partials/pidgin', 'newsletter_promo', '' ); ?>


</main>

<?php get_footer('pidgin'); ?>
