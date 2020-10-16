@extends('admin.layout')
 
@section('content')

    <h1 class="mt-4"><i class="fas fa-cloud-meatball"></i> - Courses</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active ">Courses</a></li>
        <!-- <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Services</a></li> -->
    </ol>
    <div class="card mb-4">
        <div class="card-body">
           Time Table Here  xxxxxxxxxxx xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx  xxxxxxxxxxxxxxx xxxxxxxxxxx xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx  xxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                    <span class="btn"><i class="fas fa-cloud-meatball"></i> - Course Lists</span>
                    </div>
                    <div class="col">
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('courses.create') }}">Add<i class="ml-1 fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                  
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Cover</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>period</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Course</th>
                                <th>Cover</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>period</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->course }}
                                    <div class="row">
                                        <div class="col-12"><span class="badge badge-info">{{ $course->category->category }}</span></div>
                                    </div>
                                </td>
                                <td><img src="{{ asset('storage/img/'.$course->image) }}" width="100" height="65"/></td>
                                <td>{{ $course->description }}</td>
                                <td>{{ $course->price }}</td>
                                <td>{{ $course->no_of_people }}</td>
                                <td>{{ $course->period }}</td>
                                <td>
                                    <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
                    
                                        <a class="btn btn-outline-success" href="{{ route('courses.show',$course->id) }}"><i class="fas fa-eye"></i></a>
                        
                                        <a class="btn btn-outline-primary" href="{{ route('courses.edit',$course->id) }}"><i class="fas fa-edit"></i></a>
                    
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {!! $courses->links() !!}
      
@endsection