<?php

namespace App\Http\Controllers\Problem;

use App\Http\Requests\Problems\Solutions\StoreRequest;
use App\Http\Requests\Problems\Solutions\ShowRequest;

use App\Http\Controllers\Controller;

use App\Services\Problem\SolutionService;

class SolutionController extends Controller
{

    private $solution_service;

    public function __construct(SolutionService $solution_service)
    {
        $this->solution_service = $solution_service;
    }

    public function show(ShowRequest $request){

        $res = $this->solution_service->getSolutionById(
            $request->route('solution_id')
        );

        return response($res);

    }

    public function store(StoreRequest $request)
    {
        $res = $this->solution_service->createSolution(
            $request->validated()
        );
        return $res;
    }
}
