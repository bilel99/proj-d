<?php

namespace App\Nova;

use App\Models\MedicalHouses as MedicalHouseModel;
use Ek0519\Quilljs\Quilljs;
use Illuminate\Http\Request;
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
            new Panel(__('nova.panel.address'), $this->addressPanel()),
            new Panel(__('nova.panel.transport'), $this->transportPanel()),
        ];
    }

    public function infoPrincPanel(): array
    {
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
                ->rules('nullable', 'max:255')
                ->hideFromIndex(),
        ];
    }

    public function addressPanel(): array
    {
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

    public function transportPanel(): array
    {
        return [
            HasMany::make('Transport'),
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
