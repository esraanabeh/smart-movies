<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'ar_name'               => 'required',
            'en_name'               => 'required',
            'ar_desc'               => 'required',
            'en_desc'               => 'required',
            'ar_details'            => 'required',
            'en_details'            => 'required',
            'price_before_discount' => 'required|gt:price_after_discount',
            'price_after_discount'  => 'required_if:is_offered,==,1|lt:price_before_discount',
            'brand_id'              => 'required',
            'release_date'          => 'required',
            'type'                  => 'required',
            'product_type_id'       => 'required',
            'categories_list'       => 'required',
            "image"                 => "mimes:jpeg,jpg,png,bmp,gif,svg",
            'image_url.*'           => 'mimes:jpeg,jpg,png,bmp,gif,svg',
            // 'quantity_base'         =>'required|gt:quantity',
            // 'quantity'         =>'lt:quantity_base',
        ];
    }
    public function messages()
    {
        return [
            'price_before_discount.gt' => trans('admin.validation_product_price_before'),
            'price_after_discount.lt' => trans('admin.validation_product_price_after'),
            'ar_details.required' => trans('admin.ar_details_required'),
            'en_details.required' => trans('admin.en_details_required'),
            // 'price_after_discount.required_if' => trans('admin.validation_product_price_after_required'),
            
        ];
    }

}
