<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|min:10|',
            'description' => 'required',
            'category' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Please enter something in this field!',
            'description.required' => 'Please enter something in this field!',
            'category.required' => 'Please choose something in this category!'
        ];
    }
}
