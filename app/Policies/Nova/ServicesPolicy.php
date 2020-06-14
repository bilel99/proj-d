<?php

namespace App\Policies\Nova;

use App\Models\Services;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicesPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Services $service
     *
     * @return bool
     */
    public function view(User $user, Services $service): bool
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
     * @param Services $service
     *
     * @return bool
     */
    public function update(User $user, Services $service): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Services $service
     *
     * @return bool
     */
    public function delete(User $user, Services $service): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Services $service
     * 
     * @return bool
     */
    public function restore(User $user, Services $service): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Services $service
     *
     * @return bool
     */
    public function forceDelete(User $user, Services $service): bool
    {
        return false;
    }
}
