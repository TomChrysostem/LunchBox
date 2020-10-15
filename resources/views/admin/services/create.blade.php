@extends('admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb pb-5">
        <div class="pull-left">
            <h2>Add New Service</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
        </div>
    </div>
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
<form action="{{ route('services.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Service Category:</strong>
                <input type="text" name="service" class="form-control" placeholder="Service">
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:100px" name="description" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection