<?php

namespace App\Services;

use App\Repositories\ProblemRepository;

class ProblemService
{
    private $problem_repository;

    public function __construct(ProblemRepository $problem_repository)
    {
        $this->problem_repository = $problem_repository;
    }

    public function getProblemById($problem_id){

        return $this->problem_repository->getProblemById($problem_id);

    }
}
