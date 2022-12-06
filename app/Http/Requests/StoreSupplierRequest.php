<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'], 
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:11', 'max:11'], 
            'website' => ['nullable', 'url', 'max:255'], 
            'address1' => ['required', 'string', 'max:150'], 
            'address2' => ['nullable', 'string', 'max:150'], 
            'note' => ['nullable', 'string', 'max:255'], 
            'postal_code' => ['nullable', 'string', 'max:255'], 
            'city_id' => ['required',], 
            'state_id' => ['required',]
        ];
    }
}
