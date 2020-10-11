@extends('admin.layout')

@section('content')

<h1 class="mt-4"><i class="fas fa-concierge-bell"></i> - Attendees</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active ">Attendees</a></li>
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
            <th>Course</th>
            <th>Message</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($attendees as $attendee)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $attendee->user_name }}</td>
            <td>{{ $attendee->phone }}</td>
            <td>{{ $attendee->email }}</td>
            <td>{{ $attendee->address }}</td>
            <td>{{ $attendee->date }}</td>
            <td>{{ $attendee->qty }}</td>
            <td>{{ $attendee->course_id }}</td>
            <td>{{ $attendee->messages }}</td>

            <td>

                <form action="{{ route('attendees.destroy',$attendee->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('attendees.show',$attendee->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('attendees.edit',$attendee->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $attendees->links() !!}

@endsection