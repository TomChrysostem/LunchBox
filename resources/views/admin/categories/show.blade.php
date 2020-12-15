@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Category Detail</h4>
    </div>
    <div class="card-body row">
        <div class="col-7">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light"><span class="font-weight-bold">Category : </span> {{ $category->category }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Description :</span>{{ $category->description }}</li> 
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center p-3">
            <a type="button" class="btn btn-success btn-round"  href="{{ route('categories.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection