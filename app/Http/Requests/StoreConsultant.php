<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultant extends FormRequest
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
            "name" => "required",
            "phone" => "required",
            "email" => "required|email",
            "consultant" => "required",
            'g-recaptcha-response' => 'required|captcha'
            //
        ];
    }
    public function messages()
    {
        return [
            'name.required' => __('name Required'),
            'email.required' => __('email Required'),
            'consultant.required' => __('consultant Required'),
            'g-recaptcha-response.required' => __('g-recaptcha-response Required'),
              
        ];
    }
}
