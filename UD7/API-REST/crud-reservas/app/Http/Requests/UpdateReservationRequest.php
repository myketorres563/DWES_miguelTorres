<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'client_name' => ['sometimes','required','string','max:255'],
        'reservation_date' => ['sometimes','required','date'],
        'people' => ['sometimes','required','integer','min:1'],
        'notes' => ['nullable','string'],
        ];
    }
}
