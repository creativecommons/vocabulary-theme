<?php /* Template Name: Index - Home Narrative */ ?>

<?php

get_header('', array( 'body-classes' => 'home-narrative-interim') );

?>

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/css/pidgin.css" />



<main>

<article class="topic-summary intro"> 
    <div class="description">
        <h2><?php the_field('lead_in_title' ); ?></h2>
        <p><?php the_field('lead_in_description' ); ?></p> 
        <p><?php the_field('lead_in_sub_description' ); ?></p>
        <ul>
            <li><a href="<?php the_field('lead_in_link_url_1' ); ?>"><?php the_field('lead_in_link_text_1' ); ?> &rarr;</a></li>
            <li> <a href="<?php the_field('lead_in_link_url_2' ); ?>"><?php the_field('lead_in_link_text_2' ); ?></a></li>
            <li><a href="<?php the_field('lead_in_link_url_3' ); ?>"><?php the_field('lead_in_link_text_3' ); ?></a></li>
        </ul>
    </div>

      <figure>
        <img src="<?php the_field('lead_in_image' ); ?>" />
        <figcaption>
            <!-- figcaption here -->
        </figcaption>
    </figure>
</article>

<article class="topic-summary legal-tools">
    
    <div class="description">
        <h2><?php the_field('legal_tools_title' ); ?></h2>
        <?php the_field('legal_tools_text' ); ?>
        <a href="<?php the_field('legal_tools_link_url_1' ); ?>"><?php the_field('legal_tools_link_text_1' ); ?> &rarr;</a>
        <a href="<?php the_field('legal_tools_link_url_2' ); ?>"><?php the_field('legal_tools_link_text_2' ); ?></a>
        <a href="<?php the_field('legal_tools_link_url_3' ); ?>"><?php the_field('legal_tools_link_text_3' ); ?></a>
    </div>

</article>

<article class="topic-summaries focus-areas">

    <!-- <h2>"Focus Areas"</h2>
    <p>some kind of intro here</p> -->

    <!-- possible larger grouping here to gather all the "topics" into a larger list of sorts? (maybe make a custom content type we could cycle them in and out?) -->
    <article class="topic-summary focus-area">
        <div class="description">
            <h3>Join us in shaping what's next</h3>
            <p>We steward the open infrastructure of sharing and contribute to a thriving creative commons with, and for, community.</p>
            <a href="#">Learn more about how to get involved &rarr;</a>
        </div>
        <figure>
            <img src="https://creativecommons.org/wp-content/uploads/2025/10/pottery-e1760626005610.png" />
            <figcaption>
                "Untitled" by Ken Rahaim, 2007, Center for Folklife and Cultural Heritage, Smithsonian.
            </figcaption>
        </figure>
    </article>

    <article class="topic-summary focus-area">
        <div class="description">
            <h3>Empowering Access to Knowledge</h3>
            <p>Whether through our CC Certificate courses, tailored facilitation, or legal office hours, we support organizations working to expand the global commons. Learn, collaborate, and lead with openness at the center.</p>
            <a href="#">Request training or consulting today &rarr;</a>
        </div>
         <figure>
            <img src="https://live.staticflickr.com/5458/9331931663_77a606ce12_h.jpg" />
            <figcaption>"<a href="https://www.flickr.com/photos/82955120@N05/9331931663/in/photolist-d1jbTo-fdCAav-dw3FQk-dKKGtj-pTAppQ-dGi6yB-cKapnq-2kvMiqx-dvAa9i-dKKWQ3-dMiAV1-jrLYvM-dKejVY-MMZzbD-dvAa8D-dUuuX5-dvFK8d-deTUdD-e7ivfk-dKEEZk-2q28wxV-e7posu-jsZyMT-dKEyzp-ob9Y6K-deTUD5-D9aKeJ-eSsxdP-jrGhGX-dytxEb-MWJJvi-dw8Yfm-83962x-eSsx5e-moM7Ck-gTWqqc-dEEbKW-deTUyE-MLuqpJ-22RBTG5-deTUma-gYFsna-LZi81u-r6ZwdJ-gTYPV4-2mtmWhS-2n6ar89-bX6Rcv-838YMR-fTUxUv">Inpiration Arch Plaque</a>" by <a href="https://www.flickr.com/photos/karlsbad/">Nicolas Raymond</a> 2011, CC BY 3.0</figcaption>
        </figure>
    </article>

    <article class="topic-summary focus-area">
        <div class="description">
            <h3>The Commons is the Foundation of AI</h3>
            <p>If we want ethical and equitable AI, we must protect and nourish the commons it relies on. Learn about how we’re adapting to address sharing in the age of AI, from developing new tools like CC signals, strengthening licensing guidance, and advocating for policies that keep access to knowledge open and equitable.</p>
            <a href="#">Explore our AI and Commons work &rarr;</a>
        </div>
         <figure>
            <img src="https://live.staticflickr.com/1253/5158483834_a0b08e38f1_b.jpg" />
            <figcaption>"Mauretania Construction", 1906, Tyne & Wear Archives & Museums</figcaption>
        </figure>
    </article>

    <article class="topic-summary focus-area">
        <div class="description">
            <h3>CC BY is the Best Option for Preprints</h3>
            <p>If you are a researcher, scientist, or knowledge producer, you are a creator. The knowledge you record as a research output is the scaffolding for collaboration.</p>
            <p>Our latest video that  explains open licenses for research outputs and encourages researchers to use CC licenses for data, preprints, manuscripts, and journal articles.</p>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&list=RDdQw4w9WgXcQ&start_radio=1">Watch video &rarr;</a>
        </div>
         <figure>
            <img src="https://images.pexels.com/photos/261909/pexels-photo-261909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" />
            <figcaption>
                "<a href="https://www.pexels.com/photo/person-behind-books-261909/">Person Behind Books</a>", 2016 CC0
            </figcaption>
        </figure>
    </article>

    <article class="topic-summary focus-area">
        <div class="description">
            <h3>The TAROCH Coalition is on a Mission to advance open access to public domain cultural heritage</h3>
            <p>The Towards a Recommendation on Open Cultural Heritage (TAROCH) Coalition unites over 60 institutions and organizations from 25 countries that share a belief in the transformative potential of open solutions. </p>
            <a href="#">Show your support &rarr;</a>
        </div>
         <figure>
            <img src="https://creativecommons.org/wp-content/uploads/2025/09/roadturn16x9-scaled.jpg" />
            <figcaption>
            "<a href="#">Watering Place at Marley</a>" by Alfred Sisley, 1875, CC0, Art Institute of Chicago, remixed with "TAROCH balloon" by Creative Commons/Dee Harris, 2025, CC0.
            </figcaption>
        </figure>
    </article>
