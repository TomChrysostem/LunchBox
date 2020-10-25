@extends('admin.layout')

 

@section('content')

<h1 class="mt-4"><i class="fas fa-concierge-bell"></i> - Services</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active ">Services</a></li>
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
                    <span class="btn"><i class="fas fa-concierge-bell"></i> - Service Lists</span>
                    </div>
                    <div class="col">
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('services.create') }}">Add<i class="ml-1 fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                  
            </div>
            <div class="card-body">
                <div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Service Category</th>
            <th>Description</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($services as $service)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $service->service }}</td>
            <td>{{ $service->description }}</td>
            <td>{{ $service->price }}- MMK</td>
            <td>
                <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('services.show',$service->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
            </div>
        </div>
    {!! $services->links() !!}
      
@endsection