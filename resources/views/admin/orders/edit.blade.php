@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb pb-5">
            <div class="pull-left">
                <h2>Edit Order</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
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

    <form action="{{ route('orders.update',$order->id) }}" method="POST">

        @csrf

        @method('PUT')
         <div class="row">

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>User-Name:</strong>
                    <input type="text" name="user_name" value="{{ $order->user_name }}" class="form-control" placeholder="User Name">
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="text" name="phone" value="{{ $order->phone }}" class="form-control" placeholder="Phone">
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $order->email }}" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>Address:</strong>
                    <textarea class="form-control" style="height:100px" name="address" placeholder="Address">{{ $order->address }}</textarea>
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>Date:</strong>
                   <input type="text" name="date" class="form-control" id="datetimepicker" value="{{$order->date}}"/> 
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>Quantity:</strong>
                    <input type="text" name="qty" value="{{ $order->qty }}" class="form-control" placeholder="Numbers of Order">
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>Order item:</strong>
                    <select class="form-control" name="order_item_id" value="{{$order->order_item_id}}">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select class="form-control" name="status" value="{{$order->status}}">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="form-group">
                    <strong>Message:</strong>
                    <textarea class="form-control" style="height:150px" name="messages" placeholder="Message">{{ $order->messages }}</textarea>
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9 text-center">

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