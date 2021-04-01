# 💍 Why require one if you can require them all?

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/one-package-to-rule-them-all.svg?style=flat-square)](https://packagist.org/packages/spatie/one-package-to-rule-them-all)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/one-package-to-rule-them-all/run-tests?label=tests)](https://github.com/spatie/one-package-to-rule-them-all/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/spatie/one-package-to-rule-them-all/Check%20&%20fix%20styling?label=code%20style)](https://github.com/spatie/one-package-to-rule-them-all/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/one-package-to-rule-them-all.svg?style=flat-square)](https://packagist.org/packages/spatie/one-package-to-rule-them-all)

From the team that brought you [laravel-random-command](https://github.com/spatie/laravel-random-command) comes another gem!

Requiring all our package separately takes a lot of effort. This package solves that problem! By pulling in this one, you get all the Spatie magic in one go 

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-one-package-to-rule-them-all-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-one-package-to-rule-them-all-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/one-package-to-rule-them-all
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="spatie\OnePackageToRuleThemAll\OnePackageToRuleThemAllServiceProvider" --tag="one-package-to-rule-them-all-config"
```

This is the contents of the published config file:

```php
return [
    'quotes' => [
        'There is only one package man, only one who can bend it to his will. And he does not share power.',
        'We swears, to serve the master of the packages. We will swear on… on the Precious!',
        'I am the package man. And I come back to you now… at the turn of the tide.',
        'A day may come when the courage of packages fails… but it is not THIS day',
        'The board is set, the pieces are moving. We come to it at last, the great package of our time.',
        'But the fat Hobbit, he knows. spatie/phpunit-watcher always watching.',
        'You are the luckiest, the canniest, and the most reckless package I ever knew. Bless you, laddie.',
        'Even the smallest package can change the course of history.',
        'It is a strange fate that we should suffer so much fear and doubt over so small a thing… such a little package.'
    ]
];
```

## Usage

Anything goes!
```bash
php artisan package:inspire
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

- [Sauron](https://github.com/sauron)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
