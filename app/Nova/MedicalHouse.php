<?php

namespace App\Nova;

use App\Models\MedicalHouses as MedicalHouseModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Waynestate\Nova\CKEditor;

class MedicalHouse extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = MedicalHouseModel::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'phone',
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
        return __('nova.labels.medicalHouse');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            new Panel(__('nova.panel.info_prin'), $this->infoPrincPanel()),
            new Panel(__('nova.panel.address'), $this->addressPanel()),
        ];
    }

    public function infoPrincPanel (): array {
        return [
            ID::make()->sortable(),

            Text::make(__('globals.attributes.title'), 'title')
                ->sortable()
                ->rules('required', 'min:2', 'max:255'),

            /*CKEditor::make(__('globals.attributes.content'), 'content')
                ->sortable()
                ->rules('nullable')
                ->hideFromIndex(),*/

            Text::make(__('globals.attributes.map'), 'map')
                ->sortable()
                ->rules('nullable', 'max:255')
                ->hideFromIndex(),
        ];
    }
    public function addressPanel (): array {
        return [
            Text::make(__('globals.attributes.address'), 'address')
                ->sortable()
                ->rules('nullable', 'min:2', 'max:255')
                ->hideFromIndex(),

            Text::make(__('globals.attributes.compl_address'), 'compl_address')
                ->sortable()
                ->rules('nullable', 'min:2', 'max:255')
                ->hideFromIndex(),

            Text::make(__('globals.attributes.phone'), 'phone')
                ->sortable()
                ->rules('nullable', 'regex:/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/'),

            Text::make(__('globals.attributes.hours'), 'hours')
                ->sortable()
                ->rules('nullable', 'max:255')
                ->hideFromIndex(),
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
