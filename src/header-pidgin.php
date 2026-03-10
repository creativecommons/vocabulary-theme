<!DOCTYPE html>
<html lang="en-US">
<head>

<title><?php wp_title('-',true,'right'); //this requires YOAST SEO plugin to be active to output ?></title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/favicon.ico" sizes="any" />
<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/favicon.svg" type="image/svg+xml" />
<link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/manifest.webmanifest" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/apple-touch-icon.png" />

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css" />
<style>
    /* temporary while in progress */
    @import '<?php echo get_bloginfo( 'template_directory' ); ?>/pidgin/css/pidgin.css' layer(vocabulary);
</style>


<?php wp_head(); ?>
</head>

<body class="<?php echo $args['body-classes']; ?>">
<a class="skip-to-content" href="#main-content-marker">Skip to content</a>

<div class="locale icon-attach fa-globe">
    <select id="languages-dropdown">
        <option disabled="">Languages available</option>
        <option data-link="/licenses/by/4.0/deed.an" id="option-an" value="an">
        aragonés
        </option>
        <option data-link="/licenses/by/4.0/deed.az" id="option-az" value="az">
        Azərbaycanca
        </option>
        <option data-link="/licenses/by/4.0/deed.id" id="option-id" value="id">
        Bahasa Indonesia
        </option>
        <option data-link="/licenses/by/4.0/deed.eu" id="option-eu" value="eu">
        Basque
        </option>
        <option data-link="/licenses/by/4.0/deed.ca" id="option-ca" value="ca">
        català
        </option>
        <option data-link="/licenses/by/4.0/deed.da" id="option-da" value="da">
        dansk
        </option>
        <option data-link="/licenses/by/4.0/deed.de" id="option-de" value="de">
        Deutsch
        </option>
        <option data-link="/licenses/by/4.0/deed.et" id="option-et" value="et">
        eesti
        </option>
        <option data-link="/licenses/by/4.0/deed.en" id="option-en" selected="" value="en">
        English
        </option>
        <option data-link="/licenses/by/4.0/deed.es" id="option-es" value="es">
        español
        </option>
        <option data-link="/licenses/by/4.0/deed.eo" id="option-eo" value="eo">
        Esperanto
        </option>
        <option data-link="/licenses/by/4.0/deed.fr" id="option-fr" value="fr">
        français
        </option>
        <option data-link="/licenses/by/4.0/deed.fy" id="option-fy" value="fy">
        frysk
        </option>
        <option data-link="/licenses/by/4.0/deed.ga" id="option-ga" value="ga">
        Gaeilge
        </option>
        <option data-link="/licenses/by/4.0/deed.gl" id="option-gl" value="gl">
        galego
        </option>
        <option data-link="/licenses/by/4.0/deed.hr" id="option-hr" value="hr">
        Hrvatski
        </option>
        <option data-link="/licenses/by/4.0/deed.it" id="option-it" value="it">
        italiano
        </option>
        <option data-link="/licenses/by/4.0/deed.lv" id="option-lv" value="lv">
        latviešu
        </option>
        <option data-link="/licenses/by/4.0/deed.lt" id="option-lt" value="lt">
        Lietuviškai
        </option>
        <option data-link="/licenses/by/4.0/deed.hu" id="option-hu" value="hu">
        Magyar
        </option>
        <option data-link="/licenses/by/4.0/deed.ms" id="option-ms" value="ms">
        Melayu
        </option>
        <option data-link="/licenses/by/4.0/deed.nl" id="option-nl" value="nl">
        Nederlands
        </option>
        <option data-link="/licenses/by/4.0/deed.no" id="option-no" value="no">
        norsk
        </option>
        <option data-link="/licenses/by/4.0/deed.pl" id="option-pl" value="pl">
        polski
        </option>
        <option data-link="/licenses/by/4.0/deed.pt" id="option-pt" value="pt">
        Português
        </option>
        <option data-link="/licenses/by/4.0/deed.pt-br" id="option-pt-br" value="pt-br">
        Português Brasileiro
        </option>
        <option data-link="/licenses/by/4.0/deed.ro" id="option-ro" value="ro">
        Română
        </option>
        <option data-link="/licenses/by/4.0/deed.sk" id="option-sk" value="sk">
        Slovensky
        </option>
        <option data-link="/licenses/by/4.0/deed.sl" id="option-sl" value="sl">
        Slovenščina
        </option>
        <option data-link="/licenses/by/4.0/deed.sr-latn" id="option-sr-latn" value="sr-latn">
        srpski (latinica)
        </option>
        <option data-link="/licenses/by/4.0/deed.fi" id="option-fi" value="fi">
        suomi
        </option>
        <option data-link="/licenses/by/4.0/deed.sv" id="option-sv" value="sv">
        svenska
        </option>
        <option data-link="/licenses/by/4.0/deed.tr" id="option-tr" value="tr">
        Türkçe
        </option>
        <option data-link="/licenses/by/4.0/deed.is" id="option-is" value="is">
        Íslenska
        </option>
        <option data-link="/licenses/by/4.0/deed.cs" id="option-cs" value="cs">
        česky
        </option>
        <option data-link="/licenses/by/4.0/deed.el" id="option-el" value="el">
        Ελληνικά
        </option>
        <option data-link="/licenses/by/4.0/deed.be" id="option-be" value="be">
        беларуская
        </option>
        <option data-link="/licenses/by/4.0/deed.bg" id="option-bg" value="bg">
        български
        </option>
        <option data-link="/licenses/by/4.0/deed.ru" id="option-ru" value="ru">
        Русский
        </option>
        <option data-link="/licenses/by/4.0/deed.uk" id="option-uk" value="uk">
        Українська
        </option>
        <option data-link="/licenses/by/4.0/deed.ar" id="option-ar" value="ar">
        العربيّة
        </option>
        <option data-link="/licenses/by/4.0/deed.fa" id="option-fa" value="fa">
        فارسی
        </option>
        <option data-link="/licenses/by/4.0/deed.hi" id="option-hi" value="hi">
        हिंदी
        </option>
        <option data-link="/licenses/by/4.0/deed.bn" id="option-bn" value="bn">
        বাংলা
        </option>
        <option data-link="/licenses/by/4.0/deed.ja" id="option-ja" value="ja">
        日本語
        </option>
        <option data-link="/licenses/by/4.0/deed.zh-hans" id="option-zh-hans" value="zh-hans">
        简体中文
        </option>
        <option data-link="/licenses/by/4.0/deed.zh-hant" id="option-zh-hant" value="zh-hant">
        繁體中文
        </option>
        <option data-link="/licenses/by/4.0/deed.ko" id="option-ko" value="ko">
        한국어
        </option>
    </select>
