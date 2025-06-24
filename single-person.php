<?php get_header('', array( 'body-classes' => 'person-page') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>
<span class="title"><?php the_field('position_title'); ?></span>
<?php if(get_field('pronouns') ) : ?>
<span class="pronouns">(<?php the_field('pronouns'); ?>)</span>
<?php endif; ?>

<?php if(get_post_thumbnail_id($post_id)) : ?>
<figure>
    <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />
    <figcaption class="attribution"><?php echo get_the_post_thumbnail_caption( $post_id ); ?></figcaption>
</figure>
<?php endif; ?>

<div class="bio">
    <?php the_content(); ?>
</div>

</header>

<!-- <aside>
    <nav class="contextual-menu">
        <h2>Registration</h2>
        <ul>
            <li><a href="#">How many hours of work does the Certificate course require?</a></li>
            <li><a href="#">What do I get with the Certificate?</a></li>
        </ul>
    </nav>

    <nav>
        <h2>Course</h2>
        <ul>
            <li><a href="#">Does everyone participating in the course get a certificate?</a></li>
            <li><a href="#">Can I represent Creative Commons once I am CC Certified?</a></li>
            <li><a href="#">How Scholarships work?</a></li>

        </ul>
    </nav>
</aside> -->

<?php
//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => $paged,
    'meta_query' => array(
        array(
            'key' => 'authorship',
            'value' => '"' . get_the_ID() . '"',
            'compare' => 'LIKE'
        )
    )
));
?>

<?php if ( $query->have_posts() ) : ?>

<article class="posts">
    <h2>Posts by <?php the_title(); ?></h2>

    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <article class="post">
        <header>
        <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
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


        <?php the_excerpt(); ?>

    </article>

    <?php endwhile; ?>

</article>

<?php endif; ?>

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
	'total' => $query->max_num_pages
) );
?>
</nav>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
