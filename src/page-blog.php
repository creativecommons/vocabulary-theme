<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Hello World!</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/vocabulary/vocabulary.css">
<!-- <link rel="stylesheet" media="all" href="css/style.css"> -->

<?php wp_head(); ?>
</head>

<body class="blog-index">
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

<header>

<h1>Blog</h1>

<!-- <span class="byline">by <a href="#">Brigitte Vezina</a>, <a href="#">Ony Anukem</a></span> -->

<p>lead in paragraph</p>

<!-- <span class="categories">
    <a href="#">Open Culture</a>
</span> -->


<!-- <img src="#" /> -->

</header>


<article class="featured news">

</article>



</main>

<?php get_footer(); ?>
