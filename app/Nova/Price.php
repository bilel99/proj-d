<?php

namespace App\Nova;

use App\Models\Prices as PriceModel;
use Ek0519\Quilljs\Quilljs;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Price extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = PriceModel::class;

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
        'id', 'title', 'content_row_1', 'content_row_2',
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
        return __('nova.labels.prices');
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
        ];
    }

    public function infoPrincPanel(): array
    {
        return [
            ID::make()->sortable(),

            Quilljs::make(__('globals.attributes.title'), 'title')
                ->withFiles('public')
                ->fullWidth('option')
                ->height(300)
                ->tooltip(true)
                ->placeholder('Vous pouvez rentrer votre titre ici ...')
                ->rules('nullable')
                ->hideFromIndex(),

            Quilljs::make(__('globals.attributes.content_row_1'), 'content_row_1')
                ->withFiles('public')
                ->fullWidth('option')
                ->height(300)
                ->tooltip(true)
                ->placeholder('Vous pouvez rentrer votre contenu ici ...')
                ->rules('nullable')
                ->hideFromIndex(),

            Quilljs::make(__('globals.attributes.content_row_2'), 'content_row_2')
                ->withFiles('public')
                ->fullWidth('option')
                ->height(300)
                ->tooltip(true)
                ->placeholder('Vous pouvez rentrer votre contenu ici ...')
                ->rules('nullable')
                ->hideFromIndex(),
        ];
    }

    /**
     * @return array
     */
    public function relationsPanel(): array
    {
        return [
            BelongsTo::make('Page'),
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
