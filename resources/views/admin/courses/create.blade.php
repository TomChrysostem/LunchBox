@extends('admin.layout')
  
@section('content')
<div class="mb-4">
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
    <div class="container">
        <form class="form-horizontal" action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row form-group">
                <label class="control-label col-2">Course name</label>
                <div class="col-10">
                    <input type="text" name="course" class="form-control" placeholder="Please Enter Your Course Name">
                </div>
            </div>

            <div class="row form-group">
                <label class="control-label col-2">Cover:</label>
                <div class="col-10">
                    <input type="file" class="file-input" name="image" id="inputGroupFile01"/>
                </div>
            </div>

            <div class="row form-group">
                <label class="control-label col-2">Description:</label>
                <div class="col-10">
                    <textarea class="form-control" name="description" row="10" placeholder="Please Enter Description"></textarea>
                </div>
            </div>

            <div class="row form-group">
                <label class="control-label col-2">Price:</label>
                <div class="col-10">
                    <input type="text" name="price" class="form-control" placeholder="Please Enter Price">
                </div>
            </div>

            <div class="row form-group">
                <label class="control-label col-2">Quantity:</label>
                <div class="col-10">
                    <select class="form-control" id="exampleFormControlSelect1" name="no_of_people">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <label class="control-label col-2">Period:</label>
                <div class="col-10">
                    <select class="form-control" id="exampleFormControlSelect1" name="period">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <label class="control-label col-2">Menu:</strong>
                <div class="col-10">
                    <select class="form-control" id="exampleFormControlSelect1" name="menu_id">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <label class="control-label col-2">Category:</strong>
                <div class="col-10">
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-offset-2 col-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                    <a class="btn btn-default" href="{{ route('courses.index') }}">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
