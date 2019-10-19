<?php
namespace App\Http\Requests\Problems\Solutions;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'problem_id'     => ['required', 'integer'],
            'user_id'        => ['required', 'integer'],
            'repository_url' => ['required', 'string'],
            'link'           => ['required', 'string'],
            'note'           => ['required', 'string'],
        ];
    }

    /*
    URLパラメータもバリデートできるようにする
    */
    protected function validationData()
    {
        return array_merge($this->all(), [
            'problem_id' => $this->route('problem_id'),
        ]);
    }

}

