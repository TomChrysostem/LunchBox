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
        <h4 class="card-title">Add New Menus</h4>
    </div>
    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="card-body row">
            <div class="col-7">
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group mb-0">
                            <label>Menu (Menu Name)</label>
                            <input type="text" class="form-control" name="menu" placeholder="Menu">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" placeholder="day/month/year"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Menu Description" name="description" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 pl-1">
                        <div class="form-group mb-0">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="price of menu" name="price">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Kcal</label>
                        <input type="text" class="form-control" name="kcal" placeholder="Kcal">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-0">
                            <label>Menu type</label>
                            <select class="form-control" name="menu_type">
                                <option>School lunch</option>
                                <option>Company lunch</option>
                                <option>Events</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-0">
                            <label>Dish type</label>
                            <select class="form-control" name="dish_type">
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
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="image"/>
                        <div class="drag-text">
                            <div class="align-middle">
                                <button class="btn btn-secondary btn-fill" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload</button>
                            </div>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image rounded" src="#" alt="your image" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="btn btn-danger">remove</button>
                        </div>
                    </div>
                    <!-- <div class="button-container mr-auto ml-auto">
                        <button class="btn btn-secondary btn-fill mt-1" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload</button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center p-3">
                <a type="button" class="btn btn-success btn-fill" href="{{ route('menus.index') }}">Back</a>
                <button type="submit" class="btn btn-info btn-fill">Add Menu</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datepicker();
    });
</script>
@endsection