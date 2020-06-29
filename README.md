# Auth0 Demo for PHP

This respository creates a docker environment for demonstrating [Auth0](https://auth0.com) integration with PHP.

Once deployed, follow the [Auth0 PHP Quickstart](https://auth0.com/docs/quickstart/webapp/php).

## Installation

    git clone https://github.com/bendechrai/demo-auth0-php.git
    cd demo-auth0-php/public_html
    composer install

If you don't have composer installed locally, you can do so by following this guide, or you can use the included composer executable in this repository by replacing the last line above with:

    php ../composer.phar install

## Starting docker

To start the docker containers for PHP and nginx, run:

    docker-compose up -d

When running, you can access the development environment at [http://localhost:8080/](http://localhost:8080/).

To stop the containers:

    docker-compose down
