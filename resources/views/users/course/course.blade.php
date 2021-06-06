@extends('users.navbar')
	@section('content')
		<div class="ftco-intro img" id="about-section" style="background-image: url(images/cookingclass.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2 class="text-default">Cooking Classes</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-center pt-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Courses</h2>
					<h4>Choose your desired courses.</h4>
				</div>
			</div>
			<section class="pt-5 pb-3 bg-light">
				<div>
					<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
						<li class="nav-item p-3">
							<a type="button" class="btn btn btn-outline-secondary active" id="japan-tab" data-toggle="tab" href="#japan" role="tab" aria-controls="school"
							aria-selected="true">Japanese Cuisine</a>
						</li>
						<li class="nav-item p-3">
							<a type="button" class="btn btn btn-outline-secondary" id="diet-tab" data-toggle="tab" href="#diet" role="tab" aria-controls="company"
							aria-selected="false">Diet and Healthy Recipes</a>
						</li>
						<li class="nav-item p-3">
							<a type="button" class="btn btn btn-outline-secondary" id="italy-tab" data-toggle="tab" href="#italy" role="tab" aria-controls="eventlunch"
							aria-selected="false">Italian Cuisine</a>
						</li>
					</ul>
				</div>
				<div class="tab-content align-self-stretch ftco-animate mx-3" id="myTabContent">
					<div class="tab-pane fade show active" id="japan" role="tabpanel" aria-labelledby="japan-tab">
						<div class="row justify-content-center mt-3">
							<div class="align-self-stretch ftco-animate mx-3">
								<div class="media-body">
									<h3 class="heading my-3">Japanese Cuisine</h3>
									<p>If you are new to Japanese cooking, this is the course for you!</p>
								</div> 
							</div>
						</div>
						@foreach ($courses as $course)
							@if ($course->category->category == 'Japanese')
								<div class="card mb-2">
									<div class="card-body">
										<div class="row">
											<div class="col-4">
												<img class="card-img-top" src="{{ asset('storage/img/'.$course->image) }}" class="img-responsive" width="100%">
											</div>
											<div class="col-6">
												<h5 class="card-title">{{$course->course}}</h5>
												<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$course->price}} MMK </h6>
												<p style="word-break:break-all;" class="card-text">{{$course->description}}</p>
												<a href="{{ route('user.apply',$course->id) }}" type="button" class="btn btn-outline-secondary">course reserve</a>
												<a href="{{ route('user.view-course',$course->id) }}" type="button" class="btn btn-outline-secondary">Course information</a>
											</div>
										</div>
									</div>
								</div>
							@endif
						@endforeach 
						<div class="text-center">
							<!-- <a type="button" href="" class="btn btn-light">View More</a> -->
						</div>
					</div>
					<div class="tab-pane fade show" id="diet" role="tabpanel" aria-labelledby="diet-tab">
						<div class="row justify-content-center mt-3">
							<div class="align-self-stretch ftco-animate mx-3">
								<div class="media-body">
									<h3 class="heading my-3">Diet and Healthy Recipes</h3>
									<p>More than just the recipes, we teach you the basics of nutrition, as well as practical tips such as food portioning that will help you lead a successful healthy lifestyle!</p>
								</div> 
							</div>
						</div>
						@foreach ($courses as $course)
							@if ($course->category->category == 'Diet')
							<div class="card mb-2">
								<div class="card-body">
									<div class="row">
										<div class="col-4">
											<img class="card-img-top" src="{{ asset('storage/img/'.$course->image) }}" class="img-responsive" width="100%">
										</div>
										<div class="col-6">
											<h5 class="card-title">{{$course->course}}</h5>
											<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$course->price}} MMK </h6>
											<p class="card-text">{{$course->description}}</p>
											<a href="{{ route('user.apply',$course->id) }}" type="button" class="btn btn-outline-secondary">course reserve</a>
											<a href="{{ route('user.view-course',$course->id) }}" type="button" class="btn btn-outline-secondary">Course information</a>
										</div>
									</div>
								</div>
							</div>
							@endif
						@endforeach 
						<div class="text-center">
							<!-- <a type="button" href="" class="btn btn-light">View More</a> -->
						</div>
					</div>
					<div class="tab-pane fade show" id="italy" role="tabpanel" aria-labelledby="italy-tab">
						<div class="row justify-content-center mt-3">
							<div class="align-self-stretch ftco-animate mx-3">
								<div class="media-body">
									<h3 class="heading my-3">Italian Cuisine</h3>
									<p>Spoil yourself with an authentic Italian cooking experience in our Italian Cooking Class.</p>
								</div> 
							</div>
						</div>
						@foreach ($courses as $course)
							@if ($course->category->category == 'Italian')
							<div class="card mb-2">
								<div class="card-body">
									<div class="row">
										<div class="col-4">
											<img class="card-img-top" src="{{ asset('storage/img/'.$course->image) }}" class="img-responsive" width="100%">
										</div>
										<div class="col-6">
											<h5 class="card-title">{{$course->course}}</h5>
											<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$course->price}} MMK </h6>
											<p class="card-text">{{$course->description}}</p>
											<a href="{{ route('user.apply',$course->id) }}" type="button" class="btn btn-outline-secondary">course reserve</a>
											<a href="{{ route('user.view-course',$course->id) }}" type="button" class="btn btn-outline-secondary">Course information</a>
										</div>
									</div>
								</div>
							</div>
							@endif
						@endforeach 
						<div class="text-center">
							<!-- <a type="button" href="" class="btn btn-light">View More</a> -->
						</div>
					</div>
				</div>
			<section>
		</div>
	@endsection