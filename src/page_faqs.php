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
            <!-- links here will need to go to specific group pages, if not set to anchors -->
            <!-- possible bi-direction ACF relationship group is useful here to better query? -->
            <a href="#<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></a>
        </li>

    <?php endforeach; ?>
    </ul>


    <?php if( have_rows('featured_areas') ): ?>
    <?php while( have_rows('featured_areas') ): the_row();

        $groups = get_sub_field('groups');
        $linkType = get_sub_field('link_type');

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
                <?php if ($linkType == 'to-anchor') : ?>
                <h3><a href="#<?php echo (str_replace(' ', '-', strtolower($group->post_title))); ?>"><?php echo $group->post_title ?></a></h3>
                <?php elseif ($linkType == 'to-page') : ?>
                <h3><a href="<?php echo get_permalink($group->ID); ?>"><?php echo $group->post_title ?></a></h3>
                <?php endif; ?>
                <p><?php echo $group->summary ?></p>
                    <ul>
                    <?php foreach ($children as $child) : ?>
                    <li>
                        <?php if ($linkType == 'to-anchor') : ?>
                        <h4><a href="#<?php echo (str_replace(' ', '-', strtolower($child->post_title))); ?>"><?php echo $child->post_title; ?></a></h4>
                        <?php elseif ($linkType == 'to-page') : ?>
                        <h4><a href="<?php echo get_permalink($group->ID); ?>#<?php echo (str_replace(' ', '-', strtolower($child->post_title))); ?>"><?php echo $child->post_title; ?></a></h4>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                    </ul>

            </li>
        <?php endforeach; ?>
        </ul>
    </article>
    </aside>
        <?php if ($linkType == 'to-anchor') : ?>
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

        <h2 id="<?php echo (str_replace(' ', '-', strtolower($group->post_title))); ?>"><?php echo $group->post_title ?></h2>

        <?php $questions = get_field('faqs_listing', $group->ID); ?>

        <details open>
            <summary>Table of Contents</summary>
            <ul>
            <?php foreach ($questions as $question) : ?>
                <li>
                    <a href="#<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></a>

                </li>
            <?php endforeach; ?>

            <?php foreach ($children as $child) : ?>
                <li>
                <a href="#<?php echo (str_replace(' ', '-', strtolower($child->post_title))); ?>"><?php echo $child->post_title ?></a>

                <?php $questions = get_field('faqs_listing', $child->ID); ?>
                <?php if ($questions) :?>
                    <ul>
                    <?php foreach ($questions as $question) : ?>
                        <li>
                            <a href="#<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></a>

                            <!-- this will need to also grab sub-groups too if Qs are empty, crawl downward -->
                        </li>
                    <?php endforeach; ?>
                    </ul>

                <?php endif; ?>

                </li>
            <?php endforeach; ?>


            </ul>

        </details>

        <?php if (!$children) : ?>
        <?php foreach ($questions as $question) : ?>

            <h3 id="<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></h3>
            <a href="<?php echo get_edit_post_link($question->ID); ?>" class="edit" >[edit]</a>
            <?php echo apply_filters( 'the_content', $question->post_content ); ?>

        <?php endforeach; ?>
        <?php endif; ?>

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
        <?php $questions = get_field('faqs_listing', $child->ID); ?>
        <?php foreach ($questions as $question) : ?>

            <h4 id="<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></h4>
            <a href="<?php echo get_edit_post_link($question->ID); ?>" class="edit" >[edit]</a>
            <?php echo apply_filters( 'the_content', $question->post_content ); ?>


        <?php endforeach; ?>


        <?php endforeach; ?>


        <?php endforeach; ?>
        <?php endif; ?>

        <?php if ($linkType == 'to-page') : ?>

        <h2><?php echo $topGroup->post_title; ?></h2>

        <?php foreach ($topQuestions as $question) : ?>


        <h3 id="<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></h3>
        <?php echo apply_filters( 'the_content', $question->post_content ); ?>


        <?php endforeach; ?>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>


</div>

<a href="#main-content-marker" class="return-to-top"><span class="icon-attach fa-angle-up">Return to top</span></a>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
