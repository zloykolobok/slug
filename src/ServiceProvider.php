<?php

namespace zloykolobok\slug;

use Illuminate\Support\Facades\App;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/slug.php' => config_path('slug.php')]);
        $this->mergeConfigFrom(__DIR__ . '/../config/slug.php', 'slug');
    }

    public function register()
    {
        App::bind('slug', function()
        {
            return new \zloykolobok\slug\Http\SlugController();
        });
    }
}