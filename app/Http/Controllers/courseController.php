<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class courseController extends Controller
{
    public function create(Request $request)
    {
        $id = $request->route('id');
       $course =  $id ? Course::find($id) : null;
        return view('course.create',[
            'course' => $course
        ]);
    }
    public function show()
    {
        $courses = Course::all();
        return view('course.show',[
            'courses' => $courses
        ]);
    }
    public function store(Request  $request)
    {
        $attrs = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'status' => 'nullable'
        ]);

        (Arr::has($attrs, 'status')) ? $attrs['status'] = filter_var($attrs['status'], FILTER_VALIDATE_BOOLEAN) : $attrs['status'] = true;

        Course::create($attrs);
        return redirect('courseS');
    }
    public  function status(Request $request){
        $id = $request->route('id');
        $course = Course::find($id);
        ($course->status = !$course->status);
        $course->save();
        return redirect('courseS');
    }
    // public function update(Request $request){
    //     $id = $request->route('id');
    //     dd($id);

    // }
}
