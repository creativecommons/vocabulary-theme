<?php /* Template Name: Index - Blog */ ?>

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

<article class="posts featured">
    <h2>Featured posts</h2>

    <ul>

    <?php

        $i=1;
        foreach( $posts as $post ):
            $permalink = get_permalink( $post->ID );
            $title = get_the_title( $post->ID );
            //$custom_field = get_field( 'field_name', $post->ID );
    ?>
    <li>
    <article class="post">
        <header>
        <h3 class="title"><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a></h3>

        <?php if ( get_field('authorship') ) : ?>
        <span class="byline">by
            <?php
            $authors = get_field('authorship');
                if( $authors ):
                $ai = 1;
                $count = count($authors);

                foreach( $authors as $author ):
                    $permalink = get_permalink( $author->ID );
                    $title = get_the_title( $author->ID );
                    $custom_field = get_field( 'field_name', $author->ID );
                    if ($ai < $count) {
                        $separator = ',';
                    }
                    else {
                        $separator = '';
                    }
            ?>

            <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a><?php echo $separator; ?>

                    <?php $ai++; ?>
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
            <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />
            <?php if ($i == 1): ?>
            <figcaption class="attribution"><?php echo get_the_post_thumbnail_caption( $post_id ); ?></figcaption>
            <?php endif; ?>
        </figure>

        <?php if ($i == 1): ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>

    </article>
    </li>


    <?php
    // if ($i != 1) {
        $highlight_posts[] = $post->ID;
    // }
    $i++;
    ?>

    <?php endforeach; ?>
    </ul>

</article>
<?php endif; ?>



<article class="posts">
<h2>Recent Posts</h2>

<ul>

<?php
$query = new WP_Query(array(
    'post__not_in' => $highlight_posts,
    'post_type' => 'post',
    'posts_per_page' => 6,
    //'paged' => $paged,
));
?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <li>
	<article class="post">
        <header>
        <h3 class="title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
            <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />
        </figure>
    </article>
    </li>

    <?php $highlight_posts[] = $post->ID; ?>

	<?php endwhile; ?>
    </ul>

    <a class="more" href="/blog/archive/">more posts</a>

    
<?php endif; ?>


</article>


<footer>


    <article class="attribution-list">
        <?php array_shift($highlight_posts); ?>

        <h2>Images Attri&shy;bution</h2>
        <button class="expand-attribution">view</button>

        <ul class="attribution-panel">
            <?php foreach ($highlight_posts as $item) : ?>
            <?php if( get_the_post_thumbnail_caption( $item ) ) : ?>
            <li>
                <article>
                    <figure>

                        <img src="<?php echo get_the_post_thumbnail_url( $item, 'medium' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($item), '_wp_attachment_image_alt', true ); ?>" />
                        <figcaption class="attribution"><?php echo get_the_post_thumbnail_caption( $item ); ?></figcaption>
                    </figure>
                </article>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </article>

</footer>


</main>

<?php get_footer(); ?>

