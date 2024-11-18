<footer>
    <a class="identity-logo" href="/">Creative Commons</a>

    <nav class="footer-menu">
        <ul>
            <li><a href="/about/contact">Contact</a></li>
            <li><a href="https://mail.creativecommons.org/subscribe" target="_blank">Newsletter</a></li>
            <li><a href="/privacy">Privacy</a></li>
            <li><a href="/policies">Policies</a></li>
            <li><a href="/terms">Terms</a></li>
        </ul>
    </nav>

    <div class="contact">
    <!-- this area lacks a heading? -->
    <h2>Contact Us</h2>
    <p>Creative Commons </br> PO Box 1866, Mountain View, CA 94042</p>
    <p><a href="mailto:info@creativecommons.org">info@creativecommons.org</a></p>

    <nav class="social-menu">
        <ul>
            <!-- <li><a class="icon-replace fa-instagram" href="#">Instagram</a></li> -->
            <li><a class="icon-replace fa-bluesky" href="https://bsky.app/profile/creativecommons.bsky.social" target="_blank">Bluesky</a></li>
            <li><a class="icon-replace fa-mastodon" href="https://mastodon.social/@creativecommons" target="_blank" rel="me">Mastodon</a></li>
            <li><a class="icon-replace fa-facebook" href="https://www.facebook.com/creativecommons" target="_blank">Facebook</a></li>
            <li><a class="icon-replace fa-linkedin" href="https://www.linkedin.com/company/creative-commons/" target="_blank">LinkedIn</a></li>
        </ul>
    </nav>
    </div>

    <div class="subscribe">
    <h2>Subscribe to our Newsletter</h2>
    <form action="https://creativecommons.us4.list-manage.com/subscribe/post?u=fd30364b6577b471373d6076c&amp;id=4603fe102a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter" target="_blank" novalidate="">
        <input type="email" value="" name="EMAIL" class="email input" id="mce-EMAIL" placeholder="Your email" required="">
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px" aria-hidden="true">
          <input type="text" name="b_fd30364b6577b471373d6076c_4603fe102a" tabindex="-1" value="">
        </div>
        <input type="submit" value="subscribe" id="mc-embedded-subscribe" class="button small">
      </form>
    </div>

    <div class="donate">
        <h2>Support Our Work</h2>
        <p>Our work relies on you! Help us keep the Internet free and open.</p>
        <a class="donate icon-attach cc-heart-filled" href="https://www.classy.org/give/313412/#!/donation/checkout?c_src=website&c_src2=top-of-page-banner" target="_blank">Donate Now</a>
    </div>


    <div class="license">
        <p>Except where otherwise <a href="/policies/#license">noted</a>, content on this site is licensed under a <a href="/licenses/by/4.0/">Creative Commons Attribution 4.0 International license</a>. Icons by <a href="https://fontawesome.com/" target="_blank">Font Awesome</a>.</p>

        <svg>
            <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
        </svg>
        <svg>
            <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-by"></use>
        </svg>
    </div>

    </footer>

<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/js/vocabulary.js"></script>

<?php wp_footer(); ?>
</body>
</html>
