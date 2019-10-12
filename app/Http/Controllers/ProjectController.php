<?php

namespace App\Http\Controllers;

use App\Http\Requests\Projects\IndexRequest;
use App\Http\Requests\Projects\ShowRequest;
use App\Http\Requests\Projects\StoreRequest;

use App\Services\ProjectService;

class ProjectController extends Controller
{

    private $project_service;

    public function __construct(ProjectService $project_service)
    {
        $this->project_service = $project_service;


    }

    public function index(IndexRequest $request){

        $res = $this->project_service->searchProjects(
            $request->validated()
        );

        return response($res);

    }

    public function show(ShowRequest $request){

        $res = $this->project_service->getProjectById(
            $request->route('project_id')
        );

        return response($res);

    }

    public function store(StoreRequest $request)
    {
        $res = $this->project_service->createProject(
            $request->validated()
        );
        return $res;
    }
}
