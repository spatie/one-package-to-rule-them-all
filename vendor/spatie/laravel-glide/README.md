
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Easily convert images with Glide
[![Latest Version](https://img.shields.io/github/release/spatie/laravel-glide.svg?style=flat-square)](https://github.com/spatie/laravel-glide/releases)
![Test Status](https://img.shields.io/github/workflow/status/spatie/laravel-glide/run-tests?label=tests)
![Code Style Status](https://img.shields.io/github/workflow/status/spatie/laravel-glide/Check%20&%20fix%20styling?label=code%20style)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-glide.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-glide)

This package provides an easy to use class to manipulate images. Under the hood it leverages [Glide](http://glide.thephpleague.com/) to perform 
the manipulations.

Here's an example of how the package can be used:

```php
GlideImage::create($pathToImage)
	->modify(['w'=> 50, 'filt'=>'greyscale'])
	->save($pathToWhereToSaveTheManipulatedImage);
```

## Support us

Learn how to create a package like this one, by watching our premium video course:

[![Laravel Package training](https://spatie.be/github/package-training.jpg)](https://laravelpackage.training)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package through Composer.

```bash
composer require spatie/laravel-glide
```

In Laravel 5.5 the service provider and facade will automatically get registered. In older versions of the framework just add the service provider and facade in `config/app.php` file:

```php
'providers' => [
    ...
    Spatie\Glide\GlideServiceProvider::class,
    ...
];

...

'aliases' => [
	...
    'GlideImage' => Spatie\Glide\GlideImageFacade::class,
    ...
]
```


You can publish the config file of the package using artisan.

```bash
php artisan vendor:publish --provider="Spatie\Glide\GlideServiceProvider"
```

The config file looks like this:
```php

<?php

return [

    /*
     * The driver that will be used to create images. Can be set to gd or imagick.
     */
    'driver' => 'gd',
];

```
## Usage 

Here's a quick example that shows how an image can be modified:

```php
GlideImage::create($pathToImage)
	->modify(['w'=> 50, 'filt'=>'greyscale'])
	->save($pathToWhereToSaveTheManipulatedImage);
```

Take a look at [Glide's image API](http://glide.thephpleague.com/1.0/api/quick-reference/) to see which parameters you can pass to the `modify`-method.

## Testing

You can run the tests with:

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Previous versions

Previous versions of this package had PHP 5.4 support and the ability to generate 
images on the fly from an url.

The previous versions are unsupported, but they should still work in your older projects.

- [Version 2 branch with Laravel 5 support](https://github.com/spatie/laravel-glide/tree/v2)
- [Version 1 branch with Laravel 4 support](https://github.com/spatie/laravel-glide/tree/laravel-4)

### Security

If you've found a bug regarding security please mail [security@spatie.be](mailto:security@spatie.be) instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https:/murze.be)
- [All Contributors](https://github.com/freekmurze/laravel-glide/contributors)

## License

The MIT License (MIT). Please see [LICENSE](https://github.com/freekmurze/laravel-glide/blob/master/LICENSE) for more information.
