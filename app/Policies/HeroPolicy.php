<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Hero;
use Illuminate\Auth\Access\HandlesAuthorization;

class HeroPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_hero');
    }

    /**
     * Determine whether the user can view the model.
     * Notice we've made the $user argument nullable.
     * This means the method will be called if there is no authenticated user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(?User $user, Hero $hero)
    {
        if (empty($user)) {
            return true;
        }

        return $user->can('view_hero');
    }

    /**
     * Determine whether the user can view the hero skills
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewSkills(?User $user, Hero $hero)
    {
        return $this->view($user, $hero);
    }

    /**
     * Determine whether the user can view the teams which the hero is leading
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewLeaderTeams(?User $user, Hero $hero)
    {
        return $this->view($user, $hero);
    }

    /**
     * Determine whether the user can view the teams which the hero is member
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewTeams(?User $user, Hero $hero)
    {
        return $this->view($user, $hero);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_hero');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Hero $hero)
    {
        return $user->can('update_hero');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Hero $hero)
    {
        return $user->can('delete_hero');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_hero');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Hero $hero)
    {
        return $user->can('force_delete_hero');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('force_delete_any_hero');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Hero $hero)
    {
        return $user->can('restore_hero');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('restore_any_hero');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, Hero $hero)
    {
        return $user->can('replicate_hero');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('reorder_hero');
    }
}
