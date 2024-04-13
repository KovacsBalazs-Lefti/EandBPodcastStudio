<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;


class Foglalas extends Model
{
    protected $table = 'foglalas';
    protected $primaryKey = 'foglalasid';

    use HasFactory;

    protected $fillable = [
      'felhasznaloid',
      'szolgaltatas',
      'letszam',
      'foglalaskezdete',
      'foglalashossza',
      'megjegyzes',

    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}




