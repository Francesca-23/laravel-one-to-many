<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'titolo' => ['required', 'max:30'],
            'immagine' => ['required'],
            'link' => ['required'],
            'descrizione' => ['required'],
            'tecnologie' => ['required'],
            'type_id' => ['nullable']
        ];
    }
}
