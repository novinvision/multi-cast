<?php

namespace NovinVision\MultiCast;

use Illuminate\Support\ServiceProvider;

class MultiCastServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->app->bind('cast.map', function () {
            return [
                'date_cast' => \NovinVision\MultiCast\Casts\DateCast::class,
            ];
        });

        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ], 'multi-cast');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'multi-cast');

        $this->mergeConfigFrom(__DIR__ . '/../config/multi-cast.php', 'multi-cast');
    }
}
