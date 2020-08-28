<?php

namespace App\Providers;

use App\Models\Alerts;
use App\Models\Contacts;
use App\Models\Doctors;
use App\Models\Horaires;
use App\Models\Informations;
use App\Models\InfosMedicalHouse;
use App\Models\MedicalHouses;
use App\Models\Pages;
use App\Models\Prices;
use App\Models\Services;
use App\Models\Society;
use App\Models\User;
use App\Policies\Nova\AlertsPolicy;
use App\Policies\Nova\ContactsPolicy;
use App\Policies\Nova\DoctorsPolicy;
use App\Policies\Nova\HorairesPolicy;
use App\Policies\Nova\InformationsPolicy;
use App\Policies\Nova\InfosMedicalHousePolicy;
use App\Policies\Nova\MedicalHousesPolicy;
use App\Policies\Nova\PagesPolicy;
use App\Policies\Nova\PricesPolicy;
use App\Policies\Nova\ServicesPolicy;
use App\Policies\Nova\SocietyPolicy;
use App\Policies\Nova\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;

class AuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $nova_policies = [
        User::class => UserPolicy::class,
        Contacts::class => ContactsPolicy::class,
        Society::class => SocietyPolicy::class,
        Pages::class => PagesPolicy::class,
        Alerts::class => AlertsPolicy::class,
        Doctors::class => DoctorsPolicy::class,
        Horaires::class => HorairesPolicy::class,
        Informations::class => InformationsPolicy::class,
        InfosMedicalHouse::class => InfosMedicalHousePolicy::class,
        MedicalHouses::class => MedicalHousesPolicy::class,
        Prices::class => PricesPolicy::class,
        Services::class => ServicesPolicy::class,
    ];

    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /**
         * Add Nova Policies
         */
        Nova::serving(function () {
            $this->registerNovaPolicies();
        });
    }

    /**
     * Nova Policies
     */
    public function registerNovaPolicies()
    {
        foreach ($this->nova_policies as $key => $value) {
            Gate::policy($key, $value);
        }
    }
}
