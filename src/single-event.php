<?php get_header('pidgin', array( 'body-classes' => 'event-post') ); ?>

<main>

<?php while ( have_posts() ) : the_post(); ?>

<header>

<div>
<h1><?php the_title(); ?></h1>
</div>

<figure>
        <!-- <img src="https://creativecommons.org/wp-content/uploads/2025/05/moon-3.jpg" class="photo" /> -->

        <figcaption>
            <p>attribution details here</p>
            
        </figcaption>
    </figure>
</header>

<aside class="sidebar">
    <article class="event-meta">
        <h2>Date & Time</h2>
        <p class="date">February 21, 2026</p>
        <p class="time">2pm - 6pm</p>

        <h2>Location</h2>

        <p class="location">123 Example St., Ottawa ON</p>

        <a href="#">Register</a>
    </article>
</aside>

<div class="content">
    <?php the_content(); ?>

    <a href="#" class="files">Download Event Files</a>

    <article class="speakers">
        <h2>Meet the speakers</h2>

        <ul>
            <li>
                <article class="speaker">
                    <h3>Speaker Name</h3>
                    <h4>Speaker Title</h4>

                    <p>Short speaker bio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu maximus augue. Nulla ac velit sit amet nisi ultricies ultrices. Proin vel velit sed purus dictum eleifend vitae ut ipsum. Sed eu imperdiet ex. Nam leo erat, semper non aliquam eget, porta vitae arcu.</p>

                    <figure>

                        <!-- <svg class="shape1">
                            <use href="../../../../pidgin/svg/blob3.svg"></use>
                        </svg> -->

                        <figcaption>
                            <!-- <p>attribution details here</p> -->
                            
                        </figcaption>
                    </figure>


                </article>
            </li>

            <li>
                <article class="speaker">
                    <h3>Speaker Name</h3>
                    <h4>Speaker Title</h4>

                    <p>Short speaker bio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu maximus augue. Nulla ac velit sit amet nisi ultricies ultrices. Proin vel velit sed purus dictum eleifend vitae ut ipsum. Sed eu imperdiet ex. Nam leo erat, semper non aliquam eget, porta vitae arcu.</p>

                    <figure>

                        <!-- <svg class="shape1">
                            <use href="../../../../pidgin/svg/blob3.svg"></use>
                        </svg> -->

                        <figcaption>
                            <!-- <p>attribution details here</p> -->
                            
                        </figcaption>
                    </figure>


                </article>
            </li>
        </ul>
    </article>
</div>

<footer>
    <nav class="pagination">
        <ul>
            <li><a href="#" class="previous">Previous</a></li>
            <li><a href="#" class="more">View All Events</a></li>
            <li><a href="#" class="next">Next</a></li>
        </ul>
        
    </nav>
</footer>

<article class="topic-summary newsletter">
    <div class="description">
        <h2>Get the latest CC news, and join the community to empower individuals and communities around the world.</h2>
        <a href="#">Sign up for CC's Community Newsletter</a>
    </div>
    <figure>
        <!-- <img src="https://creativecommons.org/wp-content/uploads/2023/01/Open-Palms-Not-Clutching-Fists.png"> -->
    </figure>
    
</article>

<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer('pidgin'); ?>
