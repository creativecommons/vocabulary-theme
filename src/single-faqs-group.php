<?php get_header('', array( 'body-classes' => 'faq-page') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<nav class="breadcrumbs">
    <a href="/faq">FAQs</a>
</nav>


<h1><?php the_title(); ?></h1>


</header>

<div class="content">


<?php the_content(); ?>


<?php
    $args = array(
            'post_parent' => $post->ID,
            'post_type' => 'faqs-group',
            'orderby'     => 'menu_order',
            'order'       => 'ASC'
        );
    $children = get_children($args);
?>


<?php $questions = get_field('faqs_listing', $post->ID); ?>

<details open>
    <summary>Table of Contents</summary>
    <ul>
    <?php foreach ($questions as $question) : ?>
        <li>
            <a href="#<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></a>

            <!-- this will need to also grab sub-groups too if Qs are empty, crawl downward -->
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

<?php echo apply_filters( 'the_content', get_field('introduction', $group->ID) ); ?>


<?php foreach ($questions as $question) : ?>

    <h3 id="<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></h3>
    <a href="<?php echo get_edit_post_link($question->ID); ?>" class="edit" >[edit]</a>
    <?php echo apply_filters( 'the_content', $question->post_content ); ?>

<?php endforeach; ?>

<?php
    $args = array(
            'post_parent' => $post->ID,
            'post_type' => 'faqs-group',
            'orderby'     => 'menu_order',
            'order'       => 'ASC'
        );
    $children = get_children($args);
?>
<?php foreach ($children as $child) : ?>
<h3 id="<?php echo (str_replace(' ', '-', strtolower($child->post_title))); ?>"><?php echo $child->post_title ?></h3>
<?php echo apply_filters( 'the_content', get_field('introduction', $child->ID) ); ?>

<!-- loop through and get all the questions from this subsection -->
<?php $questions = get_field('faqs_listing', $child->ID); ?>
<?php foreach ($questions as $question) : ?>

    <h4 id="<?php echo (str_replace(' ', '-', strtolower($question->post_title))); ?>"><?php echo $question->post_title ?></h4>
    <a href="<?php echo get_edit_post_link($question->ID); ?>" class="edit" >[edit]</a>
    <?php echo apply_filters( 'the_content', $question->post_content ); ?>


<?php endforeach; ?>

<?php echo apply_filters( 'the_content', get_field('closing', $child->ID) ); ?>


<?php endforeach; ?>

<?php echo apply_filters( 'the_content', get_field('closing', $group->ID) ); ?>




</div>



<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>
