<?php

namespace App\Http\Controllers;

use App\Models\Mot;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mots = Mot::all();
        return view('mots.index',compact('mots'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mots.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mot = Mot::create([
            'mot' => $request->input('mot'),
            'signification' => $request->input('signification'),
            'image' => $request->input('image')

        ]);

        return redirect()->route('mots.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mot $mot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mot $mot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mot $mot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mot = Mot::find($id);
        if ($mot) {
            $mot->delete();
            return redirect()->route('mots.index');
        }
        
    }
}
