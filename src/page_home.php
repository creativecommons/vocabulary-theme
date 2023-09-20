<?php /* Template Name: Index - Home */ ?>

<?php

get_header('', array( 'body-classes' => 'home-narrative') );

?>


<main>

<article class="topic-summary">
    <h2>Better Sharing, Brighter Future</h2>
    <figure>
        <iframe style="width: 100%;" title="Twenty Years of Creative Commons (in Sixty Seconds)" src="https://player.vimeo.com/video/777912896?h=016f97b875&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allowfullscreen="allowfullscreen" data-ready="true"></iframe>
        <span class="attribution">
            “<a href="https://www.flickr.com/photos/creativecommons/52543574218/">Twenty Years of Creative Commons (in Sixty Seconds)</a>” by&nbsp;<a href="http://www.junell.net/">Ryan Junell</a>&nbsp;and&nbsp;<a href="https://www.linkedin.com/in/gotisbrown/">Glenn Otis Brown</a>&nbsp;for&nbsp;<a href="https://creativecommons.org/">Creative Commons</a>&nbsp;is licensed via&nbsp;<a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>&nbsp;and includes adaptations of the multiple open and public domain works. View full licensing and attribution information about all works included in the video&nbsp;<a href="https://www.flickr.com/photos/creativecommons/52543574218/">on Flickr</a>.
        </span>
    </figure>
    <div class="description">
        <p>Creative Commons is an international nonprofit organization that empowers people to grow and sustain the thriving commons of shared knowledge and culture we need to address the world's most pressing challenges and create a brighter future for all.</p>
        <a href="/about">Learn more</a>
    </div>
</article>


<article class="case-studies">
    <h2>The nonprofit behind the licenses and tools the world uses to share</h2>
    <p>For over 20 years, Creative Commons has supported a global movement built on a belief in the power of open access to knowledge and creativity. From Wikipedia to the Smithsonian, organizations and individuals rely on our work to share billions of historic images, scientific articles, cultural artifacts, educational resources, music, and more!</p>
    <ul>
        <li>
            <figure>
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/imgs/home1.jpg" />
                <span class="attribution">"<a href="https://www.loc.gov/pictures/item/2017786790/">Farmer and his brother making music</a>” by <a href="https://www.loc.gov/pictures/related/?fi=name&q=Lee%2C%20Russell%2C%201903-1986">Russell Lee</a>, here cropped, is marked with <a href="https://creativecommons.org/publicdomain/mark/1.0/">CC PDM 1.0</a></span>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/imgs/home2.jpg" />
                <span class="attribution">“<a href="https://www.flickr.com/photos/ter-burg/32896267507/">Flickr photowalk at the Creative Commons Global Summit 2019, Lisbon</a>” by <a href="https://www.flickr.com/photos/ter-burg/">Sebastiaan ter Burg</a>, here cropped, is licensed via <a href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0</a></span>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/imgs/home3.jpg" />
                <span class="attribution">“<a href="https://www.flickr.com/photos/niaid/49557785797">Novel Coronavirus SARS-CoV-2” by <a href=https://www.flickr.com/photos/niaid/>NIAID</a>, here cropped, is licensed via <a href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0</a></span>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/imgs/home4.jpg" />
                <span class="attribution">“<a href="https://www.flickr.com/photos/lensonjapan/8724992177">Children kabuki theater in Nagahama (warrior Kumagai, 12 y.o.)</a>” by <a href="https://www.flickr.com/photos/lensonjapan/">lensonjapan</a>, here cropped, is licensed via <a href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0</a></span>
            </figure>
        </li>
    </ul>

    <footer>
        <article class="data-points supporting">
            <?php

               $firstDataPointImage = get_field('first_data_point_image');
               $secondDataPointImage = get_field('first_data_point_image');
               $thirdDataPointImage = get_field('first_data_point_image');

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

                            <img src="<?php echo get_the_post_thumbnail_url( $item, 'full' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($item), '_wp_attachment_image_alt', true ); ?>" />
                            <span class="attribution"><?php echo get_the_post_thumbnail_caption( $item ); ?></span>
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
