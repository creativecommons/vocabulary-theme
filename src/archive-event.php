<!-- ///////////////////////////////////////////////////////////// -->

<?php $devQuery = new WP_Query( array( 
    'post_type' => 'page',
    'pagename' => 'dev-settings' 
    ) );
    
    $themeVersion = '';
?>

<?php if ( $devQuery->have_posts() ) : ?>
<?php  while ( $devQuery->have_posts() ) : $devQuery->the_post(); ?>

    <?php if( get_field('brand_version')) : ?>

            <?php $themeVersion = get_field('brand_version') ?>

    <?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<!-- //////////////////////////////////////////////////////////// -->


<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_header('pidgin', array( 'body-classes' => 'archive-page') ); ?>

<?php else : ?>

<?php get_header('', array( 'body-classes' => 'archive-page') ); ?>

<?php endif; ?>

<main>

<header>

<!-- <nav class="breadcrumbs">
    <ol>
        <li><a href=#">Home</a></li>
        <li><a href=#">Blog</a></li>
    </ol>
</nav> -->

<?php

global $wp;
if (array_key_exists('filtered', $wp->query_vars) && isset($wp->query_vars['filtered'])) {
    if ($wp->query_vars['filtered'] == 'past') {
        $eventsFiltered = 'Past';
    } elseif ($wp->query_vars['filtered'] == 'future') {
        $eventsFiltered = 'Upcoming';
    } else {
        $eventsFiltered = '';
    }
}

?>

<h1><?php the_archive_title(); ?><?php if(!empty($eventsFiltered)) {echo ', '.$eventsFiltered;} ?></h1>

<p><?php the_archive_description(); ?></p>


</header>



<article class="posts">

<?php while ( have_posts() ) : the_post(); ?>

<?php 
$date = DateTime::createFromFormat('Ymd', get_field('event_date'));
?>


<article class="post">
    <header>
        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <span><?php echo $date->format('F j, Y'); ?>, <?php the_field('event_time_start'); ?> - <?php the_field('event_time_end'); ?> <?php the_field('event_timezone'); ?> | <?php the_field('event_location'); ?></span>
        <?php if ( get_field('authorship') ) : ?>
        <span class="byline">by
        <?php
            $authors = get_field('authorship');
                if( $authors ):
                $i = 1;
                $count = count($authors);

                foreach( $authors as $author ):
                    $permalink = get_permalink( $author->ID );
                    $title = get_the_title( $author->ID );
                    $custom_field = get_field( 'field_name', $author->ID );
                    if ($i < $count) {
                        $separator = ',';
                    }
                    else {
                        $separator = '';
                    }
            ?>

            <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a><?php echo $separator; ?>

                    <?php $i++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
        </span>
        <?php endif; ?>
        <span class="categories">
            <?php the_category(', ') ?>
        </span>

    </header>

    <figure>
        <?php //echo get_the_post_thumbnail( $post_id, 'full' );
        ?>
        <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
        <figcaption class="attribution"><?php echo get_the_post_thumbnail_caption( $post_id ); ?></figcaption>
    </figure>

    <?php the_excerpt(); ?>

</article>

<?php endwhile; // end of the loop. ?>

</article>

<nav class="pagination" aria-label="Pagination">
<?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
    'mid_size'  => 2,
    'prev_text' => __( '<', 'textdomain' ),
    'next_text' => __( '>', 'textdomain' ),
	'current' => max( 1, get_query_var('paged') ),
    'type' => 'list',
	'total' => $wp_query->max_num_pages
) );
?>
</nav>


</main>

<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_footer('pidgin'); ?>

<?php else : ?>

<?php get_footer(); ?>

<?php endif; ?>
