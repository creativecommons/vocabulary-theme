<?php /* Template Name: Page - Support */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'support-page') ); ?>

<main>

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

<article class="topic-summary focus-area">
    <div class="description">
        <?php if (get_field('subhead_title')) : ?>
        <h2><?php the_field('subhead_title') ?></h2>
        <?php endif; ?>
        <?php the_field('subhead_intro') ?>
    </div>

    <figure>
            <img src="<?php the_field('subhead_graphic') ?>" alt="" />

            <figcaption>
            <!-- <p>attribution details here</p> -->
            
            </figcaption>
    </figure>

    <footer>
        <ul class="payment-methods">
            <li>
                <h3><?php the_field('payment_method_1_title') ?></h3>
                <?php the_field('payment_method_1_content') ?>
            </li>

            <li>
                <h3><?php the_field('payment_method_2_title') ?></h3>
                <?php the_field('payment_method_2_content') ?>
            </li>

            <li>
                <h3><?php the_field('payment_method_3_title') ?></h3>
                <?php the_field('payment_method_3_content') ?>
            </li>
        </ul>
    </footer>

</article>

<article class="topic-summary focus-area">
    <div class="description">
        <h2><?php the_field('middle_section_title') ?></h2>
        <?php the_field('middle_section_content') ?>
    </div>

    <figure>
        <img src="<?php the_field('middle_section_graphic') ?>" alt="" />

        <figcaption>
        <!-- <p>attribution details here</p> -->
        
        </figcaption>
    </figure>

</article>

<article class="topic-summary supporters">
    <div class="description">
        <h2><?php the_field('supporters_section_title') ?></h2>
        <?php the_field('supporters_section_content') ?>
    </div>

    <figure>
        <img src="<?php the_field('supporters_section_graphic') ?>" alt="" />

        <figcaption>
        <!-- <p>attribution details here</p> -->
        
        </figcaption>
    </figure>

</article>

<aside class="more-links">
    <nav>
        <h2>More Links</h2>
        <ul>
            <li><a href="#">Open Infrastructure Circle</a></li>
            <li><a href="#">Donor FAQ</a></li>
            <li><a href="#">CC Contributions Policy</a></li>
            <li><a href="#">CC Guidelines for Screening Donors</a></li>
            <li><a href="#">US State Nonprofit Disclosures</a></li>
        </ul>
    </nav>
</aside>

<?php get_template_part( 'pidgin/content-partials/pidgin', 'newsletter_promo', '' ); ?>


</main>

<?php get_footer('pidgin'); ?>
