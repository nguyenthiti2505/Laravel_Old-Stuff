<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'txtname'                => 'required|unique:Users,name',
            'txtemail'               => 'required|unique:Users,email',
            //'txtphoneNumber'         => 'required|min:9|max:15|numeric',
            'txtuserName'            => 'required',
            'txtpassword'            => 'required|min:8|max:20',
            'txtaddress'             => 'required',
            'txtimage'               => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ];
    }


    public function messages() {
        return [
            'txtname.required'          => 'Vui lòng nhập tên của bạn',
            'txtemail.required'         => 'Vui nhập email',
            'txtemail.email'            => 'Không đúng định dạng email',
            'txtemail.unique'           => 'Email đã tồn tại',
            //'txtphoneNumber.unique'     => 'số điện thoại đã tồn tại',
            //'txtphoneNumber.required'   => 'Vui lòng nhập số điện thoại',
            //'txtphoneNumber.min'        => 'Số điện thoại phải chứa ít nhất 10 số',
            //'txtphoneNumber.max'        => 'Số điện thoại không quá 12 số',
            //'txtphoneNumber.regex'      => 'Số điện thoại không đúng fomart',
            'txtuserName.required'      => 'Vui lòng nhập user name của bạn',
            'txtpassword.required'      => 'Vui lòng nhập mật khẩu',
            'txtpassword.min'           => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            'txtpassword.max'           => 'Mật khẩu không quá 20 ký tự',
            'txtaddress.required'       => 'Vui lòng nhập địa chỉ của bạn',
            'txtimage.required'         => 'Vui lòng chọn ảnh của bạn',
            'txtimage.mimes'            => 'Ảnh của bạn chưa đúng định dạng',
        ];
    }
}
