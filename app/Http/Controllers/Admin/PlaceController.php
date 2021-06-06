<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('admin.places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.places.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request->all(); me retorna el array envidado */

        $request->validate([

            'name' => 'required',
            'city' => 'required|unique:places',
            'address_street' => 'required',
            'address_number' => 'required' 

        ]);
        
        $place = Place::create($request->all());

        return redirect()->route('admin.places.index', $place)
                         ->with('info', 'Sede creada con Exito !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        $places = Place::all();
        return view ('admin.places.show', compact('place'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view ('admin.places.edit', compact('place'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $request->validate([

            'name' => 'required',
            'city' => 'required',
            'address_street' => 'required',
            'address_number' => 'required' 

        ]);

        $place->update($request->all());

        return redirect()->route('admin.places.index', $place)
                         ->with('info', 'Sede actualizada con exito !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $x =$place->delete();
        dd($x);
        return redirect()->route('admin.places.index')
                         ->with('info', 'Sede eliminada con éxito !!!');
    }
    
}