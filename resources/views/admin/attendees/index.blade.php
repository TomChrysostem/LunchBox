@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <div class="float-left">
                    <h4 class="card-title">Register Lists</h4>
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
                        <th>Attendees QTY</th>
                        <th>Course</th>
                        <th>Messages</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach ($attendees as $attendee)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $attendee->user_name }}</td>
                            <td>{{ $attendee->phone }}</td>
                            <td>{{ $attendee->email }}</td>
                            <td>{{ $attendee->address }}</td>
                            <td>{{ $attendee->date }}</td>
                            <td>{{ $attendee->qty }}</td>
                            <td>{{ $attendee->pivot->course_id}}</td>
                            <td>{{ $attendee->messages }}</td>
                            <td>
                            <form action="{{ route('attendees.destroy',$attendee->id) }}" method="POST">
                                <a class="btn btn-success btn-fill mr-1" href="{{ route('attendees.show',$attendee->id) }}"><i class="fas fa-eye"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-fill"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            </td>
                        </tr>   
                    @endforeach                     
                    </tbody>
                    {!! $attendees->links() !!}
                </table>
            </div>
        </div>
    </div>
</div>
@endsection