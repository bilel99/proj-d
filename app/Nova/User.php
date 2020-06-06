<?php

namespace App\Nova;

use App\Models\User as UserModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\PasswordConfirmation;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = UserModel::class;

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
        return __('nova.labels.user');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $optionsCivility = UserModel::civilityOptions();

        return [
            ID::make()->sortable(),

            Gravatar::make(__('globals.attributes.avatar'))->maxWidth(50),

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
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8', 'confirmed')
                ->updateRules('nullable', 'string', 'min:8', 'confirmed'),

            PasswordConfirmation::make('Password Confirmation'),

            Select::make(__('globals.attributes.status.status'), 'status')
                ->options(UserModel::getWorkflowStatus())
                ->displayUsingLabels()
                ->rules('required')
                ->sortable(),
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
        return [
            (new Actions\ChangeStatusToUser)
                ->confirmText(__('nova.actions.edit_status.confirm_change_workflow'))
                ->confirmButtonText(__('nova.actions.edit_status.btn_yes'))
                ->cancelButtonText(__('nova.actions.edit_status.btn_no')),
        ];
    }
}
