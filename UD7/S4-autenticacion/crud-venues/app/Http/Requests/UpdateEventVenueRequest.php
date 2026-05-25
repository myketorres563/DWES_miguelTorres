<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventVenueRequest extends FormRequest
{
     public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'     => ['sometimes','required','string','max:255'],
            'capacity' => ['sometimes','required','integer','min:0'],
            'city'     => ['sometimes','required','string','max:255'],
            'country'  => ['sometimes','required','string','max:255'],
        ];
    }
}
