<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:products|max:255|min:10',
            'price' => 'required',
            'category_id' => 'required',
            'contents' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống!',
            'name.unique' => 'Tên sản phẩm không được trùng nhau!',
            'name.max' => 'Tên sản phẩm không được phép quá 255 ký tự!',
            'name.min' => 'Tên sản phẩm không được phép dưới 10 ký tự!',
            'price.required' => 'Giá sản phẩm không được để trống!',
            'category_id.required' => 'Danh mục không được để trống!',
            'contents.required' => 'Mô tả sản phẩm không được để trống!'
        ];
    }
}
