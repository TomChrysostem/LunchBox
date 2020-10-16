@extends('admin.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit course</h2>
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
  
    <form action="{{ route('courses.update',$course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$course->course}}">
            </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cover:</strong>
                <div class="custom-file">
                    <img src="{{ asset('storage/img/'.$course->image) }}" width="100" height="65"/>
                    <input type="file" class="file-input" name='cover' id="inputGroupFile01" value="{{$course->image}}"/>
                </div>
            </div>
        </div> -->
        <div class="row form-group">
            <label class="control-label col-2">Cover:</label>
            <div class="col-10">
                <div class="file-drop-area"> 
                    <span class="choose-file-button">Choose Files</span> 
                    <span class="file-message">or drag and drop files here</span> 
                    <input type="file" class="file-input" name="image"> 
                </div>
                <div id="divImageMediaPreview"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="Description" value="{{$course->description}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{$course->price}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number Of People:</strong>
                <select class="form-control" id="exampleFormControlSelect1" name="no_of_people" value="{{$course->no_of_people}}">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Period:</strong>
                <select class="form-control" id="exampleFormControlSelect1" name="period" value="{{$course->period}}">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select class="form-control" id="exampleFormControlSelect1" name="category_id" value="{{$course->category->category}}">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection