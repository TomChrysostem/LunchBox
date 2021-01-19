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
     * Display a listing of the courses.
     *
     * @return \Illuminate\Http\Response
     */
    public function courses()
    {
        $courses = Course::with('category')->latest()->paginate(5);
        //dd($courses->toarray());
        // $myanmarCourses = Course::with(['category' => function ($query) {
        //     $query->where('category', 'like', '%Burmese%');

        // }])->get();
        // dd($myanmarCourses->toarray());
        // $italyCourses = Course::with(array('category' => function($query) 
        // {
        //     $query->where('category.category', 'Italian');
        // }))->latest()->paginate(3);
        // $japanesCourses = Course::with(array('category' => function($query) 
        // {
        //     $query->where('category.category', 'Japanese');
        // }))->latest()->paginate(3);
        return view('users.course.course',compact('courses')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Display the apply form.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function applyCourse(Request $request, Course $course)
    {
        $course_id = $request->route('id');
        $course =  Course::find($course_id );
        return view('users.course.apply',compact('course'));

    }
    /**
     * Store a book course.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookCourse(Request $request, Course $course) 
    {
        
        $attendee = new Attendee();
        $course_id = $request->input('course_id');
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

    /**
     * Display menu according to category
     *
     * @return \Illuminate\Http\Response
     */
    public function menus() 
    {
        $sideDishs = Menu::where('dish_type','Side dish')->orderBy('date', 'asc')->latest()->paginate(3);
        $mainDishs = Menu::where('dish_type','Main dish')->orderBy('date', 'asc')->get();
        $schoolLunchs = Menu::where('menu_type','School lunch')->orderBy('date', 'asc')->latest()->paginate(3);
        $companyLunchs = Menu::where('menu_type','Company lunch')->orderBy('date', 'asc')->latest()->paginate(3);
        $events = Menu::where('menu_type','Events')->orderBy('date', 'asc')->latest()->paginate(3);
        return view('users.menu.service',compact('sideDishs','mainDishs','schoolLunchs','companyLunchs','events')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Order menu.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function orderMenu(Request $request, Menu $menu) 
    {
        $menuid = $request->route('id');
        $menu = Menu::find($menuid);
        return view('users.menu.order',compact('menu'));
    }
    /**
     * show order menu in admin side.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookMenu(Request $request) 
    {
        Order::create($request->all());
        return redirect('/service');
    }
    /**
     * show course detail.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function courseDetail(Request $request , Course $course) {
        $course_id = $request->route('id');
        $course = Course::find($course_id);
        //dd($course->toarray());
        return view('users.course.view',compact('course'));
    }
    /**
     * show menu detail.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function menuDetail(Request $request) {
        //dd($request);
        //$menu_id = $request->route(40);
        $menu = Menu::find(40);
        return view('users.menu.view',compact('menu'));
    }
}
