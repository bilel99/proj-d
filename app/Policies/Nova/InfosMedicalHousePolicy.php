<?php

namespace App\Policies\Nova;

use App\Models\InfosMedicalHouse;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InfosMedicalHousePolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param InfosMedicalHouse $infoMedicalHouse
     *
     * @return bool
     */
    public function view(User $user, InfosMedicalHouse $infoMedicalHouse): bool
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
     * @param InfosMedicalHouse $infoMedicalHouse
     *
     * @return bool
     */
    public function update(User $user, InfosMedicalHouse $infoMedicalHouse): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param InfosMedicalHouse $infoMedicalHouse
     *
     * @return bool
     */
    public function delete(User $user, InfosMedicalHouse $infoMedicalHouse): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param InfosMedicalHouse $infoMedicalHouse
     * 
     * @return bool
     */
    public function restore(User $user, InfosMedicalHouse $infoMedicalHouse): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param InfosMedicalHouse $infoMedicalHouse
     *
     * @return bool
     */
    public function forceDelete(User $user, InfosMedicalHouse $infoMedicalHouse): bool
    {
        return false;
    }
}
