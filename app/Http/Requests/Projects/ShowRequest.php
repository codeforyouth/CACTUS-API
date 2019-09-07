<?php
namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
{

    public function rules()
    {
        return [
            'project_id' => ['required', 'integer'],
        ];
    }

    /*
    URLパラメータもバリデートできるようにする
    */
    protected function validationData()
    {
        return array_merge($this->all(), [
            'project_id' => $this->route('project_id'),
        ]);
    }

}
