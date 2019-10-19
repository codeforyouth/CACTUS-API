<?php

namespace App\Repositories;
use App\Models\User;

class UserRepository
{
    public function __construct(
        User $user
    )
    {
        $this->user = $user;
    }


    public function getUserByGithubId($github_id)
    {
        $model = $this->user;
        $data = $model
            ->where('github_id', $github_id)
            ->first();
        return $data;
    }


    public function getUserByToken($token)
    {
        $model = $this->user;
        $data = $model
            ->where('remember_token', $token)
            ->firstOrFail()
            ->toArray();
        return $data;
    }

    public function getUserById($user_id)
    {
        $model = $this->user;
        $data = $model
            ->where('id', $user_id)
            ->firstOrFail()
            ->toArray();
        return $data;
    }


    public function createUser(array $params)
    {
        $model = $this->user::create($params);
        return $model;
    }
}
