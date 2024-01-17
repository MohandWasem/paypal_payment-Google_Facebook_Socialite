<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           "email"=>"required|email",
           "name"=>"required|string",
           "password"=>"required|min:9|max:100",
           "img"=>"required|image"
        ];
    }
    public function messages(){
        return[
         
            "email.required"=>"please enter your email",
            "name.required"=>"please enter your name",
            "password.required"=>"please enter your password",
            "password.required"=>"please enter your password",
            "img.required"=>"please select your img",
        ];
    }
}
