<?php
namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    private $project;

    private function _getRelation()
    {
        return [
            'reviews',
            'codings',
            'tags',
            'problems',
            'images'
        ];
    }

    public function __construct(Project $project)
    {
        $this->project = $project;
    }



    public function searchProjects(array $params = []){

        $model = $this->project::with($this->_getRelation());

        $data = $model
            ->get()
            ->toArray();

        return $data;
    }
}
