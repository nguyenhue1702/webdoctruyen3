<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name_product'=>'required|string|min:6',
            'slug_product'=>'required|string|min:6',
            'content_product'=>'required|string|min:6',
            'danhmuc'=>'required',
            'theloai'=>'required',
            

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
            'name_product'=> 'Tên truyện',
            'slug_product'=> 'Slug Truyện',
            'content_product'=>'Tóm Tắt',
            'kichhoat'=>'Kích Hoạt',
            'danhmuc'=>'Danh Mục',
            'theloai'=>'Thể Loại'
           
            
           
        ];
    }
}
