<?php

namespace App\Policies\Nova;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     *
     * @return bool
     */
    public function view(User $user): bool
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
     *
     * @return bool
     */
    public function update(User $user): bool
    {
        return true;
    }

    /**
     * @param User $user
     *
     * @return bool
     */
    public function delete(User $user): bool
    {
        return false;
    }

    /**
     * @param User $user
     * 
     * @return bool
     */
    public function restore(User $user): bool
    {
        return false;
    }

    /**
     * @param User $user
     *
     * @return bool
     */
    public function forceDelete(User $user): bool
    {
        return false;
    }
}
