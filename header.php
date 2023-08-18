<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Hello World!</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">

<?php wp_head(); ?>
</head>

<body class="<?php echo $args['body-classes']; ?>">
<a class="skip-to-content" href="#main-content-marker">Skip to content</a>

<header>
    <div class="masthead">
        <h1><a class="identity-logo" href="#">Creative Commons</a></h1>
        <button class="expand-menu">Menu</button>
        <!-- below menu is not final items, for testing only -->
        <nav class="primary-menu">
            <ul>
                <li><a href="/about/team">Who We Are</a></li>
                <li><a href="/about">What We Do</a></li>
                <li><a href="/about/cclicenses/">Licenses and Tools</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/about/support-cc/">Support Us</a></li>
                <li><a class="attention" href="https://summit.creativecommons.org/">Global Summit 2023</a></li>
            </ul>
        </nav>

        <nav class="ancilliary-menu">
            <ul>
                <!-- uncomment below line, if translation functionality is present on site -->
                <!-- <li><button class="locale icon-attach fa-globe">English</button></li> -->
                <!-- uncomment below line, if search functionality is present on site -->
                <li><a class="search icon-attach fa-search" href="/?s">Search</a></li>
                <li><a class="donate icon-attach fa-heart" href="https://www.classy.org/give/313412/#!/donation/checkout?c_src=website&c_src2=top-of-page-banner" target="_blank">Donate</a></li>
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
                <a href="https://network.creativecommons.org/" target="_blank">Global Network</a>
                <p>Join a  global community working to strengthen the Commons</p>
            </li>
            <li>
                <a href="https://certificate.creativecommons.org/" target="_blank">Certificate</a>
                <p>Become an expert in creating and engaging with openly licensed materials</p>
            </li>
            <li>
                <a href="https://summit.creativecommons.org/" target="_blank">Global Summit</a>
                <p>Attend our annual event, promoting the power of open licensing</p>
            </li>
            <li>
                <a href="/choose" target="_blank">Chooser</a>
                <p>Get help choosing the appropriate license for your work</p>
            </li>
            <li>
                <a href="https://search.creativecommons.org/"  target="_blank">Search Portal</a>
                <p>Find engines to search openly licensed material for creative and educational reuse</p>
            </li>
            <li>
                <a href="https://opensource.creativecommons.org/" target="_blank">Open Source</a>
                <p>Help us build products that maximize creativity and innovation</p>
            </li>

        </ul>
    </nav>
    </div>

</header>

<article class="attention">
<p></p>
</article>
