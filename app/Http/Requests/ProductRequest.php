<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:5',
            'price'=>'required',
            'description'=>'required',
            'image'=>'mimes:jpg,bmp,png,webp'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il nome del prodotto è necessario',
            'name.min'=>'Il nome deve contenere almeno 5 caratteri',
            'price.required'=>'Il prezzo del prodotto è necessario',
            'description.required'=>'La descrizione del prodotto è necessaria',
            'image.mimes'=>'Formato non corretto, inserire jpg, bmp, png, webp'
        ];
    }
}
