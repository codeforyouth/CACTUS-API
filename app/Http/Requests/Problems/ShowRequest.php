<?php
namespace App\Http\Requests\Problems;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
{

    public function rules()
    {
        return [
            'problem_id' => ['required', 'integer'],
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
