<?php

namespace App\Policies;

use App\Models\Contend;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ContendPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Contend $contend): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Contend $contend): bool
    {
        return $contend->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Contend $contend): bool
    {
        return $this->update($user, $contend);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Contend $contend): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Contend $contend): bool
    {
        //
    }
}
