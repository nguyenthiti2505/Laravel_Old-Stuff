<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
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
            'txtid_user'               => 'required',
            'txtcontent'               => 'required',
        ];
    }

    public function messages() {
        return [
            'txtid_user.required'      => 'Vui lòng nhập mã khách hàng !',
            'txtcontent.required'      => 'Vui lòng nhập nội dung nhận xét!',
        ];
    }
}
