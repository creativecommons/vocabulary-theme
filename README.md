# vocabulary-theme

WordPress Theme implementation of the Vocabulary design system
([creativecommons/vocabulary](https://github.com/creativecommons/vocabulary)).


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


## License

WordPress theme code that directly interacts with or is derived from WordPress is licensed under the [GNU General Public License v2.0][gpl] or later. In this repository that code is found within the `/src` directory, but within a Release it is located at the root.

Code outside the `/src` directory is licensed under the Expat/[MIT][mit] License. See [`LICENSE`](LICENSE).

Vocabulary contains mixed licensing information. See [src/vocabulary/README.md](scripts/README.md):


[gpl]: https://gnu.org/licenses/gpl-2.0.html "The GPL License"
[mit]: http://www.opensource.org/licenses/MIT "The MIT License | Open Source Initiative"
