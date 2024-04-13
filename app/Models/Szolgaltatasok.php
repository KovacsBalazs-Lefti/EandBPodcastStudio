<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Szolgaltatasok extends Model
{
    use HasFactory;

    protected $fillable = [
        'szolgaltatasid',
        'szolgaltatasnev',
        'leiras',
        'ar',
        'user_felhasznaloid',
        'foglalasid_szolgaltatas',
      ];


      public function user() : BelongsTo
    {
        return $this->belongsTo(Foglalas::class);
    }
}
