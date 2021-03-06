<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any orders.
     *
     * @param \App\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the order.
     *
     * @param \App\User $user
     * @param \App\Order $order
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.list-order'));
    }

    /**
     * Determine whether the user can create orders.
     *
     * @param \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('order_detail');
    }

    /**
     * Determine whether the user can update the order.
     *
     * @param \App\User $user
     * @param \App\Order $order
     * @return mixed
     */
    public function update(User $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the order.
     *
     * @param \App\User $user
     * @param \App\Order $order
     * @return mixed
     */
    public function delete(User $user)
    {
        //
    }

    /**
     * Determine whether the user can restore the order.
     *
     * @param \App\User $user
     * @param \App\Order $order
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the order.
     *
     * @param \App\User $user
     * @param \App\Order $order
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
