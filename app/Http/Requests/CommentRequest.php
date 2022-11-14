<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'comment' => 'required|min:3|max:100',
           

        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải nhập (*)',
            'min' => 'Số kí tự phải lớn hơn hoặc là bằng :min',
            'max' => 'Số kí tự tối đa là :max',
           
        ];
    }
    public function attributes()
    {
        return [
            'comment' => 'Comment',
           
            

        ];
    }
}
