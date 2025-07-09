<?php

echo 'default template called';
//echo var_dump($args['query']);


$query = $args['query'];

?>

<?php if ( $query->have_posts() ) : ?>

<p>load outer wrapper</p>

<?php  while ( $query->have_posts() ) : $query->the_post(); ?>

<p>load single item</p>

<?php endwhile; ?>

<?php endif; ?>
