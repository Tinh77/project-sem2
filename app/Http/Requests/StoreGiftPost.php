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
            'images' => 'nullable|max:1000',
            'phone_number' => 'nullable|max:11',
            'address' => 'nullable|max:250'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'description.required' => 'Vui lòng mô tả sản phẩm của bạn.',
            'images.required' => 'Vui lòng thêm ảnh sản phẩm.',
            'phone_number.required' => 'Vui lòng thêm số điện thoại',
            'address.required' => 'vui lòng thêm địa chỉ'


        ];
    }

    public function withValidate($validator)
    {
        $validator->after(function ($validator) {
            if ($this->get('name') == 'quần') {
                $validator->errors()->add('name', 'k cần nhập thêm nữa.');
            }
        });
    }
}
