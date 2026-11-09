<!-- This file (and others like it), can be utilized to code
bespoke templates for the [list] shortcode looper  -->

<?php

$query = $args['query'];

?>


<?php if ( $query->have_posts() ) : ?>

<article class="posts">

<!-- <h2>Recently from the blog</h2> -->

<ul>

<?php  while ( $query->have_posts() ) : $query->the_post(); ?>


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
                <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />
                <figcaption>
                    <?php echo get_the_post_thumbnail_caption( $post_id ); ?>
                </figcaption>
            </figure>

            <?php if ($post_index == 1) : ?>
            <?php the_excerpt(); ?>
            <?php endif; ?>

        </article>
    </li>


    <?php endwhile; ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    </ul>

    <!-- <footer>
        <a class="more" href="/blog/archive/">more posts</a>
    </footer> -->

</article>
