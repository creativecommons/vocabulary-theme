<?php /* Template Name: Index - Case Studies */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'casestudies-index') ); ?>

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
        <p>CC's licenses and tools were and continue to be developed to help people access knowledge, pushing humanity forward through a shared bedrock of knowledge.</p>

        <p>From helping organizations strengthen and streamline their systems for sharing to advising on implementations of our licenses and tools, CC's expertise on copyright, open infrastructure, and sharing in the digital age help promote equity and accessibility across sectors.</p>
    </div>

    <figure>       
        <!-- <svg class="shape1">
            <use href="../../../../pidgin/svg/blob3.svg"></use>
        </svg> -->


        <figcaption>
            <!-- <p>attribution details here</p> -->
            
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
