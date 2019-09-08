<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tags\ShowRequest;

use App\Services\TagService;

class TagController extends Controller
{

    private $tag_service;

    public function __construct(TagService $tag_service)
    {
        $this->tag_service = $tag_service;


    }

    public function show(ShowRequest $request){

        $res = $this->tag_service->getTagByName(
            $request->route('tag_name')
        );

        return response($res);

    }
}
