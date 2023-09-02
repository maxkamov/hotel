<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'name' => 'string|max:255',
            'price_from' => 'integer|size:10',
            'price_to' => 'integer|size:10',
            'bedrooms' => 'string|max:255',
            'bathrooms' => 'string|max:255',
            'storeys' => 'string|max:255',
            'garages' => 'string|max:255',
        ];
    }
}
