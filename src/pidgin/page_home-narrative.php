<?php /* Template Name: Index - Home Narrative */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'home-narrative') ); ?>

<main>

<article class="topic-summary intro"> 
    <div class="description">
        <h2>The commons belongs to us all</h2>
    </div>

    <figure>
        <img src="https://creativecommons.org/wp-content/uploads/2025/05/moon-3.jpg" class="photo" />
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/blob3.svg" class="shape1" />
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/blob4.svg" class="shape2" />
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/svg/repeat_c.svg" class="shape3" />
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
            <img src="<?php echo get_the_post_thumbnail_url( $focus_feature->ID, 'full' ); ?>" />
            <figcaption>
                "Untitled" by Ken Rahaim, 2007, Center for Folklife and Cultural Heritage, Smithsonian.
            </figcaption>
        </figure>
    </article>


    <? endforeach; ?>

<? endif; ?>

<article class="posts">

    <h2>Recently from the blog</h2>

    <ul>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>

            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>
            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/09/roadturn16x9-scaled.jpg" />
                <figcaption>"A Turn in the Road" by Alfred Sisley (1873), CC0, Art Institute of Chicago, remixed with "TAROCH balloon" by Creative Commons/Dee Harris, 2025, CC0.</figcaption>
            </figure>
            
            <p>The Creative Commons Open Education Team is pleased to provide a snapshot of progress made toward opening access and equity in education, through a look at our collective efforts in 2022.1 We laud the CC open education community for its important work throughout 2022. CC and community members' open education efforts in 2022 included, but </p>

        </article>
    </li>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>
            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>

            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/09/Blog-Image-Size.png" />
                <figcaption><a href="https://betterimagesofai.org/images?artist=LoneThomasky&title=DistortedForestPath">Distorted Forest Path</a> © 1999 by <a href="https://lone-thomasky.de/">Lone Thomasky & Bits&Bäume</a> is licensed under <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a></figcaption>
            </figure>

        </article>
    </li>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>
            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>

            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size-3.png" />
                <figcaption><a href="https://api.flickr.com/photos/dullhunk/52208530808/in/gallery-wanderlustoctopus-72157720941580111/">Community</a> © 2022 by <a href="https://api.flickr.com/photos/dullhunk/">Dunk</a> is licensed under <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a></figcaption>
            </figure>

        </article>
    </li>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>
            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>

            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size-2.png" />
                <figcaption>Signals © 2021 by Hugo Parasol is licensed under CC BY-NC-SA 4.0</figcaption>
            </figure>

        </article>
    </li>

    </ul>

    <footer>
        <a class="more" href="#">more posts</a>
    </footer>

</article>






<?php get_template_part( 'pidgin/content-partials/pidgin', 'newsletter_promo', '' ); ?>


</main>

<?php get_footer('pidgin'); ?>
