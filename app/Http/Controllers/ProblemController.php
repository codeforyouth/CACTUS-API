<?php

namespace App\Http\Controllers;

use App\Http\Requests\Problems\ShowRequest;

use App\Services\ProblemService;

class ProblemController extends Controller
{

    private $problem_service;

    public function __construct(ProblemService $problem_service)
    {
        $this->problem_service = $problem_service;


    }

    public function show(ShowRequest $request){

        $res = $this->problem_service->getProblemById(
            $request->route('problem_id')
        );

        return response($res);

    }
}
