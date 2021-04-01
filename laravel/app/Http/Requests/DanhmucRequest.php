<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DanhmucRequest extends FormRequest
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
            'name' => 'required|min:2',
            'logo' => 'required:min:2',
            'name' => [
                'required',
                Rule::unique('danh_muc')->ignore($this->id),
            ],

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập name ít nhất 2 kí tự',
            'logo.required' => 'không thể thiếu ảnh',
        ];
    }
}
