<?php

namespace Spatie\MailPreview;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Mail\MailManager;
use Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\MailPreview\Http\Controllers\ShowMailController;
use Spatie\MailPreview\SentMails\SentMails;

class MailPreviewServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-mail-preview')
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageRegistered()
    {
        $this->registerPreviewMailTransport();
    }

    public function packageBooted()
    {
        $this
            ->registerSentMails()
            ->registerRouteMacro();
    }

    protected function registerPreviewMailTransport(): self
    {
        $this->app->afterResolving('mail.manager', function (MailManager $mailManager) {
            $previewTransport = new PreviewMailTransport(
                app(Filesystem::class),
                config('mail-preview.maximum_lifetime_in_seconds')
            );

            $mailManager->extend('preview', fn () => $previewTransport);
        });

        return $this;
    }

    protected function registerSentMails(): self
    {
        $this->app->singleton(SentMails::class, function () {
            return new SentMails();
        });

        $this->app->alias(SentMails::class, 'sentMails');

        return $this;
    }

    protected function registerRouteMacro(): self
    {
        Route::macro('mailPreview', function (string $prefix = 'spatie-mail-preview') {
            if (config('mail-preview.enabled')) {
                Route::get($prefix, '\\' . ShowMailController::class)->name('mail.preview');
            }
        });

        return $this;
    }
}
