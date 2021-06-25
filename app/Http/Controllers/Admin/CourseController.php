<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Place;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::with(['teachers'])->get();
        //dump($courses);
        return view ('admin.courses.index', compact ('courses'));
    }


    public function create()
    {

        $teachers = Teacher::pluck('name', 'id');
        $courses = Course::all();

        return view ('admin.courses.create', compact('teachers', 'courses'));

    }


    public function store(Request $request)
    {
        //dump($request);
        $request->validate([
            'name' => 'required',
            'slug' => '',
            'description' => 'required',
            'content' => 'required',
            'mode' => 'required',
            'price' => 'numeric|required|min:7000',
            'teacher_id' => 'required',

        ]);
        $courses = Course::create($request->all());
        return redirect()->route('admin.courses.index', $courses)
                            ->with('info', 'Curso agregado con exito !!!');
    }


    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }


    public function edit(Course $course)
    {

        $teachers = Teacher::pluck('name', 'id');

        return view ('admin.courses.edit', compact('course', 'teachers'));

    }


    public function update(Request $request, Course $course)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'content' => 'required',
            'mode' => 'required',
            'price' =>  'numeric|required|min:7000',
            'teacher_id' => '',

        ]);

        $course->update($request->all());
        return redirect()->route('admin.courses.index', $course)->with('info', 'Curso actualizado con exito !!!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('info', 'Curso eliminado con exito !!!');;
    }
}

