<!-- This file (and others like it), can be utilized to code
bespoke templates for the [list] shortcode looper  -->

<?php

$query = $args['query'];

?>

<?php if ( $query->have_posts() ) : ?>

<ul>

<?php  while ( $query->have_posts() ) : $query->the_post(); ?>

<li>
    <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
</li>

<?php endwhile; ?>

</ul>

<?php endif; ?>
