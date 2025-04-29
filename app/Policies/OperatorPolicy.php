<?php

namespace App\Policies;

use App\Models\Operator;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class OperatorPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Operator $operator): bool
    {
        if ($user->hasPermissionTo('view operator')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->hasPermissionTo('create operator')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Operator $operator): bool
    {
        if ($user->hasPermissionTo('update operator')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    // public function delete(User $user, Operator $operator): bool
    // {
    //     if($user->hasPermissionTo('delete good')){
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, Operator $operator): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(User $user, Operator $operator): bool
    // {
    //     //
    // }
}
