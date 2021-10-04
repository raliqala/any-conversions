# Perform unit conversions in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/raliqala/any-conversions.svg?style=flat-square)](https://packagist.org/packages/raliqala/any-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/raliqala/any-conversions/run-tests?label=tests)](https://github.com/raliqala/any-conversions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/raliqala/any-conversions.svg?style=flat-square)](https://packagist.org/packages/raliqala/any-conversions)

This package can perform various unit conversions. Right now, only kg to lbs is supported.

Here's how to use it:

```php
use raliqala\AnyConversions\Weight;

Weight::fromKilograms(100)->toLbs(); // returns 220.4623;
```

## Installation

You can install the package via composer:

```bash
composer require raliqala/any-conversions
```

## Usage

#### From kg to lbs

```php
raliqala\AnyConversions\Weight::fromKilograms(100)->toLbs(); // returns 220.4623;
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email thabohappy55@gmail.com instead of using the issue tracker.

## Credits

- [Topollo](https://github.com/raliqala)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
