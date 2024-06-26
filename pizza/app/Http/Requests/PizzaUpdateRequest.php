<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    // Same concept as store request you can input different validations for the Update method
    public function rules()
    {
        return [
            'name'=>'required|string|min:3|max:30',
            'description'=>'required|min:3|max:500',
            'small_pizza_price'=>'required|numeric',
            'medium_pizza_price'=>'required|numeric',
            'large_pizza_price'=>'required|numeric',
            'category'=>'required',
            'image'=>'mimes:png,jpeg,jpg'
        ];
    }
}
