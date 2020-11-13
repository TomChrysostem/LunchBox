@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Menu Detail</h4>
    </div>
    <div class="card-body row">
        <div class="col-7">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light"><span class="font-weight-bold">Menu : </span> {{ $menu->menu }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Description :</span> {{ $menu->description }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Price  :</span> {{ $menu->price }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Date :</span> {{ $menu->date }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Kcal  :</span> {{ $menu->kcal }} Kcal</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Menu type  :</span> {{ $menu->menu_type }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Dish type  :</span> {{ $menu->dish_type }}</li>    
            </ul>
        </div>
        <div class="col-5">
            <!--Mask with wave-->
            <div class="view overlay">
                <img src="{{ asset('storage/img/'.$menu->image) }}" class="img-fluid" alt="Sample image with waves effect.">
                <a>
                    <div class="mask waves-effect waves-light rgba-white-slight"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center p-3">
            <a type="button" class="btn btn-success btn-fill" href="{{ route('menus.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection