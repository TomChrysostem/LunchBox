@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Attendees Detail</h4>
    </div>
    <div class="card-body row">
        <div class="col-7">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light"><span class="font-weight-bold">Name : </span> {{ $book_attendee->user_name }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Phone :</span> {{ $book_attendee->phone }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Email  :</span> {{ $book_attendee->email }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Address :</span> {{ $book_attendee->address }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Date  :</span> {{ $book_attendee->date }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Numbers of students :</span> {{ $book_attendee->qty }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">course name :</span> {{ $book_attendee->pivot->course_id }}</li> 
                <li class="list-group-item bg-light"><span class="font-weight-bold">Message  :</span> {{ $book_attendee->messages }}</li></li>
            </ul>
        </div>
        <div class="col-5">
            <!--Mask with wave-->
            <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(1).jpg" class="img-fluid" alt="Sample image with waves effect.">
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


