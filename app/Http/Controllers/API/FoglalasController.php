<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFoglalasRequest;
use App\Http\Requests\UpdateFoglalasRequest;
use Illuminate\Http\Request;
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

        $foglalas = new Foglalas([
            'felhasznaloid'=>$user->felhasznaloid,
            'szolgaltatas'=>$request->input('szolgaltas'),
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $felhasznaloid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoglalasRequest $request, string $felhasznaloid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $felhasznaloid)
    {
        //
    }
}
