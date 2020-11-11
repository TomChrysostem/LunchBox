@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
           @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="card-header ">
                <div class="float-left">
                    <h4 class="card-title">Order Lists</h4>
                    
                </div>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                    
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Menu QTY</th>
                        <th>Order item</th>
                        <!--<th>Messages</th>-->
                        <th>Actions</th>
                    
                    </thead>
                    <tbody>
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
                            <!--<td>{{ $order->messages }}</td>-->
                            <td>
                            <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                                <a class="btn btn-success btn-fill mr-1" href="{{ route('orders.show',$order->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-danger btn-fill" href="{{ route('orders.edit',$order->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-fill"><i class="fas fa-trash-alt"></i></button>
                                
                            </form>
                            </td>
                         </tr>
                    @endforeach
                   {!! $orders->links() !!}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
