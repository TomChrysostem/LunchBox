<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Attendee;
use App\Models\Order;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function courses()
    {
        $courses = Course::with('category')->latest()->paginate(5);
        return view('users.course',compact('courses')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookCourse(Request $request, Course $course) {
        
        $attendee = new Attendee();

        $course_id = $request->input('course_id');
        dd($course_id);
        
        $attendee->user_name = $request->input('user_name');
        $attendee->phone = $request->input('phone');
        $attendee->email = $request->input('email');
        $attendee->address = $request->input('address');
        $attendee->date = $request->input('date');
        $attendee->qty = $request->input('qty');
        $attendee->messages = $request->input('messages');
        $attendee->save();
        $attendee->courses()->attach($course_id);

        return redirect('/course');
    }

    public function menus()
    {
        $menus = Menu::latest()->paginate(5);
        return view('users.service',compact('menus')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function bookMenus(Request $request) {
         
        Order::create($request->all());
        return redirect('/service');
    }
}
