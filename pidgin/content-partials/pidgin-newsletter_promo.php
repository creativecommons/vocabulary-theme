
<?php
$noticeQuery = new WP_Query(array(
    'post_type' => 'notice',
    'posts_per_page' => 1,
    'meta_key' => 'type',
    'meta_value' => 'newsletter-promo'
    //'paged' => $paged,
));
?>
<?php if ( $noticeQuery->have_posts() ) : while ( $noticeQuery->have_posts() ) : $noticeQuery->the_post(); ?>

<article class="topic-summary newsletter">
    <div class="description">
        <h2><?php the_field('message'); ?></h2>
        <a href="<?php the_field('url'); ?>"><?php the_field('link_text'); ?></a>
    </div>
    <figure>
        <?php $image = get_field('graphic'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <!-- <figcaption>
            <p></p>
        </figcaption> -->
    </figure>
    
</article>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
