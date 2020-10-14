@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New menu</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a>
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

<form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label class="control-label col-2">Menu:</label>
            <div class="col-10">
                <input type="text" name="menu" class="form-control" placeholder="Menu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label class="control-label col-2">Image:</label>
            <div class="col-10">
                <input type="file" class="file-input" name="image" id="inputGroupFile01"/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label class="control-label col-2">Description:</label>
            <div class="col-10">
                <textarea class="form-control" style="height:100px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label class="control-label col-2">Price:</label>
            <div class="col-10">
                <input type="text" name="price" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <label class="control-label col-2">Date:</label>
                <div class="col-10">
                   <input type="text" name="date" class="form-control" id="datetimepicker"/> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <label class="control-label col-2">Kcal:</label>
                <div class="col-10">
                    <input type="text" name="kcal" class="form-control">
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <label class="control-label col-2">Menu Type:</label>
                <div class="col-10">
                    <select class="form-control" id="exampleFormControlSelect1" name="menu_type">
                        <option>School-Lunch</option>
                        <option>Company-Lunch</option>
                        <option>Company-Dinner</option>
                        <option>Event</option>
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <label class="control-label col-2">Dish:</label>
                <div class="col-10">
                    <select class="form-control" id="exampleFormControlSelect1" name="dish">
                        <option>main-dish</option>
                        <option>side-dish</option>
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <label class="control-label col-2">Category:</label>
                <div class="col-10">
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                        <option>1</option>
                        <option>2</option>
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datepicker();
    });
</script>
@endsection