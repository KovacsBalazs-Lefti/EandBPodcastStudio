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
        'foglalaskezdete',
        'foglalasvege',
    ];

    public function user()
{
    return Auth::user();
}
}




