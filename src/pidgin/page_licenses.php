<?php /* Template Name: Page - Licenses */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'licenses-page') ); ?>

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


<article class="topic-summary focus-area"> <!-- TODO: merge with prior article? -->
    <div class="description">
        <h2><?php the_field('introductory_section_title') ?></h2>
        <?php the_field('introductory_section_content') ?>

        <a href="<?php the_field('introductory_section_link_url'); ?>"><?php the_field('introductory_section_link_text'); ?></a>

    </div>

    <figure>       
        <!-- <svg class="shape1">
            <use href="../../../../pidgin/svg/blob3.svg"></use>
        </svg> -->
        <img src="<?php the_field('introductory_section_graphic'); ?>" />


        <figcaption>
            <!-- <p>attribution details here</p> -->
            
        </figcaption>
    </figure>
</article>


<article class="topic-summary highlight orgs">
    <div class="description">
        <h2><?php the_field('orgs_section_title'); ?></h2>
        <?php the_field('orgs_section_content'); ?>
    </div>
    
</article>

<article class="topic-summary focus-area"> <!-- TODO: merge with prior article? -->
    <div class="description">
        <h2><?php the_field('why_section_title'); ?></h2>
        <?php the_field('why_section_content'); ?>

    </div>

    <figure>       
        <!-- <svg class="shape1">
            <use href="../../../../pidgin/svg/blob3.svg"></use>
        </svg> -->
        <img src="<?php the_field('why_section_graphic'); ?>" />


        <figcaption>
            <!-- <p>attribution details here</p> -->
            
        </figcaption>
    </figure>

    <footer class="supporting">

        <div>
        <h3><?php the_field('reasonings_list_1_title'); ?></h3>
        <?php the_field('reasonings_list_1_content'); ?>
        </div>

        <div>
        <h3><?php the_field('reasonings_list_2_title'); ?></h3>
        <?php the_field('reasonings_list_2_content'); ?>
        </div>
    </footer>
</article>

<article class="topic-summary newsletter embed">
    <div class="description">
        <h2><strong>Want to know more?</strong> Sign up for news and updates about the CC licenses. </h2>
        <a href="#">Sign up for CC's Community Newsletter</a>
    </div>
    <figure>
        <!-- <img src="https://creativecommons.org/wp-content/uploads/2023/01/Open-Palms-Not-Clutching-Fists.png"> -->
    </figure>
    
</article>

<!-- <article class="topic-summary focus-area"> 
    <div class="description">
        <h2>More Than a Legal Tool</h2>
        <p>CC licenses do more than function legally—they express values.
The CC icons, now recognized around the world, represent openness, collaboration, and participation. For example, the CC logo is so ubiquitous it is part of the permanent design collection at The Museum of Modern Art in New York.</p>
    </div>

    <figure>       



        <figcaption>
            <p>attribution details here</p>
            
        </figcaption>
    </figure>
</article> -->


