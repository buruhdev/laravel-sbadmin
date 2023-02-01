<?php

namespace Aziyan99\LaravelSbadmin;

use Illuminate\Support\ServiceProvider;

class SbadminServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/src/resources/views', 'laravel-sbadmin');
    }
}
