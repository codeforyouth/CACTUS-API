<?php

namespace App\Services;

use App\Repositories\TagRepository;

class TagService
{
    private $tag_repository;

    public function __construct(TagRepository $tag_repository)
    {
        $this->tag_repository = $tag_repository;
    }

    public function getTagByName($tag_name){

        return $this->tag_repository->getTagByName($tag_name);

    }
}
