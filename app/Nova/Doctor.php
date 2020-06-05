<?php

namespace App\Nova;

use App\Models\Doctors as DoctorModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Doctor extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = DoctorModel::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'firstname', 'email',
    ];

    /**
     * @return array|string|null
     */
    public static function group()
    {
        return __('nova.groups.admin');
    }

    /**
     * @return string
     */
    public static function label()
    {
        return __('nova.labels.doctor');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $optionsCivility = DoctorModel::civilityOptions();

        return [
            ID::make()->sortable(),

            Select::make(__('globals.attributes.civility.civility'), 'civility')
                ->options($optionsCivility)
                ->displayUsing(function ($civility) use ($optionsCivility) {
                    return $optionsCivility[$civility] ?? '';
                })
                ->sortable()
                ->rules('required'),

            Text::make(__('globals.attributes.name'), 'name')
                ->sortable()
                ->rules('required', 'min:2', 'max:255'),

            Text::make(__('globals.attributes.firstname'), 'firstname')
                ->sortable()
                ->rules('required', 'min:2', 'max:255'),

            Text::make(__('globals.attributes.email'), 'email')
                ->sortable()
                ->rules('required', 'email', 'min:2', 'max:255')
                ->creationRules('unique:doctors,email')
                ->updateRules('unique:doctors,email,{{resourceId}}'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
