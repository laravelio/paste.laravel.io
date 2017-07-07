# Laravel.io Pastebin

[![Laravel Version](https://shield.with.social/cc/github/laravelio/pastebin/master.svg?style=flat-square)](https://packagist.org/packages/laravel/framework)
[![Build Status](https://travis-ci.org/laravelio/pastebin.svg?branch=master)](https://travis-ci.org/laravelio/pastebin)
[![StyleCI](https://styleci.io/repos/80994622/shield?branch=master)](https://styleci.io/repos/80994622)
[![Code Climate](https://lima.codeclimate.com/github/laravelio/pastebin/badges/gpa.svg)](https://lima.codeclimate.com/github/laravelio/pastebin)
[![Test Coverage](https://lima.codeclimate.com/github/laravelio/pastebin/badges/coverage.svg)](https://lima.codeclimate.com/github/laravelio/pastebin/coverage)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](license.txt)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/6c1df3e8-3e43-40c4-be31-65dfd9a2030b/mini.png)](https://insight.sensiolabs.com/projects/6c1df3e8-3e43-40c4-be31-65dfd9a2030b)

This is the repository for [the Laravel.io pastebin](https://paste.laravel.io). The code is entirely open source and licensed under [the MIT license](license.txt). Feel free to contribute to the pastebin by sending in a pull request.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Maintainers](#maintainers)
- [Contributing](#contributing)
- [Security Vulnerabilities](#security-vulnerabilities)
- [License](#license)

## Requirements

Please make sure you install the following tools before starting with the install procedure.

- [VirtualBox](https://www.virtualbox.org/)
- [Vagrant](https://www.vagrantup.com/)

## Installation

> Note that you're free to adjust the `~/Sites/pastebin` location to any directory you want on your machine.

1. Clone this repository: `git clone git@github.com:laravelio/pastebin.git ~/Sites/pastebin`
2. Run `composer start` and optionally change some preferences to `Homestead.yaml`
3. Run `vagrant up`
4. SSH into your Vagrant box, go to `/home/vagrant/Code/pastebin` and run `composer setup`
5. Add `192.168.10.30 pastebin.app` to your computer's `/etc/hosts` file

You can now visit the app in your browser by visiting [http://pastebin.app/](http://pastebin.app).

## Maintainers

The Laravel.io pastebin is currently maintained by [Dries Vints](https://github.com/driesvints). If you have any questions please don't hesitate to create an issue on this repo or ask us through the #laravelio channel on [Slack](https://larachat.slack.com).

## Contributing

Please see [the contributing guide](contributing.md) for details.

## Security Vulnerabilities

If you discover a security vulnerability with this project, please send an email immediately to Dries Vints at [dries.vints@gmail.com](mailto:dries.vints@gmail.com). **Do not create an issue for the vulnerability.**

## License

The MIT License. Please see [the license file](license.txt) for more information.
