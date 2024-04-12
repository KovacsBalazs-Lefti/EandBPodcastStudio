<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Szolgaltatasok extends Model
{
    use HasFactory;

    protected $fillable = [
        'szolgaltatasid',
<<<<<<< HEAD
        'szolgaltatasnev',
        'leiras',
        'ar',
      ];

=======
        'szolgaltatasmegnevezes',
        'csomagid',
        'foglalaskezdete',
        'foglalasvege',
        'ar',
    ];
>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03
}
