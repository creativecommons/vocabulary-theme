<!DOCTYPE html>
<html lang="en-US">
<head>

<title><?php wp_title('-',true,'right'); //this requires YOAST SEO plugin to be active to output ?></title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/favicon.ico" sizes="any" />
<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/favicon.svg" type="image/svg+xml" />
<link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/manifest.webmanifest" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/apple-touch-icon.png" />

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css" />

<?php wp_head(); ?>
</head>

<body class="<?php echo $args['body-classes']; ?>">
<a class="skip-to-content" href="#main-content-marker">Skip to content</a>

<header>
    <div class="masthead">
        <h1><a class="identity-logo" href="/">Creative Commons</a></h1>
        <button class="expand-menu">Menu</button>
        <!-- below menu is not final items, for testing only -->
        <nav class="primary-menu" aria-label="Primary navigation">
            <ul>
                <li>
                    <a href="/who-we-are">Who We Are</a>
                    <button class="expand icon-replace fa-angle-down">Expand</button>

                    <ul>
                        <li><a href="/strategic-plan">Strategic Plan</a></li>
                        <li><a href="/team">Team</a></li>
                        <li><a href="/governance">Governance</a></li>
                        <li><a href="/opportunities">Opportunities</a></li>
                        <li><a href="/annual-reports/">Annual Reports & Financials</a></li>
                        <li><a href="/history/">History</a></li>
                        <li><a href="/press">Press</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/what-we-do">What We Do</a>
                    <button class="expand icon-replace fa-angle-down">Expand</button>

                    <ul>
                        <li>
                            <a href="/build/">Build <br> Open Infrastructure</a>
                            <button class="expand icon-replace fa-angle-down">Expand</button>

                             <ul>
                                <li><a href="/cc-licenses">CC Licenses</a></li>
                                <li><a href="/cc-signals">CC Signals</a></li>
                                <li><a href="/public-domain">Public Domain</a></li>
                                <li><a href="/chooser">Chooser</a></li>
                                <li><a href="/faq">FAQs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/implement/">Implement <br> the Commons</a>
                            <button class="expand icon-replace fa-angle-down">Expand</button>

                             <ul>
                                <li><a href="/impact">Where CC Makes An Impact</a></li>
                                <li><a href="/discover-the-commons/">Discover the Commons</a></li>
                                <li><a href="/resources">Resources</a></li>
                                <li><a href="https://search.creativecommons.org">Search the Commons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/engage/">Engage <br> the People</a>
                            <button class="expand icon-replace fa-angle-down">Expand</button>

                             <ul>
                                <li><a href="/training-and-webinars">Training + Webinars</a></li>
                                <li><a href="/advocacy">Advocacy</a></li>
                                <li><a href="/community">Community</a></li>
                                <!-- <li><a href="/partnerships">Partnerships</a></li> -->
                                <li><a href="/events">Events</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/blog">Blog</a></li>
                <li>
                    <a href="/support">Support Us</a>
                    <button class="expand icon-replace fa-angle-down">Expand</button>

                    <ul>
                        <li><a href="https://giving.gofundme.com/campaign/778218/donate?c_src=website&c_src2=makeagift">Make a Gift</a></li>
                        <!-- <li><a href="/support/#ways-to-give">Ways to Give</a></li> -->
                        <li><a href="/support/oic">Open Infrastructure Circle</a></li>
                        <li><a href="/support/donor-faq">Donor FAQ</a></li>
                    </ul>
                </li>
                <li><a class="donate" href="https://giving.gofundme.com/campaign/778218/donate?c_src=website&c_src2=button">Donate</a></li>
                <!-- <li><a class="donate" href="#">Support Us</a></li> -->
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
<?php if (get_field('importance_level') && get_field('importance_level') != 'default') :
    $importance_level = get_field('importance_level');
?>
<?php endif; ?>

<article class="attention <?php echo $importance_level; ?>">
<div>
<h2><?php the_field('message'); ?></h2>
<?php the_field('message_rich_text'); ?>
<a href="<?php the_field('link_url'); ?>"><?php the_field('link_text'); ?></a>
</div>

<figure>
    <?php $image = get_field('graphic'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <!-- <figcaption>
        <p></p>
    </figcaption> -->
</figure>
</article>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<span id="main-content-marker"></span>

<?php if (get_field('css_dev_hotfixes' )) : ?>
<style>
    <?php the_field('css_dev_hotfixes' ); ?>
</style>
<?php endif; ?>
