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
        <h2>Creative Commons is a nonprofit that depends on the donations of supporters like you.</h2>
        <p>Please consider making a one-time or monthly donation.</p>

        <p>You can also become a member of our Open Infrastructure Circle with an annual recurring donation of $1,000 or more.</p>

        <p>Your contributions help us continue to advocate for global access to research, educational texts, art, cultural heritage, climate data, scientific articles, and other valuable resources needed to solve society's most pressing challenges.</p>
    </div>

    <figure>

    </figure>

    <footer>
        <ul class="payment-methods">
            <li>
                <h3>Donate Online</h3>
                <p>Make a one time donation, become a monthly donor, or join the Open Infrastructure Circle with an annual, recurring gift. Our secure and encrypted online donation forms are hosted by Classy.</p>
                <p>Classy Pay supports payments by credit card, ACH, digital wallets, and cryptocurrency, including Apple Pay, Microsoft Pay, Google Pay, PayPal, Venmo, and Coinbase.</p>
            </li>

            <li>
                <h3>Donate via Check</h3>
                <p>Please make checks payable to “Creative Commons,” and mail to our address below:</p>

                <p>Creative Commons <br>
                    P. O. Box 741107 <br>
                    Los Angeles, CA 90074-1107</p>
            </li>

            <li>
                <h3>Donate Cryptocurrency</h3>
                <p>We currently accept donations of cryptocurrency on Classy (via Coinbase), Every and Endaoment.</p>
            </li>
        </ul>
    </footer>

</article>

<article class="topic-summary focus-area">
    <div class="description">
        <h2>Other ways to give:</h2>
        <p>If you would like to make a gift via stocks, securities, employee match, donor advised fund, or wire transfer, please email development@creativecommons.org.</p>

        <p>Creative Commons does not currently have a planned giving program. If you would like to make a lasting impact by including us in your will, we suggest you visit FreeWill or consult an attorney or estate planning professional. You can also check out this useful resource from Fidelity Charitable on bequests and how to include nonprofits in your will or trust.</p>

        <p>For any donation related questions, please visit our Donor FAQ. Creative Commons' financials, including Annual Reports, 990's, and Audit Reports are all available to view on Guidestar.</p>
    </div>

    <figure>

    </figure>

</article>

<article class="topic-summary supporters">
    <div class="description">
        <h2>CC Supporters</h2>
        <p>Thank you to all our generous supporters!</p>

        <ul>
            <li>Arcadia
            <li>Argosy Foundation</li>
            <li>Bill & Melinda Gates Foundation</li>
            <li>Chan Zuckerberg Initiative</li>
            <li>CouponFollow</li>
            <li>Curationist Foundation</li>
            <li>DuckDuckGo</li>
            <li>Endless</li>
            <li>Filecoin Foundation for the Decentralized Web</li>
            <li>FUTO</li>
            <li>Google Open Source</li>
            <li>Google Policy</li>
            <li>Knight Foundation</li>
            <li>Michelson 20MM Foundation</li>
            <li>Microsoft</li>
            <li>MIT OpenCourseWare</li>
            <li>Open Society Foundations</li>
            <li>Patrick J. McGovern Foundation</li>
            <li>Robert Wood Johnson Foundation</li>
            <li>Siegel Family Endowment</li>
            <li>Stanford University Libraries</li>
            <li>Wellcome Trust</li>
            <li>William + Flora Hewlett Foundation</li>
            <li>Ben Adida</li>
            <li>Brad Burnham</li>
            <li>Colin Sullivan</li>
            <li>Delia Browne</li>
            <li>Dr. Jay M. Tenenbaum</li>
            <li>Gabriel Levin</li>
            <li>Garrett Camp</li>
            <li>Glenn O. Brown</li>
            <li>James Grimmelmann</li>
            <li>Jennifer Wilson & Andrew Gass</li>
            <li>John Seely Brown</li>
            <li>Marta Belcher</li>
            <li>Meister Family Foundation</li>
            <li>Paul & Iris Brest</li>
            <li>Raymond James via Gilbert and Tesla Giving Fund</li>
            <li>Villa Nichols Family Fund</li>
        </ul>
    </div>

    <figure>

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
