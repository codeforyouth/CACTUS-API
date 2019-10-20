<?php
namespace App\Repositories\Problem;

use App\Models\Solution;

class SolutionRepository
{
    private $solution;


    public function __construct(Solution $solution)
    {
        $this->solution = $solution;
    }

    private function _getRelation()
    {
        return [
            'problem'
        ];
    }


    public function createSolution($params)
    {
        $model = $this->solution::create($params);
        return $model->id;
    }

    public function getSolutionById($solution_id){

        $model = $this->solution::with($this->_getRelation());

        $data = $model
            ->where('id', $solution_id)
            ->firstOrFail()
            ->toArray();

        return $data;
    }
}
