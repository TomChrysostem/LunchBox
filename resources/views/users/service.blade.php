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
						<div class="row pb-4">
							@foreach ($sideDishs as $sideDish)
								<div class="col-4">
									<div class="bg-light">
										<div class="my-3">
											<h6 class="display-5">{{$sideDish->menu}}</h6>
											<h6 class="card-subtitle mb-2 text-muted"><bold>DATE : </bold>{{$sideDish->date}}</h6>
										</div>
										<div class="bg-white" style="border-radius: 21px 21px 0 0;">
											<img class="card-img-top" src="{{ asset('storage/img/'.$sideDish->image) }}" width="300" height="200" alt="Card image cap">
										</div>
									</div>
								</div>
							@endforeach 
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-light">View More</button>
						</div>
					</div>
				</section>
				<!-- Menu Type display  -->
				<section class="pt-5 pb-5 bg-light" id="side-school-event-section">
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
							<div class="row pb-4">
							@foreach ($schoolLunchs as $schoolLunch)
								<div class="col-4">
									<div class="bg-light">
										<div class="my-3">
											<h6 class="display-5">{{$schoolLunch->menu}}</h6>
											<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$schoolLunch->price}} MMK </h6>
										</div>
										<div class="bg-white" style="width: 100%;border-radius: 21px 21px 0 0;">
											<img class="card-img-top" src="{{ asset('storage/img/'.$schoolLunch->image) }}" height="250" alt="Card image cap">
										</div>
									</div>
								</div>
							@endforeach 
							</div>
							<div class="text-center">
								<button type="button" class="btn btn-light">View More</button>
							</div>
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
							<div class="row pb-4">
								@foreach ($companyLunchs as $companyLunch)
									<div class="col-4">
										<div class="bg-light">
											<div class="my-3">
												<h6 class="display-5">{{$companyLunch->menu}}</h6>
												<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$companyLunch->price}} MMK </h6>
											</div>
											<div class="bg-white" style="width: 100%;border-radius: 21px 21px 0 0;">
												<img class="card-img-top" src="{{ asset('storage/img/'.$companyLunch->image) }}" height="250" alt="Card image cap">
											</div>
										</div>
									</div>
								@endforeach 
							</div>
							<div class="text-center">
								<button type="button" class="btn btn-light">View More</button>
							</div>
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
							<div class="row pb-4">
								@foreach ($events as $event)
									<div class="col-4">
										<div class="bg-light">
											<div class="my-3">
												<h6 class="display-5">{{$event->menu}}</h6>
												<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$event->price}} MMK </h6>
											</div>
											<div class="bg-white" style="width: 100%;border-radius: 21px 21px 0 0;">
												<img class="card-img-top" src="{{ asset('storage/img/'.$event->image) }}" height="250" alt="Card image cap">
											</div>
										</div>
									</div>
								@endforeach 
							</div>
							<div class="text-center">
								<button type="button" class="btn btn-light">View More</button>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main>
	@endsection