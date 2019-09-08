<?php
namespace App\Http\Requests\Tags;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
{

    public function rules()
    {
        return [
            'tag_name' => ['required', 'string'],
        ];
    }

    /*
    URLパラメータもバリデートできるようにする
    */
    protected function validationData()
    {
        return array_merge($this->all(), [
            'tag_name' => $this->route('tag_name'),
        ]);
    }

}
