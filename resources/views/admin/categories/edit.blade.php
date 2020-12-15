@extends('admin.layout')

@section('content')
<div class="card">
    @if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card-header">
        <h4 class="card-title">Edit Category</h4>
    </div>
    <form action="{{ route('categories.update',$category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body row">
            <div class="col-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Category ( Category Name ) </label>
                            <input type="text" class="form-control" placeholder="Company" name="category" value="{{ $category->category }}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Category Description" name="description">{{ $category->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center p-3">
                <a type="button" class="btn btn-success btn-round" href="{{ route('categories.index') }}">Back</a>
                <button type="submit" class="btn btn-info btn-round">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection