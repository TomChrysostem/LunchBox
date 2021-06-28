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
                    <a type="button" class="btn btn-info btn-round" href="{{ route('courses.create') }}">Add</a>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach ($courses as $key => $course)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $course->course }}</td>
                            <td><p class="text-truncate" style="max-width: 300px;">{{ $course->description }}</p></td>
                            <td>{{ $course->category->category }}</td>
                            <td>{{ $course->price }}</td>
                            <td>{{ $course->created_at}}</td>
                            <td>
                            <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
                                <a class="btn btn-success btn-round mr-1" href="{{ route('courses.show',$course->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary btn-round mr-1" href="{{ route('courses.edit',$course->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-round" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-12">
                    <div class="mx-auto" style="width: 200px;">
                        {!! $courses->links() !!} 
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection