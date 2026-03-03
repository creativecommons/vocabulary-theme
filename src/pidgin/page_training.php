<?php /* Template Name: Page - Training */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'training-index') ); ?>

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

<?php $testimonial1 = get_field('testimonial_1_content'); ?>
<?php $testimonial2 = get_field('testimonial_2_content'); ?>


<article class="topic-summary about">
    <div class="description">
        <?php if (get_field('subhead_title')) : ?>
        <h2><?php the_field('subhead_title'); ?></h2>
        <?php endif; ?>

        <?php the_field('subhead_intro'); ?>

        <?php if (get_field('subhead_link_text')) : ?>
        <a href="<?php the_field('subhead_link_url'); ?>"><?php the_field('subhead_link_text'); ?></a>
        <?php endif; ?>
    </div>

    <figure>
        <?php $image = get_field('subhead_graphic'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <figcaption>
            <p><?php echo $image['caption']; ?></p>
            
        </figcaption>
    </figure>

</article>


    <blockquote>
        <p><?php echo $testimonial1;  ?></p>
    </blockquote>


<article class="topic-dive">
    <h2><?php the_field('training_events_title'); ?></h2>
    <p><?php the_field('training_events_tagline'); ?></p>

    <article class="topic-summary focus-area">
        <div class="description">

            <p>Looking for a place to start? Our CC Certificate program is our premiere course that offers individual learners everything they need to know to start using CC licenses with confidence.</p>

            <a href="#">Register Today</a>
        </div>

        <figure>
            <?php $image = get_field('training_events_graphic'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <figcaption>
                <p><?php echo $image['caption']; ?></p>
                
            </figcaption>
        </figure>

        <article class="trainings">
            <ul>
                <?php if(get_field('training_event_1_title')) : ?>
                <li>
                    <article class="training">
                        <h3><?php the_field('training_event_1_title'); ?></h3>
                        <?php the_field('training_event_1_description'); ?>

                        <h4><?php the_field('training_event_1_list_title'); ?></h4>

                        <?php the_field('training_event_1_list_content'); ?>
                        <a href="<?php the_field('training_event_1_link_url'); ?>"><?php the_field('training_event_1_link_text'); ?></a>
                    </article>
                </li>
                <?php endif; ?>

                <?php if(get_field('training_event_2_title')) : ?>
                <li>
                    <article class="training">
                        <h3><?php the_field('training_event_2_title'); ?></h3>
                        <?php the_field('training_event_2_description'); ?>

                        <h4><?php the_field('training_event_2_list_title'); ?></h4>

                        <?php the_field('training_event_2_list_content'); ?>
                        <a href="<?php the_field('training_event_2_link_url'); ?>"><?php the_field('training_event_1_link_text'); ?></a>
                    </article>
                </li>
                <?php endif; ?>

                <?php if(get_field('training_event_3_title')) : ?>
                <li>
                    <article class="training">
                        <h3><?php the_field('training_event_3_title'); ?></h3>
                        <?php the_field('training_event_3_description'); ?>

                        <h4><?php the_field('training_event_3_list_title'); ?></h4>

                        <?php the_field('training_event_3_list_content'); ?>
                        <a href="<?php the_field('training_event_3_link_url'); ?>"><?php the_field('training_event_1_link_text'); ?></a>
                    </article>
                </li>
                <?php endif; ?>

                <?php if(get_field('training_event_4_title')) : ?>
                <li>
                    <article class="training">
                        <h3><?php the_field('training_event_4_title'); ?></h3>
                        <?php the_field('training_event_4_description'); ?>

                        <h4><?php the_field('training_event_4_list_title'); ?></h4>

                        <?php the_field('training_event_4_list_content'); ?>
                        <a href="<?php the_field('training_event_4_link_url'); ?>"><?php the_field('training_event_1_link_text'); ?></a>
                    </article>
                </li>
                <?php endif; ?>
            </ul>
        </article>

    </article>

</article>

<!-- topic features here -->
 <?php
    $topic_features = get_field('topic_features');
    if( !empty($topic_features) ) :
?>

<?php $post_index = 0; ?>
<?php foreach($topic_features as $topic_feature) : ?>
    <?php $post_index++; ?>
    <?php
        $permalink = get_permalink( $topic_feature->ID );
        $title = get_the_title( $topic_feature->ID );
        $category = get_field( 'category', $topic_feature->ID );
        $link_text = get_field( 'link_text', $topic_feature->ID );
        $link_url = get_field( 'link_url', $topic_feature->ID );
        $type = get_field( 'type', $topic_feature->ID );
        if ($type == 'default') { $type = 'focus-area';}
        // $content = get_the_content( $topic_feature->ID );
        $content = get_post_field('post_content', $topic_feature->ID);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        // $excerpt = get_the_excerpt( $staff_person->ID );
        ?>

        <article class="topic-summary <?php echo $type; ?>">
        <div class="description">
            <h2><?php echo $title; ?></h2>
            <span class="category"><?php echo $category; ?></span>
            <?php echo $content; ?>

            <?php if ($link_text) : ?>
            <a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
            <?php endif; ?>
        </div>
        <figure>
            <img src="<?php echo get_the_post_thumbnail_url( $topic_feature->ID, 'full' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($topic_feature->ID), '_wp_attachment_image_alt', true ); ?>" />

            <figcaption>
                <p><?php echo get_the_post_thumbnail_caption( $topic_feature->ID ); ?></p>
            </figcaption>
        </figure>
    </article>

    <?php if ($post_index == 1) : ?>

        <blockquote>
            <p><?php echo $testimonial2;  ?></p>
        </blockquote>

    <?php endif; ?>


    <? endforeach; ?>

<? endif; ?>

<?php get_template_part( 'pidgin/content-partials/pidgin', 'newsletter_promo', '' ); ?>

</main>

<?php get_footer('pidgin'); ?>
