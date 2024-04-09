<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoglalasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //foglalas előtti felhasználó ellenőrzés
        return $this->user() && $this->user()->hasToken();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //foglalas kezdete nem lehet a mostani dátum
            'foglalaskezdete' => 'required|date|after:now',
            'foglalasvege' => 'required|date|after:foglalaskezdete',
            'foglalasvege' => 'required|date|after_or_equal:foglalaskezdete',
            'foglalaskezdete' => 'required|date|after_or_equal:now',
            'foglalaskezdete' => 'required|date|after_or_equal:last_foglalas_vege|after_or_equal:now + 15 minutes',
            'foglalaskezdete' => 'required|date|before_or_equal:foglalasvege +8 hours',
        ];
    }
}
