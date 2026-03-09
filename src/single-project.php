<!-- ///////////////////////////////////////////////////////////// -->

<?php $devQuery = new WP_Query( array( 
    'post_type' => 'page',
    'pagename' => 'dev-settings' 
    ) );
    
    $themeVersion = '';
?>

<?php if ( $devQuery->have_posts() ) : ?>
<?php  while ( $devQuery->have_posts() ) : $devQuery->the_post(); ?>

    <?php if( get_field('brand_version')) : ?>

            <?php $themeVersion = get_field('brand_version') ?>

    <?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<!-- //////////////////////////////////////////////////////////// -->


<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_header('pidgin', array( 'body-classes' => 'project-post') ); ?>

<?php else : ?>

<?php get_header('', array( 'body-classes' => 'project-post') ); ?>

<?php endif; ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<div>
<h1><?php the_title(); ?></h1>

<span class="categories">
    <?php the_category(', ') ?>
</span>
</div>

<figure>
    <?php $image = get_field('header_graphic'); ?>
    <img src="<?php echo $image['url'] ?>" alt="" />

    <figcaption>
        <p><?php echo $image['caption'] ?></p>
        
    </figcaption>
</figure>
</header>


<?php if (get_field('display_sidebar')) : ?>

<?php get_sidebar(); ?>

<?php endif; ?>

<div class="content">

    <?php if (get_field('lead_in_copy')): ?>
    <aside class="opening">
        <?php the_field('lead_in_copy'); ?>
    </aside>
    <?php endif; ?>

    <?php the_content(); ?>

    <?php if (get_field('closing_copy')): ?>
    <div class="closing">
        <?php the_field('closing_copy'); ?>
    </div>
    <?php endif; ?>

</div>


<!-- related blog posts here -->
 <?php
    $project_blogs = get_field('blog_posts');
    if( !empty($project_blogs) ) :
?>

<article class="posts">

    <h2>Related Posts</h2>

    <details class="attribution">
    <summary>Attribution <span class="icon icon-replace fa-angle-up"></span></summary>

    <ul class="attributions">

            <?php foreach($project_blogs as $blog) : ?>
            <li>
                <article>
                    <figure>
                        <img src="<?php echo get_the_post_thumbnail_url( $blog->ID, 'full' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($blog->ID), '_wp_attachment_image_alt', true ); ?>" />

                        <figcaption>
                            <p><?php echo get_the_post_thumbnail_caption( $blog->ID ); ?></p>
                        </figcaption>
                    </figure>
                </article>
            </li>
            <?php endforeach; ?>

        </ul>
    </details>

    <ul>


    <?php foreach($project_blogs as $blog) : ?>
    <?php
        $permalink = get_permalink( $blog->ID );
        $title = get_the_title( $blog->ID );
        $category = get_field( 'category', $blog->ID );
        $link_text = get_field( 'link_text', $blog->ID );
        $link_url = get_field( 'link_url', $blog->ID );
        // $type = get_field( 'type', $blog->ID );
        // if ($type == 'default') { $type = 'focus-area';}
        // $content = get_the_content( $topic_feature->ID );
        // $content = get_post_field('post_content', $topic_feature->ID);
        // $content = apply_filters('the_content', $content);
        // $content = str_replace(']]>', ']]&gt;', $content);
        // $excerpt = get_the_excerpt( $staff_person->ID );
    ?>
    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>

            <?php if ( get_field('authorship', $blog->ID) ) : ?>
            <span class="byline">by
                <?php
                $authors = get_field('authorship', $blog->ID);
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
                <?php the_category(', ', $blog->ID) ?>
            </span>
            </header>

            <figure>
                <img src="<?php echo get_the_post_thumbnail_url( $blog->ID, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($blog->ID), '_wp_attachment_image_alt', true ); ?>" />
                <figcaption>
                    <?php echo get_the_post_thumbnail_caption( $blog->ID ); ?>
                </figcaption>
            </figure>

        </article>
    </li>

    <?php endforeach; ?>

    </ul>

    <footer>
        <!-- <a class="more" href="#">more posts</a> -->
    </footer>

</article>
<?php endif; ?>



<?php endwhile; // end of the loop. ?>

</main>

<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_footer('pidgin'); ?>

<?php else : ?>

<?php get_footer(); ?>

<?php endif; ?>


