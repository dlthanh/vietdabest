<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagerRequest extends FormRequest
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
            'name' => 'required|unique:managers,name|max:30',
            'display_name' => 'max:100',
            'email' => 'required|email|unique:managers,email',
            'password' => 'required|min:8',
            'repassword' => 'same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên đăng nhập là trường bắt buộc',
            'name.unique' => 'Tên đăng nhập đã tồn tại',
            'name.max' => 'Tên đăng nhập tối đa 30 ký tự',
            'display_name.max' => 'Tên hiển thị tối đa 100 ký tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Sai định dạng email',
            'email.unique' => 'Email đã được đăng ký cho quản trị viên khác',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu tối thiểu 8 ký tự',
            'repassword.same' => 'Xác nhận mật khẩu không trùng khớp'
        ];
    }
}
