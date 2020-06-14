<?php

namespace App\Policies\Nova;

use App\Models\Pages;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagesPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Pages $page
     *
     * @return bool
     */
    public function view(User $user, Pages $page): bool
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
        return false;
    }

    /**
     * @param User $user
     * @param Pages $page
     *
     * @return bool
     */
    public function update(User $user, Pages $page): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Pages $page
     *
     * @return bool
     */
    public function delete(User $user, Pages $page): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Pages $page
     * 
     * @return bool
     */
    public function restore(User $user, Pages $page): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Pages $page
     *
     * @return bool
     */
    public function forceDelete(User $user, Pages $page): bool
    {
        return false;
    }
}
