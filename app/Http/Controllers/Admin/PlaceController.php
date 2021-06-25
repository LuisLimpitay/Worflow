<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{

    public function index()
    {
        $places = Place::all();
        return view('admin.places.index', compact('places'));
    }

    public function create()
    {
        $cities = City::pluck('name', 'id');
        return view ('admin.places.create', compact('cities'));

    }

    public function store(Request $request)
    {
        /* return $request->all(); me retorna el array envidado */
        $request->validate([
            'name' => 'required|unique:places',
            'address_street' => 'required',
            'address_number' => 'required',
             'city_id' => 'required'
        ]);

        $place = Place::create($request->all());
        return redirect()->route('admin.places.index')
                         ->with('info', 'Sede creada con éxito !');

    }

    public function show(Place $place)
    {
        $places = Place::all();
        return view ('admin.places.show', compact('place'));

    }

    public function edit(Place $place)
    {
        $cities = City::pluck('name', 'id');
        return view ('admin.places.edit', compact('place', 'cities'));
    }


    public function update(Request $request, Place $place)
    {
        $request->validate([
            'name' => 'required|unique:places,name,'.$place->id,
            'address_street' => 'required',
            'address_number' => 'required',
            'city_id' => 'required'

        ]);
        $place->update($request->all());

        return redirect()->route('admin.places.index', $place)
                         ->with('info', 'Sede actualizada con éxito !');
    }


    public function destroy(Place $place)
    {
        //dd($place);
        $place->delete();

        return redirect()->route('admin.places.index')
                         ->with('info', 'Sede eliminada con éxito !');
    }

}
