<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
            'txtname'                  => 'required|unique:name',
        ];
    }

    public function messages() {
        return [
            'txtname.required'         => 'Vui lòng nhập tên danh mục!',
            'txtname.unique'           => 'Tên danh mục này đã tồn tại!',
        ];
    }
}
