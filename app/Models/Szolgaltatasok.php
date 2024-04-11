<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szolgaltatasok extends Model
{
    use HasFactory;

    protected $fillable = [
        'szolgaltatasid',
        'szolgaltatasmegnevezes',
        'csomagid',
        'foglalaskezdete',
        'foglalasvege',
        'ar',
    ];
}
