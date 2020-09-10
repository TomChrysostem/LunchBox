@extends('courses.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('courses.create') }}"> Create New course</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Cover</th>
            <th>Description</th>
            <th>Price</th>
            <th>Number Of People</th>
            <th>period</th>
            <th>menu</th>
            <th>category</th>
            <th>created_date</th>
            <th>updated_date</th>
            <th>Action</th>
        </tr>
        @foreach ($courses as $course)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->cover }}</td>
            <td>{{ $course->description }}</td>
            <td>{{ $course->price }}</td>
            <td>{{ $course->no_of_people }}</td>
            <td>{{ $course->period }}</td>
            <td>{{ $course->menu_id }}</td>
            <td>{{ $course->cat_id }}</td>
            <td>{{ $course->created_at }}</td>
            <td>{{ $course->updated_at }}</td>
            <td>
                <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('courses.show',$course->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $courses->links() !!}
      
@endsection