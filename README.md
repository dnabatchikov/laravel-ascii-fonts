# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dnabatchikov/laravel-ascii-fonts.svg?style=flat-square)](https://packagist.org/packages/dnabatchikov/laravel-ascii-fonts)
[![Build Status](https://img.shields.io/travis/dnabatchikov/laravel-ascii-fonts/master.svg?style=flat-square)](https://travis-ci.org/dnabatchikov/laravel-ascii-fonts)
[![Quality Score](https://img.shields.io/scrutinizer/g/dnabatchikov/laravel-ascii-fonts.svg?style=flat-square)](https://scrutinizer-ci.com/g/dnabatchikov/laravel-ascii-fonts)
[![Total Downloads](https://img.shields.io/packagist/dt/dnabatchikov/laravel-ascii-fonts.svg?style=flat-square)](https://packagist.org/packages/dnabatchikov/laravel-ascii-fonts)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require dnabatchikov/laravel-ascii-fonts
```

## Usage

``` php
$font = 'georgia';
$string = 'TEST STRING';
$ascii = (new LaravelAsciiFonts($font, $string))->display();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email denis.nabatchikov@gmail.com instead of using the issue tracker.

## Credits

- [Denis Nabatchikov](https://github.com/dnabatchikov)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
