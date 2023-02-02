<?php

namespace Aziyan99\ThemeSbadmin;

use Illuminate\Support\ServiceProvider;

class SbadminServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/resources/views/' => base_path('resources/views')
        ], 'sbadmin-layouts');
    }
}
