<?php get_header('', array( 'body-classes' => 'default-page search-index') ); ?>

<main>

<header>

<h1>Search</h1>

<article class="search-form">
    <form role="search" method="get" class="search-form" action="https://creativecommons.org/"> 

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


<div class="content authored-posts">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>


<article>
    <header>
        <h2><a href="#"><?php the_title(); ?></a></h2>

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
        <span class="categories">
            <?php the_category(', ') ?>
        </span>
        <span class="type">
            <?php echo get_post_type(); ?>
        </span>

    </header>

    <?php if ( has_post_thumbnail() ) : ?>
    <figure>
        <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" />
        <span class="attribution"><?php echo get_the_post_thumbnail_caption( $post_id ); ?></span>
    </figure>
    <?php endif; ?>

    <?php the_excerpt(); ?>
</article>

    <?php endwhile; // end of the loop. ?>

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

    <?php endif; ?>
</div>



</main>

<?php get_footer(); ?>
