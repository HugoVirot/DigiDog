<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
            'name' => 'required',
            'picture' => 'required',
            'description' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'stock' => 'required',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'Le nom est obligatoire',
            'picture.required'=> 'Une image est obligatoire',
            'description.required'=> 'La description est obligatoire',
            'price.required'=> 'Le prix est obligatoire',
            'weight.required'=> 'Le poids est obligatoire',
            'stock.required'=> 'Le stock est obligatoire',
        ];
    }
}
