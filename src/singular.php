<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Singular.php</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/vocabulary/vocabulary.css">
<!-- <link rel="stylesheet" media="all" href="css/style.css"> -->

<?php wp_head(); ?>
</head>

<body class="blog-post">
<a class="skip-to-content" href="#main-content-marker">Skip to content</a>

<header>
    <div class="masthead">
        <h1><a class="identity-logo" href="#">Creative Commons</a></h1>
        <button class="expand-menu">Menu</button>
        <nav class="primary-menu">
            <ul>
                <li><a href="">Who We Are</a></li>
                <li><a href="">What We Do</a></li>
                <li><a href="">Licenses and Tools</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Support Us</a></li>
            </ul>
        </nav>

        <nav class="ancilliary-menu">
            <ul>
                <li><button class="locale icon-attach fa-globe">English</button></li>
                <li><a class="donate icon-attach fa-heart" href="#">Donate</a></li>
                <li><button class="explore">Explore CC</button></li>
            </ul>
        </nav>
    </div>

   

    <div class="explore-panel">
    
    <!-- (optional main CC logo, p, link on non-home site back to main site) -->
    <!-- <aside> 
        <a class="identity-logo" href="#">Creative Commons</a>
        <h2>Our Work Relies On You!</h2>
        <p>Help us keep the internet free and open.</p>
    </aside> -->

    <nav class="explore-menu">
        <ul>
            <li>
                <a href="#">Global Network</a>
                <p>Join a  global community working to strengthen the Commons</p>
            </li>
            <li>
                <a href="#">Certificate</a>
                <p>Become an expert in creating and engaging with openly licensed materials</p>
            </li>
            <li>
                <a href="#">Global Summit</a>
                <p>Attend our annual event, promoting the power of open licensing</p>
            </li>
            <li>
                <a href="#">Chooser</a>
                <p>Get help choosing the appropriate license for your work</p>
            </li>
            <li>
                <a href="#">Search Portal</a>
                <p>Find engines to search openly licensed material for creative and educational reuse</p>
            </li>
            <li>
                <a href="#">Open Source</a>
                <p>Help us build products that maximize creativity and innovation</p>
            </li>

        </ul>
    </nav>
    </div>

</header>

<!-- <article class="attention">
    <p>Join us in <a href="#">celebrating 100 years of the Commons</a> this Fall.</p>
</article> -->

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<span class="byline">by 
    <?php
    $authors = get_field('authorship');
        if( $authors ): ?>
            <?php foreach( $authors as $author ): 
                $permalink = get_permalink( $author->ID );
                $title = get_the_title( $author->ID );
                $custom_field = get_field( 'field_name', $author->ID );
            ?>

    <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>,

            <?php endforeach; ?>
        <?php endif; ?>
</span>

<!-- <p>lead in paragraph</p> -->

<?php


?>	

<span class="categories">
    <?php the_category(', ') ?>
</span>


<!-- <img src="#" /> -->

</header>

<?php if (!class_exists('ACF')): ?> 

<!-- display raw post_meta, if ACF not installed & activated -->
<?php if (get_post_meta( get_the_ID(), 'lead_in_copy', true )): ?> 
<div class="series">
    <?php echo get_post_meta( get_the_ID(), 'lead_in_copy', true ); ?>
</div>
<?php endif; ?>
<?php else : ?>

<!-- display ACF field, if ACF installed & activated -->
<?php if (get_field('lead_in_copy')): ?> 
<div class="series">
    <?php the_field('lead_in_copy'); ?>
</div>
<?php endif; ?>
<?php endif; ?>

<?php the_content(); ?>

<span class="pub-date"><?php the_date('d F Y'); ?></span>

<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>