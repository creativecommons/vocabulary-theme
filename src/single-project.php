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

    <aside class="opening">
        <h2>Introduction</h2>
        <p>This is the second post in a three-part series leading up to the launch of the Open Heritage Statement in October. In <a href="https://creativecommons.org/2025/09/10/understanding-barriers-to-accessing-heritage/"> part 1 of this series</a>, we examined how so much of our shared digital heritage remains locked away, despite the fact that heritage in the public domain belongs to the public, and should be free for anyone to access, reuse, and breathe new life into it. In this post, we turn to the benefits of open heritage, showing what becomes possible when barriers are removed and heritage in the public domain is openly accessible. In our final post, we will preview the Open Heritage Statement and how it aims to shape an international framework under UNESCO’s auspices. You can join our global call for equitable access to public domain heritage in the digital environment. Mark your calendars for the <strong>Open Heritage Statement Launch</strong> on <strong>14 October, 14:00 UTC. </strong><a href="https://us06web.zoom.us/webinar/register/WN_QkmQT4FUShG2Mhy2CU1ecw#/registration">Register in advance for this webinar</a>.</p>
    </aside>

    <?php the_content(); ?>

    <aside class="closing">
        <p>Learn more about CC through our mission and strategy and our collection of public reports and financials. For information about CC's funding agreements, please see our Contributions Policy. You can also view written disclosures for nonprofit organizations that solicit contributions required by certain states in the USA.</p>
    </aside>

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
<? endif; ?>



<?php endwhile; // end of the loop. ?>

</main>

<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_footer('pidgin'); ?>

<?php else : ?>

<?php get_footer(); ?>

<?php endif; ?>


