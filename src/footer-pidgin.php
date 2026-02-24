<footer>
    <a class="identity-logo" href="#">Creative Commons</a>

    <div class="search">
        <form action="" method="post" id="" name="" class="" target="_blank">
            <input type="text" value="" name="" class="" id="" placeholder="Search">
            <!-- <input type="submit" value="submit" id="" class=""> -->

            <button class="icon-attach fa-search">submit</button>

            <!-- <div class="icon-replace fa-search">hmmm</div> -->
        </form>
    </div>

    <nav class="footer-menu" aria-label="Footer menu">
        <ul>
            <li><a href="#">Who we are</a></li>
            <li><a href="#">What we do</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Support us</a></li>
            
            <li><a href="/about/contact">Contact</a></li>
            <li><a href="/privacy">Privacy</a></li>
            <li><a href="/policies">Policies</a></li>
            <li><a href="/terms">Terms</a></li>
        </ul>
    </nav>

    

    <div class="contact">
    <!-- this area lacks a heading? -->
    <h2>Contact Us</h2>
    <p>Creative Commons <br /> PO Box 1866, Mountain View, <br /> CA 94042</p>
    <p><a href="mailto:info@creativecommons.org">info@creativecommons.org</a></p>

    <nav class="social-menu" aria-label="Social menu">
        <ul>
            <!-- <li><a class="icon-replace fa-instagram" href="#">Instagram</a></li> -->
            <li><a class="icon-replace fa-bluesky" href="https://bsky.app/profile/creativecommons.bsky.social" target="_blank">Bluesky</a></li>
            <li><a class="icon-replace fa-mastodon" href="https://mastodon.social/@creativecommons" target="_blank">Mastodon</a></li>
            <!-- <li><a class="icon-replace fa-facebook" href="https://www.facebook.com/creativecommons" target="_blank">Facebook</a></li> -->
            <li><a class="icon-replace fa-linkedin" href="https://www.linkedin.com/company/creative-commons/" target="_blank">LinkedIn</a></li>
        </ul>
    </nav>
    </div>

    <div class="subscribe">
    <h2>Subscribe to our newsletter</h2>
    <a href="#">Subscribe</a>
    </div>

    <!-- <div class="donate">
        <h2>Support Our Work</h2>
        <p>Our work relies on you! Help us keep the Internet free and open.</p>
        <a class="donate icon-attach cc-heart-filled" href="https://www.classy.org/give/313412/#!/donation/checkout?c_src=website&c_src2=top-of-page-banner" target="_blank">Donate Now</a>
    </div> -->


    <div class="license">
        <svg>
            <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
        </svg>
        <svg>
            <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-by"></use>
        </svg>

        <p>Except where otherwise <a href="/policies/#license">noted</a>, content on this site is licensed under a <a href="/licenses/by/4.0/">Creative Commons Attribution 4.0 International license</a>. Icons by <a href="https://fontawesome.com/" target="_blank">Font Awesome</a>.</p>

    </div>

    </footer>

    <script src="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/js/vocabulary.js"></script>

<?php wp_footer(); ?>
</body>
</html>
