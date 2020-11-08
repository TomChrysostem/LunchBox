@extends('admin.layout')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <div class="float-left">
                    <h4 class="card-title">Course Lists</h4>
                    
                </div>
                <div class="float-right">
                    <a type="button" class="btn btn-warning btn-fill" href="{{ route('courses.create') }}">Add</a>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Period</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach ($courses as $key => $course)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $course->course }}</td>
                            <td>{{ $course->price }}</td>
                            <td>{{ $course->qty }}</td>
                            <td>{{ $course->period }}</td>
                            <td>
                            <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
                                <a class="btn btn-success btn-fill mr-1" href="{{ route('courses.show',$course->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary btn-fill mr-1" href="{{ route('courses.edit',$course->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-fill" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection