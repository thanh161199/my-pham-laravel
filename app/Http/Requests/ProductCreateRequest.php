<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'name' =>'required|unique:products',
            'price' =>'required|numeric',
            'category_id' =>'required|numeric',
            'sale_price' =>'lt:price',//cho giá trị bé hơn price
          //  'upload' =>'mimes:jpg, jpeg, png, gif'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên danh mục đã được sử dụng',
            'price.required' =>'Gía sản phẩm không được để trống',
            'price.numeric' =>'Gía sản phẩm phải là số',
            'sale_price.required' =>'Gía khuyến mãi không được để trống',
            'sale_price.numeric' =>'Gía khuyến mãi phải là số',
            'sale_price.lt' =>'Gía khuyến mãi < giá sản phẩm',
            'upload.mimes' =>'ảnh phải có định dạng :jpg, jpeg, png, gif'

        ];
    }
}
