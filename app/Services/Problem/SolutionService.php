<?php

namespace App\Services\Problem;

use App\Repositories\Problem\SolutionRepository;

class SolutionService
{
    private $solution_repository;

    public function __construct(SolutionRepository $solution_repository)
    {
        $this->solution_repository = $solution_repository;
    }

    public function createSolution($params){

        $solution_id = $this->solution_repository->createSolution($params);
        return $this->solution_repository->getSolutionById($solution_id);

    }

    public function getSolutionById($solution_id){

        return $this->solution_repository->getSolutionById($solution_id);

    }
}
