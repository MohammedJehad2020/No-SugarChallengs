<?php

namespace App\Policies;

use App\Models\Program;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Prophecy\Argument\Token\InArrayToken;

class ProgramPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
       foreach($user->roles as $role){
           if(in_array('programs.view-any', $role->abilities)){
               return true;
           }
       }
       return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Program  $program
     * @return mixed
     */
    public function view(User $user, Program $program)
    {
       return $user->hasAbility('programs.view');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasAbility('programs.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Program  $program
     * @return mixed
     */
    public function update(User $user, Program $program)
    {
        return $user->hasAbility('programs.update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Program  $program
     * @return mixed
     */
    public function delete(User $user, Program $program)
    {
        return $user->hasAbility('programs.delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Program  $program
     * @return mixed
     */
    public function restore(User $user, Program $program)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Program  $program
     * @return mixed
     */
    public function forceDelete(User $user, Program $program)
    {
        //
    }
}
