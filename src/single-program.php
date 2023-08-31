/* 
This is a prototype file for Vocabulary, 
that may be later ported into Vocabulary 
proper.

Style rules are written with two sections 
at current, separated by an empty line. 

1. for layout, positioning, and related. 

2. for visual configuration such 
as color, font, background, etc.

EX: 
.selector {
    layout style: rule here

    visual style: rule here
}

EX:
.article {
    position: relative;
    width: 100%;

    color: blue;
    text-decoration: none;
}
    
*/

@import 'vendor/normalize.css';
@import 'library-vars.css';

/* utilities */
.skip-to-content {
    position: absolute;
    top: 0;
    left: 0;
    margin: -1000px;
    
}

.skip-to-content:focus {
    margin: 0;  
}

/* typography */

body {
    /* font-family: Arial;   */
    font-weight: 400;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

/* still questionable as a rule */
h2, h3 {
    text-transform: uppercase;
}

/* ************************* */

body > header {
    display: flex;
    flex-wrap: wrap;
    position: relative;
    margin-bottom: 2em;
    /* padding: 0 var(--vocabulary-page-edges-space); */
}

.masthead {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: baseline;
    position: relative;

    width: 100%;
    /* padding-top: 3%; */
    padding-top: 40px;
    margin: 0 var(--vocabulary-page-edges-space);
}

.masthead h1 {
    margin: 0;
}

.masthead .identity-logo {
    display: inline-block;
    text-indent: -1000px;
    vertical-align: bottom;
    height: 50px;
    width: 191px;
    
    
    /* allows for color manipulation of svg */
    background-color: black;
    -webkit-mask-image: url('./../svg/cc/logos/cc/logomark.svg');
    mask-image: url('./../svg/cc/logos/cc/logomark.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    cursor: pointer;

    /* standard pattern for setting logo in lieu of background color manipulation */
    /* background: url('../../svg/cc/logos/cc/logomark.svg') left top no-repeat; */
}

.masthead .identity-logo:hover {
    background-color: var(--vocabulary-neutral-color-dark-gray);
    
}

/* TODO: needs focus outline to be fixed */
/* .masthead .identity-logo:focus {
    position: relative;
}

.masthead .identity-logo:focus:before {
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1000;
    content: '';

    border: 60px solid purple;
    -webkit-mask-image: none;
    mask-image: none;
} */

/* style product identity typesetting */
.masthead .identity-logo.product {
    width: initial;
    position: relative;
    text-indent: 42px;
    padding-top: 7px;
    box-sizing: border-box;

    text-decoration: none;
    font-family: "Accidenz Commons";
    font-weight: normal;
    text-transform: lowercase;
    letter-spacing: -1px;
    line-height: 1em;
    -webkit-mask-image: none;
    mask-image: none;
    background: none;
    color: black;
}

/* style product identity mini-cc-logo */
.masthead .identity-logo.product:before {
    position: absolute;
    width: 40px;
    height: 40px;
    content: '';
    left: 0;
    top: .176em;
   
    background-color: black;
    -webkit-mask-image: url('./../svg/cc/logos/cc/lettermark.svg');
    mask-image: url('./../svg/cc/logos/cc/lettermark.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    cursor: pointer;
}

/* style product identity typesetting */
.masthead .identity-logo.product {
    width: initial;
    position: relative;
    text-indent: 42px;
    padding-top: 7px;
    box-sizing: border-box;

    text-decoration: none;
    font-family: "Accidenz Commons";
    font-weight: normal;
    text-transform: lowercase;
    letter-spacing: -1px;
    line-height: 1em;
    -webkit-mask-image: none;
    mask-image: none;
    background: none;
    color: black;
}

/* style product identity mini-cc-logo */
.masthead .identity-logo.product:before {
    position: absolute;
    width: 40px;
    height: 40px;
    content: '';
    left: 0;
    top: .176em;
   
    background-color: black;
    -webkit-mask-image: url('./../svg/cc/logos/cc/lettermark.svg');
    mask-image: url('./../svg/cc/logos/cc/lettermark.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    cursor: pointer;
}

/* .masthead .primary-menu {
    margin-top: 45px;
    vertical-align: bottom;
    
} */

.masthead .primary-menu ul {
    display: flex;
    justify-content: space-around; 
    width: 100%;
    margin: 0;
    padding: 0;

    list-style: none;
}

.masthead .primary-menu ul li {
    display: flex;
    align-items: center;
    margin-top: 5px;
    margin-left: 20px;  
}

.masthead .primary-menu ul li a {
    text-decoration: none;
    text-transform: uppercase;
    font-family: var(--vocabulary-brand-typeset-nav-family);
    font-weight: var(--vocabulary-brand-typeset-nav-weight);
    font-size: 1.1em;
    letter-spacing: 0.02em;
    color: var(--vocabulary-brand-typeset-nav-color);
}

.masthead .primary-menu ul li a:hover {
    color: black;
}

.masthead .primary-menu ul li a.attention {
    display: inline-block;
    padding: 0.5em;

    background: var(--vocabulary-brand-color-turquoise);
    color: white;
    border-radius: 4px;
}

button.expand-menu {
    display: none;
}

.ancilliary-menu {
    position: absolute;
    top: 0;
    /* right: var(--vocabulary-page-edges-space); */
    right: 0;

    font-family: "Source Sans Pro";
    font-style: normal;
    font-weight: 600; 
    font-size: .8em;
    /* font-size: 1em; */
}

.ancilliary-menu ul {
    display: flex;
    margin: 0;
    padding: 0;

    list-style: none;
}

.ancilliary-menu ul li {
    margin-left: 10px;
}
.ancilliary-menu ul li a {
    /* generalize this */
    display: inline-block;
}

.ancilliary-menu ul li a, 
.ancilliary-menu ul li button {
    margin-top: 10px;
}

.ancilliary-menu ul li button:hover {
    cursor: pointer;
}

.ancilliary-menu button.locale {
    display: inline-flex;
    align-items: center;
    padding: 6px 10px;


    background:  var(--vocabulary-neutral-color-lighter-gray);
    border: none;
    border-radius: 3px;
}

.ancilliary-menu button.locale.icon-attach:before {
    --icon-sprite: var(--fa-globe);
    --icon-sprite-size: .8em;

    margin-right: .8em;

    opacity: .3;
}

.ancilliary-menu a.donate {
    display: inline-flex;
    align-items: center;
    padding: 6px 10px;

    text-decoration: none;
    background: var(--vocabulary-brand-color-soft-tomato);
    color: var(--vocabulary-brand-color-dark-tomato);
    border-radius: 3px;
}

.ancilliary-menu a.donate.icon-attach:before {
    --icon-sprite: var(--fa-heart);
    --icon-sprite-color: var(--vocabulary-brand-color-dark-tomato);   
     --icon-sprite-size: .8em;

    margin-right: .8em;
}

.ancilliary-menu a.search {
    display: inline-flex;
    align-items: center;
    padding: 6px 10px;

    font-weight: normal;
    text-decoration: none;
    background:  var(--vocabulary-neutral-color-lighter-gray);
    color: #000;
    border: none;
    border-radius: 3px;
}

.ancilliary-menu a.search.icon-attach:before {
    --icon-sprite: var(--fa-search);
     --icon-sprite-size: .8em;

    margin-right: .8em;
}

.ancilliary-menu button.explore {
    margin-top: 0;
    padding-top: 16px;
    padding-bottom: 6px;
    padding-left: 10px;
    padding-right: 10px;

    background: black;
    color: white;
    border: none;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
}

.explore-panel {
    order: -1;
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 40px var(--vocabulary-page-edges-space) 60px var(--vocabulary-page-edges-space);

    background: black;
    color: white;
}

.explore-panel aside {
    margin-right: 20px;
}

.explore-panel aside .identity-logo {
    display: inline-block;
    text-indent: -1000px;
    vertical-align: bottom;
    height: 50px;
    width: 191px;
    
    
    /* allows for color manipulation of svg */
    background-color: white;
    -webkit-mask-image: url('./../svg/cc/logos/cc/logomark.svg');
    mask-image: url('./../svg/cc/logos/cc/logomark.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    cursor: pointer;

    /* standard pattern for setting logo in lieu of background color manipulation */
    /* background: url('../../svg/cc/logos/cc/logomark.svg') left top no-repeat; */

}

.explore-panel aside h2 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;

}

.explore-panel aside p {
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 400;
}

.explore-panel .explore-menu {
    width: 100%;

    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 400;

}

.explore-panel .explore-menu ul {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 20px;
    
    margin: 0;
    padding: 0;

    list-style: none;

}

.explore-panel nav ul li a {
    display: block;

    color: var(--vocabulary-brand-color-turquoise);
    text-decoration: none;
    font-weight: 700;
    /* margin-bottom: .8em; */


}

.explore-panel nav ul li p {
    font-weight: inherit;
    line-height: 1.5;
}

body {
    overflow-x: hidden;
}

/* top page banner */
body > article.attention {
    background: var(--vocabulary-brand-color-soft-green);
    padding: 1em 5%;

    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 400;
    font-size: 1.2em;
    line-height: 150%;
    border-bottom: 3px solid white;
}

/* bottom page banner */
body > article.attention:nth-of-type(2) {
    /* grid-column: span 3; */
    background: var(--vocabulary-brand-color-soft-gold);
}

body > article.attention a {
    color: var(--vocabulary-brand-color-dark-green);
    --underline-background-color: var(--vocabulary-brand-color-soft-green);
}

.default-page main > header {
    justify-content: left;
    text-align: left;
}

.default-page main > header:before {
    left: -5.5%;
}

.default-page main {
    width: 90%;
    box-sizing: border-box;
    display: grid;
    gap: 0 4.1em;
    grid-template-columns: 1fr 1.22fr 1fr;
    grid-template-areas: 
    'header header header'
    'content content sidebar';
    padding: 0;

}

.default-page main > header {
    display: block;
    grid-area: header;
    padding-top: 1em;

}

.default-page main > header h1 {
    margin-bottom: 0;

}

.default-page main > header p {
    /* margin-top: 0;
    margin-bottom: 0; */

}

.default-page main > aside {
    grid-area: sidebar;
    /* width: 100%; */
}

.default-page main > aside h2 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.5em;
}

.default-page main > aside a {
     /* better hyperlink underline typesetting inspired by Tufte CSS */
     --underline-color: var(--vocabulary-brand-color-dark-tomato);
     --underline-background-color: white;
     color: var(--vocabulary-brand-color-dark-tomato);
     text-decoration: none;
 
     /* adapted from Tufte.css -- Copyright (c) 2014 Dave Liepmann -- https://github.com/edwardtufte/tufte-css -- https://github.com/edwardtufte/tufte-css/blob/gh-pages/LICENSE */
     background: -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(currentColor, currentColor);
     background: linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(currentColor, currentColor);
     -webkit-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     -moz-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     background-repeat: no-repeat, no-repeat, repeat-x;
     text-shadow: 0.03em 0 var(--underline-background-color), -0.03em 0 var(--underline-background-color), 0 0.03em var(--underline-background-color), 0 -0.03em var(--underline-background-color), 0.06em 0 var(--underline-background-color), -0.06em 0 var(--underline-background-color), 0.09em 0 var(--underline-background-color), -0.09em 0 var(--underline-background-color), 0.12em 0 var(--underline-background-color), -0.12em 0 var(--underline-background-color), 0.15em 0 var(--underline-background-color), -0.15em 0 var(--underline-background-color);
     background-position: 0% 93%, 100% 93%, 0% 93%;
     /* background-position-y: 87%, 87%, 87%; */
}

.default-page main > aside nav {
    margin-bottom: 3em;
}

.default-page main > aside nav ul {
    margin: 0;
    padding: 0;
    text-indent: none;

    list-style: none;
    font-size: 1em;
    font-weight: 700;
}

.default-page main > aside nav ul li {
    margin-bottom: 1em;

    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 400;
    font-size: 1.1em;
    line-height: 150%;

}

.default-page main > aside nav.filter-menu h2 {
    /* margin-left: .5em; */
}

.default-page main > aside nav.filter-menu ul li {
    margin-bottom: 0;
    padding: 1em;
}

.default-page main > aside nav.filter-menu ul li.current {
    background: var(--vocabulary-brand-color-soft-tomato);
    /* padding: 1em; */
    font-weight: bold;
}

.default-page main > aside nav.filter-menu ul li.current a {
    --underline-background-color: var(--vocabulary-brand-color-soft-tomato);
}

.default-page main > aside h2:nth-child(1) {
    margin-top: 0;
}

.default-page main > aside .attention {
    background: var(--vocabulary-brand-color-soft-turquoise);
    margin-top: 5em;
    padding: 1.5em;
}

.default-page main > aside .attention p {
    font-size: 1em;
}

.default-page main > aside .attention a {
    --underline-background-color: var(--vocabulary-brand-color-soft-turquoise);

}

.default-page main > .content {
    grid-area: content;
    /* width: 100%; */
}

/* .default-page main > .content h2 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 2.1em;
    text-transform: none;
}

.default-page main > .content h3 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.75em;
    text-transform: none;
} */

.default-page main > .content p:nth-child(1) {
    margin-top: 0;
}

/* 
.default-page main > .content {
    grid-column: span 3;
    width: 100%;
}

.default-page main:has(aside) {
    gap: 0;
}

.default-page main:has(aside) > .content {
    grid-area: content;
} */

.blog-index-alt main {
    width: 100%;
    padding: 0;
}

.blog-index-alt main > header:before {
    left: initial;
}

.blog-index-alt main > header {
    padding-top: 1em;
    /* padding-bottom: 5em; */
    margin-bottom: 0;
}

.blog-index-alt main > header h1 {
    margin-top: 0.67em;
    margin-bottom: 0;
}

.blog-index-alt main .authored-posts {
    margin-top: 8em;
    padding: 0 4em;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    gap: 3em;
    box-sizing: border-box;
}

.blog-index-alt main .authored-posts.highlight {
    /* margin-top: -10em; */
    margin-top: 0;
    padding: 0 4em;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    gap: 3em;
    box-sizing: border-box;

    background: var(--vocabulary-neutral-color-lighter-gray);

}

.blog-index-alt main .authored-posts article {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    position: relative;
}

.blog-index-alt main .authored-posts.highlight article a {
    --underline-background-color: var(--vocabulary-neutral-color-lighter-gray);

}

.blog-index-alt main .authored-posts.highlight article:nth-child(1) {
    grid-column: span 3;
    padding: 2em;

    background: var(--vocabulary-brand-color-soft-tomato);
    background: white;
    border: 16px solid white;
}


.blog-index-alt main .authored-posts.highlight article:nth-child(1) a {
    --underline-background-color: white;
    /* background: white; */
}


.blog-index-alt main .authored-posts article header {
    display: flex;
    flex-wrap: wrap;
}


.blog-index-alt main .authored-posts article h2 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.5em;
    text-transform: none;
    text-transform: initial;
}

.blog-index-alt main .authored-posts.highlight article:nth-child(1) h2 {
    font-size: 2.1em;
}


.blog-index-alt main .authored-posts article header .categories {
    order: -1;
}

.blog-index-alt main .authored-posts article figure {
    width: 100%;
    margin: 0;
}

.blog-index-alt main .authored-posts article figure img {
    /* position: absolute;
    top: 2em;
    left: 0;
    z-index: -1; */
    width: 100%;
   
}


.blog-index-alt main .authored-posts article p {
    display: none;
}













.blog-post main h2 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 2.1em;
    text-transform: none;
}

.authored-posts article h2 {
    grid-area: title;
    width: 100%;
}


/* .blog-post main h3 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.75em;
    text-transform: none;
} */

.blog-post figure {
    width: 120%;
    margin-left: -10%;
}




.blog-index main {
    width: 100%;
    padding: 0;
}

.blog-index main > header:before {
    left: initial;
    /* background: white; */
}

.blog-index main > header {
    padding-top: 1em;
    /* padding-bottom: 5em; */
    margin-bottom: 0;

}

.blog-index main > header h1 {
    margin-top: 0.67em;
    margin-bottom: 0;
}

.blog-index main .authored-posts {
    /* display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin-top: 8em;
    padding: 0 4em;
    gap: 3em;
    box-sizing: border-box; */
    width: 60%;
    margin: 0 auto;
    margin-top: 8em;
}

.blog-index main .authored-posts.highlight {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    margin-top: 8em;
    padding: 0 4em;
    gap: 2em;
    box-sizing: border-box;

    width:100%;
    margin: 0 auto;
    margin-top: 0;
    /* padding: 0; */

    background: var(--vocabulary-neutral-color-lighter-gray);
}

.blog-index main .authored-posts.highlight article figure {
    order: -1;
    
}

.blog-index main .authored-posts.highlight article a {
    --underline-background-color: var(--vocabulary-neutral-color-lighter-gray);
}

.blog-index main .authored-posts.highlight article h2 {
    font-size: 1.4em;
}

.blog-index main .authored-posts.highlight > article:nth-child(1) {
    grid-column: span 4;
    margin-bottom: 1em;
    padding: 4em;

    background: var(--vocabulary-brand-color-soft-tomato);
    /* background: var(--vocabulary-brand-color-soft-turquoise); */
    background: white;
}

.blog-index main .authored-posts.highlight article:nth-child(1) a {
    --underline-background-color: var(--vocabulary-brand-color-soft-tomato);
    /* --underline-background-color: var(--vocabulary-brand-color-soft-turquoise); */
    --underline-background-color: white;
}

.blog-index main .authored-posts.highlight article:nth-child(1) h2 {
    font-size: 2.1em;
}

.blog-index main .authored-posts.highlight article:nth-child(1) figure {
    order: initial;
}

/* .blog-index main .authored-posts.highlight article:nth-child(2) {
    padding-left: 4em;
}

 .blog-index main .authored-posts.highlight article:nth-child(4) {
    margin-right: 4em;
 } */



 .blog-index main .authored-posts footer {
    grid-column: span 4;
}

.blog-index main .authored-posts footer .attribution-list {
    padding: 4em;
    gap: 0;


    background:  var(--vocabulary-brand-color-soft-turquoise);
    background: var(--vocabulary-brand-color-tomato);
    background: var(--vocabulary-brand-color-soft-tomato);
    /* color: white; */
}

.blog-index main .authored-posts footer .attribution-list h2 {
    margin-top: 0;
}

.blog-index main .authored-posts footer .attribution-list ul {
    display: flex;
    margin: 0;
    padding: 0;
    gap: 2em;

    font-size: 1em;
    list-style: none;

}


.blog-index main .authored-posts.highlight footer .attribution-list article {
    margin-bottom: 1em;
}

.blog-index main .authored-posts.highlight footer .attribution-list article a { 
    /* --underline-background-color: var(--vocabulary-brand-color-tomato); */
    /* color: white; */

    --underline-background-color: var(--vocabulary-brand-color-soft-tomato);


}

.blog-index main .authored-posts.highlight footer .attribution-list article figure {
    display: flex;
    gap: 1em;
    margin-top: 1em;
}

.blog-index main .authored-posts.highlight footer .attribution-list article img { 
    object-fit: cover;
    width: 4em;
    height: 4em;
}

.blog-index main .authored-posts.highlight footer .attribution-list article figure .attribution {
    margin-top: 0;
}





.blog-index-alt2 main {
    width: 100%;
    padding: 0;
}

.blog-index-alt2 main > header:before {
    left: initial;
    background: white;
}

.blog-index-alt2 main > header {
    padding-top: 1em;
    /* padding-bottom: 5em; */
    margin-bottom: 0;

}

.blog-index-alt2 main > header h1 {
    margin-top: 0.67em;
    margin-bottom: 0;
}

.blog-index-alt2 main .authored-posts {
    width: 60%;
    /* display: grid;
    grid-template-columns: 1fr 1fr 1fr; */
    margin: 8em auto 0 auto;
    /* padding-top: 8em; */
    /* padding: 0 4em;
    gap: 3em;
    box-sizing: border-box; */
    position: relative;

}


.blog-index-alt2 main .authored-posts.highlight {
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 3em 2em;
    margin: 0 auto 8em auto;
    padding: 4em;
    padding-top: 3em;
    box-sizing: border-box;

    background: var(--vocabulary-neutral-color-lighter-gray);
    background: white;
}

.blog-index-alt2 main .authored-posts.highlight:before {
    display: block;
    content: '';
    height: calc(100% + 8em);
    width: 100vw;
    position: absolute;
    top: 0;
    left: -5.5%;
    z-index: -1;

    background: var(--vocabulary-neutral-color-lighter-gray);
    background: white;

}

/* .blog-index-alt2 main .authored-posts.highlight:after {
    display: block;
    content: '';
    height: 4em;
} */

.blog-index-alt2 main .authored-posts.highlight article {
    position: relative;
    gap: initial;
    margin-bottom: 0;
}

.blog-index-alt2 main .authored-posts.highlight article h2 {
    font-size: 1.3em;
}

.blog-index-alt2 main .authored-posts.highlight article .categories {
    /* position: absolute;
    top: -2.5em;
    left: 0; */
    display: block;
    width: 100%;
    order: 1;
    margin-top: 1em;
}

/* .blog-index-alt2 main .authored-posts.highlight article .byline {
    order: 2;
} */

.blog-index-alt2 main .authored-posts.highlight article figure {
    order: -2;
}

.blog-index-alt2 main .authored-posts.highlight article:nth-child(1) {
    display: grid;
    grid-template-areas: 'img header'
                        'img teaser';
    grid-column: span 3;
    gap: 2em;
    margin-bottom: 1em;
    position: relative;

    /* background: var(--vocabulary-brand-color-soft-tomato); */
    /* padding: 4em; */
}

.blog-index-alt2 main .authored-posts.highlight article:nth-child(1) header {
    grid-area: header;
}

.blog-index-alt2 main .authored-posts.highlight article a {
    /* --underline-background-color: var(--vocabulary-brand-color-soft-tomato); */
    /* --underline-background-color: var(--vocabulary-neutral-color-lighter-gray); */

}

.blog-index-alt2 main .authored-posts.highlight article:nth-child(1) h2 {
    /* font-size: 1.8em; */
}

.blog-index-alt2 main .authored-posts.highlight article:nth-child(1) figure {
    grid-area: img;
    width: 100%;
    margin-top: 1.5em;

}

.blog-index-alt2 main .authored-posts.highlight article:nth-child(1) p {
    grid-area: teaser;
    
    font-size: 1.2em;

}

.blog-index-alt2 main .authored-posts.highlight article:nth-child(1) .categories {
    /* position: absolute;
    top: -1.5em;
    left: 0; */
    /* order: 1; */

    /* display: inline-block;
    width: initial;
    position: absolute;
    bottom: -1em;
    right: 0; */

}



/* .program-page main p {
    grid-column: span 3;
} */

.program-index header h1 {
    margin-bottom: 0;
}

.program-index header h2 {
    margin-top: .25em;

    font-size: 1.5em;
}

/* .program-page header p {
    margin-top: 0;
} */

.program-index main > article {
    width: 140%;
    margin-left: -20%;


}

/* .program-page main > article h2 {
    text-transform: uppercase;
} */

.program-index main > article.projects {
    margin-bottom: 8em;
}

.program-index main > article.projects ul {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 2em;
    margin: 0;
    padding: 0;

    font-size: 1em;
    list-style: none;
}

.program-index main > article.projects article {
    padding: 2em;

    background: var(--vocabulary-brand-color-soft-turquoise);
    border-top: 3px solid black;
}

.program-index main > article.projects article a {
    --underline-background-color: var(--vocabulary-brand-color-soft-turquoise);
}

.program-page header h1 {
    margin-bottom: 0;
}







.search-index .search-form form {
    display: flex;
    width: 100%;
    margin-top: 1em;
    margin-bottom: 1em;

    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 700;
    font-size: 1em;

}

.search-index .search-form form input {
    flex: 1;
    width: 100%;
    height: 4em;
    padding: .2em 1em;

    outline: none;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    border: 2px solid black;

}

.search-index .search-form form button {
    width: 10%;

    cursor: pointer;
    background: black;
    color: white;
    border: none;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}

.search-index .authored-posts article {
    position: relative;
}

.search-index .authored-posts article .type {
    position: absolute;
    top: 0;
    right: 0;
    padding: .5em .7em;

    background: var(--vocabulary-brand-color-soft-turquoise);
    border-radius: 4px;
    font-family: 'Source Sans Pro';

}



.authored-posts > h2 {
    margin-bottom: 2.1em;

    font-family: 'Roboto Condensed';
    font-size: 2.1em;
    font-style: normal;
    font-weight: 700;
    text-transform: none;
}

.authored-posts a {
     /* better hyperlink underline typesetting inspired by Tufte CSS */
     --underline-color: var(--vocabulary-brand-color-dark-tomato);
     --underline-background-color: white;
     color: var(--vocabulary-brand-color-dark-tomato);
     text-decoration: none;
 
     /* adapted from Tufte.css -- Copyright (c) 2014 Dave Liepmann -- https://github.com/edwardtufte/tufte-css -- https://github.com/edwardtufte/tufte-css/blob/gh-pages/LICENSE */
     background: -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(currentColor, currentColor);
     background: linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(currentColor, currentColor);
     -webkit-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     -moz-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     background-repeat: no-repeat, no-repeat, repeat-x;
     text-shadow: 0.03em 0 var(--underline-background-color), -0.03em 0 var(--underline-background-color), 0 0.03em var(--underline-background-color), 0 -0.03em var(--underline-background-color), 0.06em 0 var(--underline-background-color), -0.06em 0 var(--underline-background-color), 0.09em 0 var(--underline-background-color), -0.09em 0 var(--underline-background-color), 0.12em 0 var(--underline-background-color), -0.12em 0 var(--underline-background-color), 0.15em 0 var(--underline-background-color), -0.15em 0 var(--underline-background-color);
     background-position: 0% 93%, 100% 93%, 0% 93%;
     /* background-position-y: 87%, 87%, 87%; */
}

.authored-posts article {
    display: flex;
    flex-wrap: wrap;
    /* display: grid; */
    grid-template-columns: 1fr 1fr;
    grid-template-areas:
    'title title'
    'image teaser';
    gap: 2em;
    margin-bottom: 8em;
}

.authored-posts article header {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
}

.authored-posts article h2, .authored-posts article h3 {
    grid-area: title;
    width: 100%;
    margin-top: 0.83em;

    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.5em;
    font-size: 2.1em;
    text-transform: none;
    text-transform: initial;
}

.authored-posts article .categories {
    order: -1;

    font-family: 'Source Sans Pro'; 
}

.authored-posts .byline {
    font-family: 'Source Sans Pro'; 
}

.authored-posts article figure {
    display: inline-block;
    width: 50%;
    grid-area: image;
    margin: 0;
    padding: 0;
    flex: 1;
}

.authored-posts article img {
    /* width: 50%; */
    width: 100%;
    /* float: left; */
    /* margin-right: 1em; */

}

.authored-posts article p {
    flex: 1;
    display: inline-block;
    grid-area: teaser;
    margin-top: 0;
}

.authored-posts article .attribution {
    /* grid-area: image; */
    /* grid-row-start: 3; */
    display: inline-block;
    margin-top: 1em;
    /* background: #F5F5F5; */

    font-family: 'Source Sans Pro'; 
}

.authored-posts article p:before {
    clear: both;
}

.authored-posts article ul {
    width: 100%;
}

.authored-posts a.more {
    padding: .4em .7em;

    background: black;
    color: white;
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.2em;
    text-transform: none;
    text-decoration: none;
    text-shadow: none;
}

nav.pagination {
    grid-column: span 3;
}

nav.pagination ol {
    display: flex;
    margin: 0;
    padding: 0;
    text-indent: none;

    font-size: 1em;
    list-style: none;

}

main nav.pagination ol li {
    margin: 0 .5em;
}

main nav.pagination ol li a {
    padding: .4em .7em;

    background: #F5F5F5;
    --underline-background-color: #F5F5F5;
    color: black;
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.2em;
    text-transform: none;
    text-decoration: none;
}

main nav.pagination ol li.current a {
    background: black;
    --underline-background-color: black;
    color: white;
}

.team-index main .persons {
    grid-column: span 3;
    margin-bottom: 5em;
}

.team-index main .persons h2 {
    margin-top: 0;
    margin-bottom: 1.5em;

    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 2.1em;
}

.team-index main .persons ul {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 4em;
    margin: 0;
    padding: 0;

    list-style: none;
}

.team-index main .persons .person {
    display: flex;
    flex-wrap: wrap;

    font-family: 'Source Sans Pro';
}

.team-index main .persons .person h3 {
    margin-top: .6em;
    margin-bottom: .5em;

    font-style: normal;
    font-weight: 700;
    font-size: 1em;
    /* line-height: 150%; */
}

.team-index main .persons .person .title {
    margin-bottom: .4em;

    font-style: normal;
    font-weight: 600;
    font-size: .7em;
    line-height: 150%;
}

.team-index main .persons .person figure {
    order: -1;
    margin: 0;
    padding: 0;

    font-size: .8em;
}

.team-index main .persons .person img {
    width: 100%;
}


.team-index main .persons .person a {
     /* better hyperlink underline typesetting inspired by Tufte CSS */
     --underline-color: var(--vocabulary-brand-color-dark-tomato);
     --underline-background-color: white;
     color: var(--vocabulary-brand-color-dark-tomato);
     text-decoration: none;
 
     /* adapted from Tufte.css -- Copyright (c) 2014 Dave Liepmann -- https://github.com/edwardtufte/tufte-css -- https://github.com/edwardtufte/tufte-css/blob/gh-pages/LICENSE */
     background: -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(currentColor, currentColor);
     background: linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(currentColor, currentColor);
     -webkit-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     -moz-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     background-repeat: no-repeat, no-repeat, repeat-x;
     text-shadow: 0.03em 0 var(--underline-background-color), -0.03em 0 var(--underline-background-color), 0 0.03em var(--underline-background-color), 0 -0.03em var(--underline-background-color), 0.06em 0 var(--underline-background-color), -0.06em 0 var(--underline-background-color), 0.09em 0 var(--underline-background-color), -0.09em 0 var(--underline-background-color), 0.12em 0 var(--underline-background-color), -0.12em 0 var(--underline-background-color), 0.15em 0 var(--underline-background-color), -0.15em 0 var(--underline-background-color);
     background-position: 0% 93%, 100% 93%, 0% 93%;
     /* background-position-y: 87%, 87%, 87%; */
}

.team-index main .persons .person p {
    font-size: .75em;
}

.person-page main > header {
    position: relative;
    box-sizing: border-box;
    display: grid;
    grid-template-columns: 3fr 7fr;
    /* grid-template-areas: 
    'picture info'
    'picture info'
    'picture info'; */
    gap: 0 5em;
}

.person-page main > header h1 {
    grid-column-start: 2;

    margin-bottom: .1em;
    
}

.person-page main > header .title {
    grid-column-start: 2;
    margin-bottom: 1em;

    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 700;
    font-size: 1.9em;
}

.person-page main > header figure {
    box-sizing: border-box;
    position: absolute;
    margin: 0;
    padding:0;

    top: 3.4em;
    left: 0;
    width: 30%;
}

.person-page main > header figure img {
    box-sizing: border-box;

    width: 100%;

    border: 16px solid white;
}

.person-page main > header .bio {
    grid-column-start: 2;
    
    font-size: .9em;

}

.person-page main .authored-posts {
    grid-area: content;
}

.person-page main .authored-posts h2 {

    font-family: 'Roboto Condensed';
    font-size: 2.1em;
    font-style: normal;
    font-weight: 700;
    /* text-transform: uppercase; */

}

.person-page main .authored-posts article img {
    /* generalize this better */
    width: 100%;
}



/*/////////////////////////*/

main {
    width: 60%;
    margin: 0 auto;
    /* margin-top: 2em; */
    margin-bottom: 8em;
    padding: 0 2em;
}

main > header {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 4em;
    padding-top: 2em;
    padding-bottom: 1em;
    position: relative;

    text-align: center;
}

main > header:before {
    width: 100vw;
    height: 100%;
    position: absolute;
    left: -33.333%;
    top: 0;
    z-index: -1;
    content: "";

    background: #F5F5F5;
}

main > header nav.breadcrumbs ol {
    display: flex;
    margin: 0;
    padding: 0;
    padding-left: 4px;

    list-style: none;
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 400;
    font-size: .8125em;
}

main > header nav.breadcrumbs ol li {
    display: flex;
    vertical-align: middle;
}

main > header nav.breadcrumbs ol li:after {
    --icon-sprite: var(--fa-right-angle);
    /* --icon-sprite-color: var(--vocabulary-brand-color-dark-tomato);    */
    --icon-sprite-size: 1em;

    display: inline-block;
    content: '';
    /* min-width: 30px; */
    /* min-height: 30px; */
    height: 1em;
    width: 1em;
    margin: 0 .4em;

    font-size: var(--icon-sprite-size);
    background-color: var(--icon-sprite-color);
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat; 
    -webkit-mask-image: var(--icon-sprite);
    mask-image: var(--icon-sprite);
    -webkit-mask-size: contain;
    mask-size: contain;
    opacity: .1;
}

main > header nav.breadcrumbs ol li a {
    /* better hyperlink underline typesetting inspired by Tufte CSS */
    --underline-color: var(--vocabulary-brand-color-dark-tomato);
    --underline-background-color: var(--vocabulary-neutral-color-lighter-gray);
    color: var(--vocabulary-brand-color-dark-tomato);
    text-decoration: none;

    /* adapted from Tufte.css -- Copyright (c) 2014 Dave Liepmann -- https://github.com/edwardtufte/tufte-css -- https://github.com/edwardtufte/tufte-css/blob/gh-pages/LICENSE */
    background: -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(currentColor, currentColor);
    background: linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(currentColor, currentColor);
    -webkit-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
    -moz-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
    background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
    background-repeat: no-repeat, no-repeat, repeat-x;
    text-shadow: 0.03em 0 var(--underline-background-color), -0.03em 0 var(--underline-background-color), 0 0.03em var(--underline-background-color), 0 -0.03em var(--underline-background-color), 0.06em 0 var(--underline-background-color), -0.06em 0 var(--underline-background-color), 0.09em 0 var(--underline-background-color), -0.09em 0 var(--underline-background-color), 0.12em 0 var(--underline-background-color), -0.12em 0 var(--underline-background-color), 0.15em 0 var(--underline-background-color), -0.15em 0 var(--underline-background-color);
    background-position: 0% 93%, 100% 93%, 0% 93%;
    /* background-position-y: 87%, 87%, 87%; */
}

main > header h1 {
    width: 100%;
    
    font-family: 'Roboto Condensed';
    font-size: 3.56em;
    font-style: normal;
    font-weight: 700;
    text-transform: uppercase;
}

main > header a {
    /* text-decoration: none; */
    color: var(--vocabulary-brand-color-dark-tomato);

    --underline-background-color: var(--vocabulary-neutral-color-lighter-gray);
}

main > header .categories {
    order: -1;

    font-family: 'Source Sans Pro';
    font-size: 1.2em;
    font-style: normal;
    font-weight: 400;
    /* text-transform: uppercase; */
}

main > header .byline {
    display: block;
    width: 100%;
    margin-bottom: 2em;

    font-family: 'Source Sans Pro';
    font-size: 1.2em;
    font-style: normal;
    font-weight: 400;
    font-style: italic;
}

main h2 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 2.1em;
    text-transform: none;

}

