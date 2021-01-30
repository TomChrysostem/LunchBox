@extends('admin.layout')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <div class="float-left">
                    <h4 class="card-title">Menu Lists</h4>
                </div>
                <div class="float-right">
                    <a type="button" class="btn btn-info btn-round" href="{{ route('menus.create') }}">Add</a>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Menu</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $menu->menu }}</td>
                            
                            <td><p class="text-truncate" style="max-width: 300px;">{{ $menu->description }}</p></td>
                            <td>{{ $menu->price }}</td>
                            <td>{{ $menu->date }}</td>
                            <td>
                                <form action="{{ route('menus.destroy',$menu->id) }}" method="POST">
                                    <a class="btn btn-success btn-round mr-1" href="{{ route('menus.show',$menu->id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-primary btn-round mr-1" href="{{ route('menus.edit',$menu->id) }}"><i class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-round" type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $menus->links() !!}
            </div>
        </div>
    </div>
</div>   
@endsection