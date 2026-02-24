<?php /* Template Name: Index - Events */ ?>

<?php get_header('pidgin', array( 'body-classes' => 'events-index') ); ?>

<main>

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

<article class="topic-summary about"> <!-- TODO: merge with prior article? -->
    <div class="description">
        <!-- <h2>The commons belongs to us all</h2> -->
        <p>Creative Commons is a global nonprofit protecting your right to access and share information, and participate in knowledge.</p>

        <p>We safeguard and strengthen the global commons, which is made up of all shared knowledge and culture, so that we can power human creativity, equity, and innovation. </p>
    </div>

    <figure>       
        <!-- <svg class="shape1">
            <use href="../../../../pidgin/svg/blob3.svg"></use>
        </svg> -->


        <figcaption>
            <!-- <p>attribution details here</p> -->
            
        </figcaption>
    </figure>
</article>

<article class="events">
    <h2>Upcoming Events</h2>
    <ul>
    <li>
        <article class="event">
            <div class="description">
            <h3>Support CC and stay connected</h3>
            <h4>Feb 23</h4>
            <span class="time">2pm - 6pm</span>
            <span class="location">123 Example St., Ottawa ON</span>

            <p>There are many ways to give. You can make a one-time donation or become a recurring donor by joining our Open Infrastructure Circle.</p>

            <a href="#">See Event Details</a>
        </div>

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
        <article class="event">
            <div class="description">
            <h3>Support CC and stay connected</h3>
            <h4>Feb 23</h4>
            <span class="time">2pm - 6pm</span>
            <span class="location">123 Example St., Ottawa ON</span>

            <p>There are many ways to give. You can make a one-time donation or become a recurring donor by joining our Open Infrastructure Circle.</p>

            <a href="#">See Event Details</a>
        </div>

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
        <article class="event">
            <div class="description">
            <h3>Support CC and stay connected</h3>
            <h4>Feb 23</h4>
            <span class="time">2pm - 6pm</span>
            <span class="location">123 Example St., Ottawa ON</span>

            <p>There are many ways to give. You can make a one-time donation or become a recurring donor by joining our Open Infrastructure Circle.</p>

            <a href="#">See Event Details</a>
        </div>

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

    <footer>
        <a class="more" href="#">more events</a>
    </footer>


</article>

<article class="topic-summary newsletter">
    <div class="description">
        <h2>Get the latest CC news, and join the community to empower individuals and communities around the world.</h2>
        <a href="#">Sign up for CC's Community Newsletter</a>
    </div>
    <figure>
        <!-- <img src="https://creativecommons.org/wp-content/uploads/2023/01/Open-Palms-Not-Clutching-Fists.png"> -->
    </figure>
    
</article>


</main>

<?php get_footer('pidgin'); ?>
