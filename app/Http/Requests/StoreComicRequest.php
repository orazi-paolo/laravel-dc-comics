<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required | string | min:4 | max:255',
            'description' => ' required | string | min:10',
            'thumb' => 'required | url',
            'price' => 'required | string | min:2 | max:8',
            'series' => 'required | string | min:4 | max:255',
            'sale_date' => 'required | date',
            'type' => 'required | string | min:4 | max:255'
        ];
    }
}