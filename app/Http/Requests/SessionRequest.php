<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionRequest extends FormRequest
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
            'session'=>'required|string|integer',
            'title_session'=>'required|string|min:6',
            'slug_session'=>'required|string|min:6',
            'tomtat_session'=>'required|min:10',
            'content_session'=>'required|min:10',
            

        ];
    }
    public function messages()
    {
        return['required'=> ':attribute bắt buộc phải nhập (*)',
                'email'=> 'phải có định dạng :attribute  vd : 123@gmail.com',
                'min'=>'Số kí tự phải lớn hơn :min',
                'unique'=> ':attribute Đã Tồn Tại !',
                'confirmed'=>':attribute Nhập Lại Không Chính Xác',
                'integer'=> ':attribute Phải Là Số '
    ];
    }
    public function attributes()
    {
        return[
            'session'=> 'Session',
            'title_session'=> 'Tiêu Đề Chương',
            'slug_session'=>'Slug session',
            'tomtat_session'=>'Tóm Tắt',
            'content_session'=>'Nội Dung'
           
            
           
        ];
    }
}
