<?php

namespace App\Providers;

use App\Rules\RutValidationRule;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ( app()->environment(['production'])) {
            URL::forceRootUrl(config('app.url'));
            URL::forceScheme('https');
            Validator::extend('rut_validation_rule', [RutValidationRule::class, 'passes']);
        }
    }
}
