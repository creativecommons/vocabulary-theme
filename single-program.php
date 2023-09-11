<?php

// if parent
// display the program-index context
// likely to be only 4:
// 
// Open Policy, 
// Open Culture, 
// Open Knowledge,
// Community


// if child
// display the program-page context
// likely to be many, and may include:
// 
// [Open Policy]
// Copyright
// Better Internet
//
// [Open Culture]
// Open Heritage
// Open Creativity
//
// [Open Knowledge]
// Open Education
// Open Climate
// Open Science
// Open Research (OA)
// Open Journalism
// 
// [Community]
// Global Network
// Learning & Training
// Licenses & Tools Stewardship
// Open Source Community

?>
<?php
// body class will need to be dynamic .program-index, .program-page


if ( get_field('nested_programs') ) {
    $status = 'parent';
    $class = 'program-index';
} else {
    $status = 'child';
    $class = 'program-page';
}
?>

<!-- this class will need to be dynamic program-index, program-page -->
<?php get_header('', array( 'body-classes' => $class) ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<?php if ($status == 'parent') : ?>

<?php if(get_field('sub_heading')) : ?>
<h2><?php the_field('sub_heading'); ?></h2>
<?php endif; ?>

<?php endif;  ?>

<p><?php the_field('introduction'); ?></p>

</header>

<?php the_content(); ?>

<?php 
    if ($status == 'parent') :
    $children = get_field('nested_programs');  
?>
<article class="projects">
    <h2>On-going Initiatives</h2>
    <p><?php the_field('nested_programs_lead_in_copy'); ?></p>
    <ul>
        <?php 
            foreach ($children as $child) : 

            $permalink = get_permalink( $child->ID );
            $title = get_the_title( $child->ID );
            $excerpt = get_the_excerpt( $child->ID );
        ?>
        <li>    
            <article class="project">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <p><?php echo wp_trim_words($excerpt, 8); ?></p>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</article>
<?php endif; ?>

<?php

$queried_object = get_queried_object();
$categories = get_the_category( $post->ID );
$catIDs = '';
foreach( $categories as $category) {
    $catIDs .= $category->cat_ID . ",";
}

$query = new WP_Query(array(
    'cat' => $catIDs,
    'post__not_in' => array($queried_object->ID),
    'post_type' => 'post',
    'posts_per_page' => 4,
    //'paged' => $paged,
));
?>

<?php if ( $query->have_posts() ) : ?> 

<article class="related-posts">
    <h2>Related posts</h2>  

    <article class="authored-posts highlight"> 
    
<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <article>
            <header>
            <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                <img src="../imgs/image.jpg" />
                
                <span class="attribution">"<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></span>
            </figure>

        </article>

<?php endwhile; ?> 

    </article>
</article>

<?php endif; ?>

<?php endwhile; // end of the loop. ?>



</main>

<?php get_footer(); ?>

