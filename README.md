# vocabulary-theme
WordPress Theme implementation of the Vocabulary design system


## Builds and runs five containers:

* local-wordpress
* local-wordpress-db
* local-phpmyadmin
* local-composer
* local-wpcli


## Setup
1. Create the .env file with: `cp .env.example .env`
2. Set desired options in `.env`, save. (WP_VERSION, WP_MOD_TYPE, WP_MOD_NAME, etc.)
3. Build/start Docker: `docker compose up`, wait...
4. Install WP initially through the GUI. (TODO: Script help here)
