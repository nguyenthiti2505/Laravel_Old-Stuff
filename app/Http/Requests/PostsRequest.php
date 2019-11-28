<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
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
        // txtname, txtimage là tên name của input trong file create.blade.php
        return [
            // 'name'                  => 'required',
            'subcategory'           => 'required',
            'category'              => 'required',
            'tieude'                => 'required',
            'txtdescription'        => 'required',
            'contact'               => 'required',
            'txtstatus'             => 'required|numeric',
        ];
    }

    public function messages() {
        return [
            // 'name.required'         => 'Vui lòng nhập tên sản phẩm!',
            'subcategory.required'  => 'Vui lòng nhập nội dung này !',
            'category.required'     => 'Vui lòng nhập nội dung bài đăng !',
            'tieude.required'       => 'Vui lòng nhập tiêu đề',
            'contact.required'      => 'Vui lòng nhập liên hệ contact',
            'txtstatus.numeric'     => 'Mới là 1 hoặc 0!',

        ];
    }
}
