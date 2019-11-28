<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
        return [
            'txtname'                  => 'required',
            'txtcontent'               => 'required',
            'txtimage'                 => 'required|image',
        ];
    }

    public function messages() {
        return [
            'txtname.required'         => 'Vui lòng nhập tên tin tức !',
            'txtcontent.required'      => 'Vui lòng nhập nội dung nhận xét!',
            'txtimage.required'        => 'Vui lòng chọn hình ảnh!',
            'txtimage.image'           => 'Hình ảnh không đúng định dạng!',



        ];
    }
}
