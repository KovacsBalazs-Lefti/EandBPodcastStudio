<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFoglalasRequest;
use App\Http\Requests\UpdateFoglalasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Foglalas;



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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $foglalasid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoglalasRequest $request, string $foglalasid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $foglalasid)
    {
        //
    }
}
