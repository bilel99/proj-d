<?php

namespace App\Policies\Nova;

use App\Models\Informations;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InformationsPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Informations $information
     *
     * @return bool
     */
    public function view(User $user, Informations $information): bool
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
     * @param Informations $information
     *
     * @return bool
     */
    public function update(User $user, Informations $information): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Informations $information
     *
     * @return bool
     */
    public function delete(User $user, Informations $information): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Informations $information
     * 
     * @return bool
     */
    public function restore(User $user, Informations $information): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Informations $information
     *
     * @return bool
     */
    public function forceDelete(User $user, Informations $information): bool
    {
        return false;
    }
}
