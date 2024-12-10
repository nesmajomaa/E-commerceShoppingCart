<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required|string',
            'collection_id' => 'required|numeric|min:1',
            'price' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Product name is required',
            'name.string' => 'Product name must be a string',
            'description.required' => 'Product description is required',
            'description.string' => 'Product description must be a string',
            'collection_id.required' => 'You must select a category',
            'collection_id.min' => 'You must select a category',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be a number',
        ];
    }
}