main h3 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.75em;
    text-transform: none;
}

main .series {
    display: inline-block;
    /* position: absolute;
    left: -25%;
    bottom: -10%; */
    box-sizing: border-box;
    /* min-height: 150px; */
    width: 25%;
    /* float: left; */
    /* margin: 2em; */
    margin-bottom: 2em;
    padding: 2em;
    width: 100%;

    
    background: #FEEDE9;
    /* color: white; */
    /* color: var(--vocabulary-brand-color-dark-tomato); */
    
}


main .series a {
    color: var(--vocabulary-brand-color-dark-tomato);
    --underline-background-color: #FEEDE9;
}

main .series p {
    margin :0;
    
    font-family: 'Source Sans Pro';
    font-size: 1.2em;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; 
}


main a {
     /* better hyperlink underline typesetting inspired by Tufte CSS */
     --underline-color: var(--vocabulary-brand-color-dark-tomato);
     --underline-background-color: white;
     color: var(--vocabulary-brand-color-dark-tomato);
     text-decoration: none;
 
     /* adapted from Tufte.css -- Copyright (c) 2014 Dave Liepmann -- https://github.com/edwardtufte/tufte-css -- https://github.com/edwardtufte/tufte-css/blob/gh-pages/LICENSE */
     background: -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(currentColor, currentColor);
     background: linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(currentColor, currentColor);
     -webkit-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     -moz-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
     background-repeat: no-repeat, no-repeat, repeat-x;
     text-shadow: 0.03em 0 var(--underline-background-color), -0.03em 0 var(--underline-background-color), 0 0.03em var(--underline-background-color), 0 -0.03em var(--underline-background-color), 0.06em 0 var(--underline-background-color), -0.06em 0 var(--underline-background-color), 0.09em 0 var(--underline-background-color), -0.09em 0 var(--underline-background-color), 0.12em 0 var(--underline-background-color), -0.12em 0 var(--underline-background-color), 0.15em 0 var(--underline-background-color), -0.15em 0 var(--underline-background-color);
     background-position: 0% 93%, 100% 93%, 0% 93%;
     /* background-position-y: 87%, 87%, 87%; */
}

