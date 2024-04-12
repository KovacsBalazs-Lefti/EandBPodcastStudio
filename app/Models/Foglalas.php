<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Foglalas extends Model
{
    use HasFactory;

    protected $fillable = [
      'felhasznaloid',
      'szolgaltatas',
      'letszam',
      'foglalaskezdete',
      'foglalashossza',
      'megjegyzes',

    ];

    public function user()
{
    return Auth::user();
}
}




