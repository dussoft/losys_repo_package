<?php

namespace Referenzverwaltung\ModelPhoto\Repositories;

use Referenzverwaltung\ModelPhoto\Interfaces\UserRepositoryInterface;
use Referenzverwaltung\ModelPhoto\Models\User;

class UserRepository implements UserRepositoryInterface 
{
    public function getAllUsers() 
    {
        return User::all();
    }

    public function getUserById(int $userId) 
    {
        return User::findOrFail($userId);
    }

    public function getUserByEmail(int $userEmail){
        return User::where("email", $userEmail)->first();
    }

    public function deleteUser(int $userId) 
    {
        User::destroy($userId);
    }

    public function createUser(array $userDetails) 
    {
        return User::create($userDetails);
    }

    public function updateUser(int $userId, array $newDetails) 
    {
        return User::whereId($userId)->update($newDetails);
    }

    public function getFulfilledUser() 
    {
        return User::where('is_fulfilled', true);
    }
}
