@extends('users.layout')
	@section('content') 
		<main>
			<div class="ftco-intro img" id="about-section" style="background-image: url(images/lunchbox1.jpg);">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-9 text-center">
								<h2>Lunchbox Services</h2>
							</div>
						</div>
					</div>
			</div>
			<div class="container">
				<div class="row justify-content-center pt-5">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<h2 class="mb-4">我々のメニュー</h2>
						<p>お客様に素晴らしい料理を提供させていただきます</p>
					</div>
				</div>
				<section class="pt-5 bg-light" id="lunchbox-section">
					<div class="container">
						<div class="row justify-content-center">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<h5>毎日栄養価の高い最高の食材を使用して常にお客様がお食事を満足できるよう作っております。</h5>
									</div> 
								</div>
						</div>

						<div class="row justify-content-center py-3">
							<div class="col-md-12 heading-section text-center ftco-animate">
								<h3>今月のお弁当メニュー</h3>
							</div>
						</div>
						<div class="col-md-12">
							<table class="table table-hover table-fixed justify-content-center">
								<thead>
									<tr>
										<th scope="row" class="px-2">Date</th>
										<th class="px-2">Name</th>
										<th class="px-2">Description</th>
										<th class="px-2">Price</th>
										<th class="px-2">Kcal</th>
										<th class="px-2">Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($mainDishs as $mainDish)
									<tr>
										<th scope="row" class="px-2">{{ $mainDish->date }}</th>
										<td class="px-2 text-center">{{ $mainDish->menu }}</td>
										<td class="px-2 text-center">{{ $mainDish->description }}</td>
										<td class="px-2 text-center">{{ $mainDish->price }}-MMK</td>
										<td class="px-2 text-center">{{ $mainDish->kcal }}-Kcal</td>
										<td class="px-2 text-center">
											<a href="{{ route('user.order',$mainDish->id) }}" class="btn btn-success btn-sm my-2">order</a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							{!! $mainDishs->links() !!}
						</div>
				</section>
				<!-- side dish menu display -->
				<section>
					<div class="jumbotron bg-light">
						<div class="card-columns">
							@foreach ($sideDishs as $sideDish)
								<div class="card">
									<div class="card-body">
									<img class="card-img-top" src="{{ asset('storage/img/'.$sideDish->image) }}" alt="Card image cap" width="237px" height="150px">
									<h5 class="card-title">{{$sideDish->menu}} <span class="badge badge-secondary">{{$sideDish->date}}</span> </h5>
									</div>
								</div>
							@endforeach 
						</div>
						{!! $sideDishs->links() !!}
					</div>
				</section>
				<!-- Menu Type display  -->
				<section class="pt-5 bg-light" id="side-school-event-section">
					<div>
						<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-secondary active" id="school-tab" data-toggle="tab" href="#school" role="tab" aria-controls="school"
								aria-selected="true">School Lunch</a>
							</li>
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-secondary" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company"
								aria-selected="false">Company Food</a>
							</li>
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-secondary" id="eventlunch-tab" data-toggle="tab" href="#eventlunch" role="tab" aria-controls="eventlunch"
								aria-selected="false">Events Food</a>
							</li>
						</ul>
					</div>
					<div class="tab-content align-self-stretch ftco-animate mx-3" id="myTabContent">
						<!-- School Lunch -->
						<div class="tab-pane fade show active" id="school" role="tabpanel" aria-labelledby="school-tab">
							<div class="row justify-content-center mt-3">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<p> School - Lunch Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, </p>
									</div> 
								</div>
							</div>
							<div class="card-columns">
								@foreach ($schoolLunchs as $schoolLunch)
									<div class="card">
										<div class="card-body">
										<img class="card-img-top" src="{{ asset('storage/img/'.$schoolLunch->image) }}" alt="Card image cap" width="237px" height="150px">
										<h5 class="card-title">{{$schoolLunch->menu}} <span class="badge badge-secondary">{{$schoolLunch->date}}</span> </h5>
										<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$schoolLunch->price}} MMK </h6>
										<p class="card-text">{{$schoolLunch->description}}</p>
										</div>
									</div>
								@endforeach 
							</div>
							{!! $schoolLunchs->links() !!}
						</div>
						<!-- Company Lunch -->
						<div class="tab-pane fade show" id="company" role="tabpanel" aria-labelledby="company-tab">	
							<div class="row justify-content-center mt-3">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<p>Company Lunch Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, </p>
									</div> 
								</div>
							</div>
							<div class="card-columns">
								@foreach ($companyLunchs as $companyLunch)
									<div class="card">
										<div class="card-body">
										<img class="card-img-top" src="{{ asset('storage/img/'.$companyLunch->image) }}" alt="Card image cap" width="237px" height="150px">
										<h5 class="card-title">{{$companyLunch->menu}} <span class="badge badge-secondary">{{$companyLunch->date}}</span> </h5>
										<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$companyLunch->price}} MMK </h6>
										<p class="card-text">{{$companyLunch->description}}</p>
										</div>
									</div>
								@endforeach 
							</div>
							{!! $companyLunchs->links() !!}
						</div>
						<!-- Event Lunch -->
						<div class="tab-pane fade show" id="eventlunch" role="tabpanel" aria-labelledby="eventlunch-tab">	
							<div class="row justify-content-center mt-3">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<p>Event Lunch Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, </p>
									</div> 
								</div>
							</div>
							<div class="card-columns">
								@foreach ($events as $event)
									<div class="card">
										<div class="card-body">
										<img class="card-img-top" src="{{ asset('storage/img/'.$event->image) }}" alt="Card image cap" width="237px" height="150px">
										<h5 class="card-title">{{$event->menu}} <span class="badge badge-secondary">{{$event->date}}</span> </h5>
										<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$event->price}} MMK </h6>
										<p class="card-text">{{$event->description}}</p>
										</div>
									</div>
								@endforeach 
							</div>
							{!! $events->links() !!}
						</div>
					</div>
				</section>
			</div>
		</main>
	@endsection