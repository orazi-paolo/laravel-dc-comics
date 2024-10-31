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

    public function messages(): array
    {
        return [
            'title.required' => 'Il campo "Title" è obbligatorio',
            'title.string' => 'Il campo "Title" deve essere una stringa',
            'title.min' => 'Il campo "Title" deve avere almeno 4 caratteri',
            'title.max' => 'Il campo "Title" deve avere al massimo 255 caratteri',
            'description.required' => 'Il campo "Description" è obbligatorio',
            'description.string' => 'Il campo "Description" deve essere una stringa',
            'description.min' => 'Il campo "Description" deve avere almeno 10 caratteri',
            'thumb.required' => 'Il campo "Thumb" è obbligatorio',
            'thumb.url' => 'Il campo "Thumb" deve essere un URL valido',
            'price.required' => 'Il campo "Price" è obbligatorio',
            'price.string' => 'Il campo "Price" deve essere una stringa',
            'price.min' => 'Il campo "Price" deve avere almeno 2 caratteri',
            'price.max' => 'Il campo "Price" deve avere al massimo 8 caratteri',
            'series.required' => 'Il campo "Series" è obbligatorio',
            'series.string' => 'Il campo "Series" deve essere una stringa',
            'series.min' => 'Il campo "Series" deve avere almeno 4 caratteri',
            'series.max' => 'Il campo "Series" deve avere al massimo 255 caratteri',
            'sale_date.required' => 'Il campo "Sale Date" è obbligatorio',
            'sale_date.date' => 'Il campo "Sale Date" deve essere una data; ad esempio: 2020-12-31 => yyyy-mm-dd => anno-mese-giorno',
            'type.required' => 'Il campo "Type" è obbligatorio',
            'type.string' => 'Il campo "Type" deve essere una stringa',
            'type.min' => 'Il campo "Type" deve avere almeno 4 caratteri',
            'type.max' => 'Il campo "Type" deve avere al massimo 255 caratteri'
        ];
    }
}