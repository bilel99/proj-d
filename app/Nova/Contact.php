<?php

namespace App\Nova;

use App\Models\Contacts as ContactModel;
use Ek0519\Quilljs\Quilljs;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Contact extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = ContactModel::class;

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
        'id', 'name', 'firstname', 'email', 'phone',
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
        return __('nova.labels.contact');
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
            new Panel(__('nova.panel.consult'), $this->consultPanel()),
        ];
    }

    /**
     * @return array
     */
    public function infoPrincPanel(): array
    {
        $optionsCivility = ContactModel::civilityOptions();

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
                ->creationRules('unique:contacts,email')
                ->updateRules('unique:contacts,email,{{resourceId}}')
                ->onlyOnForms(),

            Text::make(__('globals.attributes.email'), function () {
                return "<a href=\"mailto:{$this->email}\" class=\"no-underline dim text-primary font-bold\">
                    {$this->email}
                </a>";
            })->exceptOnForms()->asHtml(),

            Text::make(__('globals.attributes.phone'), 'phone')
                ->sortable()
                ->rules('required', 'regex:/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/')
                ->onlyOnForms(),

            Text::make(__('globals.attributes.phone'), function () {
                return "<a href=\"tel:{$this->phone}\" class=\"no-underline dim text-primary font-bold\">
                    {$this->getPhoneFormated($this->phone)}
                </a>";
            })->exceptOnForms()->asHtml(),
        ];
    }

    /**
     * @return array
     */
    public function addressPanel(): array
    {
        return [
            Text::make(__('globals.attributes.address'), 'address')
                ->sortable()
                ->rules('required', 'min:2', 'max:255')
                ->hideFromIndex(),

            Text::make(__('globals.attributes.postal_code'), 'postal_code')
                ->sortable()
                ->rules('required', 'min:4', 'max:6')
                ->hideFromIndex(),
        ];
    }

    /**
     * @return array
     */
    public function consultPanel(): array
    {
        $optionsObjDem = ContactModel::objDemandeOptions();

        return [
            BelongsTo::make('doctor'),

            Select::make(__('globals.attributes.objet_demande'), 'objet_demande')
                ->options($optionsObjDem)
                ->displayUsing(function ($obj) use ($optionsObjDem) {
                    return $optionsObjDem[$obj] ?? '';
                })
                ->sortable()
                ->rules('required'),

            Date::make(__('globals.attributes.date_consultation'), 'date_consultation')
                ->rules('required')
                ->hideFromIndex(),

            Textarea::make(__('globals.attributes.objet_demande_doctor'), 'objet_demande_doctor')
                ->rules('required')
                ->hideFromIndex(),

            Quilljs::make(__('globals.attributes.precisions'), 'precisions')
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