<article class="licenses">
    <h2><?php the_field('licenses_listing_title'); ?></h2>
    <?php the_field('licenses_listing_introduction'); ?>
    <ul>
        <li>
            <article class="license">
                <h3><a href="#"><?php the_field('license_1_title'); ?></a></h3>
                <img src="#" class="badge" />
                <?php the_field('license_1_summary'); ?>
                
                <dl class="conditions-definitions">
                    <div>
                        <dt class="icon-attach cc-by">BY</dt>
                        <dd>Credit must be given to you, the creator.</dd>
                    </div>
                </dl>
            </article>
        </li>

        <li>
            <article class="license">
                <h3><a href="#"><?php the_field('license_2_title'); ?></a></h3>
                <img src="#" class="badge" />
                <?php the_field('license_2_summary'); ?>
                <dl class="conditions-definitions">
                    <div>
                        <dt class="icon-attach cc-by">BY</dt>
                        <dd>Credit must be given to you, the creator.</dd>
                    </div>

                    <div>
                        <dt class="icon-attach cc-sa">SA</dt>
                        <dd>Adaptations must be shared under the same terms.</dd>
                    </div>
                </dl>
            </article>
        </li>

        <li>
            <article class="license">
                <h3><a href="#"><?php the_field('license_3_title'); ?></a></h3>
                <img src="#" class="badge" />
                <?php the_field('license_3_summary'); ?>
                <dl class="conditions-definitions">

                    <div>
                        <dt class="icon-attach cc-by">BY</dt>
                        <dd>Credit must be given to you, the creator.</dd>
                    </div>

                    <div>
                        <dt class="icon-attach cc-nd">ND</dt>
                        <dd>No derivatives or adaptations of your work are permitted.</dd>
                    </div>
                </dl>
            </article>
        </li>

        <li>
            <article class="license">
                <h3><a href="#"><?php the_field('license_4_title'); ?></a></h3>
                <img src="#" class="badge" />
                <?php the_field('license_4_summary'); ?>
                <dl class="conditions-definitions">
                    <div>
                        <dt class="icon-attach cc-by">BY</dt>
                        <dd>Credit must be given to you, the creator.</dd>
                    </div>

                    <div>
                        <dt class="icon-attach cc-nc">NC</dt>
                        <dd>
                            Only noncommercial use of your work is permitted.
                            <em>Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.</em>
                        </dd>
                    </div>


                </dl>
            </article>
        </li>

        <li>
            <article class="license">
                <h3><a href="#"><?php the_field('license_5_title'); ?></a></h3>
                <img src="#" class="badge" />
                <?php the_field('license_5_summary'); ?>
                <dl class="conditions-definitions">
                    <div>
                        <dt class="icon-attach cc-by">BY</dt>
                        <dd>Credit must be given to you, the creator.</dd>
                    </div>

                    <div>
                        <dt class="icon-attach cc-nc">NC</dt>
                        <dd>
                            Only noncommercial use of your work is permitted.
                            <em>Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.</em>
                        </dd>
                    </div>

                    <div>
                        <dt class="icon-attach cc-sa">SA</dt>
                        <dd>Adaptations must be shared under the same terms.</dd>
                    </div>
                </dl>
            </article>
        </li>

        <li>
            <article class="license">
                <h3><a href="#"><?php the_field('license_6_title'); ?></a></h3>
                <img src="#" class="badge" />
                <?php the_field('license_6_summary'); ?>
                <dl class="conditions-definitions">
                    <div>
                        <dt class="icon-attach cc-by">BY</dt>
                        <dd>Credit must be given to you, the creator.</dd>
                    </div>

                    <div>
                        <dt class="icon-attach cc-nc">NC</dt>
                        <dd>
                            Only noncommercial use of your work is permitted.
                            <em>Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.</em>
                        </dd>
                    </div>

                    <div>
                        <dt class="icon-attach cc-nd">ND</dt>
                        <dd>No derivatives or adaptations of your work are permitted.</dd>
                    </div>
                </dl>
            </article>
        </li>
    </ul>

    <?php the_content(); ?>

    <footer>
        <a href="<?php the_field('more_url'); ?>" class="more"><?php the_field('more_text'); ?></a>
    </footer>
</article>


