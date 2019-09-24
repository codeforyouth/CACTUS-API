<?php
namespace App\Repositories;

use App\Models\Tag;

class TagRepository
{
    private $tag;

    private function _getRelation()
    {
        return [
            'projects.tags',
            'projects.images'
        ];
    }

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }


    public function getTagByName($tag_name){

        $model = $this->tag::with($this->_getRelation());

        $data = $model
            ->where('name', $tag_name)
            ->firstOrFail()
            ->toArray();

        return $data;
    }
}
