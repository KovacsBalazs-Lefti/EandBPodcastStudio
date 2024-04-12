<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Foglalas extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
      'felhasznaloid',
      'szolgaltatas',
      'letszam',
      'foglalaskezdete',
      'foglalashossza',
      'megjegyzes',

=======
        'felhasznaloid',
        'foglalaskezdete',
        'foglalasvege',
>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03
    ];

    public function user()
{
    return Auth::user();
}
}




