# Perform unit conversions in PHP

[![Latest Stable Version](http://poser.pugx.org/raliqala/any-conversions/v)](https://packagist.org/packages/raliqala/any-conversions) [![Total Downloads](http://poser.pugx.org/raliqala/any-conversions/downloads)](https://packagist.org/packages/raliqala/any-conversions) [![Latest Unstable Version](http://poser.pugx.org/raliqala/any-conversions/v/unstable)](https://packagist.org/packages/raliqala/any-conversions) [![License](http://poser.pugx.org/raliqala/any-conversions/license)](https://packagist.org/packages/raliqala/any-conversions) [![PHP Version Require](http://poser.pugx.org/raliqala/any-conversions/require/php)](https://packagist.org/packages/raliqala/any-conversions)

This package can perform various unit conversions. Right now, It supports kg to other weights etc.. and celsius to other temperatures, this package is still new so i'm still compiling docs.

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
