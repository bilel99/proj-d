<?php

namespace App\Policies\Nova;

use App\Models\Prices;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PricesPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Prices $price
     *
     * @return bool
     */
    public function view(User $user, Prices $price): bool
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
     * @param Prices $price
     *
     * @return bool
     */
    public function update(User $user, Prices $price): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Prices $price
     *
     * @return bool
     */
    public function delete(User $user, Prices $price): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Prices $price
     * 
     * @return bool
     */
    public function restore(User $user, Prices $price): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Prices $price
     *
     * @return bool
     */
    public function forceDelete(User $user, Prices $price): bool
    {
        return false;
    }
}
