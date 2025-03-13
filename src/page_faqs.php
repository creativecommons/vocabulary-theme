<?php /* Template Name: Index - FAQs */ ?>

<?php get_header('', array( 'body-classes' => 'faq-index') ); ?>

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

    <aside class="toc">

    <?php 
        $topGroup = get_field('top_group');
        $topQuestions = get_field('faqs_listing', $topGroup->ID);
        $topClosing = get_field('closing', $topGroup->ID);


        echo $topClosing; 
    ?>

    <h2><?php echo $topGroup->post_title; ?></h2>

    <ul>
    <?php foreach ($topQuestions as $question) : ?>

        <li>
            <a href="#<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></a>
        </li>

    <?php endforeach; ?>
    </ul>


    <?php if( have_rows('featured_areas') ): ?>
    <?php while( have_rows('featured_areas') ): the_row(); 

        $groups = get_sub_field('groups');

    ?>
    

    <article class="featured">
        <h2>Focus Areas</h2>
        <ul>
        <?php foreach ($groups as $group) : ?>
            <?php 
            $args = array(
                'post_parent' => $group->ID,
                'post_type' => 'faqs-group',
                'orderby'     => 'menu_order',
                'order'       => 'ASC'
            );

            $children = get_children($args);
            ?>
            <li>
                <h3><a href="#<?php echo (str_replace(' ', '-', strtolower($group->post_title))); ?>"><?php echo $group->post_title ?></a></h3>
                <p><?php echo $group->summary ?></p>
                    <ul>
                    <?php foreach ($children as $child) : ?>
                    <li><h4><a href="#<?php echo (str_replace(' ', '-', strtolower($child->post_title))); ?>"><?php echo $child->post_title; ?></a></h4></li>
                    <?php endforeach; ?>
                    </ul>

            </li>
        <?php endforeach; ?>
        </ul>
    </article>
    </aside>

        <?php foreach ($groups as $group) : ?>

        <h2 id="<?php echo (str_replace(' ', '-', strtolower($group->post_title))); ?>"><?php echo $group->post_title ?></h2>

        <?php $questions = get_field('faqs_listing', $group->ID); ?>

        <details open>
            <summary>Table of Contents</summary>
            <ul>
            <?php foreach ($questions as $question) : ?>
                <li>
                    <a href="#<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></a>

                    <!-- this will need to also grab sub-groups too if Qs are empty, crawl downward -->
                </li>
            <?php endforeach; ?>
            
            </ul>
        </details>

        <?php foreach ($questions as $question) : ?>

            <h3 id="<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></h3>
            <a href="<?php echo get_edit_post_link($question->ID); ?>">[edit]</a>
            <?php echo apply_filters( 'the_content', $question->post_content ); ?>

        <?php endforeach; ?>

        <?php
            $args = array(
                    'post_parent' => $group->ID,
                    'post_type' => 'faqs-group',
                    'orderby'     => 'menu_order',
                    'order'       => 'ASC'
                );
            $children = get_children($args);
        ?>
        <?php foreach ($children as $child) : ?>
        <h3 id="<?php echo (str_replace(' ', '-', strtolower($child->post_title))); ?>"><?php echo $child->post_title ?></h3>

        <!-- loop through and get all the questions from this subsection -->
        <h4 id="<?php echo (str_replace(' ', '-', strtolower($grandchild->post_title))); ?>"><?php echo $grandchild->post_title ?></h4>

        <?php endforeach; ?>


        <?php endforeach; ?>
        
    <?php endwhile; ?>
<?php endif; ?>


</div>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
