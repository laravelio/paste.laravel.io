<p align="center">
    <img src="https://github.com/laravelio/art/blob/main/laravelio-logo-lg.svg" width="400" />
</p>

<p align="center">
    <a href="https://github.com/laravelio/paste.laravel.io/actions?query=workflow%3ATests">
        <img src="https://github.com/laravelio/paste.laravel.io/workflows/Tests/badge.svg" alt="Tests" />
    </a>
    <a href="https://github.com/laravelio/paste.laravel.io/actions?query=workflow%3A%22Code+Style%22">
        <img src="https://github.com/laravelio/paste.laravel.io/workflows/Code%20Style/badge.svg" alt="Code Style" />
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://shield.with.social/cc/github/laravelio/paste.laravel.io/main.svg" alt="Laravel Version" />
    </a>
</p>

# Laravel.io Pastebin

This is the repository for [the Laravel.io pastebin](https://paste.laravel.io). The code is entirely open source and licensed under [the MIT license](license.md). Feel free to contribute to the pastebin by sending in a pull request.

## Requirements

Please make sure you install the following tools before starting with the install procedure.

- [VirtualBox](https://www.virtualbox.org/)
- [Vagrant](https://www.vagrantup.com/)
- [Composer](https://getcomposer.org/download/)
- PHP >=7.1

## Installation

> Note that you're free to adjust the `~/Sites/pastebin` location to any directory you want on your machine.

1. Clone this repository: `git clone git@github.com:laravelio/paste.laravel.io.git ~/Sites/pastebin`
2. Run `composer install && homestead make --no-after`
3. Run `vagrant up`
4. SSH into your Vagrant box, go to `/home/vagrant/code` and run `composer setup`
5. Add `192.168.10.30 pastebin.test` to your computer's `/etc/hosts` file

You can now visit the app in your browser by visiting [http://pastebin.test](http://pastebin.test).

## Maintainers

The Laravel.io pastebin is currently maintained by [Dries Vints](https://github.com/driesvints). If you have any questions please don't hesitate to create an issue on this repo.

## Contributing

Please see [the contributing guide](contributing.md) for details.

## Security Vulnerabilities

If you discover a security vulnerability with this project, please send an email immediately to Dries Vints at [dries@vints.io](mailto:dries@vints.io). **Do not create an issue for the vulnerability.**

## License

The MIT License. Please see [the license file](license.md) for more information.
