<?php

namespace App\Policies\Nova;

use App\Models\Society;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SocietyPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Society $society
     *
     * @return bool
     */
    public function view(User $user, Society $society): bool
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
     * @param Society $society
     *
     * @return bool
     */
    public function update(User $user, Society $society): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Society $society
     *
     * @return bool
     */
    public function delete(User $user, Society $society): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Society $society
     * 
     * @return bool
     */
    public function restore(User $user, Society $society): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Society $society
     *
     * @return bool
     */
    public function forceDelete(User $user, Society $society): bool
    {
        return false;
    }
}
