@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="float-left">
                    <h4 class="card-title">Category Lists</h4>
                </div>
                <div class="float-right">
                    <a type="button" class="btn btn-info btn-round" href="{{ route('categories.create') }}">Add</a>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $category->category }}</td>
                            <td><p class="text-truncate" style="max-width: 300px;">{{ $category->description }}</p></td>
                            <td>{{ $category->created_at}}</td>
                            <td>
                            <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                <a class="btn btn-success btn-round mr-1" href="{{ route('categories.show',$category->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary btn-round mr-1" href="{{ route('categories.edit',$category->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-round"><i class="fas fa-trash-alt"></i></a>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-12">
                    <div class="mx-auto" style="width: 200px;">
                        {!! $categories->links() !!} 
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection