@extends('admin.layout')

@section('content')

<h1 class="mt-4"><i class="fas fa-concierge-bell"></i> - Orders</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active ">Orders</a></li>
        <!-- <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Services</a></li> -->
    </ol>
    <div class="card mb-4">
        <div class="card-body">
           Time Table Here  xxxxxxxxxxx xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx  xxxxxxxxxxxxxxx xxxxxxxxxxx xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx  xxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Order Item</th>
            <th>Status</th>
            <th>Message</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($orders as $order)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $order->user_name }}</td>
            <td>{{ $order->phone }}</td>
            <td>{{ $order->email }}</td>
            <td>{{ $order->address }}</td>
            <td>{{ $order->date }}</td>
            <td>{{ $order->qty }}</td>
            <td>{{ $order->menu->menu }}</td>
            <td>order</td>
            <td>{{ $order->messages }}</td>

            <td>

                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $orders->links() !!}

@endsection