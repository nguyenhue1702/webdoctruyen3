<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_banner'=>'required|string|min:6',
          
            

        ];
    }
    public function messages()
    {
        return['required'=> ':attribute bắt buộc phải nhập (*)',
                'email'=> 'phải có định dạng :attribute  vd : 123@gmail.com',
                'min'=>'Số kí tự phải lớn hơn :min',
                'unique'=> ':attribute Đã Tồn Tại !',
                'confirmed'=>':attribute Nhập Lại Không Chính Xác',
    ];
    }
    public function attributes()
    {
        return[
            'title_banner'=> 'Tiêu đề truyện',
           
           
            
           
        ];
    }
}
