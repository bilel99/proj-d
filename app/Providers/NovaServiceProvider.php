<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Skydiver\NovaUpdateCard\LaravelUpdateCard;
use Skydiver\NovaUpdateCard\NovaUpdateCard;
use Ddg\Contactcard\Contactcard;
use Ddg\Doctorsinfoscard\Doctorsinfoscard;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        // All user is authorized to access nova back office
        $allUserEmail = User::get()->pluck('email')->toArray();

        Gate::define('viewNova', function ($user) use ($allUserEmail) {
            return in_array($user->email, $allUserEmail, true);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            //new Help, <== page initialization Laravel Nova
            (new LaravelUpdateCard)->width('1/2'),
            (new NovaUpdateCard)->width('1/2'),
            (new Contactcard)->width('1/2'),
            (new Doctorsinfoscard)->width('1/2'),
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new \ClassicO\NovaMediaLibrary\NovaMediaLibrary()
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
