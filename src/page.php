<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Hello World!</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/vocabulary/vocabulary.css">
<!-- <link rel="stylesheet" media="all" href="css/style.css"> -->

<?php wp_head(); ?>
</head>

<body class="default-page">
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
<p></p>
</article> -->


<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<h1><?php the_title(); ?></h1>

<!-- <span class="byline">by <a href="#">Brigitte Vezina</a>, <a href="#">Ony Anukem</a></span> -->


<?php if (!class_exists('ACF')): ?> 
    
<!-- display raw post_meta, if ACF not installed & activated -->
<p><?php echo get_post_meta( get_the_ID(), 'lead_in_copy', true ); ?></p>

<?php else : ?>

<!-- display ACF field, if ACF installed & activated -->
<p><?php the_field('lead_in_copy'); ?></p>

<?php endif; ?>



<!-- <span class="categories">
    <a href="#">Open Culture</a>
</span> -->


<!-- <img src="#" /> -->

</header>

<aside>
    <nav class="contextual-menu">
        <h2>Registration</h2>
        <ul>
            <li><a href="#">How many hours of work does the Certificate course require?</a></li>
            <li><a href="#">What do I get with the Certificate?</a></li>
        </ul>
    </nav>

    <nav>
        <h2>Course</h2>
        <ul>
            <li><a href="#">Does everyone participating in the course get a certificate?</a></li>
            <li><a href="#">Can I represent Creative Commons once I am CC Certified?</a></li>
            <li><a href="#">How Scholarships work?</a></li>

        </ul>
    </nav>
</aside>


<div class="content">

<!-- <div class="series">
    <span>part of the</span>
    <a href="#">Copyright and Artists</a> series, a unique take on how copyright isn't aligned with the interests of individual artists, but instead mega-corps.
    
    </div> -->

    <?php the_content(); ?>

</div>

<?php endwhile; // end of the loop. ?>

</main>


<?php get_footer(); ?>