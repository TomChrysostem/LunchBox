@extends('admin.layout')

@section('content')
<div class="row pb-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New menu</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
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

<form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9">
            <strong>Course name:</strong>
            <div class="form-group">
                <input type="text" name="course" class="form-control" placeholder="Please Enter Your Course Name">
            </div>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9">
            <strong>Image:</strong>
            <div class="form-group">
                <input type="file" class="file-input" name="image" id="inputGroupFile01"/>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9">
            <strong>Description:</strong>
            <div class="form-group">
                <textarea class="form-control" style="height:100px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9">
            <strong>Price:</strong>
            <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="Please Enter Price">
            </div>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9">
        <strong>Quantity:</strong>
                <div class="form-group">
                    <select class="form-control" name="no_of_people">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9">
        <strong>Period:</strong>
                <div class="form-group">
                    <select class="form-control" name="period">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
        </div>


        <div class="col-xs-9 col-sm-9 col-md-9">
        <strong>Menu:</strong>
                <div class="form-group">
                    <select class="form-control" name="menu_id">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
        </div>


        <div class="col-xs-9 col-sm-9 col-md-9">
        <strong>Category:</strong>
                <div class="form-group">
                    <select class="form-control" name="category_id">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
        </div>


        <div class="col-xs-9 col-sm-9 col-md-9 col-md-8 text-center pt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection