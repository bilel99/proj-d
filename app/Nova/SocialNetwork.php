<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Mdixon18\Fontawesome\Fontawesome;
use App\Models\SocialNetwotk as SocialNetworkModel;

class SocialNetwork extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = SocialNetworkModel::class;

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
        'id', 'link', 'title', 'icon',
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
        return __('nova.labels.social_network');
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
            ID::make()->sortable(),

            Text::make(__('globals.attributes.title'), 'title')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make(__('globals.attributes.link'), 'link')
            ->sortable()
            ->rules('required', 'max:255', 'url'),

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