main p {
    margin-bottom: 2em;
    
    font-family: 'Source Sans Pro';
    font-size: 1.5em;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; 
}


main ul, main ol {
    margin: 0 0 2em 1em;
    padding: 0;

    font-family: 'Source Sans Pro';
    font-size: 1.5em;
    font-style: normal;
    font-weight: 400;
    line-height: 150%;
}

main ol {
    
}

main blockquote {
    /* width: 120%; */
    margin: 0;
    /* margin-left: -10%; */
    margin-bottom: 1.5em;
    padding: 0;
}

/* manually include quote icon to avoid extraneous html classes */
main blockquote p:before {
    --icon-sprite: var(--fa-quote);

    display: block;
    content: '';
    height: 1em;
    width: 1em;

    font-size: var(--icon-sprite-size);
    background-color: var(--icon-sprite-color);
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat; 
    -webkit-mask-image: var(--icon-sprite);
    mask-image: var(--icon-sprite);
    -webkit-mask-size: contain;
    mask-size: contain;

}

main blockquote p {
    font-family: 'Source Sans Pro';
    font-weight: bold;
    font-size: 1.9em;
    line-height: 105%;
}

/* main img[width] {
    width: initial;
} */

main img:not([width]) {
    width: 100%;
}

main figure {
    /* width: 120%; */
    
    margin: 0;
    /* margin-left: -10%; */
    margin-bottom: 3em;
    padding: 0;
}

