<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class StoreFoglalasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //foglalas előtti felhasználó ellenőrzés
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
            'foglalaskezdete' => [
                'required',
                'date',
                'after:now',
                'before:foglalasvege',

            ],
            'foglalasvege' => [
                'required',
                'date',
                'after:foglalaskezdete',
            ],

        ];
    }
}
