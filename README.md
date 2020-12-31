<p align="center">
    <img src="https://github.com/laravelio/art/blob/main/laravelio-logo-lg.svg" width="400" />
</p>

<p align="center">
    <a href="https://github.com/laravelio/paste.laravel.io/actions?query=workflow%3ATests">
        <img src="https://github.com/laravelio/paste.laravel.io/workflows/Tests/badge.svg" alt="Tests" />
    </a>
    <a href="https://github.styleci.io/repos/80994622">
        <img src="https://github.styleci.io/repos/80994622/shield?style=flat" alt="Code Style">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://shield.with.social/cc/github/laravelio/paste.laravel.io/main.svg" alt="Laravel Version" />
    </a>
</p>

# Laravel.io Pastebin

This is the repository for [the Laravel.io pastebin](https://paste.laravel.io). The code is entirely open source and licensed under [the MIT license](license.md). Feel free to contribute to the pastebin by sending in a pull request.

## Requirements

The following tools are required in order to start the installation.

- PHP >=7.4
- [Composer](https://getcomposer.org/download/)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)

## Installation

1. Clone this repository locally with `git clone git@github.com:laravelio/paste.laravel.io.git paste.laravel.io`
2. Copy the `.env.example` file to `.env`
3. Install the PHP dependencies with `composer install`
4. Generate a new app key with `php artisan key:generate`
5. Install and compile the front-end dependencies with `npm install && npm run dev`
6. Serve the website locally by running `php artisan serve`

You can now visit the app in your browser by visiting [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Maintainers

The Laravel.io pastebin is currently maintained by [Dries Vints](https://github.com/driesvints). If you have any questions please don't hesitate to create an issue on this repo.

## Contributing

Please see [the contributing guide](contributing.md) for details.

## Security Vulnerabilities

If you discover a security vulnerability with this project, please send an email immediately to Dries Vints at [dries@vints.io](mailto:dries@vints.io). **Do not create an issue for the vulnerability.**

## License

The MIT License. Please see [the license file](license.md) for more information.