<!-- <div class="content">

    <figure id="post-73751 media-73751" class="align-none"><img decoding="async" class="alignright" src="https://creativecommons.org/wp-content/uploads/2024/12/8981509637_cebb6e3765_o-300x300.jpg" alt="Arranged Diatoms on Microscope Slides"><figcaption class="attribution">“<a href="https://www.flickr.com/photos/46329675@N02/8981509637">Arranged Diatoms on Microscope Slides in the California Academy of Sciences Diatom Collection</a>” by<a href="https://www.flickr.com/photos/46329675@N02"> california academy of sciences geology</a> is licensed under<a href="https://creativecommons.org/licenses/by-nc-nd/2.0/?ref=openverse"> CC BY-NC-ND 2.0</a>.</figcaption></figure>
    
    <p>Creative Commons (CC) is an international nonprofit organization dedicated to helping build and sustain a thriving commons of shared knowledge and culture. Together with an extensive member network and multiple partners, we build capacity, we develop practical solutions, and we advocate for better open sharing of knowledge and culture that serves the public interest. As part of this work, we help overcome legal obstacles to the sharing of knowledge and creativity to address the world’s most pressing challenges.</p>

    <figure id="post-77422 media-77422" class="align-none"><img decoding="async" class="aligncenter" src="https://creativecommons.org/wp-content/uploads/2025/12/25th-Anniversary-4-1024x576.png" alt="Colored swirls with the CC logo nestled between the colors."><figcaption class="attribution">“<a href="https://www.flickr.com/photos/90692748@N04/33419864923">Kaleidoscope 2</a>” by Sheila Sund is licensed under <a href="https://creativecommons.org/licenses/by/2.0/deed.en">CC BY 2.0</a>, remixed by Creative Commons licensed under <a href="https://creativecommons.org/licenses/by/4.0/deed.en">CC BY 4.0</a>.</figcaption></figure>
    
    <div class="highlight">
    <p>Creative Commons (CC) is an international nonprofit organization dedicated to helping build and sustain a thriving commons of shared knowledge and culture. Together with an extensive member network and multiple partners, we build capacity, we develop practical solutions, and we advocate for better open sharing of knowledge and culture that serves the public interest. As part of this work, we help overcome legal obstacles to the sharing of knowledge and creativity to address the world’s most pressing challenges.</p>
    </div>

    <figure id="post-73751 media-73751" class="align-none"><img decoding="async" class="alignright" src="https://creativecommons.org/wp-content/uploads/2024/12/8981509637_cebb6e3765_o-300x300.jpg" alt="Arranged Diatoms on Microscope Slides"><figcaption class="attribution">“<a href="https://www.flickr.com/photos/46329675@N02/8981509637">Arranged Diatoms on Microscope Slides in the California Academy of Sciences Diatom Collection</a>” by<a href="https://www.flickr.com/photos/46329675@N02"> california academy of sciences geology</a> is licensed under<a href="https://creativecommons.org/licenses/by-nc-nd/2.0/?ref=openverse"> CC BY-NC-ND 2.0</a>.</figcaption></figure>
    
    <p>Creative Commons (CC) is an international nonprofit organization dedicated to helping build and sustain a thriving commons of shared knowledge and culture. Together with an extensive member network and multiple partners, we build capacity, we develop practical solutions, and we advocate for better open sharing of knowledge and culture that serves the public interest. As part of this work, we help overcome legal obstacles to the sharing of knowledge and creativity to address the world’s most pressing challenges.</p>
    

    <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu maximus augue. Nulla ac velit sit amet nisi ultricies ultrices. Proin vel velit sed purus dictum eleifend vitae ut ipsum. Sed eu imperdiet ex. Nam leo erat, semper non aliquam eget, porta vitae arcu. Mauris sapien mi, vestibulum in arcu quis, molestie blandit ex. Curabitur ut faucibus ex, et lacinia ex. Quisque id mauris efficitur nibh tempor maximus. Aliquam semper sapien id mauris gravida tincidunt. Ut congue et dolor eget feugiat.</p>
    </blockquote>

    <h2>In order to achieve our mission, we:</h2>
    <ul>
        <li>Offer the CC Certificate, an in-depth course for people interested in becoming experts in creating and engaging with openly licensed works</li>
        <li>Run the CC Open Culture Program, to support the development of a thriving open culture ecosystem among cultural heritage institutions and their users</li>
        <li>Run the CC Open Education Program, to ensure publicly funded knowledge (educational resources, research and data) is open and freely available for everyone to learn, discover and contribute</li>
        <li>Run the Openly Licensed Preprint project to increase the adoption of CC-BY on preprints to facilitate greater dissemination and reuse of research.</li>
        <li>Lead the Open Climate Data project to facilitate the opening and sharing of climate datasets and data models as a step toward addressing climate change</li>
    </ul>

    <aside class="closing">
        <p>Learn more about CC through our mission and strategy and our collection of public reports and financials. For information about CC's funding agreements, please see our Contributions Policy. You can also view written disclosures for nonprofit organizations that solicit contributions required by certain states in the USA.</p>
    </aside>
</div> -->


<aside class="more-links">
    <nav>
        <h2>More Links</h2>
        <ul>
            <li><a href="#">Made with Creative Commons</a></li>
            <li><a href="#">Made with CC Community</a></li>
            <li><a href="#">Technology Platforms</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Use & Remix</a></li>
            <li><a href="#">Search the Commons</a></li>
        </ul>
    </nav>
</aside>

<?php get_template_part( 'pidgin/content-partials/pidgin', 'newsletter_promo', '' ); ?>

</main>

<?php get_footer('pidgin'); ?>
