# vocabulary-theme

WordPress Theme implementation of the Vocabulary design system
([creativecommons/vocabulary](https://github.com/creativecommons/vocabulary))


## Development

Plugin/Theme dev work should be done within the `/src` directory.


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
5. Install WordPress initially through the GUI.
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


