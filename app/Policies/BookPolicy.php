<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class BookPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return void
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Book $book
     * @return Response|bool
     */
    public function viewBook(User $user, Book $book)
    {
        return $user->id === $book->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user)
    {
        return $user->isSuperuser();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Book $book
     * @return Response|bool
     */
    public function update(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Book $book
     * @return Response|bool
     */
    public function delete(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Book $book
     * @return Response|bool
     */
    public function restore(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Book $book
     * @return Response|bool
     */
    public function forceDelete(User $user, Book $book)
    {
        //
    }
}
