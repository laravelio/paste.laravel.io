# Laravel.io Pastebin

<img src="https://travis-ci.org/laravelio/pastebin.svg?branch=master" alt="Build Status">
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](license.txt)

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

1. Clone this repository: `git clone git@github.com:laravelio/pastebin.git pastebin`
2. Add the `Homestead.yaml` file from below to the root of your project
3. Run `vagrant up`
4. SSH into your Vagrant box, go to `/home/vagrant/pastebin` and run the following commands:
    1. `composer install`
    2. `php artisan migrate`
5. Add `192.168.10.30 pastebin.loc` to your computer's `/etc/hosts` file

```yaml
---
ip: "192.168.10.30"
memory: 2048
cpus: 1
hostname: pastebin
name: pastebin
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: "~/Sites/pastebin"
      to: "/home/vagrant/pastebin"

sites:
    - map: pastebin.loc
      to: "/home/vagrant/pastebin/public"

databases:
    - homestead
```

You can now visit the app in your browser by visiting [http://pastebin.loc/](http://pastebin.loc).

## Maintainers

The Laravel.io pastebin is currently maintained by [Dries Vints](https://github.com/driesvints). If you have any questions please don't hesitate to create an issue on this repo or ask us through the #laravelio channel on [Slack](https://larachat.slack.com).

## Contributing

Please see [the contributing guide](contributing.md) for details.

## Security Vulnerabilities

If you discover a security vulnerability with this project, please send an email immediately to Dries Vints at [dries.vints@gmail.com](mailto:dries.vints@gmail.com). **Do not create an issue for the vulnerability.**

## License

The MIT License. Please see [the license file](license.txt) for more information.
