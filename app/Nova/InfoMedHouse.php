<?php

namespace App\Nova;

use App\Models\InfosMedicalHouse as InfoMedicalHouse;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Mdixon18\Fontawesome\Fontawesome;

class InfoMedHouse extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = InfoMedicalHouse::class;

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
        'id', 'title',
    ];

    /**
     * @return array|string|null
     */
    public static function group()
    {
        return __('nova.groups.page');
    }

    /**
     * @return string
     */
    public static function label()
    {
        return __('nova.labels.infoMedicalHouse');
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
            new Panel(__('nova.panel.info_prin'), $this->principalPanel()),
            new Panel(__('nova.panel.medicalHouse'), $this->MedicalHousePanel()),
        ];
    }

    public function principalPanel(): array
    {
        return [
            ID::make()->sortable(),

            Text::make(__('globals.attributes.title'), 'title')
                ->sortable()
                ->rules('required', 'min:2', 'max:255'),

            Textarea::make(__('globals.attributes.infos'), 'infos')
                ->sortable()
                ->rules('required', 'min:2', 'max:255')
                ->hideFromIndex(),

            Fontawesome::make(__('globals.attributes.icon'), 'icon')
                ->addButtonText('Icone')
                ->help(
                    'Panel d\'icone 
                           <ul>
                           <li>Au clic sur le bouton icone</li>
                           <li>Vous pouvez choisir parmis une liste exhaustif votre icone</li>
                           <li>Vous pouvez aussi retrouver toutes les icones <a href="https://fontawesome.com/icons?d=gallery">ici</a></li>
                           </ul>'
                ),
        ];
    }

    public function MedicalHousePanel(): array
    {
        return [
            BelongsTo::make('MedicalHouse'),
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
