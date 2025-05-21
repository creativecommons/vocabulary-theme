<?php get_header('', array( 'body-classes' => 'search-index') ); ?>

<main>

<header>

<h1>Search</h1>

<article class="search-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

        <input type="search" class="search-field" placeholder="Search for..." value="" name="s" title="Search">

        <button type="submit" value="Search">Search</button>
    </form>
</article>

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


<article class="posts">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>


<article class="post">
    <header>
        <?php if (get_post_type() != 'faq_item') : ?>
        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php else : ?>
        <h2><a href="/faqs/#<?php echo (str_replace(' ', '-', strtolower($post->post_title))); ?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>

        <?php if ( get_field('authorship' ) ) : ?>
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

        <?php if(get_post_type() != 'program') : ?>
        <span class="categories">
            <?php the_category(', ') ?>
        </span>
        <?php endif; ?>

        <span class="type">
            <?php
            if (get_post_type() != 'faq_item') {
                echo get_post_type();
            } else {
                echo 'FAQ';
            }
            ?>
        </span>

    

    </header>

    <?php if ( has_post_thumbnail() ) : ?>
    <figure>
        <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />
        <figcaption class="attribution"><?php echo get_the_post_thumbnail_caption( $post_id ); ?></figcaptionn>
    </figure>
    <?php endif; ?>

    <?php the_excerpt(); ?>
</article>

    <?php endwhile; // end of the loop. ?>

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

    <?php endif; ?>
</article>



</main>

<?php get_footer(); ?>
