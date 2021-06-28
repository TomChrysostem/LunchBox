@extends('users.navbar')

	@section('content') 
		<div class="ftco-intro img" id="about-section" style="background-image: url('{{asset('images/cookingclass.jpg')}}');">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2 class="text-default">Course Detail</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- <div class="jumbotron mt-5">
				<div class="row">
					<div class="col-4">
						<img src="{{ asset('storage/img/'.$course->image) }}" class="img-responsive" width="100%"/>
					</div>
					<div class="col-8">
						<h3 class="text-dark font-weight-bold">Course : {{$course->course}} <span class="badge badge-secondary">{{$course->category->category}}</span></h3>
						<p class="card-text">{{$course->description}}</p>
						<h6 class="card-subtitle mb-2 text-muted">
						<div class="d-flex flex-row">
							<div class="p-2"><bold>Course fee : </bold>{{$course->price}}ーMMK</div>
						</div>
						<div class="d-flex flex-row">
							<div class="p-2">Numbers of students : {{$course->qty}}</div>
							<div class="p-2">Numbers of period: {{$course->period}}</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="card mb-3">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="{{ asset('storage/img/'.$course->image) }}" class="img-responsive" width="100%" height="100%"/>
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title text-dark font-weight-bold">Course : {{$course->course}} <span class="badge badge-secondary">{{$course->category->category}}</span></h5>
							<p class="card-text">{{$course->description}}</p>
							<p class="card-text"><small class="text-muted">Course fee : </bold>{{$course->price}}ーMMK</small></p>
							<div class="d-flex flex-row border-top">
								<div class="p-2">Numbers of students : {{$course->qty}}</div>
								<div class="p-2">Numbers of period: {{$course->period}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection