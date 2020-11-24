				<!-- side-dish menus  -->
				<section>
					<div class="jumbotron">
						<div id="carouselExampleControls" class="carousel slide mt-3 py-4" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="row">
										@foreach ($menus as $menu)
											@if($menu->dish_type == 'Side dish')	
											<div class="col-md">
												<div class="card mb-4">
													<div class="view overlay">
															<img class="card-img-top" src="{{ asset('storage/img/'.$menu->image) }}" alt="Card image cap" width="237px" height="150px">
															<div class="mask rgba-white-slight"></div>
													</div>
													<div class="card-body">
														<h4 class="card-title">{{$menu->menu}}</h4>
														<p class="card-text" style="color: blue">{{$menu->description}}</p>
														<p class="card-text" style="color: blue">{{$menu->date}}</p>
													</div>
												</div>
											</div>
											@else
											<div class="col-md">
												<p>No dish menu to show </p>
											</div>
											@endif
										@endforeach 
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</section>
				<!-- Menu Display Section  -->
				<section class="pt-5 bg-light" id="side-school-event-section">
					<div>
						<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-success active" id="school-tab" data-toggle="tab" href="#school" role="tab" aria-controls="school"
								aria-selected="true">School Lunch</a>
							</li>
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-success" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company"
								aria-selected="false">Company Food</a>
							</li>
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-success" id="eventlunch-tab" data-toggle="tab" href="#eventlunch" role="tab" aria-controls="eventlunch"
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
							<div id="carouselExampleControls" class="carousel slide mt-3 py-4" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row">
										@foreach ($menus as $menu)
											@if($menu->menu_type == 'School lunch')	
											<div class="col-md">
												<div class="card mb-4">
													<div class="view overlay">
															<img class="card-img-top" src="{{ asset('storage/img/'.$menu->image) }}" alt="Card image cap" width="237px" height="150px">
															<div class="mask rgba-white-slight"></div>
													</div>
													<div class="card-body">
														<h4 class="card-title">{{$menu->menu}}</h4>
														<p class="card-text" style="color: blue">{{$menu->price}}</p>
													</div>
												</div>
											</div>
											@else
												<p>No school menu to show </p>
											@endif
										@endforeach 
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					<!-- Company Lunch   -->
						<div class="tab-pane fade show" id="company" role="tabpanel" aria-labelledby="company-tab">	
							<div class="row justify-content-center mt-3">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<p>Company Lunch Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, </p>
									</div> 
								</div>
							</div>
							<div id="carouselExampleControls" class="carousel slide mt-3 py-4" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row">
											@foreach ($menus as $menu)
												@if($menu->menu_type == 'Company lunch')	
												<div class="col-md">
													<div class="card mb-4">
														<div class="view overlay">
																<img class="card-img-top" src="{{ asset('storage/img/'.$menu->image) }}" alt="Card image cap" width="237px" height="150px">
																<div class="mask rgba-white-slight"></div>
														</div>
														<div class="card-body">
															<h4 class="card-title">{{$menu->menu}}</h4>
															<p class="card-text" style="color: blue">{{$menu->price}}</p>
														</div>
													</div>
												</div>
												@else
													<p>No company menu to show </p>
												@endif
											@endforeach 
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					<!-- Event Food -->
						<div class="tab-pane fade show" id="eventlunch" role="tabpanel" aria-labelledby="eventlunch-tab">	
							<div class="row justify-content-center mt-3">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<p>Event Lunch Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, </p>
									</div> 
								</div>
							</div>
							<div id="carouselExampleControls" class="carousel slide mt-3 py-4" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row">
											@foreach ($menus as $menu)
												@if($menu->menu_type == 'Events')	
												<div class="col-md">
													<div class="card mb-4">
														<div class="view overlay">
																<img class="card-img-top" src="{{ asset('storage/img/'.$menu->image) }}" alt="Card image cap" width="237px" height="150px">
																<div class="mask rgba-white-slight"></div>
														</div>
														<div class="card-body">
															<h4 class="card-title">{{$menu->menu}}</h4>
															<p class="card-text" style="color: blue">{{$menu->price}}</p>
														</div>
													</div>
												</div>
												@else
												<div class="col-md">
													<p>No event menu to show </p>
												</div>
												@endif
											@endforeach 
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</sectoin>