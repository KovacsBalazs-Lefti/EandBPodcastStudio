<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFoglalasRequest;
use App\Http\Requests\UpdateFoglalasRequest;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Foglalas;
=======
use Illuminate\Support\Facades\Auth;
use App\Models\Foglalas;


>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03

class FoglalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFoglalasRequest $request)
    {
        $user = $request->user();

<<<<<<< HEAD
        $foglalas = new Foglalas([
            'felhasznaloid'=>$user->felhasznaloid,
            'szolgaltatas'=>$request->input('szolgaltatas'),
            'letszam'=>$request->input('letszam'),
            'foglalaskezdete'=>$request->input('foglalaskezdete'),
            'foglalashossza'=>$request->input('foglalashossza'),
            'megjegyzes'=>$request->input('megjegyzes'),
        ]);
            $foglalas->save();

            return response()->json([
                'message' => ' A foglalás sikeresen létrejött!',
                'foglalas' =>$foglalas
            ], 201);
=======

        // Új foglalás létrehozása a request alapján
        $foglalas = new Foglalas([
            'felhasznaloid'=>$user->felhasznaloid,
            'foglalaskezdete' => $request->input('foglalaskezdete'),
            'foglalasvege' => $request->input('foglalasvege')
        ]);

        // A foglaláshoz társítása a felhasználóhoz
        $foglalas->save();

        // Válasz küldése
        return response()->json([
            'message' => 'A foglalás sikeresen létrejött!',
            'foglalas' => $foglalas
        ], 201);

>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(string $felhasznaloid)
=======
    public function show(string $foglalasid)
>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(UpdateFoglalasRequest $request, string $felhasznaloid)
=======
    public function update(UpdateFoglalasRequest $request, string $foglalasid)
>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(string $felhasznaloid)
=======
    public function destroy(string $foglalasid)
>>>>>>> 224a3afb0d061a562cf41811ab0117104eb65d03
    {
        //
    }
}
