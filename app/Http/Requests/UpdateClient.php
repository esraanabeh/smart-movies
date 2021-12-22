<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClient extends FormRequest
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

        $id = $this->segment(3);
        return [
            //
            "ar_name" => "required|unique:clients,ar_name,$id",
            "en_name" => "required|unique:clients,en_name,$id",
            
            "logo" => "required|mimes:jpeg,jpg,png,bmp,gif,svg",
        ];
    }
}
