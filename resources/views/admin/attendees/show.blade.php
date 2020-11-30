@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Attendees Detail</h4>
    </div>
    <div class="card-body row">
        <div class="col-7">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light"><span class="font-weight-bold">Name : </span> {{ $attendee_list->user_name }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Phone :</span> {{ $attendee_list->phone }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Email  :</span> {{ $attendee_list->email }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Address :</span> {{ $attendee_list->address }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Date  :</span> {{ $attendee_list->date }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Numbers of students :</span> {{ $attendee_list->qty }}</li>
                @foreach ($attendee_list->courses as $course)
                <li class="list-group-item bg-light"><span class="font-weight-bold">course name :</span> {{ $course->course}}</li> 
                @endforeach
                <li class="list-group-item bg-light"><span class="font-weight-bold">Message  :</span> {{ $attendee_list->messages }}</li></li>
            </ul>
        </div>
        <div class="col-5">
            <!--Mask with wave-->
            <div class="view overlay">
            @foreach ($attendee_list->courses as $course)
                <img src="{{ asset('storage/img/'.$course->image) }}" class="img-fluid" alt="Sample image with waves effect.">
            @endforeach
                <a>
                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center p-3">
            <a type="button" class="btn btn-success btn-fill" href="{{ route('attendees.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection


