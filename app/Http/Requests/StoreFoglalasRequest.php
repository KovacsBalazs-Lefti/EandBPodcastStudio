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
<<<<<<< HEAD

       return true;
=======
        //foglalas előtti felhasználó ellenőrzés
        return true;
>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
<<<<<<< HEAD
            //
=======
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

>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03
        ];
    }
}
