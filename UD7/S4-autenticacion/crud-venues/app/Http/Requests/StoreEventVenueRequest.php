<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventVenueRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // El acceso lo controla auth:sanctum
    }

    public function rules(): array
    {
        return [
            'name'     => ['required','string','max:255'],
            'capacity' => ['required','integer','min:0'],
            'city'     => ['required','string','max:255'],
            'country'  => ['required','string','max:255'],
        ];
    }
}
