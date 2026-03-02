<?php /* Template Name: Index - Home Narrative */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'home-narrative') ); ?>

<main>

<article class="topic-summary intro"> 
    <div class="description">
        <h2><?php the_title(); ?></h2>
    </div>

    <figure>
        <img src="<?php the_field('header_graphic') ?>" alt="" />
        <!-- <img src="https://creativecommons.org/wp-content/uploads/2025/05/moon-3.jpg" class="photo" />
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/blob3.svg" class="shape1" />
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/blob4.svg" class="shape2" />
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/repeat_c.svg" class="shape3" /> -->
        <!-- <svg class="shape1">
            <use href="../../../../pidgin/svg/blob3.svg"></use>
        </svg> -->


        <figcaption>
            <p>attribution details here</p>
            
        </figcaption>
    </figure>
</article>

<article class="topic-summary about"> <!-- TODO: merge with prior article? -->
    <div class="description">
        <!-- <h2>The commons belongs to us all</h2> -->
        <?php the_field('subhead_intro') ?>
    </div>

    <figure>       
        <!-- <svg class="shape1">
            <use href="../../../../pidgin/svg/blob3.svg"></use>
        </svg> -->
        <img src="<?php the_field('subhead_graphic') ?>" />


        <figcaption>
            <!-- <p>attribution details here</p> -->
            
        </figcaption>
    </figure>
</article>

<!-- topic features here -->
 <?php
    $topic_features = get_field('featured_topics');
    if( !empty($topic_features) ) :
?>

<?php foreach($topic_features as $topic_feature) : ?>
    <?php
        $permalink = get_permalink( $topic_feature->ID );
        $title = get_the_title( $topic_feature->ID );
        $category = get_field( 'category', $topic_feature->ID );
        $link_text = get_field( 'link_text', $topic_feature->ID );
        $link_url = get_field( 'link_url', $topic_feature->ID );
        $type = get_field( 'type', $topic_feature->ID );
        if ($type == 'default') { $type = 'focus-area';}
        // $content = get_the_content( $topic_feature->ID );
        $content = get_post_field('post_content', $topic_feature->ID);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        // $excerpt = get_the_excerpt( $staff_person->ID );
        ?>

        <article class="topic-summary <?php echo $type; ?>">
        <div class="description">
            <h2><?php echo $title; ?></h2>
            <span class="category"><?php echo $category; ?></span>
            <?php echo $content; ?>
            <a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
        </div>
        <figure>
            <img src="<?php echo get_the_post_thumbnail_url( $topic_feature->ID, 'full' ); ?>" />
            <figcaption>
                "Untitled" by Ken Rahaim, 2007, Center for Folklife and Cultural Heritage, Smithsonian.
            </figcaption>
        </figure>
    </article>


    <? endforeach; ?>

<? endif; ?>

<!-- <blockquote>
    <p>There would be a quote here doing things</p>
</blockquote>

<blockquote>
    <p>There would be a quote here doing things</p>
</blockquote> -->

<article class="posts">

    <h2>Recently from the blog</h2>

    <ul>


    <?php
    $query = new WP_Query(array(
        // 'post__not_in' => $highlight_posts,
        'post_type' => 'post',
        'posts_per_page' => 4,
        //'paged' => $paged,
    ));
    ?>

<?php $post_index = 0; ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<?php $post_index++; ?>


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
            </figure>
            
            <?php if ($post_index == 1) : ?>
            <p>The Creative Commons Open Education Team is pleased to provide a snapshot of progress made toward opening access and equity in education, through a look at our collective efforts in 2022.1 We laud the CC open education community for its important work throughout 2022. CC and community members' open education efforts in 2022 included, but </p>
            <?php endif; ?>

        </article>
    </li>

    
    <?php endwhile; ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    </ul>

    <footer>
        <a class="more" href="#">more posts</a>
    </footer>

</article>






<?php get_template_part( 'pidgin/content-partials/pidgin', 'newsletter_promo', '' ); ?>


</main>

<?php get_footer('pidgin'); ?>
