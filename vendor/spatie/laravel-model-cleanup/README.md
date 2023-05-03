# Clean up unneeded records

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-model-cleanup.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-model-cleanup)
![Tests](https://github.com/spatie/laravel-model-cleanup/workflows/run-tests/badge.svg)
![Psalm](https://github.com/spatie/laravel-model-cleanup/workflows/Psalm/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-model-cleanup.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-model-cleanup)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This package will clean up old records. 

The models you wish to clean up should have a method `cleanUp` which returns the configuration how the model should be cleaned up. Here's an example where all records older than 5 days will be cleaned up.

```php
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelCleanup\CleanupConfig;
use Spatie\ModelCleanup\GetsCleanedUp;

class YourModel extends Model implements GetsCleanedUp
{
    ...
    
     public function cleanUp(CleanupConfig $config): void
     {
         $config->olderThanDays(5);
     }
}
```

After registering the model in the config file, running the `clean:models` artisan command will delete all records that have been created more than 5 days ago.

The package contains various other methods for specifying which records should be deleted.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-model-cleanup.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-model-cleanup)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:
``` bash
composer require spatie/laravel-model-cleanup
```

Next, you must publish the config file:

```bash
php artisan vendor:publish --provider="Spatie\ModelCleanup\ModelCleanupServiceProvider"
```

This is the content of the published config file `model-cleanup.php`.

```php
return [

    /*
     * All models in this array that implement `Spatie\ModelCleanup\GetsCleanedUp`
     * will be cleaned.
     */
    'models' => [
        // App\Models\YourModel::class,
    ],
];

```

Optionally, you can schedule the `Spatie\ModelCleanup\Commands\CleanUpModelsCommand` to run at a frequency of which you want to clean up models. Here's an example where all models will be cleaned up every day at midnight.

```php
// in app/Console/Kernel.php

protected function schedule(Schedule $schedule)
{
    $schedule->command(\Spatie\ModelCleanup\Commands\CleanUpModelsCommand::class)->daily();
}
```

## Usage

All models that you want to clean up must implement the `GetsCleanedUp`-interface. In the required
`cleanUp`-method you can specify which records are considered old and should be deleted.

 Here's an example where all records older than 5 days will be cleaned up.

```php
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelCleanup\CleanupConfig;
use Spatie\ModelCleanup\GetsCleanedUp;

class YourModel extends Model implements GetsCleanedUp
{
    ...
    
     public function cleanUp(CleanupConfig $config): void
     {
        $config->olderThanDays(5);
     }
}
```

Next, you should register this model in the `models` key of the `model-cleanup` config file.

```php
// in config/model-cleanup.php

return [
    'models' => [
        App\Models\YourModel::class,
    ],
    
    // ...
]
```

When running the console command `clean:models` all models older than 5 days will be deleted.

### Soft deleted models

This package also supports cleaning up models that have soft deleting enabled.
Models that use the `Illuminate\Database\Eloquent\SoftDeletes` trait and are considered old, will be permanently removed from your database instead of being marked as deleted.

### Available methods on `CleanupConfig`

### `olderThanDays`

Using this method you can mark records that have a `created_at` value older than a given number of days as old.

Here's an example where all models older than 5 days are considered old.

```php
 public function cleanUp(CleanupConfig $config): void
 {
    $config->olderThanDays(5);
 }
```

### `olderThan`

The `olderThan` method accepts an instance of `Carbon`. All models with a `created_at` value before that instance, will be considered old.

Here's an example where all models older than a year are considered old.

```php
 public function cleanUp(CleanupConfig $config): void
 {
    $config->olderThan(now()->subYear());
 }
```

### `useDateAttribute`

When using `olderThanDays` and `olderThan` methods, the deletion query that is built up behind the scenes will use the `created_at` column. You can specify an alternative column, using the `useDateAttribute` method.

```php
 public function cleanUp(CleanupConfig $config): void
 {
    $config
        ->olderThanDays(5)
        ->useDateAttribute('custom_date_column');
 }
```

### `scope`

Using the `scope` method you can make the query that will delete old records more specific. 

Assume that your model has a `status` attribute. Only records with a status `inactive` may be cleaned up. Here's an example where all records with an `inactive` status that are older than 5 days will be cleaned up.

```php
 public function cleanUp(CleanupConfig $config): void
 {
    $config
       ->olderThanDays(5)
       ->scope(fn (Illuminate\Database\Eloquent\Builder $query) => $query->where('status', 'inactive'));
}
```

### `chunk`

By default, models get cleaned up by performing a single `delete` query. When you want to clean up a very large table, this single query could lock your table for a long time. It even might not be possible to get the lock in the first place.

To solve this, the package can delete records in chunks using the `chunk` method.

In this example, all records older than 5 days will be deleted in chucks of a 1000 records.

```php
 public function cleanUp(CleanupConfig $config): void
 {
    $config
       ->olderThanDays(5)
       ->chunk(1000);
}
```

The package will stop deleting records when there are no more left that should be deleted. 

If you need more fine-grained control over when to stop deleting, you can pass a closure as a second argument to `chunk`. Returning `false` in the closure will stop the deletion process.

In the example below, the deletion process will continue until all records older than 5 days are deleted or the record count of the model goes below 5000.

```php
 public function cleanUp(CleanupConfig $config): void
 {
    $config
       ->olderThanDays(5)
       ->chunk(1000, fn() => YourModel::count() > 5000);
}
```

## Events

After the model has been cleaned `Spatie\ModelCleanup\Events\ModelCleanedUp` will be fired even if there were no records deleted.

It has two public properties: `model`, which contains an instance of the model which was cleaned up. and `numberOfDeletedRecords`.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

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
