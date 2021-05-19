<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index (){
        
        $enrollments = Enrollment::all();
        return view ('admin.enrollments.index', compact('enrollments'));
    }


    /* -------------------------------------------------------------------------- 
    
    SELECT dictation_id, dictations.date, COUNT(user_id) Nro_inscriptos
        FROM ((enrollments 
        
        INNER JOIN dictations ON enrollments.dictation_id=dictations.id) 
        INNER JOIN users ON enrollments.user_id=users.id) GROUP BY dictation_id

    --------------------------------------------------------------------------------
    
    Esta consulta me trae la cantidad de inscriptos
    SELECT COUNT(user_id), dictation_id FROM enrollments GROUP BY dictation_id

    --------------------------------------------------------------------------------
    
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
