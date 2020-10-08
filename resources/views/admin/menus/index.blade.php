@extends('admin.layout')
 
@section('content')

    <h1 class="mt-4"><i class="fas fa-concierge-bell"></i> - Menus</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active ">Menus</a></li>
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
                    <span class="btn"><i class="fas fa-concierge-bell"></i> - Menu Lists</span>
                    </div>
                    <div class="col">
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('menus.create') }}">Add<i class="ml-1 fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                  
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Menu</th>
                                <th>image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Menu</th>
                                <th>image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $menu->menu }}
                                </td>
                                <td><img src="{{ asset('storage/img/'.$menu->image) }}" width="100" height="65"/></td>
                                <td>{{ $menu->description }}</td>
                                <td>{{ $menu->price }}</td>
                                <td>{{ $menu->date }}</td>
                                <td>{{ $menu->kcal }}</td>
                                <td>{{ $menu->menu_type }}</td>
                                <td>{{ $menu->dish }}</td>
                                <td>{{ $menu->category_id }}</td>
                                <td>
                                    <form action="{{ route('menus.destroy',$menu->id) }}" method="POST">
                    
                                        <a class="btn btn-outline-success" href="{{ route('menus.show',$menu->id) }}"><i class="fas fa-eye"></i></a>
                        
                                        <a class="btn btn-outline-primary" href="{{ route('menus.edit',$menu->id) }}"><i class="fas fa-edit"></i></a>
                    
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
    {!! $menus->links() !!}
      
@endsection