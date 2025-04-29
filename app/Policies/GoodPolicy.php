<?php

namespace App\Policies;

use App\Models\Good;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class GoodPolicy
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
    public function view(User $user, Good $good): bool
    {
        if ($user->hasPermissionTo('view good')) {
            return true;
        } else {
            return false;
        }
    }
    public function show(User $user, Good $good): bool
    {
        if ($user->hasPermissionTo('show good')) {
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
        if ($user->hasPermissionTo('create good')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Good $good): bool
    {
        if ($user->hasPermissionTo('update good')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    // public function delete(User $user, Good $good): bool
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
    // public function restore(User $user, Good $good): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(User $user, Good $good): bool
    // {
    //     //
    // }
}
