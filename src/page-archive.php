<?php get_header('', array( 'body-classes' => 'default-page archive-page') ); ?>

<main>

<header>

<!-- <nav class="breadcrumbs">
    <ol>
        <li><a href=#">Home</a></li>
        <li><a href=#">Blog</a></li>
    </ol>
</nav> -->

<h1>Archives</h1>

</header>

<aside>

<?php
    $categories = get_terms( 'category', 'orderby=asc&hide_empty=0&parent=0&exclude=1' );
?>

    <nav class="filter-menu">
        <h2>Categories</h2>
        <ul>
            <li class="current"><a href="/blog/archive/">All posts</a></li>
        <?php foreach($categories as $category): ?>
                <?php
                    $category_link = get_term_link( $category );
                ?>

            <li><a href="<?php echo $category_link; ?>"><?php echo $category->name; ?></a></li>

            <?php endforeach; ?>
        </ul>
    </nav>

    <!-- <nav class="">
        <h2>Related Links</h2>
        <ul>
            <li><a href="#">Another place</a></li>
            <li class="current"><a href="#">Law License Blog</a></li>
            <li><a href="#">Within The Stacks</a></li>
        </ul>
    </nav> -->


</aside>


<div class="content authored-posts">

<?php

//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $paged,
));
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<article>
    <header>
    <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
        <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />
        <span class="attribution"><?php echo get_the_post_thumbnail_caption( $post_id ); ?></span>
    </figure>

    <?php the_excerpt(); ?>
</article>


<?php endwhile; // end of the loop. ?>
</div>


<nav class="pagination">
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

<?php endif; ?>

</main>

<?php get_footer(); ?>

