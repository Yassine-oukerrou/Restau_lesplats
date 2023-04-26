<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'photo'=>'required|max:6000',
            'name'=>'required',
            'components'=>'required',
            'new_price'=>'required',
            'old_price'=>'required',
            'category'=>'required',
            'available'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'photo.required'=>'the photo of plats is required',
            'name.required'=>'the name of plats is required',
            'components.required'=>'the components of plats is required',
            'new_price.required'=>'the new_price of plats is required',
            'old_price.required'=>'the old_price of plats is required',
            'category.required'=>'the category of plats is required',
            'available.required'=>'the available of plats is required',
        ];
    }
}
