<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // txtname, txtimage là tên name của input trong file create.blade.php
        return [
            'txtid_post'                  => 'required',
            'txtid_prod'                  => 'required',
        ];
    }

    public function messages() {
        return [
            'txtid_post.required'         => 'Vui lòng nhập mã bài đăng!',
            'txtid_prod.required'         => 'Vui lòng nhập mã sản phẩm!',
        ];
    }
}
