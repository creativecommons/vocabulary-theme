<?php get_header('', array( 'body-classes' => 'blog-index') ); ?>

<main>

<header>

<h1>Blog</h1>

<!-- <span class="byline">by <a href="#">Brigitte Vezina</a>, <a href="#">Ony Anukem</a></span> -->

<?php
    $introduction = get_field('introduction');
    if( $introduction ): 
?>
<p><?php echo esc_html( $introduction ); ?></p>
<?php endif; ?>

<!-- <span class="categories">
    <a href="#">Open Culture</a>
</span> -->


<!-- <img src="#" /> -->

</header>

<?php
    $posts = get_field('featured_posts');
    if( $posts ): 
?>

<article class="stories authored-posts highlight">

    <?php 
        $i=1;
        foreach( $posts as $post ): 
            $permalink = get_permalink( $post->ID );
            $title = get_the_title( $post->ID );
            //$custom_field = get_field( 'field_name', $post->ID );
    ?>

    <article class="story">
        <header>
        <h2 class="title"><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a></h2>
    
        <span class="byline">by <a href="#">Brigitte Vezina</a>, <a href="#">Ony Anukem</a></span>
        <span class="categories">
            <?php the_category(', ') ?>
        </span>
        </header>

        <figure>
            <img src="../imgs/image2.jpg" />
            <span class="attribution"><span>"</span><a href="https://www.flickr.com/photos/47691521@N07/8249753855" target="_blank" rel="noopener noreferrer">Creative Commons a vessel ideas</a><span>" by&nbsp;</span><a href="https://www.flickr.com/photos/47691521@N07" target="_blank" rel="noopener noreferrer">opensourceway</a><span>&nbsp;is licensed under&nbsp;</span><a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=openverse" target="_blank" rel="noopener noreferrer">CC BY-SA 2.0</a></span>
        </figure>

        <?php if ($i == 1): ?>
        <p>The Creative Commons Open Education Team is pleased to provide a snapshot of progress made toward opening access and equity in education, through a look at our collective efforts in 2022.1 We laud the CC open education community for its important work throughout 2022. CC and community members' open education efforts in 2022 included, but </p>
        <?php endif; ?>
        
    </article>


    <?php 
    $highlight_posts[] = $post->ID;
    $i++; 
    ?>

    <?php endforeach; ?>
    

    

    <footer>
        <article class="attribution-list">
        <h2>Images Attribution</h2>
            <ul>
                <li>
                    <article>
                        <figure>
                            <img src="../imgs/image3.png" />
                            <span class="attribution">"<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></span>
                        </figure>
                    </article>
                </li>
                <li>
                    <article>
                        <figure>
                            <img src="../imgs/image4.png" />
                            <span class="attribution"><span>"</span><a href="https://www.flickr.com/photos/47691521@N07/8249753855" target="_blank" rel="noopener noreferrer">Creative Commons a vessel ideas</a><span>" by&nbsp;</span><a href="https://www.flickr.com/photos/47691521@N07" target="_blank" rel="noopener noreferrer">opensourceway</a><span>&nbsp;is licensed under&nbsp;</span><a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=openverse" target="_blank" rel="noopener noreferrer">CC BY-SA 2.0</a></span>
                        </figure>
                    </article>
                </li>
                <li>
                    <article>
                        <figure>
                            <img src="../imgs/image3.png" />
                            <span class="attribution">"<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></span>
                        </figure>
                    </article>
                </li>
                <li>
                    <article>
                        <figure>
                            <img src="../imgs/image3.png" />
                            <span class="attribution">"<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></span>
                        </figure>
                    </article>
                </li>
            </ul>
        </article>
    </footer>

</article>
<?php endif; ?>



<article class="stories authored-posts">
<h2>Recent Posts</h2>

<?php
$query = new WP_Query(array(
    'post__not_in' => $highlight_posts,
    'post_type' => 'post',
    'posts_per_page' => 5,
    //'paged' => $paged,
));
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

	<article class="story">
        <header>
        <h3 class="title"><a href="#"><?php the_title(); ?></a></h3>
        <span class="byline">by <a href="#">Brigitte Vezina</a>, <a href="#">Ony Anukem</a></span>
        <span class="categories">
            <?php the_category(', ') ?>
        </span>
    
        </header>
        <p>In search of answers, we looked at past research, notably Andrea Wallace's Barriers to Open Access — Open GLAM, and asked more than 30 experts in the open culture movement. You can watch what they told us in our CC Open Culture VOICES vlog series. Here's a small sample of what we heard</p>
    </article>

	<?php endwhile; ?> 

<?php endif; ?>

    <a class="more" href="#">more posts</a>
    
</article>
    

</main>

<?php get_footer(); ?>