</article>

<article class="support">
    <h2><?php the_field('support_cc_title'); ?></h2>
    <div class="description">
        <?php the_field('support_cc_description'); ?>
        <a href="<?php the_field('support_cc_link_url_1' ); ?>"><?php the_field('support_cc_link_text_1' ); ?> &rarr;</a>
        <a href="<?php the_field('support_cc_link_url_2' ); ?>"><?php the_field('support_cc_link_text_2' ); ?></a>
        <a href="<?php the_field('support_cc_link_url_3' ); ?>"><?php the_field('support_cc_link_text_3' ); ?></a>

    </div>
</article>

<article class="posts">

    <h2>Recently from the blog</h2>

    <ul>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>

            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>
            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/09/roadturn16x9-scaled.jpg" />
            </figure>
            
            <!-- <p>The Creative Commons Open Education Team is pleased to provide a snapshot of progress made toward opening access and equity in education, through a look at our collective efforts in 2022.1 We laud the CC open education community for its important work throughout 2022. CC and community members' open education efforts in 2022 included, but </p> -->

        </article>
    </li>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>
            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>

            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/09/Blog-Image-Size.png" />
            </figure>

        </article>
    </li>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>
            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>

            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size-3.png" />
            </figure>

        </article>
    </li>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>
            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>

            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size-2.png" />
            </figure>

        </article>
    </li>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>
            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>

            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size.png" />

                <!-- <span class="attribution">"<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></span> -->
            </figure>

        </article>
    </li>

    <li>
        <article class="post">
            <header>
            <h3 class="title"><a href="#">Open Access in Practice: A Conversation with President Larry Kramer of The Hewlett Foundation</a></h3>
            <span class="byline">by <a href="#">Amanda Conway</a>, <a href="#">Ólafur Jónsson</a></span>
            <span class="categories"><a href="#">Open Culture</a></span>

            </header>

            <figure>
                <img src="https://creativecommons.org/wp-content/uploads/2025/07/Ocean-Coast-by-Maurice-Denis.-Public-Domain.-Swedish-National-Museum.png" />

                <!-- <span class="attribution">"<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></span> -->
            </figure>

        </article>
    </li>

    </ul>

    <footer>
        <a class="more" href="#">more posts</a>
    </footer>

</article>

<article class="newsletter">
    <h2>Newsletter highlights</h2>
    <div class="description">
        <h3>A CC-Certified alumni team in Indonesia trained 129 teachers and librarians across five regions, helping them create and share openly licensed content</h3>
        <a href="#">Sign up for the  CC's Community Newsletter by joining the CC Community &rarr;</a>
    </div>
    <figure>
        <img src="https://creativecommons.org/wp-content/uploads/2023/01/Open-Palms-Not-Clutching-Fists.png">
    </figure>
    
</article>


<article class="attribution-list">
<details>
<summary>Images attribution</summary>
    <ul class="attribution-panel expand">
        <li>
            <article>
                
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/09/roadturn16x9-scaled.jpg" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
                
            </article>
        </li>
        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/09/Blog-Image-Size.png" />
                    <figcaption class="attribution">
                        "<a href="https://www.flickr.com/photos/47691521@N07/8249753855" target="_blank" rel="noopener noreferrer">Creative Commons a vessel ideas</a>" 
                        by <a href="https://www.flickr.com/photos/47691521@N07" target="_blank" rel="noopener noreferrer">opensourceway</a> 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=openverse" target="_blank" rel="noopener noreferrer">CC BY-SA 2.0</a>
                    </figcaption>
                </figure>
                
            </article>
        </li>
        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size-3.png" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> 
                        for Creative Commons & Fine Acts is licensed under 
                        <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
                
            </article>
        </li>
        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size-2.png" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
                
            </article>
        </li>

        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/08/Blog-Image-Size.png" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
            </article>
        </li>

        <li>
            <article>
                <figure>
                    <img src="https://creativecommons.org/wp-content/uploads/2025/07/Ocean-Coast-by-Maurice-Denis.-Public-Domain.-Swedish-National-Museum.png" />
                    <figcaption class="attribution">
                        "<a href="https://thegreats.co/artworks/the-more-we-share-the-more-we-have-series-22">The More We Share, The More We Have (series 1/2)</a>" 
                        by <a href="https://thegreats.co/artists/pietro-soldi">Pietro Soldi</a> for Creative Commons &amp; Fine Acts 
                        is licensed under <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>
                    </figcaption>
                </figure>
            </article>
        </li>

    </ul>
</details>
</article>


</main>


<?php get_footer(); ?>