main figure .attribution {

    display: block;
    margin-top: 1em;
}

/* main figure:nth-of-type(even):has(img) {
    margin-top: 2em;
    margin-right: 2em;
    width: 50%;
    float: left;
}

main figure:nth-of-type(even):has(img):after {
    display: block;
    content: '';
    height: 3em;
    clear: both;
}

main figure:nth-of-type(odd):has(img) {
    margin-top: 2em;
    margin-right: -10%;
    margin-left: 2em;
    width: 50%;
    float: right;
}

main figure:nth-of-type(odd):has(img):after {
    display: block;
    content: '';
    height: 2em;
    clear: both;
} */

main > figure:nth-of-type(1):has(img) {
    width: 120%;
    margin: 0;
    margin-left: -10%;
    margin-bottom: 3em;
    padding: 0;
    float: none;
}

main figure:has(img.alignleft) {
    margin-top: 2em;
    margin-right: 2em;
    margin-left: -10%;
    width: 50%;
    float: left;
}

main figure:has(img.alignleft):after {
    display: block;
    content: '';
    height: 3em;
    clear: both;
}

main figure:has(img.alignright) {
    margin-top: 2em;
    margin-right: -10%;
    margin-left: 2em;
    width: 50%;
    float: right;
}

main figure:has(img.alignright):after {
    display: block;
    content: '';
    height: 2em;
    clear: both;
}

