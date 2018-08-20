<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGiftPost extends FormRequest
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
            'name' => 'required|unique:gifts|min:10|max:50',
            'description' => 'required|max:191',
            'thumbnail' => 'nullable|max:191'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'description.required' => 'Vui lòng mô tả sản phẩm của bạn.',
            'thumbnail. required' => 'Vui lòng thêm ảnh sản phẩm.',
        ];
    }

    public function withValidate($validator){
        $validator->after(function ($validator){
            if ($this->get('name') =='quần'){
                $validator->errors()->add('name','k cần nhập thêm nữa.');
            }
        });
    }
}
