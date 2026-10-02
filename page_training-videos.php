<?php /* Template Name: Page - Training Videos */ ?>

<?php get_header('', array( 'body-classes' => 'training-videos-page extends events-index') ); ?>

<main>

<header>

<div>
<h1><?php the_title(); ?></h1>
</div>

<figure>
    <?php $image = get_field('header_graphic'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <figcaption>
        <p><?php echo $image['caption']; ?></p>

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

<?php
    $training_highlights = get_field('training_foundation_highlights');
    if( !empty($training_highlights) ) :
?>

<article class="trainings extends events">
    <h2>Foundations Courses</h2>
    <ul>
        <?php foreach($training_highlights as $training) : ?>
        <?php
            // $permalink = get_permalink( $training->ID );
            $title = get_the_title( $training->ID );
            $url = get_field('external_url', $training->ID); 
         ?>
        <li>
            <article class="training extends event">

                <div class="description">
                <h3><?php echo $title; ?></h3>

                <p><?php echo wp_trim_words($excerpt, 50); ?></p>

                <a href="<?php echo $url; ?>">View Item</a>
                </div>

                <figure>

                    <img src="<?php echo get_the_post_thumbnail_url( $training->ID, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($training->ID), '_wp_attachment_image_alt', true ); ?>" />


                    <figcaption>
                        <!-- <p>attribution details here</p> -->
                         <p><?php echo get_the_post_thumbnail_caption( $post_id ); ?></p>

                    </figcaption>
                </figure>

            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</article>
<?php endif; ?>



<?php
    $training_highlights = get_field('training_free_highlights');
    if( !empty($training_highlights) ) :
?>

<article class="trainings extends events">
    <h2>Free Videos</h2>
    <ul>
        <?php foreach($training_highlights as $training) : ?>
        <?php
            // $permalink = get_permalink( $training->ID );
            $title = get_the_title( $training->ID );
            $url = get_field('external_url', $training->ID); 
         ?>
        <li>
            <article class="training extends event">

                <div class="description">
                <h3><?php echo $title; ?></h3>

                <p><?php echo wp_trim_words($excerpt, 50); ?></p>

                <a href="<?php echo $url; ?>">View Item</a>
                </div>

                <figure>

                    <img src="<?php echo get_the_post_thumbnail_url( $training->ID, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($training->ID), '_wp_attachment_image_alt', true ); ?>" />


                    <figcaption>
                        <!-- <p>attribution details here</p> -->
                         <p><?php echo get_the_post_thumbnail_caption( $training->ID ); ?></p>

                    </figcaption>
                </figure>

            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</article>
<?php endif; ?>


<?php get_template_part( 'content-partials/bottom', 'newsletter_promo', '' ); ?>

</main>

<?php get_footer(); ?>
