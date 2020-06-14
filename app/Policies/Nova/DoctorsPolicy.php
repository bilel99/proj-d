<?php

namespace App\Policies\Nova;

use App\Models\Doctors;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DoctorsPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Doctors $doctor
     *
     * @return bool
     */
    public function view(User $user, Doctors $doctor): bool
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
     * @param Doctors $doctor
     *
     * @return bool
     */
    public function update(User $user, Doctors $doctor): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Doctors $doctor
     *
     * @return bool
     */
    public function delete(User $user, Doctors $doctor): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Doctors $doctor
     * 
     * @return bool
     */
    public function restore(User $user, Doctors $doctor): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Doctors $doctor
     *
     * @return bool
     */
    public function forceDelete(User $user, Doctors $doctor): bool
    {
        return false;
    }
}
