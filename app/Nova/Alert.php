<?php

namespace App\Nova;

use App\Models\Alerts as AlertModel;
use Ek0519\Quilljs\Quilljs;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;use Laravel\Nova\Fields\Text;use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mdixon18\Fontawesome\Fontawesome;

class Alert extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = AlertModel::class;

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
        'id', 'title', 'content', 'icon',
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
        return __('nova.labels.alert');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $optionsTypes = AlertModel::getTypes();
        $optionsLevels = AlertModel::getLevels();
        
        return [
            ID::make()->sortable(),

            Text::make(__('globals.attributes.title'), 'title')
                ->sortable()
                ->nullable(true)
                ->rules('max:255'),

            Quilljs::make(__('globals.attributes.content'), 'content')
                ->withFiles('public')
                ->fullWidth('option')
                ->height(300)
                ->tooltip(true)
                ->placeholder('Vous pouvez rentrer votre contenu ici ...')
                ->nullable(true)
                ->rules('nullable')
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

            Select::make(__('globals.attributes.types'), 'types')
                ->options($optionsTypes)
                ->displayUsing(function ($type) use ($optionsTypes) {
                    return $optionsTypes[$type] ?? '';
                })
                ->sortable()
                ->rules('required'),

            Select::make(__('globals.attributes.levels'), 'levels')
                ->options($optionsLevels)
                ->displayUsing(function ($level) use ($optionsLevels) {
                    return $optionsLevels[$level] ?? '';
                })
                ->sortable()
                ->rules('required'),
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
