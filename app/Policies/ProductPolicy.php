<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    // Authorized user id
    private $user_id = 1;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function create(User $user)
    {
        return $user->id === $this->user_id;
    }

    public function update(User $user)
    {
        return $user->id === $this->user_id;
    }

    public function delete(User $user)
    {
        return $user->id === $this->user_id;
    }
}
