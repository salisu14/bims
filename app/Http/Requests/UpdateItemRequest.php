<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateItemRequest extends FormRequest
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
            'name'          => ['required', 'string', 'max:255'],
            'description'   => ['nullable', 'string', 'max:255'], 
            'price'         => ['required', 'max:255'], 
            'cost'          => ['required', 'string', 'max:255'], 
            'barcode'       => ['nullable', 'string', 'max:255'], 
            'is_finished'   => ['nullable', 'bool', 'max:255'], 
            'category_id'   => ['required',],
        ];
    }
}
