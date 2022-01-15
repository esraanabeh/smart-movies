<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackage extends FormRequest
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
            //
            "name" => "required",
            
            "rate" => "required",
            'price' => 'required|gt:price_after_discount',
            'price_after_discount'  => 'required_if:is_discount,==,1|lt:price',
          
            "image"=>"mimes:jpeg,jpg,png,bmp,gif,svg",
        ];
    }
}
