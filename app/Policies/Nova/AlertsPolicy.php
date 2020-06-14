<?php

namespace App\Policies\Nova;

use App\Models\Alerts;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlertsPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Alerts $alert
     *
     * @return bool
     */
    public function view(User $user, Alerts $alert): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param User $user
     *
     * @return bool
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Alerts $alert
     *
     * @return bool
     */
    public function update(User $user, Alerts $alert): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Alerts $alert
     *
     * @return bool
     */
    public function delete(User $user, Alerts $alert): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Alerts $alert
     * 
     * @return bool
     */
    public function restore(User $user, Alerts $alert): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Alerts $alert
     *
     * @return bool
     */
    public function forceDelete(User $user, Alerts $alert): bool
    {
        return false;
    }
}
