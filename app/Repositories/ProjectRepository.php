<?php
namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    private $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function searchProjects(array $params = []){

        $model = $this->project;

        $data = $model
            ->get()
            ->toArray();

        return $data;
    }
}
