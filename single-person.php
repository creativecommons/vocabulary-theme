<?php get_header('', array( 'body-classes' => 'default-page person-page') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>
<span class="title">Chief of Staff and Secretary to the Board of Directors</span>
<figure>
    <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" />
    <span class="attribution">by Priscilla C. Scott for Creative Commons, licensed under <a href="#">CC BY 4.0</a></span>
</figure>
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

$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 4,
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

<section class="authored-posts">
    <h2>Posts by <?php the_title(); ?></h2>

    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <article>
    <header>
       <h2><a href="#"><?php echo the_title(); ?></a></h2>
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
        <span class="categories">
            <?php the_category(', ') ?>
        </span>
    
    </header>
    
        <figure>
            <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" />
            
            <span class="attribution">"<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></span>
        </figure>
        <p>As part of our #20CC anniversary, last year we joined forces with Fine Acts to spark a global dialogue on what better sharing looks like in action. Our #BetterSharing collection of illustrations was the result — we gathered insights from 12 prominent open advocates around the world and tasked 12 renowned artists who embrace openness</p>
        <!-- <ul>
            <li><a href="#">category</a></li>
        </ul> -->
    </article>

    <?php endwhile; ?>
    
</section>

<?php endif; ?>

<nav class="pagination">
    <ol>
        <li class="current"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>&hellip;</li>
        <li><a href="#">527</a></li>

        <!-- <li><a href="#"><</a></li> -->
        <li><a href="#">></a></li>
    </ol>

</nav>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
