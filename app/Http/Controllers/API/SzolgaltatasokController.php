<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSzolgaltatasokRequest;
use App\Http\Requests\UpdateSzolgaltatasokRequest;
use Illuminate\Http\Request;
use App\Models\Szolgaltatasok;

class SzolgaltatasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $szolgaltatasok = Szolgaltatasok::all();
        return response()->json($szolgaltatasok);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSzolgaltatasokRequest $request)
    {
        $user = $request->user();

        $szolgaltatas = new Szolgaltatasok([
            'nev' => $request->input('nev'),
            'leiras'=> $request->input('leiras'),
            'ar'=>$request->input('ar'),
        ]);
        $szolgaltatas->save();

        return response()->json([
            'message' => 'A szolgáltatás sikeresen létrejött!',
            'szolgaltatas' => $szolgaltatas
        ],201);
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
    public function update(UpdateSzolgaltatasokRequest $request, string $felhasznaloid)
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
