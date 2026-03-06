<?php get_header('pidgin', array( 'body-classes' => 'event-post') ); ?>

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

<aside class="sidebar">
    <article class="event-meta">
        <h2>Date & Time</h2>
        <p class="date"><?php the_field('event_date'); ?></p>
        <p class="time"><?php the_field('event_time_start'); ?> - <?php the_field('event_time_end'); ?></p>

        <h2>Location</h2>

        <p class="location"><?php the_field('event_location'); ?></p>

        <a href="<?php the_field('event_registration_url'); ?>">Register</a>
    </article>
</aside>

<div class="content">
    <h2>Event Details</h2>
    <?php the_content(); ?>

    <a href="<?php the_field('event_files_download_url'); ?>" class="files">Download Event Files</a>


    <?php
        $speaker_listing = get_field('event_speakers');
        if( !empty($speaker_listing) ) :
    ?>

    <article class="speakers">
        <h2>Meet the speakers</h2>
        <ul>
            <?php foreach($speaker_listing as $speaker_person) : ?>
            <?php
                $permalink = get_permalink( $speaker_person->ID );
                $title = get_the_title( $speaker_person->ID );
                $position_title = get_field( 'position_title', $speaker_person->ID );
                $excerpt = get_the_excerpt( $speaker_person->ID );
            ?>
            <li>
                <article class="speaker">
                    <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                    <h4><?php echo $position_title; ?></h4>
                    <p><?php echo wp_trim_words($excerpt, 50); ?></p>

                    <p><?php echo get_the_post_thumbnail_caption( $post_id ); ?></p>


                    <figure>
                        <img src="<?php echo get_the_post_thumbnail_url( $speaker_person->ID, 'full' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($staff_person->ID), '_wp_attachment_image_alt', true ); ?>" />
                    </figure>

                </article>
            </li>
            <?php endforeach; ?>
        </ul>
    </article>
    <?php endif; ?>
</div>

<footer>
    <nav class="pagination">
        <ul>
            <!-- <li><a href="#" class="previous">Previous</a></li> -->
            <li><a href="#" class="more">View All Events</a></li>
            <!-- <li><a href="#" class="next">Next</a></li> -->
        </ul>
        
    </nav>
</footer>

<article class="topic-summary newsletter">
    <div class="description">
        <h2>Get the latest CC news, and join the community to empower individuals and communities around the world.</h2>
        <a href="#">Sign up for CC's Community Newsletter</a>
    </div>
    <figure>
        <!-- <img src="https://creativecommons.org/wp-content/uploads/2023/01/Open-Palms-Not-Clutching-Fists.png"> -->
    </figure>
    
</article>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer('pidgin'); ?>
