# vocabulary-theme

WordPress Theme implementation of the Vocabulary design system
([creativecommons/vocabulary](https://github.com/creativecommons/vocabulary)).


## Code of conduct

[`CODE_OF_CONDUCT.md`][org-coc]:
> The Creative Commons team is committed to fostering a welcoming community.
> This project and all other Creative Commons open source projects are governed
> by our [Code of Conduct][code_of_conduct]. Please report unacceptable
> behavior to [conduct@creativecommons.org](mailto:conduct@creativecommons.org)
> per our [reporting guidelines][reporting_guide].

[org-coc]: https://github.com/creativecommons/.github/blob/main/CODE_OF_CONDUCT.md
[code_of_conduct]: https://opensource.creativecommons.org/community/code-of-conduct/
[reporting_guide]: https://opensource.creativecommons.org/community/code-of-conduct/enforcement/


## Contributing

See [`CONTRIBUTING.md`][org-contrib].

[org-contrib]: https://github.com/creativecommons/.github/blob/main/CONTRIBUTING.md


## Development

The theme development work should be done within the `src/` directory.


### Setup

1. Create the `.env` file:
    ```shell
    cp .env.example .env
    ```
2. Update `.env` to set desired values for variables (`WP_VERSION`,
   `WP_MOD_TYPE`, `WP_MOD_NAME`, etc.)
3. Build/start Docker:
    ```shell
    docker compose up
    ```
4. Wait for build and initialization to complete
5. Install WordPress initially through the GUI
   ([localhost:8080](http://localhost:8080/))
   - TODO: automate this step


### Shortcodes

The theme comes with a custom  `[list]` shortcode for displaying a list of queried objects that builds from a simplified WP Query obj

The shortcode operates as follows: 

`````

[list cat="category" tag="tag,tag,tag" type="post" limit="10" sort="ASC" sortby="date" template="blog_posts"]

`````

The most minimal usecase: 

`````

[list]

`````
The defaults are as follows: 

* category: 
* tag:
* type: post
* limit: 5
* sort: ASC
* sortby: date
* template: default

The template can be set to a custom partial, loaded from the `shortcode-templates` folder, if no template is set, it will instead display as the default template (a bulleted list of links)

The arguments accept the counterpart values from the subset of [args in the WPQuery Class](https://developer.wordpress.org/reference/classes/wp_query/). This means that the `category` and `tag` arguments can be a single or comma separate list of values. `sort` maps to `order` and `sortby` maps to `orderby` for some beneficial UX for endusers to be more clear in purpose.

### Docker containers

The [`docker-compose.yml`](docker-comose.yml) file defines the following
containers:

1. vocabtheme-wordpress-web ([localhost:8080](http://localhost:8080/))
2. vocabtheme-wordpress-db
3. vocabtheme-composer
4. vocabtheme-phpmyadmin ([localhost:8003](http://localhost:8003/))
5. vocabtheme-wpcli


### Releases

See [scripts/README.md](scripts/README.md).


## Cache warning

:warning: **WARNING: This theme does not currently contain any _dynamic_
content (any user-specific content). The addition of _dynamic_ content must be
coordinated with the content delivery network (CDN) page rules that govern what
is cached.**

Currently, the theme's output of pages is completely deterministic. Any given
page rendered now, will be identical to the same page rendered 30 minutes later
(assuming the theme is the same version). This allows for very simple CDN page
rules (ex. [Caching Static HTML with WordPressWooCommerce · Cloudflare Support
docs][cloudflare-caching-wp]).

[cloudflare-caching-wp]: https://developers.cloudflare.com/support/third-party-software/content-management-system-cms/caching-static-html-with-wordpresswoocommerce/


## Copyright and trademarks


### CC Badge, Icons, Images, and Logos

- The badges, icons, images, and logos contained within this repository are
  for use under the Creative Commons Trademark Policy (see [Policies - Creative
  Commons][ccpolicies]).
- **The icons, images, and logos are not licensed under a Creative Commons
  license** (also see [Could I use a CC license to share my logo or
  trademark? - Frequently Asked Questions - Creative Commons][tmfaq]).

[ccpolicies]: https://creativecommons.org/policies
[tmfaq]: https://creativecommons.org/faq/#could-i-use-a-cc-license-to-share-my-logo-or-trademark


### Code

Vocabulary Theme code is licensed under the [GNU General Public License
v2.0][gpl] or later.


[gpl]: https://gnu.org/licenses/gpl-2.0.html "The GPL License"


### Vocabulary

[![CC0 1.0 Universal (CC0 1.0) Public Domain Dedication
button][cc-zero-png]][cc-zero]

[`COPYING`](COPYING): All the code within Vocabulary is dedicated to
the public domain under the [CC0 1.0 Universal (CC0 1.0) Public Domain
Dedication][cc-zero].

[cc-zero-png]: https://licensebuttons.net/l/zero/1.0/88x31.png "CC0 1.0 Universal (CC0 1.0) Public Domain Dedication button"
[cc-zero]: https://creativecommons.org/publicdomain/zero/1.0/ "Creative Commons — CC0 1.0 Universal"


### Normalize.css

normalize.css is licensed under the Expat/[MIT][mit] License.

[mit]: https://opensource.org/license/mit/


### Fonts


#### CC Accidenz Commons

[CC Accidenz Commons][cc-accidenz-commons] by Archetypo is licensed under the [Creative
Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)
License][ccbysa40].

[cc-accidenz-commons]: https://creativecommons.org/2019/10/28/accidenz-commons-open-licensed-font/
[ccbysa40]: https://creativecommons.org/licenses/by-sa/4.0/


#### JetBrains Mono

[JetBrains Mono][jetbrainsmono] is licensed under the [OFL-1.1 License][ofl].

[jetbrainsmono]: https://www.jetbrains.com/lp/mono/
[ofl]: https://github.com/JetBrains/JetBrainsMono/blob/master/OFL.txt


#### Roboto Condensed

[Roboto Condensed][robotocondensed] by Christian Robertson is licensed under
the [Apache License, Version 2.0][apache20].

[robotocondensed]: https://fonts.google.com/specimen/Roboto+Condensed
[apache20]: http://www.apache.org/licenses/LICENSE-2.0


#### Source Sans Pro

[Source Sans Pro][sourcesanspro] by Paul D. Hunt is licensed under the [Open
Font License][oflsil].

[sourcesanspro]: https://fonts.adobe.com/fonts/source-sans
[oflsil]: https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL


#### Vocabulary Icons

Vocabulary Icons use icons from [Font Awesome][fontawesome] which are licensed
under the [Creative Commons Attribution 4.0 International (CC BY 4.0)
License][ccbysa40].

[fontawesome]: https://fontawesome.com/
[ccby40]: https://creativecommons.org/licenses/by/4.0/
