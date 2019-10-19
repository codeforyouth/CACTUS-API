<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\ShowRequest;

use App\Services\UserService;

class UserController extends Controller
{

    private $user_service;

    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;


    }

    public function show(ShowRequest $request){

        $res = $this->user_service->getUserById(
            $request->input('user_id')
        );

        return response($res);

    }

}