main figure:has(img.aligncenter) {
    width: 100%;

    margin-left: 0;
}

main figure:has(iframe) {
    width: 120%;
    margin-left: -10%;
    margin-right: 0;
    float: none;
}

main .pub-date {
    display: inline-block;
    margin-bottom: 4em;

    font-family: 'Source Sans Pro';
    font-size: 1.5em;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; 
}

main article.tags {
    margin-bottom: 8em;
}

main article.tags ul {
    display: flex;
    flex-wrap: wrap;
    margin: 0;
    left: 0;

    list-style: none;
}

main article.tags ul li {
    margin-right: .5em;
}


main article.tags ul li:after {
    content: ',';
    margin-left: .1em;

}

main article.tags ul li:last-child:after {
    content: '';
}


main article.related-posts {
    /* display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin-top: 8em;
    padding: 0 4em;
    gap: 3em;
    box-sizing: border-box; */
    width: 140%;
    margin-left: -20%;
    padding: 2em 4em;
    box-sizing: border-box;


    background: var(--vocabulary-neutral-color-lighter-gray);



}

main article.related-posts .authored-posts.highlight {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    margin-top: 8em;
    /* padding: 0 4em; */
    gap: 2em;
    box-sizing: border-box;

    margin: 0 auto;
    margin-top: 0;
    /* padding: 0; */

    /* background: var(--vocabulary-neutral-color-lighter-gray); */
}

