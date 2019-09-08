<?php

namespace App\Services;

use App\Repositories\ProjectRepository;

class ProjectService
{
    private $project_repository;

    public function __construct(ProjectRepository $project_repository)
    {
        $this->project_repository = $project_repository;
    }

    public function searchProjects(array $params = []){

        return $this->project_repository->searchProjects($params);

    }

    public function getProjectById($project_id){

        return $this->project_repository->getProjectById($project_id);

    }
}
