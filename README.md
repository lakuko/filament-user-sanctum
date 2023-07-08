# Filament plugin to manage user and token from sanctum

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lakuko/filament-sanctum.svg?style=flat-square)](https://packagist.org/packages/lakuko/filament-sanctum)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lakuko/filament-sanctum/run-tests?label=tests)](https://github.com/lakuko/filament-sanctum/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lakuko/filament-sanctum/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lakuko/filament-sanctum/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lakuko/filament-sanctum.svg?style=flat-square)](https://packagist.org/packages/lakuko/filament-sanctum)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require lakuko/filament-sanctum
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-sanctum-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-sanctum-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-sanctum-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-sanctum = new Lakuko\FilamentSanctum();
echo $filament-sanctum->echoPhrase('Hello, Lakuko!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lakuko](https://github.com/Lakuko)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
