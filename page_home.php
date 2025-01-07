<?php /* Template Name: Index - Home */ ?>

<?php

get_header('', array( 'body-classes' => 'home-narrative') );

?>


<main>

<article class="topic-summary">
    <h2>Better Sharing, Brighter Future</h2>
    <figure>
        <?php
            $featured_media_notice = get_field('featured_media_notice');
            if ( $featured_media_notice ) :
        ?>
        <span class="attention">
            <span class="icon-attach fa-info"></span>
            <?php echo $featured_media_notice; ?>
        </span>
        <?php endif; ?>
        <iframe style="width: 100%;" title="Twenty Years of Creative Commons (in Sixty Seconds)" src="https://player.vimeo.com/video/777912896?h=016f97b875&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allowfullscreen="allowfullscreen" data-ready="true"></iframe>
        <figcaption class="attribution">
            “<a href="https://www.flickr.com/photos/creativecommons/52543574218/">Twenty Years of Creative Commons (in Sixty Seconds)</a>” by&nbsp;<a href="http://www.junell.net/">Ryan Junell</a>&nbsp;and&nbsp;<a href="https://www.linkedin.com/in/gotisbrown/">Glenn Otis Brown</a>&nbsp;for&nbsp;<a href="https://creativecommons.org/">Creative Commons</a>&nbsp;is licensed via&nbsp;<a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>&nbsp;and includes adaptations of the multiple open and public domain works. View full licensing and attribution information about all works included in the video&nbsp;<a href="https://www.flickr.com/photos/creativecommons/52543574218/">on Flickr</a>.
        </figcaption>
    </figure>
    <div class="description">
        <p>Creative Commons is an international nonprofit organization that empowers people to grow and sustain the thriving commons of shared knowledge and culture we need to address the world's most pressing challenges and create a brighter future for all.</p>
        <a href="/mission">Learn more</a>
    </div>
</article>




<article class="case-studies">
    <h2>The nonprofit behind the licenses and tools the world uses to share</h2>
    <p>For over 20 years, Creative Commons has supported a global movement built on a belief in the power of open access to knowledge and creativity. From Wikipedia to the Smithsonian, organizations and individuals rely on our work to share billions of historic images, scientific articles, cultural artifacts, educational resources, music, and more!</p>

    <?php
        $case_studies = get_field('case_studies');
        if ( $case_studies ) :
    ?>
    <ul>
        <?php
            foreach ($case_studies as $case_study) :
            $case_study_img_url = wp_get_attachment_image_url( $case_study->ID, 'full' );
            $case_study_img_id = attachment_url_to_postid( $case_study_img_url );
            $case_study_caption = wp_get_attachment_caption($case_study->ID);
            $case_study_alt = $image_alt = get_post_meta($case_study_img_id, '_wp_attachment_image_alt', TRUE);
        ?>
        <li>
            <figure>
                <img src="<?php echo $case_study_img_url; ?>" alt="<?php echo $case_study_alt; ?>"  />
                <figcaption class="attribution"><?php echo $case_study_caption; ?></figcaption>
            </figure>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <footer>
        <article class="data-points supporting">
            <?php

               $firstDataPointImage = get_field('first_data_point_image');
               $secondDataPointImage = get_field('second_data_point_image');
               $thirdDataPointImage = get_field('third_data_point_image');

            ?>

            <ul>
                <li>
                    <article class="data-point wikipedia">
                        <h2 style="background-image: url('<?php echo $firstDataPointImage; ?>');">Wikipedia</h2>
                        <h3 class="stat">55+ million articles</h3>
                        <p>Every one of Wikipedia's 55 million plus articles are shared openly and freely using  a CC license.</p>
                    </article>
                </li>
                <li>
                    <article class="data-point the-met">
                        <h2 style="background-image: url('<?php echo $secondDataPointImage; ?>');");">The Met</h2>
                        <h3 class="stat">492,000+ images</h3>
                        <p>All images of public-domain works in the Met's collection are openly available under Creative Commons Zero (CC0).</p>
                    </article>
                </li>
                <li>
                    <article class="data-point khan-academy">
                        <h2 style="background-image: url('<?php echo $thirdDataPointImage; ?>');");">Khan Academy</h2>
                        <h3 class="stat">100,000+ lessons</h3>
                        <p>Many of the lessons found on Khan Academy are openly licensed under CC-BY-NC-SA.</p>
                    </article>
                </li>
            </ul>
        </article>
    </footer>
</article>



<?php
    $blog = get_page_by_path( 'blog' );
    if( $blog ) {
        $posts = get_field('featured_posts', $blog);
    }

    if( $posts ):
?>

<article class="stories authored-posts highlight">
    <h2>Latest News</h2>

    <?php

        $i=1;
        foreach( $posts as $post ):
            $permalink = get_permalink( $post->ID );
            $title = get_the_title( $post->ID );
            //$custom_field = get_field( 'field_name', $post->ID );
    ?>


    <article class="story">
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
            <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />
            <?php if ($i == 1): ?>
            <figcaption class="attribution"><?php echo get_the_post_thumbnail_caption( $post_id ); ?></figcaption>
            <?php endif; ?>
        </figure>

        <?php if ($i == 1): ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>

    </article>


    <?php
    if ($i != 1) {
        $highlight_posts[] = $post->ID;
    }
    $i++;
    ?>

    <?php endforeach; ?>

    <footer>
        <a class="more" href="/blog/archive/">more posts</a>

        <article class="attribution-list">

            <h2>Images Attri&shy;bution</h2>
            <button class="expand-attribution">view</button>

            <ul class="attribution-panel">
                <?php foreach ($highlight_posts as $item) : ?>
                <?php if( get_the_post_thumbnail_caption( $item ) ) : ?>
                <li>
                    <article>
                        <figure>

                            <img src="<?php echo get_the_post_thumbnail_url( $item, 'full' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($item), '_wp_attachment_image_alt', true ); ?>" />
                            <figcaption class="attribution"><?php echo get_the_post_thumbnail_caption( $item ); ?></figcaption>
                        </figure>
                    </article>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </article>
    </footer>


</article>
<?php endif; ?>


</main>


<?php get_footer(); ?>