</div>

<header>
    <div class="masthead">
        <h1><a class="identity-logo" href="/">Creative Commons</a></h1>
        <button class="expand-menu">Menu</button>
        <!-- below menu is not final items, for testing only -->
        <nav class="primary-menu" aria-label="Primary navigation">
            <ul>
                <li>
                    <a href="/who-we-are">Who We Are</a>
                    <button class="expand icon-replace fa-angle-down">Expand</button>
                    
                    <ul>
                        <li><a href="/strategic-plan">Strategic Plan</a></li>
                        <li><a href="/team">Team</a></li>
                        <li><a href="/governance">Governance</a></li>
                        <li><a href="/opportunities">Opportunities</a></li>
                        <li><a href="/press">Press</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/what-we-do">What We Do</a>
                    <button class="expand icon-replace fa-angle-down">Expand</button>

                    <ul>
                        <li>
                            <a href="/build/">Build <br> Open Infrastructure</a>
                            <button class="expand icon-replace fa-angle-down">Expand</button>

                             <ul>
                                <li><a href="/cc-licenses">CC Licenses</a></li>
                                <li><a href="/cc-signals">CC Signals</a></li>
                                <li><a href="/public-domain">Public Domain</a></li>
                                <li><a href="/faq">FAQs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/implement/">Implement <br> the Commons</a>
                            <button class="expand icon-replace fa-angle-down">Expand</button>

                             <ul>
                                <li><a href="/impact">Where CC Makes An Impact</a></li>
                                <li><a href="/resources">Resources</a></li>
                                <li><a href="https://search.creativecommons.org">Search the Commons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/engage/">Engage <br> the People</a>
                            <button class="expand icon-replace fa-angle-down">Expand</button>

                             <ul>
                                <li><a href="/training-and-webinars">Training + Webinars</a></li>
                                <li><a href="/advocacy">Advocacy</a></li>
                                <li><a href="/community">Community</a></li>
                                <li><a href="/partnerships">Partnerships</a></li>
                                <li><a href="/events">Events</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/blog">Blog</a></li>
                <li>
                    <a href="/support">Support Us</a>
                    <button class="expand icon-replace fa-angle-down">Expand</button>
                    
                    <ul>
                        <li><a href="https://www.classy.org/give/313412/#!/donation/checkout?c_src=website&c_src2=top-of-page-banner">Make a Gift</a></li>
                        <!-- <li><a href="/support/#ways-to-give">Ways to Give</a></li> -->
                        <li><a href="/support/oic">Open Infrastructure Circle</a></li>
                        <li><a href="/support/donor-faq">Donor FAQ</a></li>
                    </ul>
                </li>
                <li><a class="donate" href="https://www.classy.org/give/313412/#!/donation/checkout?c_src=website&c_src2=top-of-page-banner">Donate</a></li>
                <!-- <li><a class="donate" href="#">Support Us</a></li> -->
            </ul>
        </nav>
    </div>

</header>

<?php
$noticeQuery = new WP_Query(array(
    'post_type' => 'notice',
    'posts_per_page' => 1,
    'meta_key' => 'type',
    'meta_value' => 'top-of-site'
    //'paged' => $paged,
));
?>

<?php if ( $noticeQuery->have_posts() ) : while ( $noticeQuery->have_posts() ) : $noticeQuery->the_post(); ?>
<?php if (get_field('importance_level') && get_field('importance_level') != 'default') :
    $importance_level = get_field('importance_level');
?>
<?php endif; ?>

<article class="attention <?php echo $importance_level; ?>">
<div>
<h2><?php the_field('message'); ?></h2>
<?php the_field('message_rich_text'); ?>
<a href="<?php the_field('link_url'); ?>"><?php the_field('link_text'); ?></a>
</div>

<figure>
    <?php $image = get_field('graphic'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <!-- <figcaption>
        <p></p>
    </figcaption> -->
</figure>
</article>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<span id="main-content-marker"></span>

<?php if (get_field('css_dev_hotfixes' )) : ?>
<style>
    <?php the_field('css_dev_hotfixes' ); ?>
</style>
<?php endif; ?>
