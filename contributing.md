# Contributing Guide

We welcome contributions to the Laravel.io project. Please read the following guide before posting an issue or sending in pull requests.

## Issues

- **Feature requests** need to describe as thoroughly as possible and perhaps contain some info on how you would implement it
- **Bug reports** need to be described in detail what the problem is, how it was triggered and perhaps contain a possible solution
- **Questions** are free to be asked about the internals of the codebase and about the project

## Pull Requests

- **Feature requests** first need to be discussed and accepted [through an issue](https://github.com/laravelio/pastebin/issues/new) before sending in a pull request
- **Bug fixes** should contain [regression tests](https://laracasts.com/lessons/regression-testing)
- Pull requests will be merged after being reviewed by [the maintainers](readme.md#maintainers)
- Please be respectful to other contributors and hold to [The Code Manifesto](http://codemanifesto.com/)

## Testing

All tests can be run with the following commands. Make sure to run this inside the Homestead box.

    $ vendor/bin/phpunit
