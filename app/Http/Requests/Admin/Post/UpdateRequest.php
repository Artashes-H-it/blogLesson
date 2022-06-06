<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id'=> 'required|integer|exists:categories,id',
            'tag_id'=>    'nullable|array',
            'tag_ids.*'=>    'nullable|integer|exists:tags,id'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'This field is necessury to choose',
            'title.string' => 'This field have to be strting type',
            'content.required' => 'This field is necessury to choose',
            'content.string' => 'This field have to be strting type',
            'preview_image.required' => 'This field is necessury to choose',
            'preview_image.file' => 'It is necessury to choose file',
            'main_image.required' => 'This field is necessury to choose',
            'main_image.file' => 'It is necessury to choose file',
            'category_id.required' => 'This field is necessury to choose',
            'category_id.integer' => 'ID category have to be number',
            'category_id.exsists' => 'ID category have to bein db',
            'tag_ids.arry'=> 'It is necessury to send array'
        ];
    }
}