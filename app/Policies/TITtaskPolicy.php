<?php

namespace App\Policies;

use App\Models\TITtask;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TITtaskPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
    
        return in_array($user->role, ['Admin', 'Team Member', 'Guest']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, TITtask $task): bool
    {
    return $user->id === $task->assigned_to;
}

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return in_array($user->role, ['Admin', 'Team Member']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, TITtask $task): bool
    {
        return $user->role === 'Admin' || ($user->role === 'Team Member' && $task->assigned_to === $user->id);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TITtask $task): bool
    {
        return $user->role === 'Admin' || ($user->role === 'Team Member' && $task->assigned_to === $user->id);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, TITtask $task): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, TITtask $task): bool
    {
        return false;
    }
}
