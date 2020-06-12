<?php

namespace App\Nova;

use App\Models\Pages as PageModel;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use ClassicO\NovaMediaLibrary\MediaLibrary;
use Ek0519\Quilljs\Quilljs;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Page extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = PageModel::class;

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
        'id', 'unique_name', 'title',
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
        return __('nova.labels.page');
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
            new Panel(__('nova.panel.relations'), $this->relationsPanel()),
            new Panel(__('nova.panel.medias'), $this->mediasPanel()),
        ];
    }

    /**
     * @return array
     */
    public function infoPrincPanel(): array
    {
        return [
            ID::make()->sortable(),

            TextWithSlug::make(__('globals.attributes.title'), 'title')
                ->slug('unique_name')
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

            Slug::make('unique_name')
                ->disableAutoUpdateWhenUpdating(),
        ];
    }

    /**
     * @return array
     */
    public function relationsPanel(): array
    {
        return [
            BelongsToMany::make('alerts'),
        ];
    }

    public function mediasPanel(): array
    {
        return [
            MediaLibrary::make('media')
                ->preview('thumb'),
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
