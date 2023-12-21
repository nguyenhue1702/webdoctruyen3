<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email|unique:App\Models\User,email',
            'name' => 'required|max:50',
            'password'=>'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'birthday' => 'required|before:13 years ago',
        ];
    }
    public function messages()
    {
        return['required'=> ':attribute bắt buộc phải nhập(*)',
                'email'=> 'phải có định dạng :attribute  vd : 123@gmail.com (*)',
                'min'=>'Số kí tự phải lớn hơn :min(*)',
                'max'=>'Số kí tự phải bé hơn :max(*)',
                'unique'=> ':attribute Đã Tồn Tại !',
                'confirmed'=>':attribute Không Chính Xác (*)',
                'birthday.required' => 'Không được bỏ trống ô này',
                'birthday.before' => 'Bạn phải ít nhất 13 tuổi',
            ];
        }
    public function attributes()
    {
        return[
            'name'=> ' Họ Tên',
            'email'=> 'Email',
            'password'=>'Mật Khẩu',
            'password_confirmation'=>'Mật Khẩu Nhập Lại',

        ];
    }

}
