<?php /* Template Name: Index - Home Narrative */ ?>

<?php

get_header('pidgin', array( 'body-classes' => 'home-narrative-interim') );

?>

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/css/pidgin.css" />
<style>
    <?php the_field('css_dev_hotfixes' ); ?>
</style>


<main>

<article class="topic-summary intro"> 
    <div class="description">
        <h2><?php the_field('lead_in_title' ); ?></h2>
        <p><?php the_field('lead_in_description' ); ?></p> 
        <p><?php the_field('lead_in_sub_description' ); ?></p>
        <ul>
            <li><a href="<?php the_field('lead_in_link_url_1' ); ?>"><?php the_field('lead_in_link_text_1' ); ?> &rarr;</a></li>
            <li> <a href="<?php the_field('lead_in_link_url_2' ); ?>"><?php the_field('lead_in_link_text_2' ); ?></a></li>
            <li><a href="<?php the_field('lead_in_link_url_3' ); ?>"><?php the_field('lead_in_link_text_3' ); ?></a></li>
        </ul>
    </div>

      <figure>
        <img src="<?php the_field('lead_in_image' ); ?>" />
        <figcaption>
            <!-- figcaption here -->
        </figcaption>
    </figure>
</article>

<article class="topic-summary legal-tools">
    
    <div class="description">
        <h2><?php the_field('legal_tools_title' ); ?></h2>
        <?php the_field('legal_tools_text' ); ?>
        <a href="<?php the_field('legal_tools_link_url_1' ); ?>"><?php the_field('legal_tools_link_text_1' ); ?> &rarr;</a>
        <a href="<?php the_field('legal_tools_link_url_2' ); ?>"><?php the_field('legal_tools_link_text_2' ); ?></a>
        <a href="<?php the_field('legal_tools_link_url_3' ); ?>"><?php the_field('legal_tools_link_text_3' ); ?></a>
    </div>

</article>

<article class="topic-summaries focus-areas">

    <?php
        $focus_features = get_field('focus_features');
        if( !empty($focus_features) ) :
    ?>

    <?php foreach($focus_features as $focus_feature) : ?>
        <?php
            $permalink = get_permalink( $focus_feature->ID );
            $title = get_the_title( $focus_feature->ID );
            $link_text = get_field( 'link_text', $focus_feature->ID );
            $link_url = get_field( 'link_url', $focus_feature->ID );
            // $content = get_the_content( $focus_feature->ID );
            $content = get_post_field('post_content', $focus_feature->ID);
            // $excerpt = get_the_excerpt( $staff_person->ID );
         ?>

         <article class="topic-summary focus-area">
            <div class="description">
                <h3><?php echo $title; ?></h3>
                <span class="category">Open Culture</span>
                <p><?php echo $content; ?></p>
                <a href="<?php echo $link_url; ?>"><?php echo $link_text; ?> &rarr;</a>
            </div>
            <figure>
                <img src="<?php echo get_the_post_thumbnail_url( $focus_feature->ID, 'full' ); ?>" />
                <figcaption>
                    "Untitled" by Ken Rahaim, 2007, Center for Folklife and Cultural Heritage, Smithsonian.
                </figcaption>
            </figure>
        </article>


        <? endforeach; ?>

    <? endif; ?>
    
</article>

<article class="support">
    <div>
        <h2><?php the_field('support_cc_title'); ?></h2>
        <div class="description">
            <?php the_field('support_cc_description'); ?>
            <a href="<?php the_field('support_cc_link_url_1' ); ?>"><?php the_field('support_cc_link_text_1' ); ?> &rarr;</a>
            <a href="<?php the_field('support_cc_link_url_2' ); ?>"><?php the_field('support_cc_link_text_2' ); ?></a>
            <a href="<?php the_field('support_cc_link_url_3' ); ?>"><?php the_field('support_cc_link_text_3' ); ?></a>

        </div>
    </div>
    <img src="<?php the_field('support_cc_background_image'); ?>" class="background-decoration" />
</article>

<article class="posts">

    <h2>Recently from the blog</h2>

    <ul>

    <?php
    $query = new WP_Query(array(
        // 'post__not_in' => $highlight_posts,
        'post_type' => 'post',
        'posts_per_page' => 3,
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
                <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true ); ?>" />
            </figure>
            
            <!-- <p>The Creative Commons Open Education Team is pleased to provide a snapshot of progress made toward opening access and equity in education, through a look at our collective efforts in 2022.1 We laud the CC open education community for its important work throughout 2022. CC and community members' open education efforts in 2022 included, but </p> -->

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

<article class="newsletter">
    <h2>Newsletter highlights</h2>
    <div class="description">
        <h3><?php the_field('newsletter_highlight_title'); ?></h3>
        <a href="<?php the_field('newsletter_highlight_link_url'); ?>"><?php the_field('newsletter_link_text'); ?> &rarr;</a>
    </div>
    <figure>
        <img src="<?php the_field('newsletter_highlight_image' ); ?>">
    </figure>
    
</article>


<article class="attribution-list">
<details>
<summary>Images attribution</summary>
    <ul class="attribution-panel expand">
        <li>
            <article>
                
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/09/roadturn16x9-scaled.jpg" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
                
            </article>
        </li>
        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/09/Blog-Image-Size.png" />
                    <figcaption class="attribution">
                        "<a href="https://www.flickr.com/photos/47691521@N07/8249753855" target="_blank" rel="noopener noreferrer">Creative Commons a vessel ideas</a>" 
                        by <a href="https://www.flickr.com/photos/47691521@N07" target="_blank" rel="noopener noreferrer">opensourceway</a> 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=openverse" target="_blank" rel="noopener noreferrer">CC BY-SA 2.0</a>
                    </figcaption>
                </figure>
                
            </article>
        </li>
        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size-3.png" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> 
                        for Creative Commons & Fine Acts is licensed under 
                        <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
                
            </article>
        </li>
        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size-2.png" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
                
            </article>
        </li>

        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size.png" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
            </article>
        </li>

        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/07/Ocean-Coast-by-Maurice-Denis.-Public-Domain.-Swedish-National-Museum.png" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
            </article>
        </li>

    </ul>
</details>
</article>


</main>


<?php get_footer('pidgin'); ?>
