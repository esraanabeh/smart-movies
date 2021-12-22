<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSite extends FormRequest {

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
        $id = $this->segment(3);
        return [
            "ar_title" => "required",
            "en_title" => "required",
            "ar_desc" => "required",
            "en_desc" => "required",
            "whatsapp" => "required",
            "phone" => "required",
           
            "email" => "required|email",
            "location" => "required|url|unique:site,location,$id",
            
        ];
    }

}
