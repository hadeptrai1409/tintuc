<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaivietRequest extends FormRequest
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
            //
            'title' => 'required|min:4',
            'content' => 'required:min:5',
            'short_desc' => 'required:min:2',
            'author' => 'required:min:2'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Hãy nhập title',
            'content.required' => 'Hãy nhập content',
            'short_desc.min' => 'Ít nhất 2 kí tự',
            'author.max' => 'Ít nhất là 2 kí tự'
        ];
    }
}
