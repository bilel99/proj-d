<?php

namespace App\Policies\Nova;

use App\Models\Horaires;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HorairesPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Horaires $hour
     *
     * @return bool
     */
    public function view(User $user, Horaires $hour): bool
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
     * @param Horaires $hour
     *
     * @return bool
     */
    public function update(User $user, Horaires $hour): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Horaires $hour
     *
     * @return bool
     */
    public function delete(User $user, Horaires $hour): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Horaires $hour
     * 
     * @return bool
     */
    public function restore(User $user, Horaires $hour): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Horaires $hour
     *
     * @return bool
     */
    public function forceDelete(User $user, Horaires $hour): bool
    {
        return false;
    }
}
