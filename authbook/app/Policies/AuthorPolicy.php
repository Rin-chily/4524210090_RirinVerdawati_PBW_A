<?php

namespace app\Policies;

use App\Models\Author;
use App\Models\User;

class AuthorPolicy
{
    // Semua role bisa melihat daftar penulis
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer']);
    }

    // Semua role bisa melihat detail penulis
    public function view(User $user, Author $author): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer']);
    }

    // Admin dan staff bisa menambahkan penulis
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    // Admin dan staff bisa mengedit penulis
    public function update(User $user, Author $author): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    // Hanya admin bisa menghapus penulis
    public function delete(User $user, Author $author): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Author $author): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Author $author): bool
    {
        return $user->role === 'admin';
    }
}
