@extends('admin.layout')

@section('content')

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
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Menus</h4>
    </div>
    <form action="{{ route('menus.update',$menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body row">
            <div class="col-7">
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group mb-0">
                            <label>Menu (Menu Name)</label>
                            <input type="text" class="form-control" placeholder="Menu" name="menu" value="{{$menu->menu}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" placeholder="day/month/year" id="datetimepicker" value="{{$menu->date}}"> 
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Home Address" name="description" rows="3">{{$menu->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6 pl-1">
                        <div class="form-group mb-0">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="price of menu" name="price" value="{{$menu->price}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Kcal</label>
                        <input type="text" name="kcal" class="form-control" value="{{$menu->kcal}}">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-0">
                            <label>Menu type</label>
                            <select class="form-control" name="menu_type">
                                <option>School lunch</option>
                                <option>Company lunch</option>
                                <option>Events</option>
                                <option>Dinner</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-0">
                            <label>Dish type</label>
                            <select class="form-control" name="dish_type" value="{{$menu->dish_type}}">
                                <option>Main dish</option>
                                <option>Side dish</option>
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
                        <img class="file-upload-image rounded" src="{{ asset('storage/img/'.$menu->image) }}" alt="your image" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="btn btn-danger">remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center p-3">
                <a type="button" class="btn btn-success btn-round" href="{{ route('menus.index') }}">Back</a>
                <button type="submit" class="btn btn-info btn-round">Edit Menu</button>
            </div>
        </div>
    </form>
</div>
@endsection