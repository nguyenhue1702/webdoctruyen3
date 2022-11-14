<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
           
            'name_author'=>'required|string|max:50|min:3',
            'country_author'=>'required|max:50|min:3',
            'date_author'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải nhập (*)',
            'email' => 'phải có định dạng :attribute  vd : 123@gmail.com',
            'min' => 'Số kí tự phải lớn hơn :min',
            'unique' => ':attribute Đã Tồn Tại !',
            'confirmed' => ':attribute Nhập Lại Không Chính Xác',
            'img_author.required'=>':attribute bắt buộc phải chọn (*),'
        ];
    }
    public function attributes()
    {
        return [
            'dmtruyen' => 'Danh mục truyện',
            'slugdm' => 'Slug Danh Mục',
            'name_author' => 'Tên Tác giả',
            'country_author'=>'CounTry',
            'img_author'=>'Hình Ảnh',
            'date_author'=>'Năm Sinh'

        ];
    }
}
