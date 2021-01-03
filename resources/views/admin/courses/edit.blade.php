@extends('admin.layout')
  
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Courses</h4>
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
        <div class="card-body row">
            <div class="col-7">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Course (Course Name)</label>
                            <input type="text" class="form-control" placeholder="Company" name="course" value="{{$course->course}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Category</label>
                            <select class="form-control" name="category_id" value="{{$course->category->category}}">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="price of course" name="price" value="{{$course->price}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Description about course" name="description">{{$course->description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Quantity</label>
                            <select class="form-control" name="qty" value="{{$course->qty}}">
                                <option value="1">1 person</option>
                                <option value="2">2 person</option>
                                <option value="3">3 person</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Period</label>
                            <select class="form-control" name="period" value="{{$course->period}}">
                                <option value="1">1 period</option>
                                <option value="2">2 period</option>
                                <option value="3">3 period</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <!--Mask with wave-->
                <div class="view overlay pt-3 pr-3">
                    <div class="image-upload-wrap" style="display: none;">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="image" />
                        <div class="drag-text">
                            <div class="align-middle">
                                <!-- <h5>Drag and drop a file or select add Image</h5> -->
                                <button class="btn btn-secondary btn-fill" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload</button>
                            </div>
                        </div>
                    </div>
                    <div class="file-upload-content" style="display: block;">
                        <img class="file-upload-image rounded" src="{{ asset('storage/img/'.$course->image) }}" alt="your image" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="btn btn-danger">remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center p-3">
                <a type="button" class="btn btn-success btn-round" href="{{ route('courses.index') }}">Back</a>
                <button type="submit" class="btn btn-info btn-round">Update Course</button>
            </div>
        </div>
    </form>
</div>
@endsection