main article.related-posts .authored-posts.highlight article {
    margin-bottom: 3em;
}

main article.related-posts .authored-posts.highlight article figure {
    order: -1;

    display: none;
    
}

main article.related-posts .authored-posts.highlight article a {
    --underline-background-color: var(--vocabulary-neutral-color-lighter-gray);
}

main article.related-posts .authored-posts.highlight article h2 {
    font-size: 1.4em;
}

main article.related-posts .authored-posts.highlight article p {
    display: none;
}















body > footer {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-template-areas: 
    "logo nav nav nav"
    "contact subscribe subscribe donate"
    "contact license license donate";
    gap: 40px;
    padding: 20px var(--vocabulary-page-edges-space);
    padding-bottom: 40px;

    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 400; 
    color: white;
    background: black;
}

body > footer h2 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 1.25em;
}

body > footer a {
    color: var(--vocabulary-brand-color-turquoise);
    text-decoration: none;
}

body > footer p {
    line-height: 1.5;
}

/* needs to be moved to be broader in general specificity scope */
body > footer p a {
    /* better hyperlink underline typesetting inspired by Tufte CSS */
    --underline-color: var(--vocabulary-brand-color-turquoise);
    --underline-background-color: black;
    color: var(--vocabulary-brand-color-turquoise);
    /* text-decoration: none; */

    /* adapted from Tufte.css -- Copyright (c) 2014 Dave Liepmann -- https://github.com/edwardtufte/tufte-css -- https://github.com/edwardtufte/tufte-css/blob/gh-pages/LICENSE */
    background: -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(var( --underline-color), var( --underline-color)), -webkit-linear-gradient(currentColor, currentColor);
    background: linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(var( --underline-color), var( --underline-color)), linear-gradient(currentColor, currentColor);
    -webkit-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
    -moz-background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
    background-size: 0.05em 1px, 0.05em 1px, 1px 1px;
    background-repeat: no-repeat, no-repeat, repeat-x;
    text-shadow: 0.03em 0 var(--underline-background-color), -0.03em 0 var(--underline-background-color), 0 0.03em var(--underline-background-color), 0 -0.03em var(--underline-background-color), 0.06em 0 var(--underline-background-color), -0.06em 0 var(--underline-background-color), 0.09em 0 var(--underline-background-color), -0.09em 0 var(--underline-background-color), 0.12em 0 var(--underline-background-color), -0.12em 0 var(--underline-background-color), 0.15em 0 var(--underline-background-color), -0.15em 0 var(--underline-background-color);
    background-position: 0% 93%, 100% 93%, 0% 93%;
    /* background-position-y: 87%, 87%, 87%; */

}

body > footer .identity-logo {
    grid-area: logo;
    display: inline-block;
    text-indent: -1000px;
    vertical-align: bottom;
    height: 50px;
    width: 191px;
    
    
    /* allows for color manipulation of svg */
    background-color: white;
    -webkit-mask-image: url('./../svg/cc/logos/cc/logomark.svg');
    mask-image: url('./../svg/cc/logos/cc/logomark.svg');
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    cursor: pointer;

    /* standard pattern for setting logo in lieu of background color manipulation */
    /* background: url('../../svg/cc/logos/cc/logomark.svg') left top no-repeat; */
}

body > footer .identity-logo:hover {
    background-color: var(--vocabulary-brand-color-turquoise);
}

body > footer .footer-menu {
    grid-area: nav;
    
    font-size: 1.3em;
    font-weight: 700;
}

body > footer .footer-menu ul {
    display: flex;
    justify-content: space-between;
    margin: 0;
    padding: 0;

    list-style: none;
}

body > footer .footer-menu ul li a {
    text-decoration: none;
    color: var(--vocabulary-brand-color-turquoise);

}

body > footer .contact {
    grid-area: contact;
}

body > footer .contact .social-menu ul {
    display: flex;
    margin: 0;
    padding: 0;
    margin-top: 3em;

    list-style: none;

}

