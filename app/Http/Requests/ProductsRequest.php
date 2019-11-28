<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'txtname'                => 'required|unique:Products,name',
            'txtdescription'         => 'required',
            'txtimage'               => 'required|image',
            'txtstatus'              => 'required|numeric',
            'categories_id'          => 'required|numeric',

        ];
    }

    public function messages() {
        return [
            'txtname.required'          => 'Vui lòng nhập tên sản phẩm!',
            'txtname.unique'            => 'Tên sàn phẩm này đã tồn tại!',
            'txtdescription.required'   => 'Vui lòng nhập mô tả cho sản phẩm!',
            'txtimage.required'         => 'Vui lòng chọn ảnh cho sản phẩm!',
            'txtimage.image'            => 'Hình ảnh không đúng định dạng!',
            'categories_id.required'    => 'Vui lòng chọn danh mục!',
            'txtstatus.required'        => 'Vui lòng cho biết có phải sản phẩm mới không',
            'txtstatus.numeric'         => 'Mới là 1 hoặc 0!',
        ];
    }
}
