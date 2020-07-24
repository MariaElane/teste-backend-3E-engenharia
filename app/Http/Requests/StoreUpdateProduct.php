<?php

namespace App\Http\Requests;

use App\Rules\UniqueUser;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduct extends FormRequest
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
        $rules =  [
            'name' => [
                'required',
                'min:3',
                'max:255',
                new UniqueUser('products', $id),
            ], 
            'image' => 'required|image',
            'price' => "required",
            'description' => 'nullable|min:3|max:255',
            
        ];

        if($this->method() == 'PUT') {
            $rules['image'] =  ['nullable', 'image'];
        }

        return $rules;
    }
}
