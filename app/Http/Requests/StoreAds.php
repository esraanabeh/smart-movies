<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAds extends FormRequest
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
            'ar_name'  => 'required',
            'en_name'  => 'required',
            'sort'     => 'required',
            'appear'   => 'in:splash,home',
            'link'     =>'url',
            "ar_image" => "required|mimes:jpeg,jpg,png,bmp,gif,svg",
            "en_image" => "required|mimes:jpeg,jpg,png,bmp,gif,svg",
        ];
    }

}