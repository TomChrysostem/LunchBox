@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Course Detail</h4>
    </div>
    <div class="card-body row">
        <div class="col-7">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light"><span class="font-weight-bold">Name : </span>{{ $course->course }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Category :</span>{{ $course->category->category }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Price  :</span> {{ $course->price }} </li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Description :</span> {{ $course->description }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Number Of Students  :</span> {{ $course->qty }} persons</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Period  :</span> {{ $course->period }} Times</li>
            </ul>
        </div>
        <div class="col-5">
            <!--Mask with wave-->
            <div class="view overlay">
                <img src="{{ asset('storage/img/'.$course->image) }}" class="img-fluid" alt="Sample image with waves effect.">
                <a>
                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center p-3">
            <a type="button" class="btn btn-success btn-round" href="{{ route('courses.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection
