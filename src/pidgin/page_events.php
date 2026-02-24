<?php /* Template Name: Index - Events */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'events-index') ); ?>

<main>

<header>

<div>
<h1><?php the_title(); ?></h1>
</div>

<figure>
        <img src="<?php the_field('header_graphic') ?>" alt="" />

        <figcaption>
            <p>attribution details here</p>
            
        </figcaption>
    </figure>
</header>

<article class="topic-summary about"> <!-- TODO: merge with prior article? -->
    <div class="description">
        <!-- <h2>The commons belongs to us all</h2> -->
        <?php the_field('subhead_intro') ?>
    </div>

    <figure> 
        
        <img src="<?php the_field('subhead_graphic') ?>" />
        <!-- <svg class="shape1">
            <use href="../../../../pidgin/svg/blob3.svg"></use>
        </svg> -->


        <figcaption>
            <!-- <p>attribution details here</p> -->
            
        </figcaption>
    </figure>
</article>

<article class="events">
    <h2>Upcoming Events</h2>
    <ul>

    <?php
    $query = new WP_Query(array(
        'post_type' => 'event',
        'posts_per_page' => 6,
        //'paged' => $paged,
    ));
    ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <li>
            <article class="event">

                <div class="description">
                <h3><?php the_title(); ?></h3>
                <h4><?php the_field('event_date'); ?></h4>
                <span class="time"><?php the_field('event_time_start'); ?> - <?php the_field('event_time_end'); ?></span>
                <span class="location"><?php the_field('event_location'); ?></span>

                <p><?php echo wp_trim_words($excerpt, 50); ?></p>

                <a href="<?php echo the_permalink(); ?>">See Event Details</a>
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
        <a class="more" href="#">more events</a>
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


</main>

<?php get_footer('pidgin'); ?>
