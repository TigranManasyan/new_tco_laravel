<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'email' => 'required|email|min:12',
            'password' => 'required|min:6|max:10'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Բոլոր դաշտերը պարտադիր են',
            'email.email' => 'Մուտքագրվածը էլ. հասցե չէ',
            'email.min' => 'Մինիմում սիմվոլների քանակը 12 է',
            'password.required' => 'Բոլոր դաշտերը պարտադիր են',
            'password.min' => 'Մինիմում սիմվոլների քանակը 6 է',
            'password.max' => 'Մաքսիմում սիմվոլների քանակը 10 է',
        ];
    }
}
