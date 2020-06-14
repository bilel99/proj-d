<?php

namespace App\Policies\Nova;

use App\Models\MedicalHouses;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicalHousesPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param MedicalHouses $medicalHouse
     *
     * @return bool
     */
    public function view(User $user, MedicalHouses $medicalHouse): bool
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
     * @param MedicalHouses $medicalHouse
     *
     * @return bool
     */
    public function update(User $user, MedicalHouses $medicalHouse): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param MedicalHouses $medicalHouse
     *
     * @return bool
     */
    public function delete(User $user, MedicalHouses $medicalHouse): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param MedicalHouses $medicalHouse
     * 
     * @return bool
     */
    public function restore(User $user, MedicalHouses $medicalHouse): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param MedicalHouses $medicalHouse
     *
     * @return bool
     */
    public function forceDelete(User $user, MedicalHouses $medicalHouse): bool
    {
        return false;
    }
}
