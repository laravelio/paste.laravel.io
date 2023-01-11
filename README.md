<p align="center">
    <img src="https://github.com/laravelio/art/blob/main/laravelio-logo-lg.svg" width="400" />
</p>

<p align="center">
    <a href="https://github.com/laravelio/paste.laravel.io/actions?query=workflow%3ATests">
        <img src="https://github.com/laravelio/paste.laravel.io/workflows/Tests/badge.svg" alt="Tests" />
    </a>
    <a href="https://github.com/laravelio/paste.laravel.io/actions/workflows/coding-standards.yml">
        <img src="https://github.com/laravelio/paste.laravel.io/actions/workflows/coding-standards.yml/badge.svg" alt="Coding Standards" />
    </a>
</p>

# Laravel.io Pastebin

This is the repository for [the Laravel.io pastebin](https://paste.laravel.io). The code is entirely open source and licensed under [the MIT license](license.md). We welcome your contributions but we encourage you to read the [the contributing guide](CONTRIBUTING.md) before creating an issue or sending in a pull request. Read the installation guide below to get started with setting up the app on your machine.

## Requirements

The following tools are required in order to start the installation.

- PHP 8.2
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

## Commands

Command | Description
--- | ---
**`php artisan test`** | Run the tests
`php artisan migrate:fresh --seed` | Reset the database
`npm run dev` | Watch for changes in CSS and JS files

## Maintainers

The Laravel.io pastebin is currently maintained by [Dries Vints](https://github.com/driesvints) and [Joe Dixon](https://github.com/joedixon). If you have any questions please don't hesitate to create an issue on this repo.

## Contributing

Please see [the contributing guide](contributing.md) for details.

## Code of Conduct

Please read our [Code of Conduct](CODE_OF_CONDUCT.md) before contributing or engaging in discussions.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## License

The MIT License. Please see [the license file](license.md) for more information.
