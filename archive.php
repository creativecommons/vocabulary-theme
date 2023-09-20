<?php get_header('', array( 'body-classes' => 'default-page archive-page') ); ?>

<main>

<header>

<!-- <nav class="breadcrumbs">
    <ol>
        <li><a href=#">Home</a></li>
        <li><a href=#">Blog</a></li>
    </ol>
</nav> -->

<h1><?php the_archive_title(); ?></h1>

<p><?php the_archive_description(); ?></p>


</header>

<aside>


<?php
    $categories = get_terms( 'category', 'orderby=asc&hide_empty=0&parent=0&exclude=1' );
    $current_category = get_queried_object();
?>

    <nav class="filter-menu">
        <h2>Categories</h2>
        <ul>
            <li><a href="/blog/archive/">All posts</a></li>
        <?php foreach($categories as $category): ?>
                <?php
                    $category_link = get_term_link( $category );

                    if($category->term_taxonomy_id == $current_category->term_id )  {
                        $current = "current";
                    }  else {$current = '';}
                ?>

            <li class="<?php echo $current; ?>"><a href="<?php echo $category_link; ?>"><?php echo $category->name; ?></a></li>

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

    <article class="attention">
        <h2>Write a post!</h2>
        <p>We accept <a href="#">proposals and submissions for posts</a> related to our mission and the commons.</p>

    </article>


</aside>


<div class="content authored-posts">

<?php while ( have_posts() ) : the_post(); ?>


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
        <?php //echo get_the_post_thumbnail( $post_id, 'full' );
        ?>
        <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
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
	'total' => $wp_query->max_num_pages
) );
?>
</nav>

</main>

<?php get_footer(); ?>
