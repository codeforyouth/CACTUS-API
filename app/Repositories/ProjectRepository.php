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

    public function getProjectById($project_id){

        $model = $this->project::with($this->_getRelation());

        $data = $model
            ->where('id', $project_id)
            ->firstOrFail()
            ->toArray();

        return $data;
    }

    public function createProject($params)
    {
        $model = $this->project::create($params);
        #tagとのリレーション作成
        if(isset($params['tags'])){
            $model->tags()->sync($params['tags']);
        }
        #imagesとのリレーション作成
        if(isset($params['images'])){
            $model->images()->createMany($params['images']);
        }
        return $model->id;
    }
}
