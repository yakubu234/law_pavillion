<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required','email','unique:clients'],
            'date_profiled' => ['required','date'],
            'primary_counsel_id' => ['required'], 
            'date_of_birth' => ['required','date'],
            'profile_image' => ['nullable','image','mimes:jpeg,png,jpg,gif,JPEG,PNG,JPG,GIF','max:2048'],
            'case_details' => ['required']
        ];
    }

}
