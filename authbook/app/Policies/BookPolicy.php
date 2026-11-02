<?php

namespace app\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    // Admin, staff, dan viewer bisa melihat daftar buku
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer']);
    }

    // Admin, staff, dan viewer bisa melihat detail buku
    public function view(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer']);
    }

    // Admin dan staff bisa menambahkan buku
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    // Admin dan staff bisa mengedit buku
    public function update(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    // Hanya admin yang bisa menghapus buku
    public function delete(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }

    // Hanya admin yang bisa memulihkan buku
    public function restore(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }

    // Hanya admin yang bisa menghapus buku secara permanen
    public function forceDelete(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }
}
