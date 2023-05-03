# Get the currently playing track from a last.fm user

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/last-fm-now-playing.svg?style=flat-square)](https://packagist.org/packages/spatie/last-fm-now-playing)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/spatie/last-fm-now-playing/master.svg?style=flat-square)](https://travis-ci.org/spatie/last-fm-now-playing)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/last-fm-now-playing.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/last-fm-now-playing)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/last-fm-now-playing.svg?style=flat-square)](https://packagist.org/packages/spatie/last-fm-now-playing)

This package contains a class to determine the current track a specified user is playing according to last.fm

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/last-fm-now-playing.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/last-fm-now-playing)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

``` bash
composer require spatie/last-fm-now-playing
```

## Usage

The constructor of `Spatie\NowPlaying\NowPlaying` needs an api key you can get [from the last.fm site](http://www.last.fm/api/account/create).

``` php
$nowPlaying = new Spatie\NowPlaying\NowPlaying($apiKey);

$nowPlaying->getTrackInfo($lastFmUserName);
```

If the specified user is currently playing a track you'll get backy and array with keys `artist`, `album`, `trackName`, `artwork` and `trackUrl`. The `getTrackInfo`-function will return `false` when a user is not currently playing a track.

If something goes wrong an instance of `Spatie\NowPlaying\Exceptions\BadResponse` will be thrown.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Postcardware

You're free to use this package, but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Kruikstraat 22, 2018 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
