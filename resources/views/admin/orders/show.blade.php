@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Order Detail</h4>
    </div>
    <div class="card-body row">
        <div class="col-7">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light"><span class="font-weight-bold">Name : </span> {{ $order->user_name }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Phone :</span> {{ $order->phone }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Email  :</span> {{ $order->email }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Address :</span>  {{ $order->address }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Date  :</span> {{ $order->date }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Numbers of order  :</span> {{ $order->qty }}</li>
                <li class="list-group-item bg-light"><span class="font-weight-bold">Order item  :</span> {{ $order->menu->menu }}</li> 
                <li class="list-group-item bg-light"><span class="font-weight-bold">Message  :</span>  {{ $order->messages }}</li></li>
            </ul>
        </div>
        <div class="col-5">
            <!--Mask with wave-->
            <div class="view overlay">
                <img src="{{ asset('storage/img/'.$order->menu->image) }}" class="img-fluid" alt="Sample image with waves effect.">
                <a>
                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center p-3">
            <a type="button" class="btn btn-success btn-round" href="{{ route('orders.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection