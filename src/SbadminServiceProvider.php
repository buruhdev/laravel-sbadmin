<?php

namespace Buruhdev\Sbadmin;

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
            __DIR__ . '/../config/sbadmin.php' => config_path('sbadmin.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views')
        ], 'sbadmin-theme');

        $this->publishes([
            __DIR__ . '/../public' => public_path()
        ], 'sbadmin-theme');

        $this->publishes([
            __DIR__ . '/../app/View/Components' => base_path('/app/View/Components')
        ], 'sbadmin-theme');
    }
}
