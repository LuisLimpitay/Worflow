<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dictation;
use App\Models\Place;
use App\Models\Course;
use App\Models\Dictation_User;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class DictationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dictations = Dictation::with('places', 'courses')->orderBy('date','DESC')->get();
        return view('admin.dictations.index', compact('dictations'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::pluck('name', 'id');
        $places = Place::pluck('name', 'id');
        $users = User::pluck('number_license', 'id');

        $dictations = Dictation::all();

        return view ('admin.dictations.create', compact(
                                                            'dictations',
                                                            'places',
                                                            'courses',
                                                            'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'stock' => 'required',
            'course_id' => 'required',
            'place_id' => 'required',

        ]);
        //dump($request);
        $dictations = Dictation::create($request->all());

        return redirect()->route('admin.dictations.index', $dictations)
                            ->with('info', 'Dictado creado con Exito !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // CREE ESTA FUNCION PARA MANDARSELA COMO PARAMETRO A MI CREATE DICTATION
    public function dictation(Dictation $dictations)
    {
        $courses = Course::pluck('name', 'id');
        $places = Place::pluck('city', 'id');
        $users = User::pluck('number_license', 'id');

        $dictations = Dictation::all();

        return view ('courses.dictation', compact(
            'dictations',
            'places',
            'courses',
            'users'));
    }
    // ************************************************************************


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dictation $dictation)
    {
        $courses = Course::pluck('name', 'id');
        $places = Place::pluck('name', 'id');
        $users = User::pluck('number_license', 'id');
        return view ('admin.dictations.edit', compact(
                                                        'dictation',
                                                        'places',
                                                        'courses',
                                                        'users'));
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dictation $dictation)
    {
        $dictation->update($request->all());
        return redirect()->route('admin.dictations.index', $dictation)
                            ->with('info', 'Dictado actualizado con Exito !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dictation $dictation)
    {
        {
            $dictation->delete();
            return redirect()->route('admin.dictations.index')
                            ->with('info', 'Dictado eliminado con Exito !');
        }
    }


    /* */
}
