<?php /* Template Name: Index - FAQs */ ?>

<?php get_header('', array( 'body-classes' => '') ); ?>

<main>

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

    <?php 
        $topGroup = get_field('top_group');
        $topQuestions = get_field('faqs_listing', $topGroup->ID);
        $topClosing = get_field('closing', $topGroup->ID);


        echo $topClosing; 
    ?>

    <h2><?php echo $topGroup->post_title; ?></h2>

    <ul>
    <?php foreach ($topQuestions as $question) : ?>

        <li><?php echo $question->post_title ?></li>

    <?php endforeach; ?>
    </ul>


    <?php if( have_rows('featured_areas') ): ?>
    <?php while( have_rows('featured_areas') ): the_row(); 

        $groups = get_sub_field('groups');

    ?>

        <h2>Focus Areas</h2>
        <?php foreach ($groups as $group) : ?>

            <h3><?php echo $group->post_title ?></h3>

        <?php endforeach; ?>




        <?php foreach ($groups as $group) : ?>

        <h2><?php echo $group->post_title ?></h2>

        <?php $questions = get_field('faqs_listing', $group->ID); ?>

        <?php foreach ($questions as $question) : ?>

            <h3><?php echo $question->post_title ?></h3>
            <a href="<?php echo get_edit_post_link($question->ID); ?>">[edit]</a>
            <?php echo apply_filters( 'the_content', $question->post_content ); ?>

        <?php endforeach; ?>

        <?php endforeach; ?>
        
    <?php endwhile; ?>
<?php endif; ?>

</div>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
