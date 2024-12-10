<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCollectionRequest extends FormRequest
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
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Collection name is required',
            'name.string' => 'Collection name must be a string',
            'description.required' => 'Collection description is required',
            'description.string' => 'Collection description must be a string',
        ];
    }
}
