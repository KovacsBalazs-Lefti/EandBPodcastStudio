<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nev',
        'email',
        'jelszo',
        'telefonszam',
        'szemelyi_szam',
        'szuletesi_datum',
        'ceg',
        'cegnev',
        'ceg_tipus',
        'ado_szam',
        'bankszamlaszam',
        'orszag',
        'iranyitoszam',
        'varos',
        'utca',
        'utca_jellege',
        'hazszam',
        'epulet',
        'lepcsohaz',
        'emelet',
        'ajto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Primary key for the model
     *
     * @var string
     */
    protected $primaryKey = 'felhasznaloid';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function foglalasok() : HasMany
    {
        return $this->hasMany(Foglalas::class);
    }


}
