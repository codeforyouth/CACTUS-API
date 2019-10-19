<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private $user_repository;

    public function __construct(UserRepository $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    public function getUserById($user_id){

        return $this->user_repository->getUserById($user_id);

    }

}
