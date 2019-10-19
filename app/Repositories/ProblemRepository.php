<?php
namespace App\Repositories;

use App\Models\Problem;

class ProblemRepository
{
    private $problem;

    private function _getRelation()
    {
        return [
        ];
    }

    public function __construct(Problem $problem)
    {
        $this->problem = $problem;
    }


    public function getProblemById($problem_id){

        $model = $this->problem::with($this->_getRelation());

        $data = $model
            ->where('id', $problem_id)
            ->firstOrFail()
            ->toArray();

        return $data;
    }
}
