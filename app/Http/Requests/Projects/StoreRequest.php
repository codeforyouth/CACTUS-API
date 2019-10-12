<?php
namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'       => ['required', 'string'],
            'copy'       => ['required', 'string'],
            'problem'    => ['required', 'string'],
            'solution'   => ['required', 'string'],
            'todo'       => ['required', 'string'],
            'link'       => ['required', 'string'],
            'github_url' => ['required', 'string'],
            'user_id'    => ['required', 'integer'],
            'status'     => ['required', 'string'],
            'tags'       => ['required', 'array'],
            'images'     => ['nullable', 'array']
        ];
    }

}
