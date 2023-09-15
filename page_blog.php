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
            <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" />
            <?php if ($i == 1): ?>
            <span class="attribution"><?php echo get_the_post_thumbnail_caption( $post_id ); ?></span>
            <?php endif; ?>
        </figure>

        <?php if ($i == 1): ?>
        <p>The Creative Commons Open Education Team is pleased to provide a snapshot of progress made toward opening access and equity in education, through a look at our collective efforts in 2022.1 We laud the CC open education community for its important work throughout 2022. CC and community members' open education efforts in 2022 included, but </p>
        <?php endif; ?>

    </article>


    <?php
    if ($i != 1) {
        $highlight_posts[] = $post->ID;
    }
    $i++;
    ?>

    <?php endforeach; ?>

</article>
<?php endif; ?>



<article class="stories authored-posts highlight">
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
            <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" />
        </figure>
    </article>

    <?php $highlight_posts[] = $post->ID; ?>

	<?php endwhile; ?>

<?php endif; ?>

</article>


<footer>

    <a class="more" href="/blog/archive/">more posts</a>

    <article class="attribution-list">

        <h2>Images Attribution</h2>
        <button class="expand-attribution">view</button>

        <ul class="attribution-panel">
            <?php foreach ($highlight_posts as $item) : ?>
            <?php if( get_the_post_thumbnail_caption( $item ) ) : ?>
            <li>
                <article>
                    <figure>

                        <img src="<?php echo get_the_post_thumbnail_url( $item, 'full' ); ?>" />
                        <span class="attribution"><?php echo get_the_post_thumbnail_caption( $item ); ?></span>
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

