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
			<div class="jumbotron">
				<div class="row">
					<div class="col-4">
						<img src="{{ asset('storage/img/'.$course->image) }}" class="img-responsive" width="100%"/>
					</div>
					<div class="col-8">
						<h5 class="card-title">コース : {{$course->course}} <span class="badge badge-secondary">{{$course->category->category}}</span></h5>
						<p class="card-text">{{$course->description}}</p>
						<h6 class="card-subtitle mb-2 text-muted">
						<div class="d-flex flex-row">
							<div class="p-2"><bold>コース料金 : </bold>{{$course->price}}ーMMK</div>
						</div>
						<div class="d-flex flex-row">
							<div class="p-2">人数 : {{$course->qty}}</div>
							<div class="p-2">回数: {{$course->period}}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection