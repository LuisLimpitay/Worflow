<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }


    public function create()
    {
        return view('admin.teachers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'about' => 'required',
        ]);
        $teacher = Teacher::create($request->all());

        return redirect()->route('admin.teachers.index', $teacher)
            ->with('info', 'Instructor creado con Exito !');
    }

    public function show($id)
    {
        //
    }


    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'))
            ->with('info', 'Categoria actaulizada con Exito !');;
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'about' => 'required',
        ]);

        $teacher->update($request->all());

        return redirect()->route('admin.teachers.index', $teacher)
            ->with('info', 'Instructor actualizado con exito !');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.teachers.index')
            ->with('info', 'Instructor eliminado con éxito !');
    }
}
