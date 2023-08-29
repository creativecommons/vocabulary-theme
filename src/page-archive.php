<?php get_header('', array( 'body-classes' => 'default-page archive-page') ); ?>

<main>

<header>

<!-- <nav class="breadcrumbs">
    <ol>
        <li><a href=#">Home</a></li>
        <li><a href=#">Blog</a></li>
    </ol>
</nav> -->


<h1>Archives (page-archive.php)</h1>

<!-- <span class="byline">by <a href="#">Marie Langley</a>, <a href="#">Marvau Laraugne</a></span> -->

<p>lead in paragraph</p>

<!-- <span class="categories">
    <a href="#">Open Culture</a>
</span> -->


<!-- <img src="#" /> -->

</header>

<aside>

    <nav class="filter-menu">
        <h2>Categories</h2>
        <ul>
            <li class="current"><a href="#">All posts</a></li>
            <li><a href="#">Open Culture</a></li>
            <li><a href="#">Open Knowledge</a></li>
        </ul>
    </nav>

    <nav class="">
        <h2>Related Links</h2>
        <ul>
            <li><a href="#">Another place</a></li>
            <li class="current"><a href="#">Law License Blog</a></li>
            <li><a href="#">Within The Stacks</a></li>
        </ul>
    </nav>

    <article class="attention">
        <h2>Write a post!</h2>
        <p>We accept <a href="#">proposals and submissions for posts</a> related to our mission and the commons.</p>

    </article>


</aside>


<div class="content">

<?php

//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'paged' => $paged,
));
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<article>
    <header>
   <h2><a href="#"><?php the_title(); ?></a></h2>
    <span class="byline">by <a href="#">Brigitte Vezina</a>, <a href="#">Ony Anukem</a></span>
    <span class="categories"><a href=#">Open Culture</a></span>

</header>

    <figure>
        <img src="../imgs/image.jpg" />
        
        <span class="attribution">"<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></span>
    </figure>
    <p>As part of our #20CC anniversary, last year we joined forces with Fine Acts to spark a global dialogue on what better sharing looks like in action. Our #BetterSharing collection of illustrations was the result — we gathered insights from 12 prominent open advocates around the world and tasked 12 renowned artists who embrace openness</p>
    <!-- <ul>
        <li><a href="#">category</a></li>
    </ul> -->
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

