<?php

namespace Aziyan99\ThemeSbadmin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Aziyan99\ThemeSbadmin\View\Components\MetaTagsComponent;

class SbadminServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views')
        ], 'sbadmin-layouts');

        $this->publishes([
            __DIR__.'/public' => public_path()
        ], 'sbadmin-assets');


        $this->registerViews();
        $this->registerViewComponents();

    }

    private function registerViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views/components', 'components');
    }

    private function registerViewComponents(): void
    {
        Blade::component('sbadmin-meta-tags', MetaTagsComponent::class);
    }
}
