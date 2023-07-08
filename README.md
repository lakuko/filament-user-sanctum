# Filament plugin to manage user and token from sanctum

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lakuko/filament-user-sanctum.svg?style=flat-square)](https://packagist.org/packages/lakuko/filament-user-sanctum)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lakuko/filament-user-sanctum/run-tests?label=tests)](https://github.com/lakuko/filament-user-sanctum/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lakuko/filament-user-sanctum/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lakuko/filament-user-sanctum/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lakuko/filament-user-sanctum.svg?style=flat-square)](https://packagist.org/packages/lakuko/filament-user-sanctum)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require lakuko/filament-user-sanctum
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-user-sanctum-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-user-sanctum-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-user-sanctum-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-user-sanctum = new Lakuko\FilamentUserSanctum();
echo $filament-user-sanctum->echoPhrase('Hello, Lakuko!');
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
