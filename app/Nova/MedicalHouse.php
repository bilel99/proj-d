<?php

namespace App\Nova;

use App\Models\MedicalHouses as MedicalHouseModel;
use App\Models\Pages;
use Ek0519\Quilljs\Quilljs;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

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
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            new Panel(__('nova.panel.info_prin'), $this->infoPrincPanel()),
            new Panel(__('nova.panel.infoMedicalHouse'), $this->infosMedicalHousePanel()),
        ];
    }

    public function infoPrincPanel(): array
    {
        $pageMedicalHouse = Pages::getPage(Pages::PAGE_MAISON_MEDICAL_GARDE);

        return [
            ID::make()->sortable(),

            Text::make(__('globals.attributes.title'), 'title')
                ->sortable()
                ->rules('required', 'min:2', 'max:255'),

            Quilljs::make(__('globals.attributes.content'), 'content')
                ->withFiles('public')
                ->fullWidth('option')
                ->height(300)
                ->tooltip(true)
                ->placeholder('Vous pouvez rentrer votre contenu ici ...')
                ->rules('nullable')
                ->hideFromIndex(),

            Text::make(__('globals.attributes.map'), 'map')
                ->sortable()
                ->help(
                    '<a href="https://www.google.fr/maps">Outils intégration d\'une map sous google map</a> 
                           <ul>
                           <li>Dans un premier temps, entrer votre adresse</li>
                           <li>Ensuite utiliser l\'outil d\'intégration de google map pour copier l\'Iframe d\'intégration</li>
                           <li>Et enfin coller l\'Iframe ci-dessus</li>
                           </ul>'
                )
                ->rules('nullable')
                ->hideFromIndex(),

            BelongsTo::make('page', 'page', Page::class)
                ->withMeta([
                    'belongsToId' => $pageMedicalHouse->id // default value for the select
                ])
                ->readonly(),
        ];
    }

    public function infosMedicalHousePanel(): array
    {
        return [
            HasMany::make('Information maison médical', 'InfoMedHouse', InfoMedHouse::class),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
