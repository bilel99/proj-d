<?php

namespace App\Nova\Actions;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Laravel\Nova\Actions\Action;
use Illuminate\Support\Collection;
use Laravel\Nova\Fields\ActionFields;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Laravel\Nova\Fields\Select;

class ChangeStatusToUser extends Action
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Get the displayable name of the filter.
     *
     * @return string
     */
    public function name()
    {
        return __('nova.actions.edit_status.edit_status');
    }

    /**
     * Perform the action on the given models.
     * @param ActionFields $fields
     * @param Collection $models
     * @return array|string[]
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        $workflow = '';

        switch ($fields->workflow) {
            case 1:
                $workflow = User::STATUS_ACTIF;
                break;
            case 2:
                $workflow = User::STATUS_INACTIF;
                break;
            default:
                break;
        }

        foreach ($models as $model) {
            $model->status = $workflow;
            $model->save();
        }

        return Action::message(__('nova.notifications.success'));
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('workflow')
                ->options(User::getWorkflowStatus())
                ->displayUsingLabels()
                ->sortable(),
        ];
    }
}
