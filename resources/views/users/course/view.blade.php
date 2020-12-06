@extends('users.layout')

	@section('content') 
	<main>
		<div class="ftco-intro img" id="about-section" style="background-image: url(images/cookingclass.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2 class="text-default">All Courses</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<div class="col-4">
						<img src="{{ asset('storage/img/'.$course->image) }}" class="img-responsive" width="100%"/>
					</div>
					<div class="col-8">
						<h5 class="card-title">Course : {{$course->course}} <span class="badge badge-secondary">{{$course->category->category}}</span></h5>
						<p class="card-text">{{$course->description}}</p>
						<h6 class="card-subtitle mb-2 text-muted">
						<div class="d-flex flex-row">
							<div class="p-2"><bold>PRICE : </bold>{{$course->price}}</div>
						</div>
						<div class="d-flex flex-row">
							<div class="p-2">QTY : {{$course->qty}}</div>
							<div class="p-2">PERIOD : {{$course->period}}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	@endsection