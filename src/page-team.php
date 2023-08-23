<?php get_header('', array( 'body-classes' => 'team-index') ); ?>

<main>

<header>
<h1>Our Team</h1>

<?php
    $introduction = get_field('introduction');
    if( $introduction ): 
?>
<p><?php echo esc_html( $introduction ); ?></p>
<?php endif; ?>

</header>


<article class="persons">
    <h2>Staff</h2>
    <ul>
        <li>
            <article class="person">
                <h3><a href="#">Mari Moreshead</a></h3>
                <span class="title">Chief of Staff and Secretary to the Board of Directors</span>
                <figure>
                    <img src="imgs/profile.jpg" />
                    <span class="attribution">by Priscilla C. Scott for Creative Commons, licensed under <a href="#">CC BY 4.0</a></span>
                </figure>
                <p>Mari came to CC in 2015 after three years at the Mozilla Foundation. Prior to that, she held similar administrative roles&hellip;</p>
            </article>
        </li>

        <li>
            <article class="person">
                <h3><a href="#">Mari Moreshead</a></h3>
                <span class="title">Chief of Staff and Secretary to the Board of Directors</span>
                <figure>
                    <img src="imgs/profile.jpg" />
                    <span class="attribution">by Priscilla C. Scott for Creative Commons, licensed under <a href="#">CC BY 4.0</a></span>
                </figure>
                <p>Mari came to CC in 2015 after three years at the Mozilla Foundation. Prior to that, she held similar administrative roles&hellip;</p>
            </article>
        </li>

       
    </ul>
</article>

<article class="persons">
    <h2>Board</h2>
    <ul>
        <li>
            <article class="person">
                <h3><a href="#">Mari Moreshead</a></h3>
                <span class="title">Chief of Staff and Secretary to the Board of Directors</span>
                <figure>
                    <img src="imgs/profile.jpg" />
                    <span class="attribution">by Priscilla C. Scott for Creative Commons, licensed under <a href="#">CC BY 4.0</a></span>
                </figure>
                <p>Mari came to CC in 2015 after three years at the Mozilla Foundation. Prior to that, she held similar administrative roles&hellip;</p>
            </article>
        </li>
       
    </ul>
</article>


</main>

<?php get_footer(); ?>
