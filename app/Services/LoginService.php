<?php
namespace App\Services;
use App\Repositories\UserRepository;
class LoginService
{
    private $user_repository;
    public function __construct(
        UserRepository $user_repository
    ){
        $this->user_repository = $user_repository;
    }
    public function createOrUpdateUser($github_user){
        $github_user_id = $github_user->user['login'];
        $user = $this->user_repository->getUserByGitHubId($github_user_id);

        //userがいなければ新規作成 なければそのまま返す
        if(! $user){
            $params = [
                "name"      => $github_user->nickname,
                "github_id" => $github_user_id
            ];
            $user = $this->user_repository->createUser($params);
        }
        return $user;
    }
}
