<?php

namespace App\Policies\Nova;

use App\Models\Contacts;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactsPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Contacts $contact
     *
     * @return bool
     */
    public function view(User $user, Contacts $contact): bool
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
     * @param Contacts $contact
     *
     * @return bool
     */
    public function update(User $user, Contacts $contact): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Contacts $contact
     *
     * @return bool
     */
    public function delete(User $user, Contacts $contact): bool
    {
        return true;
    }

    /**
     * @param User $user
     * @param Contacts $contact
     * 
     * @return bool
     */
    public function restore(User $user, Contacts $contact): bool
    {
        return false;
    }

    /**
     * @param User $user
     * @param Contacts $contact
     *
     * @return bool
     */
    public function forceDelete(User $user, Contacts $contact): bool
    {
        return false;
    }
}
