<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,'. $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'This field is necessury to choose',
            'name.string' => 'This field have to be strting type',
            'email.required' => 'This field is necessury to choose',
            'email.string' => 'Post have to be strting type',
            'email.email' => 'Your post have to be in this format "mail@mai.ru"',
            'email.unique' => 'User with this email already have',
        ];
    }
}