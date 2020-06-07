<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Default field of a String (migration)
        Schema::defaultStringLength(191);

        // convert timestamp from date
        Carbon::macro('fromTimestamp', static function (int $time) {
            return (new Carbon)->setTimestamp($time);
        });

        // Default timezone for Carbon
        setlocale(LC_ALL, config('app.locale_sys'));
        Carbon::setLocale(config('app.locale_carbon'));


    }
}
