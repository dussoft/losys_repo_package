<?php

namespace Referenzverwaltung\ModelPhoto\Interfaces;

interface UserRepositoryInterface 
{
    public function getAllUsers();
    public function getUserById(int $userId);
    public function getUserByEmail(int $userEmail);
    public function deleteUser(int $userId);
    public function createUser(array $userDetails);
    public function updateUser(int $userId, array $newDetails);
    public function getFulfilledUsers();
}
 