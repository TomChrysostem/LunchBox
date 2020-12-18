@extends('admin.layout')
  
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Category</h4>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('categories.store') }}" method="POST">
    @csrf
        <div class="card-body">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Category (Category Name)</label>
                    <input type="text" class="form-control" placeholder="Company" name="category">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Description (Category Description)</label>
                    <textarea class="form-control" name="description" placeholder="Description"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center p-3">
                <a type="button" class="btn btn-success btn-round" href="{{ route('categories.index') }}">Back</a>
                <button type="submit" class="btn btn-info btn-round">Add Category</button>
            </div>
        </div>
    </form>
</div>
@endsection