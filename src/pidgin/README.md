> "A pidgin /ˈpɪdʒɪn/, or pidgin language, is a grammatically simplified form of contact language that develops between two or more groups of people that do not have a language in common: typically, its vocabulary and grammar are limited and often drawn from several languages." ([source][wikipedia-pidgin]).


This directory serves to bridge vocabulary v1.0 to v2.0 whereby both versions can exist simultaneously via a "feature-flag" logic, until such time as v1.0 can be completely removed and replaced with v2.0.


Files loaded from this directory are for v2.0 templates, features, etc. only. The only exception being the ACF fields which occupy the same directory as v1.0.

The following "guidelines" are followed:

1. Any new page templates will reside within the `/src/pidgin` directory and will be picked up automatically by the WP template cascade
2. Older templates will remain within the top level of the theme, but will utilize "feature-flag" based logic calls to load their default v1.0 functions, OR instead to pull pidgin specific `content-partials` or `header/footer/sidebar` files.
3. CSS will pull from `pidgin.css` and will load via relevant `header-pidgin.php` inclusion.
4. Other assets, such as SVG or JS will also load from relevant subdirectories within `/src/pidgin`
5. Should there be a need for custom additions/edits within `functions.php` a separate functions-pidgin.php file would be created within `'src/pidgin', and relevant logic added to `functions.php` to include that functionality via "feature-flag".
6. `pidgin.css` will build from original Vocabulary utilizing specificity and layer overrides where reasonable until such time as it can operate absent v1.0 features.

[wikipedia-pidgin]: https://en.wikipedia.org/wiki/Pidgin
