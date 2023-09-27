<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/favicon.ico" sizes="any">
<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/favicon.svg" type="image/svg+xml">
<link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/manifest.webmanifest">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/apple-touch-icon.png" />

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">

<?php wp_head(); ?>
</head>

<body class="<?php echo $args['body-classes']; ?>">
<a class="skip-to-content" href="#main-content-marker">Skip to content</a>

<header>
    <div class="masthead">
        <h1><a class="identity-logo" href="/">Creative Commons</a></h1>
        <button class="expand-menu">Menu</button>
        <!-- below menu is not final items, for testing only -->
        <nav class="primary-menu">
            <ul>
                <li><a href="/about/mission">Who We Are</a></li>
                <li><a href="/about">What We Do</a></li>
                <li><a href="/share-your-work">Licenses and Tools</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/about/support-cc/">Support Us</a></li>
                <?php
                    $query = new WP_Query(array(
                        'post_type' => 'notice',
                        'posts_per_page' => 1,
                        'meta_key' => 'type',
                        'meta_value' => 'primary-menu'
                        //'paged' => $paged,
                    ));
                ?>

                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <li><a class="attention" href="<?php the_field('url'); ?>"><?php the_field('message'); ?></a></li>

                <?php endwhile; ?>
                <?php endif; ?>
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

<?php
$noticeQuery = new WP_Query(array(
    'post_type' => 'notice',
    'posts_per_page' => 1,
    'meta_key' => 'type',
    'meta_value' => 'top-of-site'
    //'paged' => $paged,
));
?>

<?php if ( $noticeQuery->have_posts() ) : while ( $noticeQuery->have_posts() ) : $noticeQuery->the_post(); ?>

<article class="attention">
<?php the_field('message_rich_text'); ?>
</article>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<span id="main-content-marker"></span>
