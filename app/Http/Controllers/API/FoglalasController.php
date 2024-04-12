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
        //felhasználó lekérdezése
        $user = auth()->user();
        return $user->foglalas;
        //return Foglalas::where("felhasznaloid", $user->felhasznaloid)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFoglalasRequest $request)
    {
        $user = auth()->user();

        // $foglalas = new Foglalas([
        //     'felhasznaloid'=>$user->felhasznaloid,
        //     'szolgaltatas'=>$request->input('szolgaltatas'),
        //     'letszam'=>$request->input('letszam'),
        //     'foglalaskezdete'=>$request->input('foglalaskezdete'),
        //     'foglalashossza'=>$request->input('foglalashossza'),
        //     'megjegyzes'=>$request->input('megjegyzes'),
        // ]);
        $foglalas = new Foglalas($request->all());
        $foglalas->user_felhasznaloid = $user->felhasznaloid;
        $foglalas->save();
        return $foglalas;

            // return response()->json([
            //     'message' => ' A foglalás sikeresen létrejött!',
            //     'foglalas' =>$foglalas
            // ], 201);
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
