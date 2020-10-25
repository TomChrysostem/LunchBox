<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendees = Attendee::latest()->paginate(5);
        return view('admin.attendees.index',compact('attendees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attendees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
        $request->validate([
            'user_name' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'address' => 'required',
            'date' => 'required',
            'qty' => 'required',
            'messages' => 'required',

        ]);

        Attendee::create($request->all());
        return back()->with('success', 'Congratulation!!! Your registration has been submitted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function show(Attendee $attendee)
    {
        return view('admin.attendees.show',compact('attendee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendee $attendee)
    {
        return view('admin.attendees.edit',compact('attendee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendee $attendee)
    {
        $request->validate([
            'user_name' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'address' => 'required',
            'date' => 'required',
            'qty' => 'required',
            'course_id' => 'required',
            'messages' => 'required',

        ]);
        $attendee->update($request->all());
        return redirect()->route('attendees.index')
                        ->with('success','Attendee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendee $attendee)
    {
        $attendee->delete();
        return redirect()->route('attendees.index')
                        ->with('success','Attendee deleted successfully');
    }
}
