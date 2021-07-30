<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dictation;
use App\Models\Place;
use App\Models\Course;
use App\Models\DictationUser;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

use Carbon\Carbon;

class DictationController extends Controller

{

    public function index()
    {
        $dictations = Dictation::published()->get();
        return view('admin.dictations.index', compact('dictations'));
    }

    public function create()
    {
        $courses = Course::pluck('name', 'id');
        $places = Place::pluck('name', 'id');

        $dictations = Dictation::all();

        return view ('admin.dictations.create', compact(
                                                            'dictations',
                                                            'places',
                                                            'courses'
                                                        ));
    }

    public function store(Request $request)
    {
        //return($request->all());
        $request->validate([
            'date' => 'required|unique:dictations,date',
            'time' => 'required',
            'stock' => 'numeric|required|min:1|max:35',
            'course_id' => 'required',
            'place_id' => 'required'
        ]);
        $dictations = Dictation::create($request->all());
        return redirect()->route('admin.dictations.index', $dictations)
                            ->with('info', 'Dictado creado con Exito !');
    }

    public function show(Dictation $dictation)
    {
        //dd($dictation);
        $pivots = DictationUser::where('dictation_id',$dictation->id)->get();
        //dd($pivot);
        return view('admin.dictations.show', compact('dictation', 'pivots'));
    }

    // CREE ESTA FUNCION PARA MANDARSELA COMO PARAMETRO A MI CREATE DICTATION
    public function dictation(Dictation $dictations)
    {
        $courses = Course::pluck('name', 'id');
        $places = Place::pluck('city', 'id');
        $dictations = Dictation::all();

        return view ('courses.dictation', compact(
                                                    'dictations',
                                                    'places',
                                                    'courses'
                                                ));
    }
    // ************************************************************************

    public function edit(Dictation $dictation)
    {
        $courses = Course::pluck('name', 'id');
        $places = Place::pluck('name', 'id');
        //dump($dates);
        return view ('admin.dictations.edit', compact(
                                                        'dictation',
                                                        'places',
                                                        'courses'
                                                     ));
    }

    public function update(Request $request, Dictation $dictation)
    {
        $request->validate([
            'date' => 'required|date|unique:dictations,date,'.$dictation->id,
            'time' => 'required',
            'stock' => 'numeric|required|min:1|max:35',
            'course_id' => 'required',
            'place_id' => 'required',
        ]);
        //dd($request->all());
        $dictation->update($request->all());
        //dd($dictation);
        return redirect()->route('admin.dictations.index')
                            ->with('info', 'Dictado actualizado con Exito !');
    }

    public function destroy(Dictation $dictation)
    {
            //dd($dictation);
            $dictation->delete();
            //luego de hacer esto va a mi modelo y suma uno al dictation
            return redirect()->route('admin.dictations.index')
                                ->with('info', 'Dictado eliminado con Exito !');
    }

    public function planillapdf(Dictation $dictation)
        {
            //$detalles = DictationUser::where('id', $pivot->id)->get();
            $pivots = DictationUser::where('dictation_id',$dictation->id)->get();
            //dd($pivot);
            //return view('admin.dictations.show', compact('dictation', 'pivots'));
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('admin.planilla', compact('pivots', 'dictation'));
            return $pdf->download();
        }


}
