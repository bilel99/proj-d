<?php

namespace App\Providers;

use App\Models\MedicalHouses;
use App\Models\Pages;
use App\Models\Prices;
use App\Models\Services;
use App\Models\SocialNetwotk;
use App\Observers\MedicalHousesObserver;
use App\Observers\PricesObserver;
use App\Observers\ServicesObserver;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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

        /**
         * New Observers to Laravel
         */
        Services::observe(ServicesObserver::class);
        Prices::observe(PricesObserver::class);
        MedicalHouses::observe(MedicalHousesObserver::class);

        /**
         * Dependency injection
         *
         */
        $this->viewComposerErrorDataIsEmpty();
        $this->viewComposerSocialNetwork();
    }

    /**
     * View Composer
     * Get Error data is empty
     * inject to layout front
     */
    protected function viewComposerErrorDataIsEmpty(): void
    {
        View::composer(['front.layouts.app'], function ($view) {
            $pagesIsEmpty = Pages::count() === 0;
            $view->with('pages_is_empty', $pagesIsEmpty);
        });
    }

    protected function viewComposerSocialNetwork(): void
    {
        view()->composer(['front.layouts.partials._footers'], function ($view) {
            $socialNetwork = SocialNetwotk::all();
            $view->with('social_network', $socialNetwork);
        });
    }
}
