<?php
namespace App\Http\Requests\Problems\Solutions;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
{

    public function rules()
    {
        return [
            'solution_id' => ['required', 'integer'],
        ];
    }

    /*
    URLパラメータもバリデートできるようにする
    */
    protected function validationData()
    {
        return array_merge($this->all(), [
            'solution_id' => $this->route('solution_id'),
        ]);
    }

}
