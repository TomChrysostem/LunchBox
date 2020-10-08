<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);
  
        return view('admin.courses.index',compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,jpg,png,gif|max:1014',
                ]);
                $extension = $request->image->extension();
                $randomName = rand().".".$extension;
                $request->image->storeAs('/public/img/',$randomName);
                
        }
        $course = new Course();
        $course->course = $request->input('course');
        $course->description = $request->input('description');
        $course->price = $request->input('price');
        $course->no_of_people = $request->input('no_of_people');
        $course->period = $request->input('period');
        $course->menu_id = $request->input('menu_id');
        $course->category_id = $request->input('category_id');
        $course->image = $randomName;
        $course->save();
        }
        return redirect()->route('admin.courses.index')->with('success','Course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        $course->update($request->all());
  
        return redirect()->route('admin.courses.index')
                        ->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
  
        return redirect()->route('admin.courses.index')
                        ->with('success','Course deleted successfully');
    }
}
