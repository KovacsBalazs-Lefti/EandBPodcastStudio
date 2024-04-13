<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Szolgaltatasok extends Model
{
    protected $table = 'szolgaltatasok';
    protected $primaryKey = 'szolgaltatasid';
    use HasFactory;

    protected $fillable = [
        'szolgaltatasid',
        'szolgaltatasnev',
        'leiras',
        'ar',
        'user_felhasznaloid',
        'foglalasid_szolgaltatasok',
      ];


      public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function foglalasok() : BelongsToMany
    {
        return $this->belongsToMany(Foglalas::class);
    }

}
