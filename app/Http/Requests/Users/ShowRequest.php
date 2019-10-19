<?php
namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
{

    public function rules()
    {
        return [
            'user_id' => ['required', 'integer'],
        ];
    }

}
