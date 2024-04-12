<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

