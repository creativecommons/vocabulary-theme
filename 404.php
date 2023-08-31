<?php get_header('', array( 'body-classes' => 'default-page') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

</header>

<div class="content">

    <?php the_content(); ?>

</div>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