body > footer .contact .social-menu ul li {
    margin-right: 1.5em;
}

body > footer .social-menu li a {
    --icon-sprite-color: white;
    --icon-sprite-size: 1.9em;
}

body > footer .subscribe {
    grid-area: subscribe;
}

body > footer .subscribe form {
    display: flex;
    justify-content: space-around;
    width: 100%;
}

body > footer .subscribe form input {
    display: inline-flex;
    position: relative;
    justify-content: flex-start;
    align-items: center;
    vertical-align: top;
    box-sizing: border-box;
    
    -webkit-appearance: none;
    background-color: transparent;
    color: rgb(118, 118, 118);
    font-family: "Source Sans Pro", sans-serif;
    font-size: 1em;
    font-weight: 600;
    line-height: 1.3;
    border: 2px solid rgb(118, 118, 118);;
    /* border-radius: 4px; */
    box-shadow: none;
    
}

body > footer .subscribe form input.input {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    padding: .5em;
    width: 100%;
}

body > footer .subscribe form input.input:focus {
    color: white;
}

body > footer .subscribe form input.button {
    justify-content: center;
    padding: 1.1em;
    
    cursor: pointer;
    font-family: "Roboto Condensed", sans-serif;
    font-size: 1.125rem;
    text-align: center;
    text-transform: uppercase;
    font-weight: 600;
    line-height: 0;
    white-space: nowrap;
    background-color: rgb(118, 118, 118);
    border: none;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    color: rgb(255, 255, 255);  
}

body > footer .donate {
    grid-area: donate;
}

body > footer .donate a.donate {
    display: inline-flex;
    align-items: center;
    padding: 1rem 1.5rem;

    text-transform: uppercase;
    font-family: 'Roboto Condensed';
    font-size: 1.5em;
    line-height: 1em;
    font-style: normal;
    font-weight: 700;
    border: none;
    border-radius: 4px;
    color: black;
    background: var(--vocabulary-brand-color-gold);  
}

body > footer .donate a.donate:hover {
    cursor: pointer;

    background-color: rgb(248, 204, 44);
}

/* set the icon settings */
body > footer .donate a.donate.icon-attach:before {
    /* --icon-sprite: var(--cc-heart-filled); */
    --icon-sprite-color: black;
    --icon-sprite-size: 1.2em;

    margin-right: .3em;
}

body > footer .license {
    grid-area: license;
}

body > footer .license img path {
    fill: white;
    /* width: 1.2em; */
}

body > footer .license svg {
    display: inline;
    width: 1.9em;
    height: 1.9em;
    margin-right: .3em;
}




/* ************************* */

.data-points ul {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin: 0;
    padding: 0;

    list-style-type: none;
}

.data-points .data-point {
    display: flex;
    flex-direction: column;
}

.data-points .data-point .stat {
    order: 3;
}

.topic-summary {
    display: grid;
    grid-template:
        "title graphic graphic"
        "description graphic graphic"
        "button graphic graphic";
}

.topic-summary h2 {
    grid-area: title;
}

.topic-summary img {
    grid-area: graphic;

    background: black;
    width: 100%;
}

.topic-summary p {
    grid-area: description;
}

.topic-summary a {
    grid-area: button;
}

@media (max-width: 705px) {

    .masthead {
        padding-top: 60px;
        display: block;
    }

    button.expand-menu {
        position: absolute;
        top: 4.5em;
        right: 0;
        display: inline-block;
        padding: .3em .5em;
        border: none;
        border-radius: 5px;
        background: #F5F5F5;
        text-transform: uppercase;
        font-family: 'Roboto Condensed';
        font-style: normal;
        font-weight: 700; 
        font-size: 1em;
        padding: .5rem 1rem;
    }

    .primary-menu {
        display: none;
        
    }

    .primary-menu.expand {
        display: initial;
    }

    .primary-menu.expand ul {
        display: block;
        width: 100%;
        margin: 0;
        padding: 0;
        margin-top: 1.5em;
    }

    .primary-menu.expand ul li {
        margin: 0;
        padding: 1em 0;
        border-top: 1px solid rgba(1,1,1,.1);
    }
    /* .ancilliary-menu {
        display: none;
    } */

    main {
        width: 80%;
    }

    main > header:before {
        left: initial;
    }



}

@media (max-width: 680px) {

    .explore-panel {
        flex-wrap: wrap;
    }

    body > footer {
        display: block;
    }

    body > footer > nav {
        margin-top: 1em;
        margin-bottom: 3em;
    }

    body > footer > nav ul li {
        margin-bottom: 1em;
    }

    body > footer > div {
        margin-bottom: 4em;
    }

    .default-page main {
        display: block;
        /* margin: 0 auto; */
    }

    .default-page main > aside .attention {
        margin-bottom: 5em;
    }

    .authored-posts article figure {
        width: 100%;
        flex: initial;
    }

    .team-index main .persons ul {
        grid-template-columns: 1fr 1fr;
    }

    .person-page main > header {
        display: flex;
    }

    .person-page main > header figure {
        width: auto;
        margin-bottom: 3em;
        position: relative;

        order: -1;
    }

    nav.pagination {
        width: 100%;
    }

    nav.pagination ol {
        /* width: 100%; */
        flex-wrap: wrap;
    }

    nav.pagination ol li {
        line-height: 250%;
    }
}

@media (max-width: 580px) {
    .explore-panel .explore-menu ul {
        grid-template-columns: 1fr 1fr;
        /* display: flex;
        flex-direction: column;
        flex-wrap: wrap; */
    }

    body > footer .footer-menu ul {
        display: block;
    }
}

@media (max-width:400px) {

    .explore-panel .explore-menu ul {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }

    .team-index main .persons ul {
        display: initial;
    }
}

@media (max-width:340px) {
    .ancilliary-menu button:before, .ancilliary-menu a:before {
        display: none;
    }

}






/* temp */

.explore-panel {
    display: none;
    
}

.explore-panel.expand {
    display: inherit;
    transition: display 2s ease-in-out;
}


article, footer, article.topic-summary {
    /* display: none; */
}
