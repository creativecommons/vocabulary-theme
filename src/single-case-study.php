<!-- ///////////////////////////////////////////////////////////// -->

<?php $devQuery = new WP_Query( array( 
    'post_type' => 'page',
    'pagename' => 'dev-settings' 
    ) );
    
    $themeVersion = '';
?>

<?php if ( $devQuery->have_posts() ) : ?>
<?php  while ( $devQuery->have_posts() ) : $devQuery->the_post(); ?>

    <?php if( get_field('brand_version')) : ?>

            <?php $themeVersion = get_field('brand_version') ?>

    <?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<!-- //////////////////////////////////////////////////////////// -->


<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_header('pidgin', array( 'body-classes' => 'casestudy-post') ); ?>

<?php else : ?>

<?php get_header('', array( 'body-classes' => 'casestudy-post') ); ?>

<?php endif; ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<div>
<h1><?php the_title(); ?></h1>
</div>

<figure>
        <img src="<?php the_field('header_graphic') ?>" alt="" />

        <figcaption>
            <p>attribution details here</p>
            
        </figcaption>
    </figure>
</header>

<div class="content">

    <aside class="opening">
        <h2>Introduction</h2>
        <p>This is the second post in a three-part series leading up to the launch of the Open Heritage Statement in October. In <a href="https://creativecommons.org/2025/09/10/understanding-barriers-to-accessing-heritage/"> part 1 of this series</a>, we examined how so much of our shared digital heritage remains locked away, despite the fact that heritage in the public domain belongs to the public, and should be free for anyone to access, reuse, and breathe new life into it. In this post, we turn to the benefits of open heritage, showing what becomes possible when barriers are removed and heritage in the public domain is openly accessible. In our final post, we will preview the Open Heritage Statement and how it aims to shape an international framework under UNESCO’s auspices. You can join our global call for equitable access to public domain heritage in the digital environment. Mark your calendars for the <strong>Open Heritage Statement Launch</strong> on <strong>14 October, 14:00 UTC. </strong><a href="https://us06web.zoom.us/webinar/register/WN_QkmQT4FUShG2Mhy2CU1ecw#/registration">Register in advance for this webinar</a>.</p>
    </aside>

    <?php the_content(); ?>

    <aside class="closing">
        <p>Learn more about CC through our mission and strategy and our collection of public reports and financials. For information about CC's funding agreements, please see our Contributions Policy. You can also view written disclosures for nonprofit organizations that solicit contributions required by certain states in the USA.</p>
    </aside>

    <aside class="insights">
        <h2>Some Key Insights</h2>
        <ul>
            <li>While the use of CC licenses may be in place, the clarity of guidance and consistency in language across different systems remains a key barrier in the open sharing of climate data.</li>
            <li>Attribution and license compatibility remain the two most impactful areas for enabling easy reuse.</li>
        </ul>
    </aside>

</div>

<?php endwhile; // end of the loop. ?>

<?php get_template_part( 'pidgin/content-partials/pidgin', 'newsletter_promo', '' ); ?>



</main>

<?php if ($themeVersion == 'vocabulary2') : ?>

<?php get_footer('pidgin'); ?>

<?php else : ?>

<?php get_footer(); ?>

<?php endif; ?>
